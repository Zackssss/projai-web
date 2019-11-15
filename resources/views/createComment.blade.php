<!DOCTYPE html>
<html>
@extends('layouts.head')
@extends('layouts.footer')
@extends('layouts.nav')
</html>

@section('content')
<h1>Création de commentaire</h1>

                            <form action="" method="post">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <div class="form-group row">
                                <label for="texte" class="col-md-4 col-form-label text-md-right">{{ __('Texte') }}</label>

                                <div class="col-md-6">
                                    <input id="texte" type="text" class="form-control @error('texte') is-invalid @enderror" name="texte" value="{{ old('texte') }}" required autocomplete="texte" autofocus>

                                    @error('texte')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                                <div class="form-group row">
                                    <label for="id_image" class="col-md-4 col-form-label text-md-right">{{ __('Numéro d image') }}</label>

                                    <div class="col-md-6">
                                        <input id="id_image" type="text" class="form-control @error('id_image') is-invalid @enderror" name="id_image" value="{{ old('id_image') }}" required autocomplete="id_image" autofocus>

                                        @error('id_image')
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
