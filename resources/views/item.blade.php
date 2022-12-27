@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{$user->name}}</div>
                <div class="card-body">
                    <td class='text-center'>Category {{ $user->category }}</td>
                    <td class='text-center'>Item {{ $user->price }}€</td>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection