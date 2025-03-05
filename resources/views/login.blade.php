<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Login</title>
    <style>
        input {
            border: none;
            display: flex;
            justify-content: center;
            flex-direction: column;
            margin-bottom: 10px;
            padding: 12px;
            color: black;
            border-radius: 10px;
            background-color: aliceblue;
        }

        input[type=submit] {
            background-color: black;
            color: white;
        }

        body {
            margin: 0;
            padding: 0;
        }

        .container {
            display: flex;
            justify-content: center;
            flex-direction: column;
            align-items: center;
            height: 100vh;
        }

        .forms {
            background-color: #fbffa3;
            padding: 50px;
            border-radius: 20px;
            text-align: center;
        }

        header {
            padding: 30px;
            background-color: black;
            color: aliceblue;
            text-align: center;
            font-size: larger;
        }
    </style>
</head>
<body>
    <header>Laravel Login Form</header>
    <div class="container">
        <div class="forms">
            <form action="/login" method="POST">
                @csrf
                <input type="text" name="fname" placeholder="Enter your first name" required>
                <input type="text" name="lname" placeholder="Enter your last name" required>
                <input type="email" name="email" placeholder="Enter your email" required>
                <input type="password" name="password" placeholder="Enter your password" required>
                <input type="number" name="phone" placeholder="Enter your phone number" required>
                <input type="submit" value="Submit">
            </form>
            @if ($errors->any())
                <div style="color:red;">
                    @foreach ($errors->all() as $error)
                        <p>{{ $error }}</p>
                    @endforeach
                </div>
            @endif
        </div>
    </div>
</body>
</html>
