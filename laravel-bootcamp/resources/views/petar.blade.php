@extends('layout')

@section('content')
    
<div class="wrapper">
    <div style="text-align:center;">
        <h1>{!! trans('buttons.content.title') !!}</h1>
        @foreach(__('buttons.content.text') as $lyrics)
            <p style="font-size:25px;">{{ $lyrics['lyrics'] }}</p>
            <br>
        @endforeach
    </div>
    <div>
        @foreach(__('buttons.content.buttons') as $button)
            <a style="display:flex;justify-content:center;font-size:25px;color:orange;text-decoration:none;" href="{{ $button['url'] }}" target="{{ $button['target'] }}" class="{{ $button['class'] }}">{{ $button['text'] }}</a>
        @endforeach
   </div>
</div>
@endsection

<!-- -->