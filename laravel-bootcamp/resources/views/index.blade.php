@extends('layout')

@section('content')
    
    <div class="wrapper container-xl">
        
        <h1>{{ __('home.page.title') }}</h1>
        
        <p>{{ __('home.page.content') }}</p>

        @foreach(__('home.page.persons') as $person)

            <a class="{{ __('home.page.class') }}" href="{{ $person['url'] }}">{{ $person['name'] }}</a>

        @endforeach


        
    </div>



@endsection