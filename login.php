<?php
session_start();
include("conexao.php");

if(empty($_POST['login']) || empty($_POST['senha'])){
    header('Location: login-admin.php');
    exit();
}

$login = mysqli_real_escape_string($conn, $_POST['login']);
$senha = mysqli_real_escape_string($conn, $_POST['senha']);

$query="select id, login from admin where login = '{$login}' and senha = '{$senha}'";

$result = mysqli_query ($conn, $query);

$row = mysqli_num_rows($result);

//pegar o id do admin
$query2 = "select id from admin where login = '{$login}'";
$result2 = mysqli_query ($conn, $query2);
$_SESSION['id'] = $result2;

$query3 = "select senha from admin where login = '{$login}'";
$result3 = mysqli_query ($conn, $query3);
$_SESSION['senha'] = $result3;

if($row == 1){
    $_SESSION['login'] = $login;

    header('Location: inicial.php');
    exit();
}else{
    $_SESSION['nao_autenticado'] = true;    
    header('Location: login-admin.php');
    exit();
}
?>