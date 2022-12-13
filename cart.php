<?php

session_start();

var_dump($_POST['id_item']);
if (isset($_POST['id_item'])) {
    $_SESSION['id'] = $_POST['id_item'];
    // header("Location: index.php");
}