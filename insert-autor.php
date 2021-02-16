<?php
include_once("conexao.php");

$autor_id = $_POST["autor_id"];



    $sql = "insert into autor (autor_id) values ('$autor_id')";
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