<?php
session_start();
include_once("conexao.php");

    $nome = $_POST['nome'];
    $login = $_POST['login'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $dataNasc = $_POST['dataNasc'];
    $cpf = $_POST['cpf'];
    $cep = $_POST['cep'];
    $bairro = $_POST['bairro'];
    $estado = $_POST['estado'];
    $cidade = $_POST['cidade'];
    $endereco = $_POST['endereco'];
    $id = $_GET['id'];

    $sqlUpdate = "UPDATE aluno set nome = '$nome', login = '$login', email =  '$email', telefone = '$telefone', datanasc= '$dataNasc', cpf = '$cpf', cep = '$cep', bairro = '$bairro', estado = '$estado', cidade = '$cidade', endereco=' $endereco'    where id = " . $id;

    if ($conn->query($sqlUpdate) === TRUE) {
        ?>

        <script>
            alert('Registro atualizado com sucesso!');
            window.location = 'consultar-aluno.php';
            
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
