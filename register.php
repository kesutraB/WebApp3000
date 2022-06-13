<?php
session_start();
require("./functions/functions.php");
require("./functions/connect.php");
if(isset($_POST["name"])){
    register($db, $_POST);
}
require("./view/register.phtml");
?>