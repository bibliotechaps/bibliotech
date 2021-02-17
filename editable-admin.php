<?php
session_start();
include_once("conexao.php");

if (isset($_POST['nome'])) {
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
    $id = $_SESSION['id'];

    $sqlUpdate = "UPDATE admin set nome = '$nome', login = '$login', email =  '$email', telefone = '$telefone', datanasc= '$dataNasc', cpf = '$cpf', cep = '$cep', bairro = '$bairro', estado = '$estado', cidade = '$cidade', endereco=' $endereco'    where id = " . $id;

    if ($conn->query($sqlUpdate) === TRUE) {
        $_SESSION['login'] = $login;
        ?>

        <script>
            alert('Registro atualizado com sucesso!');
            window.location = 'perfil-admin.php';
            
        </script>

        <?php
    } else {
    ?>

        <script>
            alert('Erro ao atualizar o registro!');
            window.location = 'perfil-editable-admin.php';
        </script>

<?php
    }
}
