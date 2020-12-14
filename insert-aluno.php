<?php
include_once("conexao.php");
$limiteEmprestimo = 5;
$login = $_POST["login"];
$senha = $_POST["senha"];
$email = $_POST["email"];
$nome = $_POST["nome"];
$dataNasc = $_POST["dataNasc"];
$cpf = $_POST["cpf"];
$telefone = $_POST["telefone"];
$cep = $_POST["cep"];
$endereco = $_POST["endereco"];
$bairro = $_POST["bairro"];
$cidade = $_POST["cidade"];
$estado = $_POST["estado"];

$sql = "insert into aluno (limiteEmprestimo, login, senha, email, nome, dataNasc, cpf, telefone, cep, endereco, bairro, cidade, estado) values ('$limiteEmprestimo', '$login', '$senha', '$email', '$nome','$dataNasc','$cpf','$telefone','$cep','$endereco','$bairro','$cidade','$estado')";


if ($conn->query($sql)) {
?>
    <script>
        alert('Registro inserido com sucesso!');
        window.location = 'perfil-aluno.php';
    </script>

<?php
} else {
?>
    <script>
        alert('Erro ao inserir o registro!');
        //window.location = 'cadastroAluno.php';
    </script>

<?php
}

?>