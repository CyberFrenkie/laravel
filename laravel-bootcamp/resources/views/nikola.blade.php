@extends('layout')

@section('content')
<nav class="navbar navbar-expand-lg bg-light">
  <div class="container-fluid test">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0 list">
        @foreach( trans('nikola_nav.value.navBtn.btn') as $btn)
        <li class="{{ __('nikola_nav.value.navBtn.textValue.classLi') }}">
            <a href="{{ __('nikola_nav.value.navBtn.textValue.url') }}" class="{{ __('nikola_nav.value.navBtn.textValue.classA') }}">
                {{ $btn }}
            </a> 
        @endforeach  
      </ul>
    </div>
  </div>
</nav>      
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