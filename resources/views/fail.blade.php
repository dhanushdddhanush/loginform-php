<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Failed</title>
    <Style>
        a{
            background-color:rgb(0, 255, 21);
            color: white;
            padding: 12px;
            border: none;
            text-decoration:none;
            align-items: center;
            display: flex;
            justify-content: center;
        }
        h2{
            align-items: center;
            display: flex;
            justify-content: center;
           padding: 30px;
           background-color:rgb(255, 32, 32);
           color: aliceblue;
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
    <h2>Login Failed! Invalid credentials.</h2>
    <a href="{{ url('/') }}">Try Again</a>
</body>
</html>
