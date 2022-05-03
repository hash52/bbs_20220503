@extends('layouts.app')
@section('content')
<div class="container">
<div class="my-3 p-3 bg-white rounded shadow-sm">
    <h6 class="border-bottom border-gray pb-2 mb-0">スレッド一覧</h6>
    @foreach($threads as $thread)
        <div class="media text-muted pt-3">
          <img data-src="holder.js/32x32?theme=thumb&amp;bg=007bff&amp;fg=007bff&amp;size=1" alt="" class="mr-2 rounded">
          <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
            <strong class="d-block text-gray-dark">@username</strong>
            {{ $thread->title }}
          </p>
        </div>
    @endforeach
  </div>
</div>
@endsection