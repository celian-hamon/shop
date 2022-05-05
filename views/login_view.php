<!doctype html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <title>Login</title>
    <link rel="stylesheet" href="./style/main.css">
    <link rel="stylesheet" href="./style/login.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
</head>

<body>
    <form onsubmit="validate(this)" class="login" method="post">
        <h2>Hello again !</h2>
        <div class="form-field">
            <i class="fas fa-user"></i>
            <input type="text" name="email" placeholder="Email" value="theotruvelott@gmail.com">
        </div>
        <div class="form-field">
            <i class="fas fa-key"></i>
            <input type="password" name="password" placeholder="Password" value="pwd">
        </div>
        <button id="submit-button" type="submit">Login</button>
        <a href="/signup">No account? Signin</a>
    </form>
</body>

</html>