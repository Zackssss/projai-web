@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('createEvent') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('createEvent') }}">
                            @csrf
                            <label for="nom_produit" class="col-md-4 col-form-label text-md-right">{{ __('Nom') }}</label>

                            <div class="col-md-6">
                                <input id="nom_produit" type="text" class="form-control @error('nom_produit') is-invalid @enderror" name="nom_produit" value="{{ old('nom_produit') }}" required autocomplete="nom_produit" autofocus>

                                @error('nom_evenement)
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group row">
                                <label for="association" class="col-md-4 col-form-label text-md-right">{{ __('Association') }}</label>

                                <div class="col-md-6">
                                    <input id="association" type="text" class="form-control @error('association') is-invalid @enderror" name="association" value="{{ old('association') }}" required autocomplete="association" autofocus>

                                    @error('association')
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
                                <label for="date_produit" class="col-md-4 col-form-label text-md-right">{{ __('Date_expiration') }}</label>

                                <div class="col-md-6">
                                    <input id="date_produit" type="date" class="form-control @error('description_produit') is-invalid @enderror" name="date_produit" value="01-01-2019" min="2019-11-11">

                                    @error('date_produit')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="prix" class="col-md-4 col-form-label text-md-right">{{ __('Prix') }}</label>

                                <div class="col-md-6">
                                    <input id="prix" type="text" class="form-control @error('prix') is-invalid @enderror" name="description" value="{{ old('prix') }}" required autocomplete="prix" autofocus>

                                    @error('prix')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
