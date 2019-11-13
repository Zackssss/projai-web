<!DOCTYPE html>
<html>
@extends('layouts.head')
@extends('layouts.footer')
@extends('layouts.nav')

</html>
<head>
    <link rel="stylesheet" href="./assets/vendors/bootstrap/bootstrap-4.3.1-dist/css/bootstrap-grid.min.css">


</head>
<header> <title>Boutique</title>

</header>


<body>




</body>
@section('content')
<?php
$desc= "D'ailleurs, il ne tardait pas à pas, en traînant ses pantoufles, et, s'appuyant de l'épaule contre Charles, elle continuait à marcher, les deux pieds sur les murs, et souriant de plaisir sous son voile, qui de son mari, le conjura de céder; il se.";
$temp = substr($desc,-255,100);
$desc = substr_replace($temp, '...',100,100) ;
?>
@foreach ($Produit as $Produit)
    

<div class="col-12 col-md-6 col-lg-4">
        <div id="boxombre">
            <img src="{{$Produit-> url_image_produit}}" alt="photo">
                <div class="texte">
                    <div>N° Produit = {{$Produit-> id_produit}} </div>
                    <div>Nom Produit = {{$Produit-> nom_produit}}</div>
                    <div>Description = {{$Produit-> description_produit}}</div>
                    <div>Prix = {{$Produit-> prix}}€  Nombre de Vente = {{$Produit-> nbr_de_vente}}</div>
                    <div>N° Evenement associer = {{$Produit-> id_evenement}}</div>
    
                </div>
    
            <button type="button" class="btn btn-primary"><a href="./produits"> Plus d'info</a></button>  
            
            <button type="button" class="btn btn-danger">Ajouter au Panier</button>  
                
        </div>
    </div>
    
@endforeach



@endsection

@show
