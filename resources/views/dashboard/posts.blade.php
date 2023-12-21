@extends('dashboard.base')

@section('title', 'Posts')

@section('header')
  @include('dashboard.header')
@stop

@section('navbar')
  @include('dashboard.navbar')
@stop

@section('content')
  <main class="content">

    <h1>Posts</h1>

    @if ($info = session('info'))
      <div class="alert-success">{{ $info }}</div>
    @endif

    <ul class="posts">
      @unless(count($posts) == 0)
      @foreach ($posts as $post)

        <li class="post-entry">
          <div class="row">
            <h3><a href="/{{ $post->slug }}">{{ $post->title }}</a></h3>
            <span>{{ $post->visits_count }} views</span>
          </div>
          <div class="row">
            <ul class="post-entry-menu">
              <li>
                <a href="/dashboard/post/edit/{{ $post->id }}" class="btn-edit">Edit</a>
              </li>
              <li>
                <form class="form_delete" method="POST" action="/posts/{{ $post->id }}">
                  @csrf
                  @method('DELETE')
                  <input type="hidden" name="_method" value="DELETE" />
                  <!-- <input type="hidden" name="_token" value="{{ csrf_token() }}" /> -->
                  <a href="/dashboard/post/delete/{{ $post->id }}" class="btn-delete" onclick="event.target.parentNode.submit(); return false;">Delete</a>
                </form>
              </li>
            </ul>
            <time>{{ $post->created_at }}</time>
          </div>
        </li>

      @endforeach

    </ul>

    @else
      <div class="alert-success">No posts found</div>
    @endunless

    <a class="button" href="/dashboard/post/create">Add new post</a>

  </main>
@endsection
