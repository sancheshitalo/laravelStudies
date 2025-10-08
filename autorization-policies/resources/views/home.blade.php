@extends('layouts.main_layout')
@section('content')

  @if($posts->count() == 0)
    <div class="my-5 opacity-50">No posts found.</div>
  @else
    <div class="container">
      <div class="row">
        <div class="col">
          @foreach ($posts as $post)
            <x-post-component :post="$post" />
          @endforeach
        </div>
      </div>
    </div>
  @endif

@endsection