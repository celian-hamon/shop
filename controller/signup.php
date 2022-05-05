<?php

if (isset($_POST['First_Name']) && isset($_POST['Last_Name']) && isset($_POST['Email']) && isset($_POST['Password']) && isset($_POST['Confirm_Pass'])) {
    $First_Name = $_POST['First_Name'];
    $Last_Name = $_POST['Last_Name'];
    $Email = $_POST['Email'];
    $Password = $_POST['Password'];
    $Confirm_Pass = $_POST['Confirm_Pass'];
    if ($First_Name !== "" && $Last_Name !== "" && $Email !== "" && $Password !== "" && $Confirm_Pass !== "") {
        if ($Password === $Confirm_Pass) {
            $user = createUser($First_Name, $Last_Name, $Email, $Password);
            if ($user) {
                echo "Vous êtes inscrit";
                header('Location: /login.php');
            }
        } else {
            echo "
            <script>
            window.onload = function() {
            document.getElementById('pwd').className='show'}
            </script>";
        }
    } else {
        echo "Veuillez remplir tous les champs";
    }
}
require_once './views/signup_view.php';
