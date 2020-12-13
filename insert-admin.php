<?php
    include_once("conexao.php");
    $nome = $_POST["nome"];
    $login = $_POST["login"];
    $senha = $_POST["senha"];
    $email = $_POST["email"];
    $telefone = $_POST["telefone"];
    $dataNasc = $_POST["dataNasc"];
    $cpf = $_POST["cpf"];
    $cep = $_POST["cep"];
    $bairro = $_POST["bairro"];
    $estado = $_POST["estado"];
    $cidade = $_POST["cidade"];
    $endereco = $_POST["endereco"];
    

    $sql = "insert into admin (nome, login, senha, email, telefone, dataNasc, cpf, cep, bairro, estado, cidade, endereco) values ('$nome','$login', '$senha','$email','$telefone','$dataNasc','$cpf','$cep','$bairro','$estado','$cidade','$endereco')";
    

    if ($conn->query($sql)) {
        echo "<script>alert('Registro inserido com sucesso!')</script>";
    }
    else {
        echo "<script>alert('Erro ao inserir o registro!')</script>";
    }

?>