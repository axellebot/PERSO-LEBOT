<?php
session_start();
include_once "./check_session.php";

if ($_POST == NULL) {
    header("Location:../index.php");
} else {
    if ($_POST["psw"] == "gilles") {
        $_SESSION["psw"] = $_POST["psw"];
        header("Location:../pdf.php");
    } else {
        header("Location:../index.php");
    }
}
