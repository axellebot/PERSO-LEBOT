<?php
session_start();
include_once "./check_session.php";

if ($_POST == NULL) {
    header("Location:../login-admin.php");
} else {
    if ($_POST["psw"] == "gilles") {
        $_SESSION["psw"] = $_POST["psw"];
        header("Location:../admin.php");
    } else {
        header("Location:../login-admin.php");
    }
}
