<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/app.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
    <!-- nav start -->
    @include('post.nav')

<!-- nav end -->
<div class="text-center mt-5"><a href="{{route ('post.create')}}"><button type="button" class="btn btn-success" >Create Post</button></a></div>

<table class="table me-3 ms-3 mt-5">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Title</th>
      <th scope="col">Posted By</th>
      <th scope="col">Created At</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>

    @foreach ($posts as $post)
    <tr>
        <td>{{$post->id}}</td>
        <td >{{$post->title}}</td>
        <td >{{$post->user->name}}</td>
        <td>{{$post->created_at}}</td>
        <td><a href="{{route('post.show',$post->id)}}"><button type="button" class="btn btn-primary">View</button></a>
            <a href="{{route('post.edit',$post->id)}}"><button type="button" class="btn btn-info">Edit</button></a>
            <form action="{{route('post.delete',$post->id)}}" method="post">
                @method('DELETE')
                @csrf
                <button type="submit" class="btn btn-dark">Delete</button>
            </form>

        </td>
    </tr>
    @endforeach
  </tbody>
</table>
{{ $posts->links() }}
@dump($posts)


</body>

</html>
