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
                                    <label for="description_evenement" class="col-md-4 col-form-label text-md-right">{{ __('Description') }}</label>

                                    <div class="col-md-6">
                                        <input id="description_evenement" type="text" class="form-control @error('description_evenement') is-invalid @enderror" name="description_evenement" value="{{ old('description_evenement') }}" required autocomplete="description_evenement" autofocus>

                                        @error('description_evenement')
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
                                <label for="date_evenement" class="col-md-4 col-form-label text-md-right">{{ __('Date') }}</label>

                                <div class="col-md-6">
                                    <input id="date_evenement" type="date" class="form-control @error('date_evenement') is-invalid @enderror" name="date_evenement" value="01-01-2019" min="2019-11-11">

                                    @error('date_evenement')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="recurence" class="col-md-4 col-form-label text-md-right">{{ __('Recurrence') }}</label>

                                <div class="col-md-6">
                                    <input id="recurence" type="checkbox" name="recurence" class="switch-input" value="1" {{ old('recurence') ? 'checked="checked"' : ''}}/>

                                </div>
                            </div>

                                <div class="form-group">
                                    <button type = "submit" class="btn btn-success">Enregistrer</button>
                                </div>
                            </form>
