@extends('dashboard.base')

@section('title', 'Comments')

@section('header')
  @include('dashboard.header')
@stop

@section('navbar')
  @include('dashboard.navbar')
@stop

@section('content')
  <main class="content">

    <h1>Comments</h1>

    @if ($info = session('info'))
      <div class="alert-success">{{ $info }}</div>
    @endif

    <ul class="comments_list">
      @foreach ($comments as $comment)
        <li class="comments_list__item">

          <div class="comments_list_item__author">
            From <span>{{ $comment->user->name }}</span> on
            <a href="/{{ $comment->post->slug }}">{{ $comment->post->title }}</a>
            submitted {{ $comment->created_at }}
          </div>

          <div class="comments_list_item__comment">{{ $comment->content }}</div>

          <ul class="comments_list_item__options">

            @if ($comment->approved != true)
              <li class="comments_list_item_option__approve">
                <form class="form_approve" method="POST" action="/comment/approve/{{$comment->id}}">
                  @csrf
                  @method('PUT')
                  <a href="/dashboard/comment/approve/{{$comment->id}}" class="btn-approve" onclick="event.target.parentNode.submit(); return false;">Approve</a>
                </form>
              </li>
            @endif

            <li class="comments_list_item_option__edit"><a href="/dashboard/comment/edit/{{$comment->id}}" class="btn-edit">Edit</a></li>

            <li class="comments_list_item_option__delete">
              <form class="form_delete" method="POST" action="/comment/delete/{{$comment->id}}">
                @csrf
                @method('DELETE')
                <a href="/dashboard/comment/delete/{{$comment->id}}" class="btn-delete" onclick="event.target.parentNode.submit(); return false;">Delete</a>
              </form>
            </li>

          </ul>

        </li>
      @endforeach
    </ul>

  </main>
@endsection
