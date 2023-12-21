@extends('dashboard.base')

@section('title', 'Settings')

@section('header')
  @include('dashboard.header')
@stop

@section('navbar')
  @include('dashboard.navbar')
@stop

@section('content')
  <main class="content">

    <h1>General settings</h1>

    @if ($info = session('info'))
      <div class="alert-success">{{ $info }}</div>
    @endif

    <form class="form" method="post" action="/settings">

      @csrf
      @method('PUT')

      <label for="site_title">Site title:</label>
      <input id="site_title" name="site_title" type="text" class="form-control" value="{{ $settings->site_title }}" />

      <label for="site_tagline">Site tagline:</label>
      <input id="site_tagline" name="site_tagline" type="text" class="form-control" value="{{ $settings->site_tagline }}" />

      <label for="site_description">Site description:</label>
      <input id="site_description" name="site_description" type="text" class="form-control" value="{{ $settings->site_description }}" />

      <label for="site_keywords">Site keywords:</label>
      <input id="site_keywords" name="site_keywords" type="text" class="form-control" value="{{ $settings->site_keywords }}" />

      <label for="site_url">Site address (URL):</label>
      <input id="site_url" name="site_url" type="url" class="form-control" value="{{ $settings->site_url }}" />

      <label for="posts_per_page">Posts per page:</label>
      <input id="posts_per_page" name="posts_per_page" type="number" class="form-control" value="{{ $settings->posts_per_page }}" />

      <input type="submit" value="Save changes" />

    </form>

  </main>
@endsection
