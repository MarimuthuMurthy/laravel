<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Joins</title>
</head>
<body>
    <table class='table'>
        <tbody>
            @foreach ($request as $item)
                <tr>
                    @foreach ($item as $x=>$y)
                        <td>{{$y}}</td>
                    @endforeach
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>