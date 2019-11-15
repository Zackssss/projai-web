<!DOCTYPE html>
<html>
@extends('layouts.head')
@extends('layouts.footer')
@extends('layouts.nav')
</html>

@section('content')
<h1>Création d'image</h1>

                            <form action="" method="post">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <div class="form-group row">
                                <label for="chemin" class="col-md-4 col-form-label text-md-right">{{ __('URL_Image') }}</label>

                                <div class="col-md-6">
                                    <input id="chemin" type="text" class="form-control @error('chemin') is-invalid @enderror" name="chemin" value="{{ old('chemin') }}" required autocomplete="chemin" autofocus>

                                    @error('chemin')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                                <div class="form-group row">
                                    <label for="id_evenement" class="col-md-4 col-form-label text-md-right">{{ __('Numéro d Évènement') }}</label>

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
