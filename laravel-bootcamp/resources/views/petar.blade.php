@extends('layout')

@section('content')
    
<div class="wrapper">
    <!-- 3rd Homework -->
    <div class="pre-header">
        <!-- dodao sam contact_tel -->
        <a href="{{ __('buttons.pre-headerContact.contact_tel.url') }}" class="{{ __('buttons.pre-headerContact.contact_tel.type') }} phone">{{ __('buttons.pre-headerContact.contact_tel.text') }}</a>
        <!-- dodao sam contact_mail -->
        <a href="{{ __('buttons.pre-headerContact.contact_mail.url') }}" class="{{ __('buttons.pre-headerContact.contact_mail.type') }} mail">{{ __('buttons.pre-headerContact.contact_mail.text') }}</a>
    </div>
    <header class="header">
        <div class="nav">
            <div class="logo">
                <img src="#" alt="PlaceHolder">
            </div>
            @foreach ( __('buttons.items') as $item)
                <a href="{{ $item['url'] }}" class="{{ $item['class'] }}">{{ $item['text'] }}</a>
            @endforeach
        </div>
    </div> 
</header>

@endsection

<!-- -->