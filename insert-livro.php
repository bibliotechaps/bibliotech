<?php
include_once("conexao.php");
$titulo = $_POST["titulo"];
$autor_id = $_POST["autor_id"];
$editora_id = $_POST["editora_id"];
$anoEdicao = $_POST["anoEdicao"];
$numPaginas = $_POST["numPaginas"];
$volume = $_POST["volume"];
$isbn = $_POST["isbn"];

<<<<<<< HEAD

$sql = "insert into livro (titulo, autor_id, editora_id, anoEdicao, numPaginas, volume, isbn) values ('$titulo','$autor_id', '$editora_id','$anoEdicao','$numPaginas','$volume','$isbn')";
//

if ($conn->query($sql)) {
?>
    <script>
        alert('Registro inserido com sucesso!');
        window.location = 'inicial.php';
    </script>
<?php
} else {
?>
    <script>
        alert('Erro ao inserir o registro!');
        window.location = 'insert-livro.php';
    </script>
<?php
}
=======
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
>>>>>>> 52aa6ff23f1909a16219c37efaf249ab2fb8618c

?>