
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
                                    <input id="prix" type="text" class="form-control @error('prix') is-invalid @enderror" name="description" value="{{ old('prix') }}" required autocomplete="prix" autofocus>

                                    @error('prix')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                                <div class="form-group">
                                    <button class="btn btn-primary">Enregistrer</button>
                                </div>
                            </form>
