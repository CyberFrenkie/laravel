@extends('layout')

@section('content')
    
    <div class="wrapper">

        <h1>{{ trans('home.page.persons.0.name') }}</h1>
        <h2>{{ trans('home.mainTitle') }}</h2>
        <p>{{ trans('home.mainText') }}</p>

        <h3>{{ trans('home.content.title') }}</h3>
        @foreach( trans('home.content.lead') as $lead )
            <p class="main-lead">{{ $lead['text'] }}</p>
        @endforeach

        <h3>{{ trans('home.contentSca.title') }}</h3>
        @foreach( trans('home.contentSca.lead') as $lead )
            <p class="main-lead">{{ $lead['text'] }}</p>
        @endforeach

        <a href="{{ trans('home.button.url') }}" class="{{ trans('home.button.class') }}">
            {{ trans('home.button.text') }}
            <a href="{{ trans('home.btn.url') }}" class="{{ trans('home.btn.class') }}">{{ trans('home.btn.text') }}</a>
        </a>
    </div>

@endsection

<?php

return[

    'mainTitle' => 'Why Laravel?',

    'mainText' => 'There are a variety of tools and frameworks available to you when building a web application. However, we believe Laravel is the best choice for building modern, full-stack web applications.',

    'content' => [
        'title' => 'A Progressive Framework',

        'lead' => [
            [
                'text' => 'We like to call Laravel a "progressive" framework. By that, we mean that Laravel grows with you. If you\'re just taking your first steps into web development, Laravel\'s vast library of documentation, guides, and video tutorials will help you learn the ropes without becoming overwhelmed.',
            ],
            [
                'text' => 'If you\'re a senior developer, Laravel gives you robust tools for dependency injection, unit testing, queues, real-time events, and more. Laravel is fine-tuned for building professional web applications and ready to handle enterprise work loads.',
            ],
        ],
    ];

    'contentSca' => [
        'title' => 'A Scalable Framework',

        'lead' => [
            [
                'text' => 'Laravel is incredibly scalable. Thanks to the scaling-friendly nature of PHP and Laravel\'s built-in support for fast, distributed cache systems like Redis, horizontal scaling with Laravel is a breeze. In fact, Laravel applications have been easily scaled to handle hundreds of millions of requests per month.',
            ],
            [
                'text' => 'Need extreme scaling? Platforms like Laravel Vapor allow you to run your Laravel application at nearly limitless scale on AWS\'s latest serverless technology.',
            ],
        ],
    ];

    'button' => [
        'url' => '#',
        'class' => 'button',
        'text' => 'Click me',

        'btn' => [
            'url' => '#',
            'class' => 'btn',
            'text' => 'Read more',
        ],
    ], 

];

?>