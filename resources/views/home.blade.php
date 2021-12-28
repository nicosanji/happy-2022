@extends("layouts.default")

@section('page_title', 'HOME Capodanno')

@section('content')
    <div id="homepage" class="d-flex justify-content-center align-items-center">
        <div class="container">
            <h1 class="text-center pb-4 mb-0">Menù di Capodanno</h1>
            <div class="d-flex">
                <a class="rounded-circle d-flex justify-content-center align-items-center m-auto" href="menu"><i
                        class="fas fa-utensils"></i></a>
                <a class="rounded-circle d-flex justify-content-center align-items-center m-auto" href="contact"><i
                        class="fas fa-phone"></i></a>
            </div>
        </div>
    </div>
@endsection
