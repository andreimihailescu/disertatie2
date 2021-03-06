@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Create person</div>
                    <div class="card-body">

                        @if(isset($person->id))
                            <form method="POST" action="{{ route('person.update', ['person' => $person->id]) }}" aria-label="Create person">
                                <input type="hidden" name="_method" value="PUT" />
                            @else
                            <form method="POST" action="{{ route('person.store') }}" aria-label="Create person">
                        @endif

                            @csrf

                            <div class="form-group row">
                                <label for="firstname"
                                       class="col-md-4 col-form-label text-md-right">{{ __('Firstname') }}</label>

                                <div class="col-md-6">
                                    <input id="firstname" type="text"
                                           class="form-control{{ $errors->has('firstname') ? ' is-invalid' : '' }}"
                                           name="firstname" value="{{ isset($person->firstname) ? $person->firstname : old('firstname') }}" required autofocus>

                                    @if ($errors->has('firstname'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('firstname') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="lastname"
                                       class="col-md-4 col-form-label text-md-right">{{ __('Lastname') }}</label>

                                <div class="col-md-6">
                                    <input id="lastname" type="text"
                                           class="form-control{{ $errors->has('lastname') ? ' is-invalid' : '' }}"
                                           name="lastname" value="{{ isset($person->lastname) ? $person->lastname : old('lastname') }}" required>

                                    @if ($errors->has('lastname'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('lastname') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="email"
                                       class="col-md-4 col-form-label text-md-right">{{ __('Email') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="email"
                                           class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"
                                           name="email" value="{{ isset($person->email) ? $person->email : old('email')}}">

                                    @if ($errors->has('email'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="sex"
                                       class="col-md-4 col-form-label text-md-right">{{ __('Sex') }}</label>

                                <div class="col-md-6">
                                    <select id="sex"
                                            class="form-control{{ $errors->has('age') ? ' is-invalid' : '' }}"
                                            name="sex">
                                        <option value="">Please select</option>
                                        <option value="Male" {{  isset($person->sex) && $person->sex === 'Male' ? 'selected' : '' }}>Male</option>
                                        <option value="Female" {{ isset($person->sex) &&$person->sex === 'Female' ? 'selected' : '' }}>Female</option>
                                    </select>

                                    @if ($errors->has('sex'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('sex') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="birthdate"
                                       class="col-md-4 col-form-label text-md-right">{{ __('Birthdate') }}</label>

                                <div class="col-md-6">
                                    <input id="birthdate" type="text"
                                           class="form-control{{ $errors->has('birthdate') ? ' is-invalid' : '' }}"
                                           name="birthdate" placeholder="2000-01-01" value="{{ isset($person->birthdate) ? $person->birthdate : old('birthdate') }}">

                                    @if ($errors->has('birthdate'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('birthdate') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="hobby"
                                       class="col-md-4 col-form-label text-md-right">{{ __('Hobby') }}</label>

                                <div class="col-md-6">
                                    <textarea id="hobby"
                                              class="form-control{{ $errors->has('hobby') ? ' is-invalid' : '' }}"
                                              name="hobby">{{ isset($person->hobby) ? $person->hobby : old('hobby') }}</textarea>

                                    @if ($errors->has('hobby'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('hobby') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        Save
                                    </button>
                                    <button type="button" class="btn btn-default" onclick="location.pathname='/person'" style="margin-left: 5px">
                                        Cancel
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
