<!DOCTYPE html>
<html>
@extends('layouts.head')
@extends('layouts.footer')
@extends('layouts.nav')
</html>
   <body>
@section('content')
    <div class="container">
        <h1>Bienvenue sur le site du BDE CESI !!!</h1>
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner">

                <div class="item active">
                    <img src="https://www.cesi.fr/wp-content/uploads/2018/11/logo-CESI.png" alt="logo CESI" style="width:100%;">
                    <div class="carousel-caption">
                        <h3>Le CESI</h3>
                        <p2>Une école pour tous</p2>
                    </div>
                </div>

                <div class="item">
                    <img src="https://praticampus.fr/uploads/ckeditor/pictures/123/content_CESI_Inge.gif" alt="Chicago" style="width:97%;">
                    <div class="carousel-caption">
                        <h3>Le parcours EI</h3>
                        <p2>Pour la formation d'ingénieurs</p2>
                    </div>
                </div>

                <div class="item">
                    <img src="https://rouen.cesi.fr/wp-content/uploads/sites/12/2018/11/Cesi_Logo_ALTERNANCE_RVB.png" alt="New York" style="width:59%;">
                    <div class="carousel-caption">
                        <h3>Le parcours alternance</h3>
                        <p2>Pour ceux qui préfèrent être sur le terrain</p2>
                    </div>
                </div>

            </div>

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>

@endsection
@show



    </body>


