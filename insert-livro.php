<?php
    include_once("conexao.php");
    $titulo = $_POST["titulo"];
    $autor_id = $_POST["autor_id"];
    $editora_id = $_POST["editora_id"];
    $anoEdicao = $_POST["anoEdicao"];
    $numPaginas = $_POST["numPaginas"];
    $volume = $_POST["volume"];
    $isbn = $_POST["isbn"];
    

    $sql = "insert into livro (titulo, autor_id, editora_id, anoEdicao, numPaginas, volume, isbn) values ('$titulo','$autor_id', '$editora_id','$anoEdicao','$numPaginas','$volume','$isbn')";
    //
    //
    //echo "$sql";

    if ($conn->query($sql) === TRUE) {
        ?>

        <script>
        alert("Registro inserido com sucesso!");
        window.location = "consultar-livro.php";
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