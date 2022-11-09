<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
    <title>view post</title>
</head>
<body>
<div class='container'>
    <div class='row'>
        <div class="col-md-6 offset-md-3">
            <div class="card">
                <div class="card-header">
                   <span style="color:aqua;">edit post</span> 
                </div>
                <div class="card-body">
                    @if (Session::has('post_updated'))
                    <div class="alert alert-success" role="alert">
                        {{Session::get('post_updated')}}
                    </div>
                    @endif
                    <form method='post' action="{{route('posts.updatePostByIdSubmit')}}">
                        @csrf
                        <input type="hidden" name="id" value={{$post->id}} id="">
                        <div class="form-group">
                          <label for="post_title" class="form-label">post title</label>
                          <input type="text" class="form-control"   name= "title" value={{$post->title}}>
                        </div>
                        <div class="form-group">
                          <label for="post_desc" class="form-label">post description</label>
                          <br>
                          <textarea name="body"  cols="60" rows="10">{{$post->body}}</textarea>

                        </div>
                        <button class="btn btn-primary" value="submit" type="submit">update post</button>
                      </form>
                </div>
            </div>
        </div>
    </div>

</div>
</body>
</html>