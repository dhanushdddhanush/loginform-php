<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Laravel Form</title>
    <style>
        input {
            border: none;
            padding: 12px;
            border-radius: 10px;
            background-color: aliceblue;
        }

        input[type=submit] {
            background-color: black;
            color: white;
        }

        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .forms {
            display: flex;
            flex-direction: column;
            gap: 15px;
            background-color: #fbffa3;
            padding: 40px;
            border-radius: 20px;
        }

        .error {
            color: red;
            font-size: 14px;
        }
    </style>
</head>
<body>
    <header><h1>PHP Laravel Login Form</h1></header>
    <div class="container">
        <div class="forms">
            <form action="{{ url('/submit') }}" method="POST">
                @csrf
                <input type="text" name="fname" placeholder="First Name" value="{{ old('fname') }}">
                @error('fname') <p class="error">{{ $message }}</p> @enderror
                
                <input type="text" name="lname" placeholder="Last Name" value="{{ old('lname') }}">
                @error('lname') <p class="error">{{ $message }}</p> @enderror
                
                <input type="email" name="mail" placeholder="Email" value="{{ old('mail') }}">
                @error('mail') <p class="error">{{ $message }}</p> @enderror
                
                <input type="number" name="phone" placeholder="Phone Number" value="{{ old('phone') }}">
                @error('phone') <p class="error">{{ $message }}</p> @enderror

                <input type="password" name="password" placeholder="Password">
                @error('password') <p class="error">{{ $message }}</p> @enderror
                
                <input type="submit" value="Submit">
            </form>
        </div>
    </div>
</body>
</html>
