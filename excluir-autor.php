<?php
//inclui o arquivo de conexão
include_once('conexao.php');
//receber o código do registro a excluir
//criar o comando de exclusão
$sql = "DELETE FROM autor WHERE id = " . $_GET["id"];
//executar o comando

if ($conn->query($sql) === TRUE) {
    ?>

    <script>
    alert("Registro excluído com sucesso!");
    window.location = "consultar-autor.php";
    </script>

    <?php
}
else {
    ?>

    <script>
    alert("Erro ao excluir o registro!");
    window.history.back();
    </script>

    <?php
}

?>

>?