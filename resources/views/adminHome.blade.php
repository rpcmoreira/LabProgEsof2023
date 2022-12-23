@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
            @endif
        </div>
    </div>
</div>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>
                <div class="card-body">
                    <h5>Welcome {{ Auth::user()->name }}!</h5>

                    @if(count($data) == 0)
                    You do not have any item listed for now!
                    @else
                    Here are your listings:
                    <table class='table table-responsive-sm table-bordered align-center'>
                        <tr class='bg-primary text-white'>
                            <th class='text-center'>Name</th>
                            <th class='text-center'>Category</th>
                            <th class='text-center'>Price</th>
                        </tr>
                        @foreach($data as $d)
                        <tr>
                            <td class='text-center'>{{ $d->name }}</td>
                            <td class='text-center'>{{ $d->category }}</td>
                            <td class='text-center'>{{ $d->price }}€</td>
                        </tr>
                        @endforeach
                    </table>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection