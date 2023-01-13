@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Edit Profile') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{url('/update')}}">
                        @csrf

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">
                                {{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" 
                                class="form-control @error('name') is-invalid @enderror" name="name" 
                                value="{{ $user->name }}" required autocomplete="name" autofocus>

                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3 ">
                            <label for="category" class="col-md-4 col-form-label text-md-end">
                                {{ __('Localization') }}</label>

                            <div class="col-md-6">
                                <select id="localization" name="localization" 
                                class="form-select form-control @error('localization') is-invalid @enderror" autofocus>

                                    <option {{($user->localization) == 'Aveiro' ? 'selected' : ''}} 
                                        value="Aveiro">Aveiro</option>
                                    <option {{($user->localization) == 'Beja' ? 'selected' : ''}} 
                                        value="Beja">Beja</option>
                                    <option {{($user->localization) == 'Braga' ? 'selected' : ''}} 
                                        value="Braga">Braga</option>
                                    <option {{($user->localization) == 'Bragança' ? 'selected' : ''}} 
                                        value="Bragança">Bragança</option>
                                    <option {{($user->localization) == 'Castelo Branco' ? 'selected' : ''}} 
                                        value="Castelo Branco">Castelo Branco</option>
                                    <option {{($user->localization) == 'Coimbra' ? 'selected' : ''}} 
                                        value="Coimbra">Coimbra</option>
                                    <option {{($user->localization) == 'Evora' ? 'selected' : ''}} 
                                        value="Évora">Évora</option>
                                    <option {{($user->localization) == 'Faro' ? 'selected' : ''}} 
                                        value="Faro">Faro</option>
                                    <option {{($user->localization) == 'Guarda' ? 'selected' : ''}} 
                                        value="Guarda">Guarda</option>
                                    <option {{($user->localization) == 'Leiria' ? 'selected' : ''}} 
                                        value="Leiria">Leiria</option>
                                    <option {{($user->localization) == 'Lisboa' ? 'selected' : ''}} 
                                        value="Lisboa">Lisboa</option>
                                    <option {{($user->localization) == 'Portalegre' ? 'selected' : ''}} 
                                        value="Portalegre">Portalegre</option>
                                    <option {{($user->localization) == 'Porto' ? 'selected' : ''}} 
                                        value="Porto">Porto</option>
                                    <option {{($user->localization) == 'Santarem' ? 'selected' : ''}} 
                                        value="Santarem">Santarem</option>
                                    <option {{($user->localization) == 'Setubal' ? 'selected' : ''}} 
                                        value="Setubal">Setubal</option>
                                    <option {{($user->localization) == 'Viana do Castelo' ? 'selected' : ''}} 
                                        value="Viana do Castelo">Viana do Castelo</option>
                                    <option {{($user->localization) == 'Vila Real' ? 'selected' : ''}} 
                                        value="Vila Real">Vila Real</option>
                                    <option {{($user->localization) == 'Viseu' ? 'selected' : ''}} 
                                        value="Viseu">Viseu</option>
                                </select>
                                @error('localization')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="username" class="col-md-4 col-form-label text-md-end">
                                {{ __('Username') }}</label>

                            <div class="col-md-6">
                                <input id="username" type="text"
                                class="form-control @error('username') is-invalid @enderror" name="username" 
                                value="{{ $user->username }}" required autocomplete="username" autofocus>

                                @error('username')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="address" class="col-md-4 col-form-label text-md-end">
                                {{ __('Address') }}</label>

                            <div class="col-md-6">
                                <input id="address" type="text" 
                                class="form-control @error('address') is-invalid @enderror" name="address" 
                                value="{{ $user->address }}" required autocomplete="address" autofocus>

                                @error('address')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        
                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Finish') }}
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