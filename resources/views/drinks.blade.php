@extends("layouts.default")

@section('page_title', 'DRINKS Capodanno')

@section('content')
    <div id="drinks">
        <div class="container py-4">
            <div class="d-flex justify-content-between pb-4">
                <a class="rounded-circle d-flex justify-content-center align-items-center" href="/"><i
                        class="fas fa-home"></i></a>
                <a class="rounded-circle d-flex justify-content-center align-items-center" href="menu"><i
                        class="fas fa-utensils"></i></a>
            </div>
            <div class="row gap-4">
                {{-- vini --}}
                <div class="col rounded position-relative">
                    <div class="h-100 w-100 d-flex justify-content-center align-items-center">
                        <i class="fas fa-wine-glass-alt"></i>
                    </div>
                    {{-- overlay --}}
                    <div class="overlay position-absolute top-50 start-50 translate-middle rounded d-none">
                        <ul class="text-center ps-0 mb-0">
                            <li class="fw-bold">Vini Rossi</li>
                            <li>Chianti Classico</li>
                            <li>Valpolicella Ripasso</li>
                            <li class="fw-bold">Vini Bianchi</li>
                            <li>Vermentino</li>
                            <li>Falanghina</li>
                        </ul>
                    </div>
                </div>
                {{-- birre --}}
                <div class="col rounded position-relative">
                    <div class="h-100 w-100 d-flex justify-content-center align-items-center">
                        <i class="fas fa-beer"></i>
                    </div>
                    {{-- overlay --}}
                    <div class="overlay position-absolute top-50 start-50 translate-middle rounded d-none">
                        <ul class="text-center ps-0 mb-0">
                            <li class="fw-bold">Birra Chiara</li>
                            <li>BitBurger</li>
                            <li class="fw-bold">Birra Rossa</li>
                            <li>Baladin Amber</li>
                            <li class="fw-bold">Birra Ipa</li>
                            <li>SpaceMan</li>
                        </ul>
                    </div>
                </div>
                {{-- altro --}}
                <div class="col rounded position-relative">
                    <div class="h-100 w-100 d-flex justify-content-center align-items-center">
                        <i class="fas fa-cocktail"></i>
                    </div>
                    {{-- overlay --}}
                    <div class="overlay position-absolute top-50 start-50 translate-middle rounded d-none">
                        <ul class="text-center ps-0 mb-0">
                            <li class="fw-bold">Bollicine</li>
                            <li>Brut Moncuit-Delos</li>
                            <li>Cru Larnaudie Hirault</li>
                            <li class="fw-bold">Digestivi</li>
                            <li>Genepy</li>
                            <li>Grappa Barrique</li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
