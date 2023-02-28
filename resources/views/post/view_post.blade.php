<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Post</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

</head>
<body>
    @include('post.nav')
    <div class="card m-5">
        <div class="card-header">
          Post Info
        </div>
        <div class="card-body">
          <h5 class="card-title">Title:- {{$post->title}}</h5>
          <p class="card-text">Desc:- {{$post->description}}</p>
        </div>
      </div>
      <div class="card m-5">
        <div class="card-header">
          Post Creater Info
        </div>
        <div class="card-body">
          <h5 class="card-title">name:- {{$post->name}}</h5>
          <p class="card-text">created_at :- {{$post->created_at}}</p>
        </div>
      </div>
      @dump($post)
</body>
</html>
