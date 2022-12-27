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

                    @foreach($dist as $r)
                    @if(isset($_GET['localization']) && $_GET['localization']==$r)
                    <option value="{{$r}}" selected>{{$r}}</option>
                    @else
                    <option value="{{ $r }}">{{ $r }}</option>
                    @endif
                    @endforeach
                </select>
            </div>
            <br>
            <div class="text-justified">
                @php $cat=array('Art','Collectibles','Electronics','Fashion','Home and Garden','Music','Office Supplies','Sports','Others'); @endphp
                <select name="category" id="category" form="form">
                    <option value="" selected disabled hidden>Category</option>
                    @foreach($cat as $c)
                    @if(isset($_GET['category']) && $_GET['category']==$c)
                    <option value="{{$c}}" selected>{{$c}}</option>
                    @else
                    <option value="{{ $c }}">{{ $c }}</option>
                    @endif
                    @endforeach
                </select>
            </div>
            <br>
            <div class="text-justified">
                <button type="submit" class="btn btn-primary">
                    {{ __('Search') }}
                </button>
        </form>
        <form method="GET" id="form" action="{{ route('products') }}">
            @php unset($_GET['localization']); isset($_GET['category']); @endphp
            <button type="submit" class="btn btn-primary">
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
                                    <form method="POST" action="/show">
                                        @csrf 
                    <button type="submit" class="btn btn-primary" name="item_id" value="{{$user[$numcand]->item_id}}">Show</button>
                    </form>
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