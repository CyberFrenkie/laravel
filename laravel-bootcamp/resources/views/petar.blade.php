@extends('layout')

@section('content')
    
<div class="wrapper">
    <!-- 3rd Homework -->
    <div class="pre-header">
    @foreach( __('buttons.pre-headerContact') as $preheader)
    <ul>
        <li class="list">
            <a href="{{ $preheader['url'] }}" class="{{ $preheader['type'] }}">{{ $preheader['text'] }}</a>
        </li>
    </ul>
    @endforeach 
    </div>
    <div class="header">
        <div class="nav">
            <div class="logo">
                <a href="#">
                    <img src="img/logo-removebg-preview.png" alt="Logo" class="logo-img">
                </a>
            </div>
            @foreach ( __('buttons.items') as $item)
            <ul>
                <li class="list">
                    <a href="{{ $item['url'] }}" class="{{ $item['class'] }}">{{ $item['text'] }}</a>
                </li>
            </ul>
            @endforeach
        </div>
    </div> 
</div>

@endsection

<!-- -->