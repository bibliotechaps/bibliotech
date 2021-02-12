<?php
session_start();
include("conexao.php");

if(empty($_POST['login']) || empty($_POST['senha'])){
    header('Location: login-admin.php');
    exit();
}

$login = mysqli_real_escape_string($conn, $_POST['login']);
$senha = mysqli_real_escape_string($conn, $_POST['senha']);

$query="select id, login from admin where login = '$login' and senha = '$senha'";

$resultLogin = mysqli_query ($conn, $query);
$rowLogin = mysqli_fetch_assoc($resultLogin);
$numLogin = mysqli_num_rows($resultLogin);

//pegar o id do admin
$queryId = "select id from admin where login = '$login'";
$resultId = mysqli_query ($conn, $queryId);
$rowId = mysqli_fetch_assoc($resultId);
$_SESSION['id'] = $rowId['id'];

$querySenha = "select senha from admin where login = '$login'";
$resultSenha = mysqli_query ($conn, $querySenha);
$row2 = mysqli_fetch_assoc($resultSenha);
$_SESSION['senha'] = $rowSenha['senha'];

if($numLogin == 1){
    $_SESSION['login'] = $login;

    header('Location: inicial.php');
    exit();
}else{
    $_SESSION['nao_autenticado'] = true;    
    header('Location: login-admin.php');
    exit();
}
?>