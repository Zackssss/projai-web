<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Evenement as Evenement;


class EvenementController extends Controller
{
    public function create(){

        return view('createEvent');
    }
    public function EventCeMois()
    {
        $url = url()->full() ;
    
        $id=substr($url, -1);

        

        $Evenement = Evenement::where('evenements.id_evenement',$id)->leftjoin('images','evenements.id_evenement','=','images.id_evenement')
        ->leftjoin('commentaires','images.id_image','=','commentaires.id_image')->get();
        
        

        return view('event')-> with('Evenement', $Evenement);
        
    }
    public function eventpassé(){

        $event = Evenement::all();
        return view('event_mois')-> with('Evenement', $event);
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
    public function store(Request $request)
    {
        $evenement = $request->isMethod('put') ? Evenement::findOrFail($request->id) : new Evenement;
        $evenement->id = $request->input('id');
        $evenement->nom_evenement = $request->input('nom_evenement');
        $evenement->association = $request->input('association');
        $evenement->description_evenement = $request->input('description_evenement');
        $evenement->date_evenement = $request->input('date_evenement');
        $evenement->recurrence = $request->input('recurrence');
        $evenement->prix = $request->input('prix');

        if ($evenement->save()) {
            return new Evenement($evenement);
        }
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
