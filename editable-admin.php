<?php
session_start();
include_once("conexao.php");


$nome = $conn->real_escape_string($_POST['nome']);
$login = $conn->real_escape_string($_POST['login']);
$email = $conn->real_escape_string($_POST['email']);
$telefone = $conn->real_escape_string($_POST['telefone']);
$dataNasc = $conn->real_escape_string($_POST['dataNasc']);
$cpf = $conn->real_escape_string($_POST['cpf']);
$cep = $conn->real_escape_string($_POST['cep']);
$bairro = $conn->real_escape_string($_POST['bairro']);
$estado = $conn->real_escape_string($_POST['estado']);
$cidade = $conn->real_escape_string($_POST['cidade']);
$endereco = $conn->real_escape_string($_POST['endereco']);
$id = $_SESSION['id'];

$queryUpdate = "update admin set nome = ".$nome. ", login = ".$login.", email = ".$email.", telefone = ".$telefone.", datanasc= ".$dataNasc.", cpf = ".$cpf.", cep = ".$cep.", bairro = ".$bairro.", estado = ".$estado.", cidade = ".$cidade.", endereco= ".$endereco." where id = ".$id;
echo $queryUpdate;

//se a query estiver correta os dados serão atualizados
    if(mysqli_query($conn,$queryUpdate)){
        $rowId = mysqli_fetch_assoc($resultId);
        $msg = "Atualizado com sucesso!";
    }else{
        $msg = "Erro ao atualizar!";
    }
    mysqli_close($conn);
?>