<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Evenement as Evenement;
use Illuminate\Support\Facades\Storage;
use View;
use File;
use Response;
use Spipu\Html2Pdf\Html2Pdf;
class EvenementController extends Controller

{
    //Renvoie vers la vue de la création d'évènement

    public function create(){

        return view('createEvent');
    }
    public function EventMois()
    {
        $dt = Carbon::now(); // setting date
        $dt-> subMonth();
        $dt=$dt->toDateString();

        $Evenement = Evenement::where('date_evenement','>',$dt)->get(); //getting all event according to date

        return view('event_mois')-> with('Evenement', $Evenement);

    }
    //permet de voir les evenements qui sont déjà passer.
    public function eventpassé(){

        $dt = Carbon::now(); // setting date
        $dt-> subMonth();
        $dt=$dt->toDateString();

        $Evenement = Evenement::where('date_evenement','<',$dt)->get(); //getting all event according to date

        return view('event_mois')-> with('Evenement', $Evenement);
    }
    //permet de voir un evenement et tout les commentaires et images qui en découle.
    public function eventcemois($id)
    {


        $Evenement = Evenement::where('evenements.id_evenement',$id)->leftjoin('images','evenements.id_evenement','=','images.id_evenement')
        ->leftjoin('commentaires','images.id_image','=','commentaires.id_image')->get();



        return view('event')-> with('Evenement', $Evenement);
    }

    //permet de téllécharger un fichier Json ou pdf des données relatives a un évenement.
    public function downloadJSONFile($id)
    {


       $Evenement = Evenement::where('evenements.id_evenement',$id)->leftjoin('images','evenements.id_evenement','=','images.id_evenement')
        ->leftjoin('commentaires','images.id_image','=','commentaires.id_image')->get();



        $data = json_decode($Evenement,true);
        $html2pdf = new Html2Pdf();
        $html2pdf->writeHTML(implode(",", $data[0]));
        $html2pdf->output();
        // if you want to Dl as json comment all $html2pd and uncomment bellow
        /*

        $dt = Carbon::now(); // setting date

        $dt=$dt->toDateString('Y-M-D');
        $fileName = 'eventN°'.$id."_".$dt.random_int(1,20000).'_datafile.json';
        $pb=public_path($fileName);

        File::put($fileName,$data);



	    return response()->download($pb, $fileName);
*/


    }

    //permet de cacher un commentaire.
    public function ComHide($idcom,$idevent){
        Evenement::where("id_commentaire",$idcom)->leftjoin('images','evenements.id_evenement','=','images.id_evenement')->leftjoin('commentaires','images.id_image','=','commentaires.id_image')->update(['visibilite_commentaire'=>0]);
        $Evenement = Evenement::where('evenements.id_evenement',$idevent)->leftjoin('images','evenements.id_evenement','=','images.id_evenement')
        ->leftjoin('commentaires','images.id_image','=','commentaires.id_image')->get();

        return view('event')-> with('Evenement', $Evenement);
    }

    //Permet d'envoyer les informations écrites et définies vers la BDD dans la table évènement.

    public function store(){

        $evenement = new Evenement();
        $evenement->nom_evenement = request('nom_evenement');
        $evenement->description_evenement = request('description_evenement');
        $evenement->association = request('association');
        $evenement->date_evenement = request('date_evenement');
        $evenement->recurence = request('recurence') ? 1 :0;
        $evenement->date_creation = date('Y-m-d', time());
        $evenement->user_id = 2;
        $evenement->save();
        return "Evenement sauvegardé !";
    }

}
