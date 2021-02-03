<?php
if(!$_SESSION['login']){
    header('Location: login-admin.php');
    exit();
}