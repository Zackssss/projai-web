<!DOCTYPE html>
<html>
@extends('layouts.head')
@extends('layouts.footer')
@extends('layouts.nav')

</html>
@section('content')
<h1>Création de produit</h1>

                            <form action="" method="post">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">



                            <div class="form-group row">
                                <label for="nom_produit" class="col-md-4 col-form-label text-md-right">{{ __('Nom') }}</label>

                                <div class="col-md-6">
                                    <input id="nom_produit" type="text" class="form-control @error('nom_produit') is-invalid @enderror" name="nom_produit" value="{{ old('nom_produit') }}" required autocomplete="nom_produit" autofocus>

                                    @error('nom_evenement')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                     </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="description_produit" class="col-md-4 col-form-label text-md-right">{{ __('Description') }}</label>

                                <div class="col-md-6">
                                    <input id="description_produit" type="text" class="form-control @error('description_produit') is-invalid @enderror" name="description_produit" value="{{ old('description_produit') }}" required autocomplete="description_produit" autofocus>

                                    @error('description_produit')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                                <div class="form-group row">
                                    <label for="prix" class="col-md-4 col-form-label text-md-right">{{ __('Prix') }}</label>

                                    <div class="col-md-6">
                                        <input id="prix" type="text" class="form-control @error('prix') is-invalid @enderror" name="prix" value="{{ old('prix') }}" required autocomplete="prix" autofocus>

                                        @error('prix')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="url_image_produit" class="col-md-4 col-form-label text-md-right">{{ __('URL_Image') }}</label>

                                    <div class="col-md-6">
                                        <input id="url_image_produit" type="text" class="form-control @error('url_image_produit') is-invalid @enderror" name="url_image_produit" value="{{ old('url_image_produit') }}" required autocomplete="url_image_produit" autofocus>

                                        @error('url_image_produit')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="id_evenement" class="col-md-4 col-form-label text-md-right">{{ __('Numéro d Évènement (si il n y a pas dévènement numéro évènement = 0)') }}</label>

                                    <div class="col-md-6">
                                        <input id="id_evenement" type="text" class="form-control @error('id_evenement') is-invalid @enderror" name="id_evenement" value="{{ old('id_evenement') }}" required autocomplete="id_evenement" autofocus>

                                        @error('id_evenement')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group">
                                    <button type = "submit" class="btn btn-success">Enregistrer</button>
                                </div>
                            </form>
@endsection
