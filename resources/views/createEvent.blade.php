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
                            <div class="form-group row">
                                <label for="nomEvent" class="col-md-4 col-form-label text-md-right">{{ __('NomEvent') }}</label>

                                <div class="col-md-6">
                                    <input id="nomEvent" type="text" class="form-control @error('nomEvent') is-invalid @enderror" name="nomEvent" value="{{ old('nomEvent') }}" required autocomplete="nomEvent" autofocus>

                                    @error('nomEvent')
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
                                <label for="description" class="col-md-4 col-form-label text-md-right">{{ __('Description') }}</label>

                                <div class="col-md-6">
                                    <input id="description" type="text" class="form-control @error('description') is-invalid @enderror" name="description" value="{{ old('description') }}" required autocomplete="description" autofocus>

                                    @error('description')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="date" class="col-md-4 col-form-label text-md-right">{{ __('Date') }}</label>

                                <div class="col-md-6">
                                    <input id="date" type="date" class="form-control @error('description') is-invalid @enderror" name="date" value="01-01-2019" min="2019-11-11">

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
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
