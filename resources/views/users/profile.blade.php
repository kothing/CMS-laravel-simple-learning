@extends('dashboard.base')

@section('title', 'User profile')

@section('header')
  @include('dashboard.header')
@stop

@section('navbar')
  @include('dashboard.navbar')
@stop

@section('content')
  <main class="content">

    <h1>My profile</h1>

    @if ($info = session('info'))
      <div class="alert-success">{{ $info }}</div>
    @endif

    <form class="form" method="post" action="/users/{{$user->id}}">

      @csrf
      @method('PUT')

      <label for="username">User name:</label>
      <input id="username" name="name" type="text" value="{{ $user->name }}" class="form-control" />

      <label for="firstname">First name:</label>
      <input id="firstname" name="firstname" type="text" value="{{ $user->firstname }}" class="form-control" />

      <label for="lastname">Last name:</label>
      <input id="lastname" name="lastname" type="text" value="{{ $user->lastname }}" class="form-control" />

      <label for="email">E-mail:</label>
      <input id="email" name="email" type="email" value="{{ $user->email }}" class="form-control" />

      <label for="bio">Bio:</label>
      <textarea id="bio" name="bio" class="form-control">{{ $user->bio }}</textarea>

      <input type="submit" value="Save changes" />

    </form>

  </main>
@endsection
