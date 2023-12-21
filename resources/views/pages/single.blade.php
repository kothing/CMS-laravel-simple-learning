@extends('pages.base')

@section('title', $page->title)

@section('content')
  <main class="wrapper">
    <article class="post">
      <h1 class="post__heading">{{ $page->title }}</h1>
      <div class="post__content">{!! $page->content !!}</div>
    </article>
  </main>
@endsection
