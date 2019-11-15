<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Image as Image;

use Illuminate\Support\Facades\Storage;
use View;
use File;
use Response;
use Carbon\Carbon;

class ImageController extends Controller
{
    public function create()
    {

        return view('createImage');
    }

    public function dlimagejson()
    {
        $Image = Image::all();


        $data = json_encode($Image);


        $dt = Carbon::now(); // setting date

        $dt = $dt->toDateString('Y-M-D');
        $fileName = 'AllImage' . $dt . random_int(1, 20000) . '_datafile.json';
        $pb = public_path($fileName);

        File::put($fileName, $data);


        return response()->download($pb, $fileName);

    }

    public function store()
    {
        $image = new Image();
        $image->chemin = request('chemin');
        $image->visibilite_image = 1;
        $image->appréciation = 0;
        $image->user_id_createur_img = 2;
        $image->id_evenement = 2;
        $image->save();
        return "Image sauvegardé !";

    }
}
