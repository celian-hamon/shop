<!doctype html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <title>Register</title>
    <link rel="stylesheet" href="./style/main.css">
    <link rel="stylesheet" href="./style/login.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
</head>

<body>
    <script>
    </script>
    <form onsubmit="return validate(this)" class="register" id="main-form" method="post">
        <h2>Oh you're new ?</h2>
        <h3 id="pwd">password mitchmatch!!</h3>
        <div class="form-field">
            <i class="button__icon fas fa-user"></i>
            <input type="text" required name="First_Name" placeholder="First Name">
            <i class="button__icon fas fa-signature"></i>
            <input type="text" required name="Last_Name" placeholder="Last Name">
        </div>
        <div class="form-field">
            <i class="button__icon fas fa-envelope"></i>
            <input type="text" required name="Email" placeholder="Email">
        </div>
        <div class="form-field">
            <i class="button__icon fas fa-key"></i>
            <input type="password" id="pass" required Name="Password" minlength="6" placeholder="Password">
        </div>
        <div class="form-field">
            <i class="button__icon fas fa-key"></i>
            <input type="password" id="second-pass" required Name="Confirm_Pass" minlength="6" placeholder="Password, Again">
        </div>
        <button id="submit-button" type="submit">Signin</button>

        <a href="/login">Already signed in ? Login</a>
    </form>
</body>

</html>