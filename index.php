<?php
session_start();
if(isset($_SESSION['userId'])){
    echo "Hello " . $_SESSION['userId'];
} else {
    header("Location:login.php");
    die();
}

