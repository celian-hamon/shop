<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
function connectdb(): PDO
{
    return new PDO(
        'mysql:host=localhost;dbname=shop;charset=utf8',
        'root',
        'root',
        [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
    );
}


function authUser($email, $password): ?User
{
    $db = connectdb();
    $query = $db->prepare('SELECT * FROM USERS WHERE USER_EMAIL = :email');
    $query->execute(['email' => $email]);
    $user = $query->fetchObject();
    if ($user) {
        if ($password === $user->USER_PASSWORD) {
            return new User($user->USER_ID, $user->USER_EMAIL, $user->USER_FNAME, $user->USER_LNAME, $user->USER_ADMIN, $user->USER_PASSWORD);
        }
    }
    return null;
}

function createUser($firstName, $lastName, $email, $password): bool
{
    if (verifUser($email)) {
        $db = connectdb();
        $query = $db->prepare('INSERT INTO USERS (USER_EMAIL, USER_FNAME, USER_LNAME, USER_PASSWORD) VALUES (:email, :firstName, :lastName, :password)');
        $query->execute(['email' => $email, 'firstName' => $firstName, 'lastName' => $lastName, 'password' => $password]);
        $user = $query->rowCount();
        if ($user > 0) {
            return true;
        }
    } else {
        echo '<script>alert("Email déjà utilisé")</script>';
        return false;
    }
}
function verifUser($email): bool
{
    $db = connectdb();
    $query = $db->prepare('SELECT * FROM USERS WHERE USER_EMAIL = :email');
    $query->execute(['email' => $email]);
    $emails = $query->rowCount();
    if ($emails > 0) {
        return false;
    }
    return true;
}

function getUser($id): ?User
{
    $db = connectdb();
    $query = $db->prepare('SELECT * FROM USERS WHERE USER_ID = :id');
    $query->execute(['id' => $id]);
    $user = $query->fetch();
    if ($user) {
        return new User($user['USER_ID'], $user['USER_EMAIL'], $user['USER_FNAME'], $user['USER_LNAME'], $user['USER_ADMIN'], $user['USER_PASSWORD']);
    }
    return null;
}

function getArticle($id): ?Article
{
    $db = connectdb();
    $query = $db->prepare('SELECT * FROM ARTICLES where ART_ID = :id');
    $query->execute(
        [
            ':id' => $id
        ]
    );
    $article = $query->fetch();
    if ($article) {
        return new Article($article['ART_ID'], $article['ART_NAME'], $article['ART_DESCRIPTION'], $article['ART_PRIX_HT'], $article['ART_PRIX_TTC'], $article['ART_IMAGE'], $article['ART_TAILLE'], $article['ART_QTT']);
    }
    return null;
}

function getArticles(): array
{
    $db = connectdb();
    $query = $db->prepare('SELECT * FROM ARTICLES');
    $query->execute();
    $articles = $query->fetchAll();
    $validArticles = [];
    foreach ($articles as $article) {
        $validArticles[] = new Article($article['ART_ID'], $article['ART_NAME'], $article['ART_DESCRIPTION'], $article['ART_PRIX_HT'], $article['ART_PRIX_TTC'], $article['ART_IMAGE'], $article['ART_TAILLE'], $article['ART_QTT']);
    }
    return $validArticles;
}

function getOrder($date): int
{
    $db = connectdb();
    $query = $db->prepare('SELECT count(*) FROM ECC WHERE ECC_DAT LIKE "' . $date . '%"');
    $query->execute();
    $data = $query->fetch();
    return $data[0];
}

function getAllUsers(): array
{
    $db = connectdb();
    $query = $db->prepare('SELECT * FROM USERS');
    $query->execute();
    $users = $query->fetchAll();
    $validUsers = [];
    foreach ($users as $user) {
        $validUsers[] = new User($user['USER_ID'], $user['USER_EMAIL'], $user['USER_FNAME'], $user['USER_LNAME'], $user['USER_ADMIN'], $user['USER_PASSWORD']);
    }
    return $validUsers;
}