@extends('layouts.app')

@section('title')
Produtos
@endsection

@section('content')

<div class="row">

    <div class="col-sm-2">

        <h4>Filters</h4>

        <form method="GET" id="form" action="{{ route('products') }}">
            <div class="text-justified">
                @php $dist=array('Aveiro','Beja','Braga','Bragança','Castelo Branco','Coimbra','Évora','Faro','Guarda','Leiria','Lisboa','Portalegre','Porto','Santarém','Setubal','Viana do Castelo','Vila Real','Viseu'); @endphp
                <select name="localization" id="localization" form="form">
                    <option value="" selected disabled hidden>Location</option>
                    @foreach($dist as $d)
                    <option value="{{ $d }}">{{ $d }}</option>
                    @endforeach
                </select>
            </div>
            <br>
            <div class="text-justified">
                @php $cat=array('Art','Collectibles','Electronics','Fashion','Home and Garden','Music','Office Supplies','Sports','Others'); @endphp
                <select name="category" id="category" form="form">
                    <option value="" selected disabled hidden>Category</option>
                    @foreach($cat as $c)
                    <option value="{{ $c }}">{{ $c }}</option>
                    @endforeach
                </select>
            </div>
            <br>
            <div class="text-justified">
                <button type="submit" class="btn btn-primary">
                    {{ __('Search') }}
                </button>
                <button type="submit" class="btn btn-secondary">
                    {{ __('Reset') }}
                </button>
            </div>
        </form>
    </div>


    <div class="col-sm-8">
        <div class="table-responsive">
            <table class="table">
                <tr>
                    @for($numcand=0,$numcell=0; $numcand < count($user) ; $numcand++,$numcell++) @if($numcell==4) </tr>
                <tr>
                    @php $numcell = 0; @endphp
                    @endif
                    <td>
                        <table>
                            <tr>
                                <td class="text-center">
                                    {{ $user[$numcand]->name }}<br>
                                    {{ $user[$numcand]->price }}€<br>
                                </td>

                    </td>
                </tr>
            </table>
            @endfor
            </tr>
            </table>
        </div>
        @forelse($user as $a)
        @empty
        <h3 class="text-center">No Products have been found!</h3>
        @endforelse

        {!! $user->links('pagination::bootstrap-4')!!}
    </div>
</div>
@endsection