@extends('layout')

@section('content')
    
    <div class="wrapper">
    <div>
    @foreach(range(1, 4) as $i)
        <h2>{{ __('herotitles.herotitle'.$i) }}</h2>
        <p>{{ __('herotexts.herotext'.$i) }}</p>
    @endforeach
</div>
<div>
            <a href="{{ __('buttons.outer_button.url') }}" class="outer-button" target="{{ __('buttons.outer_button.target') }}">{{ __('buttons.outer_button.text') }}</a>
            <br>
            <a href="{{ __('buttons.inner_button.url') }}" class="inner-button" target="{{ __('buttons.inner_button.target') }}">{{ __('buttons.inner_button.text') }}</a>
        </div>
    </div>



@endsection