@extends('layouts.app')

@section('content')
<section class="jumbotron text-center rounded-0">
    <div class="container">
        <h1 class="jumbotron-heading">Veny</h1>
        <p class="lead">Compre e venda seu veículo no melhor site do Brasil.</p>
        <p>
            <form action="{{ route('lista-veiculos') }}" id="buscar-home" method="GET" class="mt-5">
                @csrf
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-10">
                        <div class="form-group">
                            <input type="text" name="buscar" class="form-control form-control-lg"
                                placeholder="Buscar veículo" autofocus />
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-2">
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-lg px-5">Buscar</button>
                        </div>
                    </div>
                </div>

            </form>
        </p>
    </div>
</section>

<div class="album py-5 bg-light">
    <div class="container">

        <div class="row">
            @foreach ($cars as $car)
            <div class="col-md-4">
                <a class="text-decoration-none text-body" href="{{ route('veiculo-detalhes', ['id' => $car->id]) }}">
                    <div class="card mb-4 shadow-sm">
                        <img src="{{ $car->carPhoto->first()->path }}" class="card-img-top home-destaque">
                        <div class="card-body">
                            <h5 class="card-text">{{ $car->brand }} {{ $car->model }}</h5>
                            <p class="card-text text-muted">{{ $car->version }}</p>

                            <h4>R$ {{ number_format($car->price, 0, ',', '.') }}</h4>
                            <div class="d-flex justify-content-between align-items-center">
                                <p class="text-muted">{{ $car->year_fab }}/{{ $car->year_model }}</p>
                                <p class="text-muted">{{ number_format($car->km, 0, ',', '.') }} Km</p>
                            </div>
                            <small class="text-muted">Belo Horizonte - MG</small>
                        </div>
                    </div>
                </a>
            </div>
            @endforeach


        </div>
    </div>
</div>

@endsection

@push('scripts')

<script>

</script>

@endpush
