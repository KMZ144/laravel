<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create Post</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
    <form class="m-5" action="{{route ('post.store')}}" method="post">
        @csrf
        <div class="mb-3">
          <label for="title" class="form-label">Title</label>
          <input class="form-control" id="title" name="title" >
        </div>
        <div class="mb-3">
            <label for="decription" class="form-label">Decription</label>
            <textarea class="form-control" id="decription" rows="3" name="decription"></textarea>
          </div>
          <div class="mb-3">
            <label for="creator" class="form-label">Post Creator</label>
            <input class="form-control" id="creator" name="creator">
          </div>
        <button type="submit" class="btn btn-success">Submit</button>
      </form>
</body>
</html>
