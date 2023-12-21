@extends('dashboard.base')

@section('title', 'Edit page')

@section('header')
  @include('dashboard.header')
@stop

@section('navbar')
  @include('dashboard.navbar')
@stop

@section('content')
  <main class="content">

    <h1>Edit page</h1>

    @if ($info = session('info'))
      <div class="alert-success">{{ $info }}</div>
    @endif

    <form class="form" action="/pages/{{ $page->id }}" method="post">

      @csrf
      @method('PUT')

      <label for="page_title">Page title:</label>
      <input id="page_title" name="title" type="text" value="{{ $page->title }}" />

      <label for="page_status">Post status:</label>
      <select id="page_status" name="status" class="form-control">
        <option value="PUBLISHED" {{ $page->status == 'PUBLISHED' ? 'selected' : '' }}>PUBLISHED</option>
        <option value="DRAFT" {{ $page->status == 'DRAFT' ? 'selected' : '' }}>DRAFT</option>
      </select>

      <label for="page_content">Page content:</label>
      <textarea id="page_content" name="content">{{ $page->content }}</textarea>

      <input type="submit" value="Save" />

      <script src="https://cdn.ckeditor.com/ckeditor5/40.1.0/classic/ckeditor.js"></script>
      <script>ClassicEditor.create(document.querySelector('#page_content'))</script>

    </form>

  </main>
@endsection
