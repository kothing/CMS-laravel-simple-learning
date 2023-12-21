@extends('posts.base')

@section('sidebar')
  <aside class="sidebar">

    <header class="aboutMe">
      <img class="aboutMe_avatar" src="https://wowthemesnet.github.io/vuepress-theme-mediumish/assets/img/avatar.png" alt="" />
      <h1 class="aboutMe_fullname"><a href="/blog">John Smith</a></h1>
      <p class="aboutMe_desc">Laravel Developer</p>
      <p class="aboutMe_tags">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quisque id diam vel quam. Sit amet purus gravida quis blandit turpis cursus. Tempus imperdiet nulla malesuada pellentesque. Pretium fusce id velit ut. Duis at tellus at urna condimentum mattis pellentesque. Donec enim diam vulputate ut pharetra sit. Fusce ut placerat orci nulla pellentesque dignissim enim sit amet.</p>
    </header>

    <article class="mainNav">
      <div class="wrapper">
        <h6 class="mainNav_header">Last posts</h6>
        <nav>
          <ul class="mainNav_ul">
            <li class="mainNav_item"><a href="/">All posts</a></li>
            @foreach ($posts as $post)
              <li class="mainNav_item">
                <a href="/{{ $post->slug }}">{{ $post->title }}</a>
              </li>
            @endforeach
          </ul>
        </nav>
      </div>
    </article>

  </aside>
@endsection
