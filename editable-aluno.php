<?php
session_start();
include_once("conexao.php");

if (isset($_POST['nome'])) {
    $limiteEmprestimo = 5;
    $login = $_POST['login'];
    $email = $_POST['email'];
    $nome = $_POST['nome'];
    $dataNasc = $_POST['dataNasc'];
    $telefone = $_POST['telefone'];
    $cep = $_POST['cep'];
    $endereco = $_POST['endereco'];
    $bairro = $_POST['bairro'];
    $cidade = $_POST['cidade'];
    $estado = $_POST['estado'];
    $cpf = $_SESSION['cpf'];

    $sqlUpdate = "UPDATE aluno set nome = '$nome', login = '$login', email =  '$email', telefone = '$telefone', datanasc= '$dataNasc',  cep = '$cep', bairro = '$bairro', estado = '$estado', cidade = '$cidade', endereco=' $endereco'    where cpf = " . $cpf;

    if ($conn->query($sqlUpdate) === TRUE) {
        $_SESSION['login'] = $login;
        $_SESSION['nome'] = $nome;
        ?>

        <script>
            alert('Registro atualizado com sucesso!');
            window.location = 'perfil-aluno.php';
            
        </script>

        <?php
    } else {
    ?>

        <script>
            alert('Erro ao atualizar o registro!');
            window.location = 'perfil-editable-aluno.php';
        </script>

<?php
    }
}
