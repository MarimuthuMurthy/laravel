<html>

<head>
    <title>User Login</title>
</head>
<body>
    <h1>User login</h1>
    <form action="usersForm" method = 'post'>
        @csrf
        <p>
            <label for="">Username</label>
            <input type="text" name="username" placeholder="eg:john" value="{{old('username')}}">
            <br>
            <span style="color:red;">@error('username'){{$message}}@enderror</span>
        </p>
        <p>
            <label for="">Password</label>
            <input type="password" name="password" placeholder="john.aa@1" value="{{old('password')}}">
            <br>
            <span style='color:red;'>@error('password'){{$message}}@enderror</span>
        </p>
        <p>
            <button type="submit">login</button>
        </p>
    </form>
</body>
</html>