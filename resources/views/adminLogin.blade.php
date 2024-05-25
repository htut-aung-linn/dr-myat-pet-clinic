<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pet Clinic Admin</title>
    <link rel="stylesheet" href="/css/adminLogin.css">
</head>
<body>
    <div class="login-container">
        <h2>Login</h2>
        <form action="check" method="POST">
            @csrf
            <div class="form-group">
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" required>
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
            </div>
            <div class="form-group">
                <button type="submit">Login</button>
                <p id="warning-statement" style="display:{{$warning}};font-size:0.8em;text-align:center;">Admin is not found. Please try again!</p>
            </div>
        </form>
    </div>
</body>
</html>
