<?php
include_once("conexao.php");
$nome = $_POST["nome"];



    $sql = "insert into editora (nome) values ('$nome')";
    //echo "$sql";

    if ($conn->query($sql) === TRUE) {
        ?>

        <script>
        alert("Registro inserido com sucesso!");
        window.location = "adicionar-livro.php";
        </script>

        <?php
    }
    else {
        ?>

        <script>
        alert("Erro ao inserir o registro!");
        window.history.back();
        </script>

        <?php
    }

?>