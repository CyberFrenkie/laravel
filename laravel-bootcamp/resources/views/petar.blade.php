@extends('layout')

@section('content')
    
<div class="wrapper">
<<<<<<< HEAD
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
=======
    <div style="background-color:rgba(0, 0, 0, 0.55);">
        <div style=" display:flex;justify-content:center;height:100vh;margin-bottom:25px;margin-top:25px;">
            <video src="{{ asset(trans('gif.rain.path')) }}" controls></video>
        </div>
        <div style="text-align:center;font-size:38px;text-decoration:none;">
            <a href="{{ trans('buttons.gif.url') }}" class="gif" target="{{ trans('buttons.gif.target') }}" style="text-decoration:none;color:black;font-weight:bold;color:rgba(255, 140, 0, 1);">{{ trans('buttons.gif.text') }}</a>
            <br>
            <a href="{{ trans('buttons.drvo.url') }}" class="gif" target="{{ trans('buttons.drvo.target') }}" style="text-decoration:none;color:black;font-weight:bold;color:rgba(255, 140, 0, 1);">{{ trans('buttons.drvo.text') }}</a>
        </div>
        <div style="font-size:30px;text-align:center;color:rgba(255, 190, 0, 1);">
            @foreach(range(1, 2) as $i)
                <p>{{ __('story.content.story'.$i) }}</p>   
            @endforeach
            <img src="uploads/Shaco.jpg">
        </div>
    </div>
>>>>>>> 5b3a82bb222ed239c8a675f4c4affa70d98b2647
</div> 

@endsection

<!-- -->