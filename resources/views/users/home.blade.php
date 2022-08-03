
@extends("master")
@section("title", "Users")

@section("main")


<div class="container">
    <div class="row">
      <h1>Users View</h1>
      <div class="col s8 offset-s2">
        <table>
          <thead>
            <tr>
              <th>Id</th>
              <th>Name</th>
              <th>Email</th>
              <th>Created</th>
              <th>Post</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($users as $user)
              <tr>
                <td>{{ $user->id }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->created_at }}</td>
                <td><a href="/user/{{$user->id }}/posts" class="btn">Posts</a></td>
                <td><a href="/user/{{$user->id }}" class="btn #f44336 red">Delete</a></td>
              </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
</div>

@endsection