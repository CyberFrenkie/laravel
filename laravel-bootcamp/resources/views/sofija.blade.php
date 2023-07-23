@extends('layout')

@section('content')
    
    <div class="wrapper">

        <!-- Third HW -->

        <nav class="navbar navbar-expand-lg bg-body-tertiary nav-section">
            <div class="container nav-box">
                <a href="#" class="navbar-brand"><img src="images/logo.png" class="img-fluid"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse nav-container" id="navbarNavDropdown">
                    <ul class="navbar-nav">
                        @foreach( __('sofi.navButtons') as $btn )
                            <li class="{{ $btn['class'] }}">
                                <a href="{{ $btn['button']['url'] }}" class="{{ $btn['button']['class'] }}">
                                    {{ $btn['button']['text'] }}
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </nav>

        <!-- First HW -->

        <h1>{{ __('home.page.persons.0.name') }}</h1>

        <br>

        <h2>{{ __('sofi.mainTitle') }}</h2>
        <p>{{ __('sofi.mainText') }}</p>

        <h3>{{ __('sofi.content.title') }}</h3>
        @foreach( __('sofi.content.lead') as $lead )
            <p class="main-lead">{{ $lead['text'] }}</p>
        @endforeach

        <h3>{{ __('sofi.content2.title') }}</h3>
        @foreach( __('sofi.content2.lead') as $lead )
            <p class="main-lead">{{ $lead['text'] }}</p>
        @endforeach

        <a href="{{ __('sofi.button.url') }}" class="{{ __('sofi.button.class') }}">
            {{ __('sofi.button.text') }}
            <a href="{{ __('sofi.button.btn.url') }}" class="{{ __('sofi.button.btn.class') }}">
                {{ __('sofi.button.btn.text') }}
            </a>
        </a>

        <!-- Second HW -->

        <h3>{{ __('sofi.content3.title') }}</h3>
        <p>{!! __('sofi.content3.lead') !!}</p>

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