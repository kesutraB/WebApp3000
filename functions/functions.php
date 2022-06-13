<?php
function login($DB, $info){
    $hashedpass = sha1($info["password"]);
    $SQL = "SELECT * FROM users WHERE name = '{$info["name"]}'
            AND password = '$hashedpass'";
    $user = mysqli_query($DB, $SQL);
    $_SESSION["user"] = mysqli_fetch_assoc($user);
    if(isset($_SESSION["user"])){
        header("location: index.php");
    }
}

function register($DB, $info){
    $hashedpass = sha1($info["password"]);
    $SQL = "INSERT INTO users (name, email, password) VALUES ('{$info["name"]}', '{$info["email"]}', '{$hashedpass}')";
    echo $SQL;
    mysqli_query($DB, $SQL);
    header("location: login.php");
}

function logoff(){
    unset($_SESSION["user"]);
    header("location: index.php");
    exit;
}
?>