<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="/resources/css/style.css">
</head>
<body>
    <form action="/login" method="POST">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>
        <label>
            <input type="checkbox" name="remember_me"> Remember Me
        </label>
        <button type="submit">Login</button>
    </form>
</body>
</html>