@extends('layouts.app')

@section('content')


<div class="album py-5 bg-light">
    <div class="container">

        <div class="row">
            <div class="col-12 col-sm-4">
                <div class="list-group">
                    <a href="#" class="list-group-item list-group-item-action active">
                        Painel
                    </a>
                    <a href="#!" class="list-group-item list-group-item-action">Detalhes da conta</a>
                    <a href="#!" class="list-group-item list-group-item-action">Histórico de pedidos</a>
                    <a href="#!" class="list-group-item list-group-item-action">Sair</a>
                </div>
            </div>
            <div class="col-12 col-sm-8">

                <h2>Seus veículos a venda</h2>
                <hr />

                @if (count($user->car) == 0)
                <h5 class="text-muted mt-2">Você não possui veículos a venda, <a href="#!">Cadastre agora mesmo!</a>
                </h5>
                @else
                @foreach ($user->car as $cars)
                <a class="text-decoration-none text-body" href="{{ route('veiculo-detalhes', ['id' => $cars->id]) }}">
                    <div class="card lista-card mb-3">
                        <div class="row no-gutters">
                            <div class="col-md-4">
                                <img src="{{ $cars->carPhoto->first()->path }}" class="card-img rounded-0" />
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-12 d-flex justify-content-between">
                                            <h5 class="card-title">{{ $cars->brand }} {{ $cars->model }}
                                                {{ $cars->version }}
                                            </h5>
                                            <h5>R$ {{ number_format($cars->price, 0, ',', '.') }}</h5>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <span class="mr-3">{{ $cars->year_fab }}/{{ $cars->year_model }}</span>
                                            <span class="mr-3">{{ number_format($cars->km, 0, ',', '.') }} Km</span>
                                            <span>Automático</span>
                                        </div>
                                    </div>
                                    <p class="mt-2"><small class="card-text">ABS, AIR BAGS 6, ALARME, AR CONDICIONADO,
                                            AR
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
</div>

@endsection

@push('scripts')

<script>

</script>

@endpush
