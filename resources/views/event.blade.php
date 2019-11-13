<!DOCTYPE html>
<html>
@extends('layouts.head')
@extends('layouts.footer')
@extends('layouts.nav')
</html>
<?php 
$index=1
?>
<body>
@section('content')

    
    
    @foreach ($Evenement as $Evenement)
    @if ($index==1)
    <div>N° Evenement = {{$Evenement-> id_evenement}} </div>
    <div>Nom Evenement = {{$Evenement-> nom_evenement}}</div>
    <div>Description = {{$Evenement-> description_evenement}}</div>
    <div>Association = {{$Evenement-> association}}</div>
    <div>Date de l'evenement = {{$Evenement-> date_evenement}} </div>
    <div>Id créateur evenement = {{$Evenement-> user_id}}</div>
    <h2>Commentaires :</h2>
    <?php $index=$index+1 ?>
    @endif
    <div class="col-12 col-md-6 col-lg-4">
        <img src="{{$Evenement-> chemin}}" alt="photo">
        @if( $Evenement-> texte )
        <div>{{$Evenement-> texte}}: de L'utilisateur N° {{$Evenement -> user_id_createur_com}}  </div>
        @else 
        <div> Pas de Commentaire </div>
        @endif
        <div> Likes : {{$Evenement-> appréciation}} </div>
    </div>

    
    @endforeach
    
   

   


@endsection

</body>
