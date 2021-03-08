<?php
session_start();
include_once("conexao.php");
$aluno_id = $_POST["aluno_id"];
$livro_id = $_POST["livro_id"];
$admin_id = $_SESSION['id'];
$dataInicial = $_POST["dataEmp"];
$dataFinal = $_POST["dataDev"];

$sql = "insert into emprestimo (aluno_id, livro_id, admin_id, dataInicial, dataFinal) values ('$aluno_id', '$livro_id', '$admin_id', '$dataInicial', '$dataFinal')";

if ($conn->query($sql)) {
?>

    <script>
        alert('Empréstimo inserido com sucesso!');
        //window.location = 'consultar-emprestimo.php';
        window.location = 'efetuar-emprestimo.php';
    </script>

<?php
} else {
?>

    <script>
        alert('Erro ao inserir o empréstimo!');
        window.location = 'efetuar-empretimo.php';
    </script>

<?php
}

?>