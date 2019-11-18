<!DOCTYPE html>
<html>
@extends('layouts.head')
@extends('layouts.footer')
@extends('layouts.nav')
</html>
<?php
$index=1
?>


<style>

.Event{
font-size: 20px;
padding-top: 1%;
padding-left: 1%;

}
.N°,.Nom{

float: left;


}

#boxombre2 {
            border: 1px solid;
            padding: 10px;

            width: auto;
            height: auto;

        }

</style>
<body>

@section('content')



    @foreach ($Evenement as $Evenement)
    @section('other nav')
     {{--
                    @if ($_SESSION['role']!='guest')
                    <div class="navbar-header">
                        <a class="navbar-brand" href="/dljsonevent/{{$Evenement-> id_evenement}}">Download Json File</a>
                    </div>
                    @endif
                    --}}
    <div class="navbar-header">
            <a class="navbar-brand" href="/dljsonevent/{{$Evenement-> id_evenement}}">Download Pdf File</a>
    </div>
     <div class="navbar-header">
         <a class="navbar-brand" href="/createImage">Ajout Image </a>
     </div>
     <div class="navbar-header">
         <a class="navbar-brand" href="/createComment">Ajout Commentaire </a>
     </div>

    @endsection
    @if ($index==1)
    <div class="Event">
        <div class="N°" id="boxombre2">N° Evenement = {{$Evenement-> id_evenement}}<br>
        <div class="Nom">Nom Evenement = {{$Evenement-> nom_evenement}}   <br>
        <div class="Id_créa">Id Auteur = {{$Evenement-> user_id}}       </div><br>  </div></div>
        <div id="boxombre2"><div class="Desc">Description = {{$Evenement-> description_evenement}}</div>
        <div class="Assoc">Association = {{$Evenement-> association}}</div>
        <div class="Date">Date de l'evenement = {{$Evenement-> date_evenement}} </div>
        </div>
    </div>
    <h2>Commentaires :</h2>
    <?php $index=$index+1 ?>
    @endif
    <div class="col-12 col-md-6 col-lg-4">
        <div id="boxombre">

        <img src="{{$Evenement-> chemin}}" alt="photo">
        <div>Image N°{{$Evenement -> id_image}}</div>
        <div>Commentaire N°{{$Evenement -> id_commentaire}}</div>
            @if( $Evenement-> texte && $Evenement->visibilite_commentaire==1 )
            <div>{{$Evenement-> texte}}: de L'utilisateur N° {{$Evenement -> user_id_createur_com}}  </div>
            @else
            <div> Pas de Commentaire </div>
            @endif
            <div> Likes : {{$Evenement-> appréciation}} </div>
            <button type="button" class="btn btn-danger">
                    @if( $Evenement-> id_commentaire)  <a href="/evenementscacher/{{$Evenement-> id_commentaire}}/{{$Evenement-> id_evenement}}/"> @endif cacher commentaire<a></button>
        </div>
    </div>





@endforeach



@endsection


</body>
