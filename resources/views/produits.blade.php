<!DOCTYPE html>
<html>
@extends('layouts.head')
@extends('layouts.footer')
@extends('layouts.nav')
</html>
<style>

        .Contenus{
        font-size: 20px;
        padding-top: 1%;
        padding-left: 1%;
        
        }
        .img{
        
        float: left;
        
        
        }
        .Texte
        {
            font-size:20px;

        }
        #boxombre2 {
                    border: 1px solid;
                    padding: 10px;
                    
                    width: auto;
                    height: 220px;
                    float: left;
                }
        #boxombre3 
        {
                    border: 1px solid;
                    padding: 10px;
                    width: auto;
                    height: 220px;
                    
        }
        
        </style>
<body>
@section('content')


    @foreach ($Produit as $Produit)
        @section('other nav')
        {{-- 
                    @if ($_SESSION['role']!='guest')
                    <a class="navbar-brand" href="/dljsonprod/{{$Produit-> id_produit}}">Download Json File</a>
                    @endif
                    --}}
        <a class="navbar-brand" href="/dljsonprod/{{$Produit-> id_produit}}">Download Json File</a>
        @endsection
            
                <div class="Contenus">
                    <div id="boxombre2">
                    <img class="img" src="{{$Produit-> url_image_produit}}" alt="photo">
                    <div class="N°"> N° Produit = {{$Produit-> id_produit}} <br><br>  </div>
                    <div class="Nom"> Nom Produit = {{$Produit-> nom_produit}}<br><br></div>
                    <div>N° Evenement associer = {{$Produit-> id_evenement}}<br><br></div>
                    </div>
                    <div id="boxombre3">
                    <div class="Texte">Description = {{$Produit-> description_produit}}</div>
                     <div class="Texte"> Nombre de Vente = {{$Produit-> nbr_de_vente}}</div>
                     <div>Prix = {{$Produit-> prix}}€</div></div>
                    
    
                </div>
    @endforeach
   


@endsection

</body>
