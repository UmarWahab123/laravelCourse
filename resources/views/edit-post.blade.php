<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DB CRUD Operation</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

</head>
<body>
        <section>
        <div class="container">
        <div class="row">
        <div class="col-md-6 offset-md-3">
        <div class="card">
        <div class="card-header">
           <b>Edit Post</b>
        </div>
       <div class="card-body">
       <!-- to display the success msg after post updated-->
        @if(Session::has('post_updated'))
        <div class="alert alert-success" role="alert">
        {{Session::get('post_updated')}}
        </div>
        @endif

        <form method="POST" action="{{route('post.update')}}">
        @csrf
        <input type="hidden" name="id" value="{{$post->id}}"/>
        <div class="form-group">
        <label for="title"><b>Post Title</b></label>
        <input type="text" name="title" class="form-control" value="{{$post->title}}" placeholder="Enter Post Title"/>
        </div>
        <div class="form-group">
        <label for="body"><b>Post Description</b></label>
        <textarea class="form-control" name="body" rows="3">{{$post->body}}</textarea>
        </div>
        <input type="submit" class="btn btn-success" value="Update"/>
    </form>

    </div>
    </div>
    </div>
    </div>
    </div>
    </section>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

</body>
</html>
