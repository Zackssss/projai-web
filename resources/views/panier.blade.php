<!DOCTYPE html>
<html>
@extends('layouts.head')
@extends('layouts.footer')
@extends('layouts.nav')
</html>
<body>
</body>
@section('content')
    @if(\Illuminate\Support\Facades\Session::has('cart'))
        <div class="row">
            <div class="col-sm-6 col-md-m col-md-offset-3 col-sm-offset-3">
                <ul class="list-group">
                    @foreach ($produit as $produit)
                        <li class="list-group">
                            <span class="badge">{{ $produit['quantite'] }}</span>
                            <strong>{{$produit['item']['nom_produit']}}</strong>
                            <span class="label label-success">{{ $produit['prix'] }}</span>
                            <div class="btn-group">
                                <button type="button" class="btn btn-success">
                                    <a href="{{ route('addInCart', [ $produit['item']['id_produit']])}}"> Ajouter </a>
                                </button>
                                <button type="button" class="btn btn-warning">
                                    <a href="{{ route('reduceCart', [ $produit['item']['id_produit']])}}"> Réduire </a>
                                </button>
                                <button type="button" class="btn btn-danger">
                                    <a href="{{ route('removeCart', [ $produit['item']['id_produit']])}}"> Enlever </a>
                                </button>
                            </div>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6 col-md-m col-md-offset-3 col-sm-offset-3">
                <strong>Total : {{$prixTotal}}</strong>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6 col-md-m col-md-offset-3 col-sm-offset-3">
            <button type="button" class="btn btn-success"><a href="/send-mail/{{$prixTotal}}">Checkout</a></button>
            </div>
        </div>
        @else
        <div class="row">
            <div class="col-sm-6 col-md-m col-md-offset-3 col-sm-offset-3">
                <h2>Il n'y a pas de produit dans le panier.</h2>
            </div>
        </div>
    @endif
@endsection
