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
<div class="col-12 col-md-6 col-lg-4">
    <div id="boxombre">
        <img src="https://lorempixel.com/400/600/animals/Faker/?2741..." alt="photo">
            <div class="texte">
                texte
            </div>
        <button type="button" class="btn btn-primary"><a href="/produits"> Plus d'info</a></button>  
        <button type="button" class="btn btn-danger">Ajouter au Panier</button>  
            
    </div>
</div>



@endsection

@show