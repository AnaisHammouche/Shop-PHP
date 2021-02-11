<?php 

require "db.php";

if(isset($_POST['submit'])) {
// check empty fields
if (empty($_POST['email']) || empty($_POST['password']) || empty($_POST['cpassword'])) {
    header('Location: compte.php?=vide');
    die();
}


// check email
if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) === false) {
    header('Location: compte.php?=email');
    die();
}

// check confirm password
if ($_POST['password'] !== $_POST['cpassword']) {
    header('Location: compte.php?=password');
    die();
}

$req = $pdo->prepare("INSERT INTO users(email, password) VALUES (?, ?)");

$req->execute([$_POST['email'], $_POST['password']]);
}


?>