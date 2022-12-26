@extends('layouts.app')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">item()->name</div>
                <div class="card-body">
                    <table class='table table-responsive-sm table-bordered align-center'>
                        <tr class='bg-primary text-white'>
                            <th class='text-center'>Category</th>
                            <th class='text-center'>Price</th>
                        </tr>
                        @foreach($data as $d)
                        <tr>
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