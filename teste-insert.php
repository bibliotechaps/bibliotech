<?php
    include_once("conexao.php");
    $nome = $_POST["nome"];
    $idade = $_POST["idade"];
    $sql = "insert into teste (nome, idade) values ('$nome', '$idade')";
    echo $sql;

    if ($conn->query($sql)) {
        echo "<script>alert('Registro inserido com sucesso!')</script>";
    }
    else {
        echo "<script>alert('Erro ao inserir o registro!')</script>";
    }

?>