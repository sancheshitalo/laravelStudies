@extends('layouts.main_layout')
@section('content')

    @can('create', App\Models\Post::class)
    <div class="container my-3">
        <div class="row">
            <div class="col">
                <a href=" {{ route('post_create') }} " class="btn btn-success">
                    <i class="fa fa-plus"></i> Novo post
                </a>
            </div>
        </div>
    </div>
    @endcan

    @if ($posts->count() == 0)
        <div class="my-5 opacity-50">No posts found.</div>
    @else
        <div class="container">
            <div class="row">
                <div class="col">
                    @foreach ($posts as $post)
                        @can('view', $post)
                                <x-post-component :post="$post" />
                        @endcan
                    @endforeach
                </div>
            </div>
        </div>
    @endif

@endsection
