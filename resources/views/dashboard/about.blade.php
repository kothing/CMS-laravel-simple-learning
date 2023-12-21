@extends('dashboard.base')

@section('title', 'About MicroCMS')

@section('header')
  @include('dashboard.header')
@stop

@section('navbar')
  @include('dashboard.navbar')
@stop

@section('content')
  <main class="content">

    <h1>About CMS</h1>

    <p>MicroCMS (Version <b>0.1.0</b>)</p>

    <p>This content management system (CMS) is written in Laravel 10 by <a href="mailto:jakub.pacanowski@gmail.com">Jakub Pacanowski</a></p>

    <p><b>Why is MicroCMS awesome?</b> MicroCMS is absolutely free and lightweight. Don't hesitate and feel free to do whatever you want with this awesome CMS.
      It won’t be big and professional like WordPress. The main reason I started working on this CMS
      was to create a very lightweight CMS.</p>

    <p><b>Do you like this awesome CMS?</b> Send me any feedback on things you like or dislike in this CMS.
      I’d like to know what features most people would want. Any suggestions are welcome.</p>

    <p>Big thanks go to <a href="mailto:bartlomiej.malanowski@hotmail.com">Bartłomiej Malanowski</a>
      for his great ideas and suggestions, his invaluable help in code reviews as well as for serving
      me his server for testing purposes. Thank you, man!</p>

    <p>Now go and create you first great posts in this awesome CMS... Good luck.<br/>You still here...?</p>

    <p>
      <div>You will find the latest version of MicroCMS on Github:</div>
      <a href="https://github.com/jpacanowski/MicroCMS-laravel">https://github.com/jpacanowski/MicroCMS-laravel</a>
    </p>

  </main>
@endsection
