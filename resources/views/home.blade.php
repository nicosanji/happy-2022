@php
$home_links = [
    [
        'text' => 'About 2021',
        'link' => 'about_2021',
    ],
    [
        'text' => 'About 2020',
        'link' => 'about_2020',
    ],
];
@endphp


@extends("layouts.default")

@section('page_title', 'Homepage Happy-2022')

@section('content')
    <div id="homepage" class="position-relative">
        <h1 class="position-absolute top-50 start-50 translate-middle">2022</h1>
        <ul>
            @foreach ($home_links as $element)
                <li>
                    <a href="{{ $element['link'] }}">{{ $element['text'] }}</a>
                </li>
            @endforeach
        </ul>
    </div>
@endsection
