<?php
include_once('conexao.php');
$sql = "DELETE FROM aluno WHERE id = " . $_GET["id"];


if ($conn->query($sql) === TRUE) {
    ?>

    <script>
    alert("Registro excluído com sucesso");
    window.location = "consultar-aluno.php";
    </script>

    <?php
}
else {
    ?>

    <script>
    alert("Erro ao excluir o registro");
    window.history.back();
    </script>

    <?php
}

?>

>?