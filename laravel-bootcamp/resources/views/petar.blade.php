@extends('layout')

@section('content')
    
<body>
<div class="pre-header">
        <!-- dodao sam contact_tel -->
        <a href="{{ __('navbar.pre-headerContact.contact_tel.url') }}" class="{{ __('navbar.pre-headerContact.contact_tel.type') }} mail">{{ __('navbar.pre-headerContact.contact_tel.text') }}</a>
        <!-- dodao sam contact_mail -->
        <a href="{{ __('navbar.pre-headerContact.contact_mail.url') }}" class="{{ __('navbar.pre-headerContact.contact_mail.type') }} mail">{{ __('navbar.pre-headerContact.contact_mail.text') }}</a>
    </div>
    <header>
        <div class="nav">
            <div class="logo">
                <a href="#">
                <img src="img/logo-removebg-preview.png" alt="logo" class="logo-img">
                </a>
            </div>
            <div class="nav_buttons">
                @foreach ( __('navbar.items') as $item)
                <a href="{{ $item['url'] }}" class="{{ $item['class'] }}">{{ $item['text'] }}</a>
                @endforeach
            </div>
        </div>
    </header>
</body>

@endsection

<!-- -->