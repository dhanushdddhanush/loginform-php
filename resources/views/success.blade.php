<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Success</title>
    <Style>
        a{
            background-color: rgb(255, 32, 32);
            color: white;
            padding: 12px;
            border: none;
            align-items: center;
            display: flex;
            justify-content: center;
            text-decoration:none;
        }
        h2{
            background-color:rgb(0, 255, 21);
            padding: 30px;
            color: white;
            text-align: center;
            font-size: larger;
        }
        body {
            margin: 0;
            padding: 0;
        }
        
    </Style>
</head>
<body>
    <h2>Welcome, You have successfully logged in.</h2>
    <a href="{{ url('/') }}">Logout</a>
</body>
</html>
