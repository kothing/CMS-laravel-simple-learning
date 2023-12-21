@extends('dashboard.base')

@section('title', 'Add new page')

@section('header')
  @include('dashboard.header')
@stop

@section('navbar')
  @include('dashboard.navbar')
@stop

@section('content')
  <main class="content">

    <h1>Add new page</h1>

    <form class="form" method="post" action="/pages">

      @csrf

      <label for="page_title">Page title:</label>
      <input id="page_title" name="title" type="text" value="" />

      <label for="page_status">Post status:</label>
      <select id="page_status" name="status" class="form-control">
        <option value="PUBLISHED" selected>PUBLISHED</option>
        <option value="DRAFT">DRAFT</option>
      </select>

      <label for="page_content">Page content:</label>
      <textarea id="page_content" name="content"></textarea>

      <input type="submit" value="Add page" />

      <script src="https://cdn.ckeditor.com/ckeditor5/40.1.0/classic/ckeditor.js"></script>
      <script>ClassicEditor.create(document.querySelector('#page_content'))</script>

    </form>

  </main>
@endsection
