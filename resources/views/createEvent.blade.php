        <h1>Création d'évènement</h1>

                            <form action="" method="post">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <div class="form-group row">
                                <label for="nom_evenement" class="col-md-4 col-form-label text-md-right">{{ __('Nom') }}</label>

                                <div class="col-md-6">
                                    <input id="nom_evenement" type="text" class="form-control @error('nom_evenement') is-invalid @enderror" name="nom_evenement" value="{{ old('nom_evenement') }}" required autocomplete="nom_evenement" autofocus>

                                    @error('nom_evenement')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
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
                                <label for="description_evenement" class="col-md-4 col-form-label text-md-right">{{ __('Description') }}</label>

                                <div class="col-md-6">
                                    <input id="description_evenement" type="text" class="form-control @error('description_evenement') is-invalid @enderror" name="description" value="{{ old('description_evenement') }}" required autocomplete="description_evenement" autofocus>

                                    @error('description_evenement')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="date_evenement" class="col-md-4 col-form-label text-md-right">{{ __('Date') }}</label>

                                <div class="col-md-6">
                                    <input id="date_evenement" type="date" class="form-control @error('description_evenement') is-invalid @enderror" name="date_evenement" value="01-01-2019" min="2019-11-11">

                                    @error('date')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="recurrence" class="col-md-4 col-form-label text-md-right">{{ __('Recurrence') }}</label>

                                <div class="col-md-6">
                                    <input id="recurrence" type="checkbox" class="form-control @error('recurrence') is-invalid @enderror" name="recurrence">

                                    @error('recurrence')
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
                                <div class="form-group">
                                    <button class="btn btn-primary">Enregistrer</button>
                                </div>
                            </form>
