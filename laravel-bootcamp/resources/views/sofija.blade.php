@extends('layout')

@section('content')
    
    <div class="wrapper">

        <!-- First HW -->

        <h1>{{ __('home.page.persons.0.name') }}</h1>
        <h2>{{ __('sofi.mainTitle') }}</h2>
        <p>{{ __('sofi.mainText') }}</p>

        <h3>{{ __('sofi.content.title') }}</h3>
        @foreach( __('sofi.content.lead') as $lead )
            <p class="main-lead">{{ $lead['text'] }}</p>
        @endforeach

        <h3>{{ __('sofi.contentSca.title') }}</h3>
        @foreach( __('sofi.contentSca.lead') as $lead )
            <p class="main-lead">{{ $lead['text'] }}</p>
        @endforeach

        <a href="{{ __('sofi.button.url') }}" class="{{ __('sofi.button.class') }}">
            {{ __('sofi.button.text') }}
            <a href="{{ __('sofi.button.btn.url') }}" class="{{ __('sofi.button.btn.class') }}">
                {{ __('sofi.button.btn.text') }}
            </a>
        </a>

        <br>
        <br>
        <br>

        <!-- Second HW -->

        @foreach( __('sofi.buttons') as $btn )
            <a href="{{ $btn['url'] }}" class="{{ $btn['class'] }}">
                {{ $btn['text'] }}
                <a href="{{ $btn['btn']['url'] }}" class="{{ $btn['btn']['class'] }}">
                    {{ $btn['btn']['text'] }}
                </a>
            </a>
            <br>
        @endforeach
        
    </div>

@endsection