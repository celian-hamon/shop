<?php

if (isset($_POST['email']) && isset($_POST['password'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $user = authUser($email, $password);
    if ($user) {
        echo "Vous êtes connecté";
        $_SESSION['loggedUser'] = $user->USER_ID;
        header('Location: /');

    } else {
        echo "Identifiants incorrects";
    }
       
}
require_once './views/login_view.php';
