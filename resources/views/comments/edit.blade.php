@extends('dashboard.base')

@section('title', 'Edit comment')

@section('header')
  @include('dashboard.header')
@stop

@section('navbar')
  @include('dashboard.navbar')
@stop

@section('content')
  <main class="content">

    <h1>Edit comment</h1>

    @if ($info = session('info'))
      <div class="alert-success">{{ $info }}</div>
    @endif

    <form class="form" method="post" action="/comment/update/{{$comment->id}}">

      @csrf
      @method('PUT')

      <label for="comment" class="visually-hidden">Comment:</label>
      <textarea id="comment" name="comment" type="text" class="form-control" rows="8">{{ $comment->content }}</textarea>

      <input type="submit" value="Save changes" />

    </form>

  </main>
@endsection
