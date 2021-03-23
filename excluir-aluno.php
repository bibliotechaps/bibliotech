<?php
session_start();
//inclui o arquivo de conexão
include_once('conexao.php');
//receber o código do registro a excluir
//criar o comando de exclusão

$sqldeletAluno = "DELETE FROM aluno WHERE id = " . $_GET["id"];
//executar o comando

if ($conn->query($sqldeletAluno) === TRUE) {
?>

    <script>
        alert("Registro excluído com sucesso!");
        window.location = "consultar-aluno.php";
    </script>

<?php
} else {
?>

    <script>
        alert("Erro ao excluir o registro!");
        //window.history.back();
        <?php
        echo $sqldeletAluno;
        ?>
    </script>

<?php
}

?>