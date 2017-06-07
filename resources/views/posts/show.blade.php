@extends ('layout')

@section ('content')
    <div class="col-sm-8 blog-main">
        <h1>{{ $post->title }}</h1>

        {{$post->body}}

        <hr>
        <div class="comments">
        <ul class="list-group">
            @foreach ($post->comments as $comment)
                <article>
                <li class="list-group-item">
                    <strong>
                        {{ $comment->created_at->diffForHumans() }}
                    </strong>
                    <div class="well">
                        {{ $comment->body }}
                    </div>
                </li>
                </article>
            @endforeach
            </ul>
        </div>

        <div class="card">
            <div class="card-block">
                <form method="POST" action="/posts/{{ $post->id }}/comments">
                {{ csrf_field() }}
                    <div class="form-group">
                        <textarea name="body" class="form-control" placeholder="Your comment here" required></textarea>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Add Comment</button>
                    </div>
                </form>
                @include('layouts.errors')
            </div>
        </div>
    </div>
@endsection
