<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Evenement as Evenement;
use Illuminate\Support\Facades\Storage;
use View;
use File;
use Response;

class EvenementController extends Controller
{
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
    public function eventpassé(){

        $dt = Carbon::now(); // setting date
        $dt-> subMonth();
        $dt=$dt->toDateString();

        $Evenement = Evenement::where('date_evenement','<',$dt)->get(); //getting all event according to date

        return view('event_mois')-> with('Evenement', $Evenement);
    }
    public function eventcemois($id)
    {


        $Evenement = Evenement::where('evenements.id_evenement',$id)->leftjoin('images','evenements.id_evenement','=','images.id_evenement')
        ->leftjoin('commentaires','images.id_image','=','commentaires.id_image')->get();



        return view('event')-> with('Evenement', $Evenement);
    }


    public function downloadJSONFile($id)
    {


       $Evenement = Evenement::where('evenements.id_evenement',$id)->leftjoin('images','evenements.id_evenement','=','images.id_evenement')
        ->leftjoin('commentaires','images.id_image','=','commentaires.id_image')->get();



        $data = json_encode($Evenement);




        $dt = Carbon::now(); // setting date

        $dt=$dt->toDateString('Y-M-D');
        $fileName = 'eventN°'.$id."_".$dt.random_int(1,20000).'_datafile.json';
        $pb=public_path($fileName);

        File::put($fileName,$data);



	    return response()->download($pb, $fileName);



    }


    public function ComHide($idcom,$idevent){
        Evenement::where("id_commentaire",$idcom)->leftjoin('images','evenements.id_evenement','=','images.id_evenement')->leftjoin('commentaires','images.id_image','=','commentaires.id_image')->update(['visibilite_commentaire'=>0]);
        $Evenement = Evenement::where('evenements.id_evenement',$idevent)->leftjoin('images','evenements.id_evenement','=','images.id_evenement')
        ->leftjoin('commentaires','images.id_image','=','commentaires.id_image')->get();

        return view('event')-> with('Evenement', $Evenement);
    }
   /*public function store(){
         Evenement::firstOrCreate([
            'nom_evenement' => request('nom_evenement'),
            'association' => request('association'),
            'description_evenement' => request('description_evenement'),
            'date_evenement' => request('date_evenement'),
            'recurrence' => request('recurrence'),
            'prix' => request('prix')
         ]);*/

        /*$evenement = new Evenement();
        $evenement->nom_evenement = request('nom_evenement');
        $evenement->association = request('association');
        $evenement->description_evenement = request('description_evenement');
        $evenement->date_evenement = request('date_evenement');
        $evenement->recurrence = request('recurrence');
        $evenement->prix = request('prix');
        $evenement->save();
        return "Evenement sauvegardé !";
    }*/

    public function index()
    {
        $evenement = Evenement::paginate(100);

        return Evenement::collection($evenement);
    }

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
    public function show($id)
    {
        $evenement = Evenement::findOrFail($id);

        return new Evenement($evenement);
    }

    public function destroy($id)
    {
        $evenement = Evenement::findOrFail($id);

        return new Evenement($evenement);
    }
}
