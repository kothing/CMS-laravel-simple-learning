@extends('dashboard.base')

@section('title', 'Pages')

@section('header')
  @include('dashboard.header')
@stop

@section('navbar')
  @include('dashboard.navbar')
@stop

@section('content')
  <main class="content">

    <h1>Pages</h1>

    @if ($info = session('info'))
      <div class="alert-success">{{ $info }}</div>
    @endif

    <ul class="posts">
      @unless(count($pages) == 0)
      @foreach ($pages as $page)

        <li class="post-entry">
          <div class="row">
            <h3><a href="/page/{{ $page->slug }}">{{ $page->title }}</a></h3>
            <span>{{ $page->visits_count }} views</span>
          </div>
          <div class="row">
            <ul class="post-entry-menu">
              <li>
                <a href="/dashboard/page/edit/{{ $page->id }}" class="btn-edit">Edit</a>
              </li>
              <li>
                <form class="form_delete" method="POST" action="/pages/{{ $page->id }}">
                  @csrf
                  @method('DELETE')
                  <input type="hidden" name="_method" value="DELETE" />
                  <!-- <input type="hidden" name="_token" value="{{ csrf_token() }}" /> -->
                  <a href="/dashboard/page/delete/{{ $page->id }}" class="btn-delete" onclick="event.target.parentNode.submit(); return false;">Delete</a>
                </form>
              </li>
            </ul>
            <time>{{ $page->created_at }}</time>
          </div>
        </li>

      @endforeach

    </ul>

    @else
      <div class="alert-success">No pages found</div>
    @endunless

    <a class="button" href="/dashboard/page/create">Add new page</a>

  </main>
@endsection
