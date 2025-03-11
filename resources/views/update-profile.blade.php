<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Profile</title>
    <style>
    body {
        margin: 0;
        padding: 0;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        height: 100vh;
    }

    form {
        background: #fff;
        padding: 20px;
        border-radius: 5px;
        width: 300px;
    }


    input[type="text"] {
        width: 300px;
        padding: 8px;
        margin-bottom: 10px;
        border: 1px solid #ccc;
        border-radius: 4px;
    }

    button {
        width: 320px;
        padding: 10px;
        background-color:rgb(0, 0, 0);
        border: none;
        border-radius: 4px;
        color: white;
    }

    button:hover {
        background-color: #218838;
    }

    a {
        display: block;
        margin-top: 10px;
        text-align: center;
        color: #007bff;
        text-decoration: none;
    }

    a:hover {
        text-decoration: underline;
    }
</style>
</head>
<body>
    <h2>Update Profile</h2>
    
    <form action="{{ route('updateProfile') }}" method="POST">
        @csrf
        <label>First Name:</label>
        <input type="text" name="fname" value="{{ session('user') }}" required><br>

        <label>Last Name:</label>
        <input type="text" name="lname" required><br>

        <label>Phone:</label>
        <input type="text" name="phone" required><br>

        <button type="submit">Update Profile</button>
    </form>

    <a href="{{ route('logout') }}">Logout</a>
</body>
</html>
