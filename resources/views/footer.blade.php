{{-- {{ dd($latestPosts) }} --}}
<footer class="page-footer">
            <div class="container">
              <div class="row">
                <div class="col l6 s12">
                  <h5 class="white-text">Last 3 posts</h5>
                  <p class="grey-text text-lighten-4"></p>
                </div>
                <div class="col l4 offset-l2 s12">

                  <ul>
                    @foreach ($latestPosts as $post)
                    <li><a class="grey-text text-lighten-3"
                        href="/post/{{ $post->id }}"><span style="color: aqua">Post by:</span> {{$post->user->name}}</a></li>
                    @endforeach



                  </ul>
                </div>
              </div>
            </div>
</footer>