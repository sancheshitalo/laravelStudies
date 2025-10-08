<div class="card bg-dark p-3 mt-3">
    <div class="d-flex justify-content-between">
        <div class="text-info">
            Author: <strong> {{ $post->user->name }} </strong>
        </div>
        <div class="text-end text-light">
            {{ $post->created_at }}
        </div>
    </div>

    <div class="mt-3">
        <h4>{{ $post->title }}</h4>
        <p>{{ $post->content }}</p>
    </div>
</div>