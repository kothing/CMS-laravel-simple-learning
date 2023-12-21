@extends('posts.base')

@section('title', 'Posts')

@section('sidebar')
  @include('posts.sidebar')
@stop

@section('content')
  <main class="mainContent">
    <div class="wrapper">

      @if ($posts)
        <ul class="postlist">
          @foreach ($posts as $post)
            <li class="postlist__item">
              <time>{{ $post->created_at->format('Y-m-d') }}</time>
              <h2><a href="{{ $post->slug }}">{{ $post->title }}</a></h2>
            </li>
          @endforeach
        </ul>
      @else
        <p>NO POSTS YET</p>
      @endif

    </div>
  </main>
@endsection
