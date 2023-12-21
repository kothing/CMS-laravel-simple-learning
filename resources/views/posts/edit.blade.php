@extends('dashboard.base')

@section('title', 'Edit post')

@section('header')
  @include('dashboard.header')
@stop

@section('navbar')
  @include('dashboard.navbar')
@stop

@section('content')
  <main class="content">

    <h1>Edit post</h1>

    @if ($info = session('info'))
      <div class="alert-success">{{ $info }}</div>
    @endif

    <form class="form" action="/posts/{{ $post->id }}" method="post">

      @csrf
      @method('PUT')

      <label for="post_title">Post title:</label>
      <input id="post_title" name="title" type="text" value="{{ $post->title }}" />

      <label for="post_status">Post status:</label>
      <select id="post_status" name="status" class="form-control">
        <option value="PUBLISHED" {{ $post->status == 'PUBLISHED' ? 'selected' : '' }}>PUBLISHED</option>
        <option value="DRAFT" {{ $post->status == 'DRAFT' ? 'selected' : '' }}>DRAFT</option>
      </select>

      <label for="post_content">Post content:</label>
      <textarea id="post_content" name="content">{{ $post->content }}</textarea>

      <input type="submit" value="Save" />

      <script src="https://cdn.ckeditor.com/ckeditor5/40.1.0/classic/ckeditor.js"></script>
      <script>ClassicEditor.create(document.querySelector('#post_content'))</script>

    </form>

  </main>
@endsection
