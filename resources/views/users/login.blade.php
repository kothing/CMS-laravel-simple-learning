@extends('dashboard.base')

@section('title', 'Log in')

@section('content')
  <main class="content">

    <div class="vcenter">
      <div class="login-box">

        <h1>Log in</h1>

        @if ($info = session('info'))
          <div class="alert-success">{{ $info }}</div>
        @endif

        <form method="post" action="/users/authenticate">

          @csrf

          <label for="username" class="visually-hidden">Username: *</label>
          <input id="username" type="text" name="name" placeholder="Your username" />

          <label for="password" class="visually-hidden">Password: *</label>
          <input id="password" type="password" name="password" placeholder="Your password" />

          <input type="hidden" id="post" name="post" />

          <input type="submit" value="Log in" />

        </form>

        <script>
          const url = window.location.href;
          const urlParams = new URL(url).searchParams;
          const post = urlParams.get('post');
          document.getElementById("post").value = post;
        </script>

      </div>
    </div>

  </main>
@endsection
