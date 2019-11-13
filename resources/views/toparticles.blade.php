<!DOCTYPE html>
<html>
@extends('layouts.head')
@extends('layouts.footer')
@extends('layouts.nav')
</html>
<style>
.Contenus
{
padding: 1%;
font-size: 20px;

}



</style>
<body>

@section('content')
  <?php  
    $index=1
  ?>
        
        @foreach ($Produit as $Produit)
            @if ($index<4)
            
            <div class="Contenus">
                <img src="{{$Produit-> url_image_produit}}" alt="photo">
                <div>N° Produit = {{$Produit-> id_produit}} </div>
                <div>Nom Produit = {{$Produit-> nom_produit}}</div>
                <div>Description = {{$Produit-> description_produit}}</div>
                <div>Prix = {{$Produit-> prix}}€  Nombre de Vente = {{$Produit-> nbr_de_vente}}</div>
                <div>N° Evenement associer = {{$Produit-> id_evenement}}</div>
                <div>Vente N° {{$index++}}</div>
            </div>
            
            @else
                
            @endif
            
            
        @endforeach
   
   


@endsection
</body>