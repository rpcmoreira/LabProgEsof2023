@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Edit Listing') }}</div>

                @php $id = Auth::id(); @endphp

                <div class="card-body">
                    <form method="POST" action="{{ url('/edit') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $item->name }}" required autocomplete="name" autofocus>

                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3 ">
                            <label for="category" class="col-md-4 col-form-label text-md-end">{{ __('Category') }}</label>

                            <div class="col-md-6">
                                <select id="category" name="category" class="form-select form-control @error('category') is-invalid @enderror" autofocus>

                                    <option {{($item->category) == 'Art' ? 'selected' : ''}} value="Art">Art</option>
                                    <option {{($item->category) == 'Collectibles' ? 'selected' : ''}} value="Collectibles">Collectibles</option>
                                    <option {{($item->category) == 'Electronics' ? 'selected' : ''}} value="Electronics">Electronics</option>
                                    <option {{($item->category) == 'Fashion' ? 'selected' : ''}} value="Fashion">Fashion</option>
                                    <option {{($item->category) == 'Home and Garden' ? 'selected' : ''}} value="Home and Garden">Home and Garden</option>
                                    <option {{($item->category) == 'Music' ? 'selected' : ''}} value="Music">Music</option>
                                    <option {{($item->category) == 'Office Supplies' ? 'selected' : ''}} value="Office Supplies">Office Supplies</option>
                                    <option {{($item->category) == 'Sports' ? 'selected' : ''}} value="Sports">Sports</option>
                                    <option {{($item->category) == 'Others' ? 'selected' : ''}} value="Others">Others</option>
                                </select>
                                @error('category')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="price" class="col-md-4 col-form-label text-md-end">{{ __('Price') }}</label>

                            <div class="col-md-6">
                                <input id="price" type="number" step="0.01" class="form-control @error('price') is-invalid @enderror" name="price" value="{{ $item->price }}" required autocomplete="price">

                                @error('price')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
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