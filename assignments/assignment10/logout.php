<?php
class Logout {

function init() {/* DELETES THE COOKIE BY SETTING BACK ONE HOUR */
setcookie("PHPSESSID", "", time() - 3600, "/");

/* DELETE THE SESSION VALUES*/
session_destroy();

/* REDIRECT TO THE LOGIN.PHP PAGE*/ 
header('Location: login.php');
}
}
?>