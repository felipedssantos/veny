@extends('layouts.app')

@section('content')
<div class="owl-carousel owl-theme">
    @foreach ($car->carPhoto as $photo)
    <div class="item">
        <img src="{{ $photo->path }}" />
    </div>
    @endforeach
</div>

<div class="container mt-5">
    <div class="row">
        <div class="col-12 col-sm-8">
            <div class="row">
                <div class="col-12">
                    <h3>{{ $car->brand }} {{ $car->model }}</h3>
                    <h4 class="text-muted"><small>{{ $car->version }}</small></h4>
                </div>
            </div>

            <div class="row mt-3">
                <div class="col-6 col-sm-3">
                    <p class="mb-0"><small>Ano</small></p>
                    <p class="font-600">{{ $car->year_fab }}/{{ $car->year_model }}</p>
                </div>
                <div class="col-6 col-sm-3">
                    <p class="mb-0"><small>KM</small></p>
                    <p class="font-600">{{ $car->km }}</p>
                </div>
                <div class="col-6 col-sm-3">
                    <p class="mb-0"><small>Câmbio</small></p>
                    <p class="font-600">Automático</p>
                </div>
                <div class="col-6 col-sm-3">
                    <p class="mb-0"><small>Carroceria</small></p>
                    <p class="font-600">Sedã</p>
                </div>
                <div class="col-6 col-sm-3">
                    <p class="mb-0"><small>Combustível</small></p>
                    <p class="font-600">Flex</p>
                </div>
                <div class="col-6 col-sm-3">
                    <p class="mb-0"><small>Final da placa</small></p>
                    <p class="font-600">2</p>
                </div>
                <div class="col-6 col-sm-3">
                    <p class="mb-0"><small>Cor</small></p>
                    <p class="font-600">Amarelo</p>
                </div>
                <div class="col-6 col-sm-3">
                    <p class="mb-0"><small>Aceita trocas</small></p>
                    <p class="font-600">Não</p>
                </div>
            </div>

            <hr />

            <div class="row">
                <div class="col-12">
                    <p class="mb-0"><small>Sobre o veículo</small></p>
                    <p>{{ $car->desc }}</p>
                </div>
            </div>

            <hr />

            <div class="row mt-3">
                <div class="col-12">
                    <p class="mb-0"><small>Itens do veículo</small></p>
                </div>

                @if ($car->carItem->first()->air_bag == 1)
                <div class="col-6 col-sm-4">
                    <p class="font-600">Air Bag</p>
                </div>
                @endif

                @if ($car->carItem->first()->alarme == 1)
                <div class="col-6 col-sm-4">
                    <p class="font-600">Alarme</p>
                </div>
                @endif

                @if ($car->carItem->first()->ar_condicionado == 1)
                <div class="col-6 col-sm-4">
                    <p class="font-600">Ar condicionado</p>
                </div>
                @endif

                @if ($car->carItem->first()->ar_quente == 1)
                <div class="col-6 col-sm-4">
                    <p class="font-600">Ar quente</p>
                </div>
                @endif

                @if ($car->carItem->first()->banco_regulavel == 1)
                <div class="col-6 col-sm-4">
                    <p class="font-600">Banco regulável</p>
                </div>
                @endif

                @if ($car->carItem->first()->banco_aquecido == 1)
                <div class="col-6 col-sm-4">
                    <p class="font-600">Banco aquecido</p>
                </div>
                @endif

                @if ($car->carItem->first()->banco_couro == 1)
                <div class="col-6 col-sm-4">
                    <p class="font-600">Bancos em couro</p>
                </div>
                @endif

                @if ($car->carItem->first()->blindado == 1)
                <div class="col-6 col-sm-4">
                    <p class="font-600">BLINDADO</p>
                </div>
                @endif

                @if ($car->carItem->first()->capota_maritima == 1)
                <div class="col-6 col-sm-4">
                    <p class="font-600">Capota marítima</p>
                </div>
                @endif

                @if ($car->carItem->first()->mp3 == 1)
                <div class="col-6 col-sm-4">
                    <p class="font-600">MP3</p>
                </div>
                @endif

                @if ($car->carItem->first()->cd_player == 1)
                <div class="col-6 col-sm-4">
                    <p class="font-600">CD Player</p>
                </div>
                @endif

                @if ($car->carItem->first()->comp_bordo == 1)
                <div class="col-6 col-sm-4">
                    <p class="font-600">Computador de bordo</p>
                </div>
                @endif

                @if ($car->carItem->first()->controle_velocidade == 1)
                <div class="col-6 col-sm-4">
                    <p class="font-600">Piloto Automático</p>
                </div>
                @endif

                @if ($car->carItem->first()->controle_travao == 1)
                <div class="col-6 col-sm-4">
                    <p class="font-600">Controle de tração</p>
                </div>
                @endif

                @if ($car->carItem->first()->desembacador_traseiro == 1)
                <div class="col-6 col-sm-4">
                    <p class="font-600">Desembaçador traseiro</p>
                </div>
                @endif

                @if ($car->carItem->first()->direcao_hidraulica == 1)
                <div class="col-6 col-sm-4">
                    <p class="font-600">Direção hidráulica</p>
                </div>
                @endif

                @if ($car->carItem->first()->disqueteira == 1)
                <div class="col-6 col-sm-4">
                    <p class="font-600">Disqueteira</p>
                </div>
                @endif

                @if ($car->carItem->first()->dvd == 1)
                <div class="col-6 col-sm-4">
                    <p class="font-600">DVD Player</p>
                </div>
                @endif

                @if ($car->carItem->first()->encosto_cabeca_traseiro == 1)
                <div class="col-6 col-sm-4">
                    <p class="font-600">Encosto de cabeça traseiro</p>
                </div>
                @endif

                @if ($car->carItem->first()->air_bag == 1)
                <div class="col-6 col-sm-4">
                    <p class="font-600">Air Bag</p>
                </div>
                @endif

                @if ($car->carItem->first()->farol_xenon == 1)
                <div class="col-6 col-sm-4">
                    <p class="font-600">Faróis de xenônio</p>
                </div>
                @endif

                @if ($car->carItem->first()->abs == 1)
                <div class="col-6 col-sm-4">
                    <p class="font-600">Freios ABS</p>
                </div>
                @endif

                @if ($car->carItem->first()->gps == 1)
                <div class="col-6 col-sm-4">
                    <p class="font-600">GPS</p>
                </div>
                @endif

                @if ($car->carItem->first()->limpador_traseiro == 1)
                <div class="col-6 col-sm-4">
                    <p class="font-600">Limpador traseiro</p>
                </div>
                @endif

                @if ($car->carItem->first()->protetor_cacamba == 1)
                <div class="col-6 col-sm-4">
                    <p class="font-600">Protetor de caçamba</p>
                </div>
                @endif

                @if ($car->carItem->first()->radio == 1)
                <div class="col-6 col-sm-4">
                    <p class="font-600">Rádio</p>
                </div>
                @endif

                @if ($car->carItem->first()->toca_fitas == 1)
                <div class="col-6 col-sm-4">
                    <p class="font-600">Toca fitas</p>
                </div>
                @endif

                @if ($car->carItem->first()->retrovisor_fotocromico == 1)
                <div class="col-6 col-sm-4">
                    <p class="font-600">Retrovisor fotocromático</p>
                </div>
                @endif

                @if ($car->carItem->first()->retrovisor_eletrico == 1)
                <div class="col-6 col-sm-4">
                    <p class="font-600">Retrovisor elétrico</p>
                </div>
                @endif

                @if ($car->carItem->first()->air_bag == 1)
                <div class="col-6 col-sm-4">
                    <p class="font-600">Air Bag</p>
                </div>
                @endif

                @if ($car->carItem->first()->rodas_liga == 1)
                <div class="col-6 col-sm-4">
                    <p class="font-600">Rodas de liga leve</p>
                </div>
                @endif

                @if ($car->carItem->first()->sensor_chuva == 1)
                <div class="col-6 col-sm-4">
                    <p class="font-600">Sensor de chuva</p>
                </div>
                @endif

                @if ($car->carItem->first()->sensor_estacionamento == 1)
                <div class="col-6 col-sm-4">
                    <p class="font-600">Sensor de estacionamento</p>
                </div>
                @endif

                @if ($car->carItem->first()->teto_solar == 1)
                <div class="col-6 col-sm-4">
                    <p class="font-600">Teto solar</p>
                </div>
                @endif

                @if ($car->carItem->first()->trava_eletrica == 1)
                <div class="col-6 col-sm-4">
                    <p class="font-600">Trávas elétricas</p>
                </div>
                @endif

                @if ($car->carItem->first()->vidro_eletrico == 1)
                <div class="col-6 col-sm-4">
                    <p class="font-600">Vidros elétricos</p>
                </div>
                @endif

                @if ($car->carItem->first()->volante_regulavel == 1)
                <div class="col-6 col-sm-4">
                    <p class="font-600">Volante regulável</p>
                </div>
                @endif
            </div>

            <hr />

            <div class="row">
                <div class="col-12 mb-3">
                    <p class="mb-0"><small>Dados do vendedor</small></p>
                </div>
                <div class="col-12">
                    <h3 class="text-muted">{{ $car->user->name }}</h3>
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-4">
            <h1>R$ {{ number_format($car->price, 0, ',', '.') }}</h1>
            <hr />
            <p class="mt-4"><small class="text-muted">Envie uma mensagem ao vendedor.</small></p>

            <form action="#!" method="GET">
                @csrf
                <div class="form-group mt-2">
                    <input type="text" class="form-control form-control-lg" placeholder="Nome">
                </div>
                <div class="form-group">
                    <input type="email" class="form-control form-control-lg" placeholder="E-Mail">
                </div>
                <div class="form-group">
                    <input type="tel" class="form-control form-control-lg" placeholder="Telefone">
                </div>
                <div class="form-group">
                    <textarea class="form-control" style="resize: none;" rows="5" placeholder="Mensagem"></textarea>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-lg py-3 btn-block px-5 mt-5">ENVIAR</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection

@push('css')

<link href="{{ url('css/owl.carousel.min.css') }}" rel="stylesheet">
<link href="{{ url('css/owl.theme.default.min.css') }}" rel="stylesheet">

@endpush

@push('scripts')

<script src="{{ url('js/owl.carousel.min.js') }}"></script>

<script>
    $('.owl-carousel').owlCarousel({
        loop: true,
        margin: 0,
        nav: true,
        dots: false,
        lazyLoad: true,
        items: 3

    })

</script>

@endpush
