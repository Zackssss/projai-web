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
@section('other nav')
<ul class="nav navbar-nav">
        
        <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="./boutique">Tri Boutique <span class="caret"></span></a>
            <ul class="dropdown-menu">
                <li><a href="/boutique/Id">Tri par id</a></li>
                
                <li><a href="/boutique/prix">Tri par prix</a></li>
                <li><a href="/boutique/event">Lier à un evenement</a></li>
                <li><a href="/boutique/notevent">Lier à aucun evenement</a></li>
            </ul>
        </li>
       
</ul>
@endsection
@section('content')

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

                <button type="button" class="btn btn-primary"><a href="/produits/{{$Produit-> id_produit}}"> Plus d'info</a></button>

                <button type="button" class="btn btn-danger"><a href="/cart/{{$Produit-> id_produit}}"> Ajouter au panier</a></button>

            </div>
        </div>

    @endforeach



@endsection


