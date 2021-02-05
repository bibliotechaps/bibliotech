<?php
session_start();
include("conexao.php");


$nome = $_POST["nome"];
$login = $_POST["login"];
$email = $_POST["email"];
$telefone = $_POST["telefone"];
$dataNasc = $_POST["dataNasc"];
$cpf = $_POST["cpf"];
$cep = $_POST["cep"];
$bairro = $_POST["bairro"];
$estado = $_POST["estado"];
$cidade = $_POST["cidade"];
$endereco = $_POST["endereco"];
$id = $_SESSION['id'];

$sql = "update admin set nome = '".$nome."', login = '".$login.", email = '".$email."', telefone = '".$telefone.", datanasc= '".$dataNasc.", cpf = '".$cpf."', cep = '".$cep.", bairro = '".$bairro.", estado = '".$estado."', cidade = '".$cidade.", endereco= '".$endereco." where id = ".$id;
    //se a query estiver correta os dados serão atualizados
    if(mysqli_query($sql,$conn)){
        $msg = "Atualizado com sucesso!";
    }else{
        $msg = "Erro ao atualizar!";
    }
    mysqli_close($conn);
?>