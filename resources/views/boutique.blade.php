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


<div class="col-12 col-md-6 col-lg-4">
    <div id="boxombre">

        <img src="https://lorempixel.com/100/200/animals/?2741..." alt="photo">
            <div class="texte">
                <div>N° Produit = 1</div>
                <div>Nom Produit = Test</div>
                <div>Description = Bien<?php //echo($desc) //?></div>
                <div>Prix = 10€ </div>
                <div>N° Evenement associer = none</div>

            </div>
        <button type="button" class="btn btn-primary"><a href="/produits"> Plus d'info</a></button>

        <a href="{{route('produits')}}" class="btn btn-danger" role="button">Ajouter au Panier</a>
    </div>
    </div>



<div class="col-12 col-md-6 col-lg-4">
        <div id="boxombre">
            <img src="https://lorempixel.com/100/200/animals/?2741..." alt="photo">
                <div class="texte">
                    <div>N° Produit = </div>
                    <div>Nom Produit =</div>
                    <div>Description = <?php echo($desc) ?></div>
                    <div>Prix =    € Nombre de vente = </div>
                    <div>N° Evenement associer = </div>

                </div>
            <button type="button" class="btn btn-primary"><a href="/produits"> Plus d'info</a></button>

            <button type="button" class="btn btn-danger">Ajouter au Panier</button>

        </div>
    </div>
    <div class="col-12 col-md-6 col-lg-4">
            <div id="boxombre">
                <img src="https://lorempixel.com/100/200/animals/?2741..." alt="photo">
                    <div class="texte">
                        <div>N° Produit = </div>
                        <div>Nom Produit =</div>
                        <div>Description = <?php echo($desc) ?></div>
                        <div>Prix =    € Nombre de vente = </div>
                        <div>N° Evenement associer = </div>

                    </div>
                <button type="button" class="btn btn-primary"><a href="/produits"> Plus d'info</a></button>

                <button type="button" class="btn btn-danger">Ajouter au Panier</button>

            </div>
        </div>
        <div class="col-12 col-md-6 col-lg-4">
                <div id="boxombre">
                    <img src="https://lorempixel.com/100/200/animals/?2741..." alt="photo">
                        <div class="texte">
                            <div>N° Produit = </div>
                            <div>Nom Produit =</div>
                            <div>Description = <?php echo($desc) ?></div>
                            <div>Prix =    € Nombre de vente = </div>
                            <div>N° Evenement associer = </div>

                        </div>
                    <button type="button" class="btn btn-primary"><a href="/produits"> Plus d'info</a></button>

                    <button type="button" class="btn btn-danger">Ajouter au Panier</button>

                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4">
                    <div id="boxombre">
                        <img src="https://lorempixel.com/100/200/animals/?2741..." alt="photo">
                            <div class="texte">
                                <div>N° Produit = </div>
                                <div>Nom Produit =</div>
                                <div>Description = <?php echo($desc) ?></div>
                                <div>Prix =    € Nombre de vente = </div>
                                <div>N° Evenement associer = </div>

                            </div>
                        <button type="button" class="btn btn-primary"><a href="/produits"> Plus d'info</a></button>

                        <button type="button" class="btn btn-danger">Ajouter au Panier</button>

                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                        <div id="boxombre">
                            <img src="https://lorempixel.com/100/200/animals/?2741..." alt="photo">
                                <div class="texte">
                                    <div>N° Produit = </div>
                                    <div>Nom Produit =</div>
                                    <div>Description = <?php echo($desc) ?></div>
                                    <div>Prix =    € Nombre de vente = </div>
                                    <div>N° Evenement associer = </div>

                                </div>
                            <button type="button" class="btn btn-primary"><a href="/produits"> Plus d'info</a></button>

                            <button type="button" class="btn btn-danger">Ajouter au Panier</button>

                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4">
                            <div id="boxombre">
                                <img src="https://lorempixel.com/100/200/animals/?2741..." alt="photo">
                                    <div class="texte">
                                        <div>N° Produit = </div>
                                        <div>Nom Produit =</div>
                                        <div>Description = <?php echo($desc) ?></div>
                                        <div>Prix =    € Nombre de vente = </div>
                                        <div>N° Evenement associer = </div>

                                    </div>
                                <button type="button" class="btn btn-primary"><a href="/produits"> Plus d'info</a></button>

                                <button type="button" class="btn btn-danger">Ajouter au Panier</button>

                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-4">
                                <div id="boxombre">
                                    <img src="https://lorempixel.com/100/200/animals/?2741..." alt="photo">
                                        <div class="texte">
                                            <div>N° Produit = </div>
                                            <div>Nom Produit =</div>
                                            <div>Description = <?php echo($desc) ?></div>
                                            <div>Prix =    € Nombre de vente = </div>
                                            <div>N° Evenement associer = </div>

                                        </div>
                                    <button type="button" class="btn btn-primary"><a href="/produits"> Plus d'info</a></button>

                                    <button type="button" class="btn btn-danger">Ajouter au Panier</button>

                                </div>
                            </div>
                            <div class="col-12 col-md-6 col-lg-4">
                                    <div id="boxombre">
                                        <img src="https://lorempixel.com/100/200/animals/?2741..." alt="photo">
                                            <div class="texte">
                                                <div>N° Produit = </div>
                                                <div>Nom Produit =</div>
                                                <div>Description = <?php echo($desc) ?></div>
                                                <div>Prix =    € Nombre de vente = </div>
                                                <div>N° Evenement associer = </div>

                                            </div>
                                        <button type="button" class="btn btn-primary"><a href="/produits"> Plus d'info</a></button>

                                        <button type="button" class="btn btn-danger">Ajouter au Panier</button>

                                    </div>
                                </div>



@endsection

@show
