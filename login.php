<?php
session_start();
include_once("conexao.php");

if(empty($_POST['login']) || empty($_POST['senha'])){
    header('Location: login-admin.php');
    exit();
}

$login = $conn->real_escape_string($_POST['login']);
$senha = $conn->real_escape_string($_POST['senha']);

$queryLogin="select id, login from admin where login = '$login' and senha = '".md5($senha)."'";

$resultLogin = mysqli_query ($conn, $queryLogin);
$rowLogin = mysqli_fetch_assoc($resultLogin);
$numLogin = mysqli_num_rows($resultLogin);

//pegar o id do admin
$queryId = "select id from admin where login = '$login'";
$resultId = mysqli_query ($conn, $queryId);
$rowId = mysqli_fetch_assoc($resultId);
$_SESSION['id'] = $rowId['id'];

$querySenha = "select senha from admin where login = '$login'";
$resultSenha = mysqli_query ($conn, $querySenha);
$rowSenha = mysqli_fetch_assoc($resultSenha);
$_SESSION['senha'] = md5($rowSenha['senha']);

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