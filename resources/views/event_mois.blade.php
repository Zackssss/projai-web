<!DOCTYPE html>
<html>
@extends('layouts.head')
@extends('layouts.footer')
@extends('layouts.nav')
</html>
<body>
        @section('content')


        @foreach ($Evenement as $Evenement)
        <div class="col-12 col-md-6 col-lg-4">
            <div id="boxombre">
                        <div class="Contenus">
                            <div>N° Evenement = {{$Evenement-> id_evenement}} </div>
                            <div>Nom Evenement = {{$Evenement-> nom_evenement}}</div>
                            <div>Description = {{$Evenement-> description_evenement}}</div>
                            <div>Association = {{$Evenement -> association}}</div>
                            <div>Date de l'evenement = {{$Evenement-> date_evenement}} </div>
                            <div>Id créateur evenement = {{$Evenement-> user_id}}</div>
            
                        </div>
                        <button type="button" class="btn btn-primary"><a href="./evenements/{{$Evenement-> id_evenement}}"> Plus d'info</a></button>  
            </div> 
        </div>       
        @endforeach
       
    
    
    @endsection
</body>
