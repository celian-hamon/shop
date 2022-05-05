<?php
require_once "./class/User.php";
require_once "./class/Article.php";
require_once "./functions/functions.php";
error_reporting(E_ALL);


session_start();

if (isset($_SESSION['loggedUser'])) {

  $user = getUser($_SESSION['loggedUser']);
}

$url = parse_url(urldecode($_SERVER['REQUEST_URI']));

if ("/product" == substr($url['path'], 0, strlen("/product")) && isset($_SESSION['loggedUser'])) {
  require_once 'controller/product.php';
  return;
} else if ("/login" == substr($url['path'], 0, strlen("/login"))) {
  require_once 'controller/login.php';
  return;
} else if ("/signup" == substr($url['path'], 0, strlen("/signup"))) {
  require_once 'controller/signup.php';
  return;
} else if ("/logout" == substr($url['path'], 0, strlen("/logout"))) {
  require_once 'controller/logout.php';
  return;
} else if ("/admin" == substr($url['path'], 0, strlen("/admin")) && $user->USER_ADMIN === 1) {
  require_once 'controller/admin.php';
  return;
} else {
  require_once 'controller/all_products.php';
  return;
}
