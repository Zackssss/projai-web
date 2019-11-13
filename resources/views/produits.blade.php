<!DOCTYPE html>
<html>
@extends('layouts.head')
@extends('layouts.footer')
@extends('layouts.nav')
</html>

<body>
@section('content')


    @foreach ($Produit as $Produit)
          <img src="{{$Produit-> url_image_produit}}" alt="photo">
                <div class="Contenus">
                    <div>N° Produit = {{$Produit-> id_produit}} </div>
                    <div>Nom Produit = {{$Produit-> nom_produit}}</div>
                    <div>Description = {{$Produit-> description_produit}}</div>
                    <div>Prix = {{$Produit-> prix}}€  Nombre de Vente = {{$Produit-> nbr_de_vente}}</div>
                    <div>N° Evenement associer = {{$Produit-> id_evenement}}</div>
    
                </div>
    @endforeach
   


@endsection

</body>
