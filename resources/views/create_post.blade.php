@section("title", "Create Post")
@extends("master")

@section("main")
    <div class="container">
        <div class="row">
            <h1>Create Post</h1>
            <div class="col s8 offset-s2">
                    <form action="/post/create" method="POST">
                        @csrf
                        <div class="row">
                            <div class="input-field col s12">
                                <input type="text" name="author" placeholder="author" id="name"
                                class="{{$errors->has("author")? 'red': ''}}"
                                value="{{ old('author') }}">
                                <label for="name">Author</label>
                            </div>

                            <div class="input-field col s12">
                                <input type="text" name="title" placeholder="title" id="title" class="{{$errors->has("title")? 'red': ''}}"   value="{{ old('title') }}">
                                <label for="title">Title</label>
                            </div>

                            <div class="input-field col s12">
                                <input type="text" name="body" placeholder="body" id="body" class="{{$errors->has("body")? 'red': ''}}"   value="{{ old('body') }}">
                                <label for="body">Body</label>
                            </div>
                            <button type="submit" class="btn pink">Save</button>
                        </div>
                    </form>
                    @if ($errors->any())
                    <p class="red-text">There was an error, try again latter.</p>
                    @endif
            </div>
        </div>
    </div>
@endsection