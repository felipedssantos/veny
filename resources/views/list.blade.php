@extends('layouts.app')

@section('content')

<div class="container mt-4">
    <div class="row">
        <div class="col-12">
            <h3>Resultados da busca</h3>
            <hr />
        </div>
    </div>
    <div class="row">
        <div class="col-12 col-sm-4">
            <form action="#!">
                <div class="form-group">
                    <input type="text" class="form-control form-control-lg" placeholder="Buscar">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control form-control-lg" placeholder="Buscar">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control form-control-lg" placeholder="Buscar">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control form-control-lg" placeholder="Buscar">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control form-control-lg" placeholder="Buscar">
                </div>

            </form>
        </div>

        <div class="col-12 col-sm-8">

            @if (count($cars) == 0)
            <h4 class="text-center text-muted mt-5">Oops... Não encontramos nenhum resultado :'(</h4>
            @else
            @foreach ($cars as $car)
            <a class="text-decoration-none text-body" href="{{ route('veiculo-detalhes', ['id' => $car->id]) }}">
                <div class="card lista-card mb-3">
                    <div class="row no-gutters">
                        <div class="col-md-4">
                            <img src="{{ $car->carPhoto->first()->path }}" class="card-img rounded-0" />
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-12 d-flex justify-content-between">
                                        <h5 class="card-title">{{ $car->brand }} {{ $car->model }} {{ $car->version }}
                                        </h5>
                                        <h5>R$ {{ number_format($car->price, 0, ',', '.') }}</h5>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <span class="mr-3">{{ $car->year_fab }}/{{ $car->year_model }}</span>
                                        <span class="mr-3">{{ number_format($car->km, 0, ',', '.') }} Km</span>
                                        <span>Automático</span>
                                    </div>
                                </div>
                                <p class="mt-2"><small class="card-text">ABS, AIR BAGS 6, ALARME, AR CONDICIONADO, AR
                                        QUENTE
                                        ...</small></p>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
            @endforeach
            @endif


        </div>
    </div>
</div>

@endsection

@push('scripts')

<script>

</script>

@endpush
