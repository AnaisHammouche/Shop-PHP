<?php 

session_start();

require "db.php";

if(isset($_POST['submit'])) {

    $verif = $db->prepare("SELECT * FROM users WHERE email = ?");

    $verif->execute([$_POST['email']]);

    $result = $verif->fetch(PDD::FETCH_ASSOC);

// check empty fields
if (empty($_POST['email']) || empty($_POST['password']) || empty($_POST['cpassword'])) {
    header('Location: login.php?=vide');
    die();
}

if (($result['password'] !== $_POST['password']) || ($result['email'] !== $_POST['email'])) {
    header('Location: login.php?=mot');
    die();
} 

else {
    $_SESSION['user'] = $result;
    header('Location: login.php?=sucess');
    die();
    }
}


?>