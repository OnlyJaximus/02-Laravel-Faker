@php
    use \App\Http\Controllers\PostController;
@endphp
@extends("master")
@section("title", "Posts")

@section("main")


<div class="container">
    <div class="row">
    @foreach ($allPosts as $post )
        <div class="col s4">
            {{-- <a href="/post/{{ $post->id }}"> --}}
              <a href="{{ route('post.single',['id'=>$post->id]) }}">
                <div class="card blue-grey darken-1">
                    <div class="card-content white-text">
                      <span class="card-title">{{$post->title }}</span>
                      <p>{{ $post->body }}</p>
                    </div>
                    <div class="card-action">
                      <a href="#">{{ $post->author }}</a>
                      {{-- <a href="#" class="right">{{ $post->created_at }}</a> --}}
                      <a href="#" class="right">{{ PostController::convert($post->created_at) }}</a>
                    </div>
                  </div>
                </a>
        </div>
    @endforeach
</div>
</div>

@endsection