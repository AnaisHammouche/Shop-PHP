<?php

session_start();

if (!isset($_SESSION['panier2'])) {
    $_SESSION['panier2'] = array();
}

array_push($_SESSION['panier2'], $_GET['productName']);

header('Location: pageP.php');

exit();