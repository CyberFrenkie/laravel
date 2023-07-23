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

<!-- 3rd Homework -->
<div class="pre-header">
    <!-- dodao sam contact_tel -->
    <a href="{{ __('navbar.pre-headerContact.contact_tel.url') }}" class="{{ __('navbar.pre-headerContact.contact_tel.type') }} phone">{{ __('navbar.pre-headerContact.contact_tel.text') }}</a>
    <!-- dodao sam contact_mail -->
    <a href="{{ __('navbar.pre-headerContact.contact_mail.url') }}" class="{{ __('navbar.pre-headerContact.contact_mail.type') }} mail">{{ __('navbar.pre-headerContact.contact_mail.text') }}</a>
</div>
<header class="header">
    <div class="nav">
        <div class="logo">
            <img src="#" alt="PlaceHolder">
        </div>
        @foreach ( __('navbar.items') as $item)
            <a href="{{ $item['url'] }}" class="{{ $item['class'] }}">{{ $item['text'] }}</a>
        @endforeach

    </div>
</header>

@endsection

<!-- -->