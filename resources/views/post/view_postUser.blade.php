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
<div class="card-body">
    <h5 class="card-title">name:- {{$user->name}}</h5>
    <p class="card-text">id :- {{$user->id}}</p>
</div>
<table class="table me-3 ms-3 mt-5">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Title</th>
      <th scope="col">Description</th>
      <th scope="col">Created At</th>

    </tr>
  </thead>
  <tbody>

    @foreach ($user->post as $post)
    <tr>
        <td>{{$post->id}}</td>
        <td >{{$post->title}}</td>
        <td >{{$post->description}}</td>
        <td>{{$post->created_at}}</td>
    </tr>
    @endforeach
  </tbody>
</table>



</body>

</html>
