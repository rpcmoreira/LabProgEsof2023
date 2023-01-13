@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Support') }}</div>

                <div class="card-body">
                    {{ __('In case you need support or find some bugs on the website,
                        we would appreciate if you could send us an email at support@sell.me or
                        give us a call at +351 999999999.') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
