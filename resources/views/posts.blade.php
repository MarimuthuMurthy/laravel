<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
    <title>Posts</title>
</head>

<body>

    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <span style="align-items: center;color:blueviolet"> All posts</span>
                        </div>
                        <div class="card-body">
                            @if (Session::has('post_deleted'))
                                <div class="alert alert-success" role="alert">
                                    {{ Session::get('post_deleted') }}
                                </div>
                            @endif
                            <table class="table">
                                <thead>
                                    <th>TITLE</th>
                                    <th>DESCRIPTION</th>
                                    <th>VIEW</th>
                                    <th>DELETE</th>
                                    <th>Edit</th>
                                </thead>
                                <tbody>
                                    @foreach ($posts as $item)
                                        <tr>
                                            <td>
                                                <p>{{ $item->title }}</p>
                                            </td>
                                            <td>
                                                <p>{{ $item->body }}</p>
                                            </td>
                                            <td><a class="btn btn-primary" href="/getPost/{{ $item->id }}">View</a>
                                            </td>
                                            <td><a class="btn btn-danger"
                                                    href="/deletePost/{{ $item->id }}">delete</a></td>
                                            <td><a class="btn btn-success" href="/editPost/{{ $item->id }}">Edit</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>
