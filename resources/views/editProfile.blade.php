@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Edit Profile') }}</div>

                @php $id = Auth::id(); @endphp

                <div class="card-body">
                    <form method="POST" action="{{ url('/edit_profile') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $user->name }}" required autocomplete="name" autofocus>

                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3 ">
                            <label for="category" class="col-md-4 col-form-label text-md-end">{{ __('Localization') }}</label>

                            <div class="col-md-6">
                                <select id="location" name="location" class="form-select form-control @error('location') is-invalid @enderror" autofocus>

                                    <option {{($user->location) == 'Aveiro' ? 'selected' : ''}} value="Aveiro">Aveiro</option>
                                    <option {{($user->location) == 'Beja' ? 'selected' : ''}} value="Beja">Beja</option>
                                    <option {{($user->location) == 'Braga' ? 'selected' : ''}} value="Braga">Braga</option>
                                    <option {{($user->location) == 'Bragança' ? 'selected' : ''}} value="Bragança">Bragança</option>
                                    <option {{($user->location) == 'Castelo Branco' ? 'selected' : ''}} value="Castelo Branco">Castelo Branco</option>
                                    <option {{($user->location) == 'Coimbra' ? 'selected' : ''}} value="Coimbra">Coimbra</option>
                                    <option {{($user->location) == 'Evora' ? 'selected' : ''}} value="Évora">Évora</option>
                                    <option {{($user->location) == 'Faro' ? 'selected' : ''}} value="Faro">Faro</option>
                                    <option {{($user->location) == 'Guarda' ? 'selected' : ''}} value="Guarda">Guarda</option>
                                    <option {{($user->location) == 'Leiria' ? 'selected' : ''}} value="Leiria">Leiria</option>
                                    <option {{($user->location) == 'Lisboa' ? 'selected' : ''}} value="Lisboa">Lisboa</option>
                                    <option {{($user->location) == 'Portalegre' ? 'selected' : ''}} value="Portalegre">Portalegre</option>
                                    <option {{($user->location) == 'Porto' ? 'selected' : ''}} value="Porto">Porto</option>
                                    <option {{($user->location) == 'Santarem' ? 'selected' : ''}} value="Santarem">Santarem</option>
                                    <option {{($user->location) == 'Setubal' ? 'selected' : ''}} value="Setubal">Setubal</option>
                                    <option {{($user->location) == 'Viana do Castelo' ? 'selected' : ''}} value="Viana do Castelo">Viana do Castelo</option>
                                    <option {{($user->location) == 'Vila Real' ? 'selected' : ''}} value="Vila Real">Vila Real</option>
                                    <option {{($user->location) == 'Viseu' ? 'selected' : ''}} value="Viseu">Viseu</option>
                                </select>
                                @error('location')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="username" class="col-md-4 col-form-label text-md-end">{{ __('Username') }}</label>

                            <div class="col-md-6">
                                <input id="username" type="text" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ $user->username }}" required autocomplete="username" autofocus>

                                @error('username')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="address" class="col-md-4 col-form-label text-md-end">{{ __('Address') }}</label>

                            <div class="col-md-6">
                                <input id="address" type="text" class="form-control @error('address') is-invalid @enderror" name="address" value="{{ $user->address }}" required autocomplete="address" autofocus>

                                @error('address')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="text" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $user->email }}" required autocomplete="email" autofocus>

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="text" class="form-control @error('password') is-invalid @enderror" name="password" value="{{ $user->password }}" required autocomplete="password" autofocus>

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <input type="hidden" id="user_id" name="user_id" class="form-control @error('user_id') is-invalid @enderror" value="{{ $item->id }}">
                        <input type="hidden" id="item_id" name="item_id" class="form-control @error('item_id') is-invalid @enderror" value="{{ $item->item_id }}">

                        
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