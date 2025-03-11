<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <style>
      
        .container {
            max-width: 800px;
            margin: 50px auto;
            padding: 20px;
            background-color: #fff;
          
        }
      
        .btn {
            display: inline-block;
            padding: 10px 20px;
            color: #fff;
            background-color:rgb(0, 0, 0);
            text-decoration: none;
            border-radius: 5px;
        }
      
    </style>
</head>
<body>
    <div class="container">
        <h1>Welcome to the Home Page</h1>
        <a href="{{ route('login') }}" class="btn">Go to Login</a>
    </div>
</body>
</html>