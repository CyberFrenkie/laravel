@extends('layout')

@section('content')
    
    <div class="wrapper">

        <h1>{{ trans('home.page.persons.0.name') }}</h1>
        <h2>{{ trans('sofi.mainTitle') }}</h2>
        <p>{{ trans('sofi.mainText') }}</p>

        <h3>{{ trans('sofi.content.title') }}</h3>
        @foreach( trans('sofi.content.lead') as $lead )
            <p class="main-lead">{{ $lead['text'] }}</p>
        @endforeach

        <h3>{{ trans('sofi.contentSca.title') }}</h3>
        @foreach( trans('sofi.contentSca.lead') as $lead )
            <p class="main-lead">{{ $lead['text'] }}</p>
        @endforeach

        <a href="{{ trans('sofi.button.url') }}" class="{{ trans('sofi.button.class') }}">
            {{ trans('sofi.button.text') }}
            <a href="{{ trans('sofi.btn.url') }}" class="{{ trans('sofi.btn.class') }}">{{ trans('sofi.btn.text') }}</a>
        </a>
        
    </div>

@endsection