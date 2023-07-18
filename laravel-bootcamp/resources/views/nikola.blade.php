@extends('layout')

@section('content')
    
    <div class="wrapper">
        <h1>{!! trans('nikola.content1.title') !!}</h1>
        @foreach (trans('nikola.content1.paragraphs') as $subtitles)
            <p>{{ $subtitles['subtitle']}}</p>
        @endforeach
        <h1>{{ trans('nikola.content2.title') }}</h1>
        @foreach (trans('nikola.content2.paragraphs') as $subtitles)
              <p>{!! $subtitles['subtitle'] !!}</p>
        @endforeach
        <a href="{{ trans('nikola_button.button1.url') }}" target="{{trans('nikola_button.button1.target')}}" class="{{trans('nikola_button.button2.class')}}" >{{trans('nikola_button.button1.text')}}</a>
        <a href="{{ trans('nikola_button.button2.url') }}" target="{{trans('nikola_button.button2.target')}}" class="{{trans('nikola_button.button1.class')}}" >{{trans('nikola_button.button2.text')}}</a>
        <br>
        {{-- actually foreach the buttons --}}
            @foreach( trans('nikola_button') as $buttons) 
                <a href="{{ $buttons['url'] }} " target = " {{ $buttons['target'] }}" class = "{{ $buttons['class'] }}">{{ $buttons['text'] }}</a>
            @endforeach 
        {{-- actually foreach the buttons --}} 
    </div>

@endsection