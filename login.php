<?php
session_start();
require("./functions/functions.php");
require("./functions/connect.php");
if(isset($_POST["name"])){
    login($db, $_POST);
}
require("./view/login.phtml");
?>