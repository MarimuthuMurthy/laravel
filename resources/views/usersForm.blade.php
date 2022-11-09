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
            <input type="text" name="username" placeholder="eg:john">
        </p>
        <p>
            <label for="">Password</label>
            <input type="text" name="password" placeholder="john.aa@1">
        </p>
        <p>
            <button type="submit">login</button>
        </p>
    </form>
</body>

</html>