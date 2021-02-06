<?php
session_start();
include("conexao.php");

$senhaAtual = $_POST('senhaAtual');
$senha1 = $_POST('senha');
$senha2 = $_POST('senha2');

$result="";

if($senhaAtual != $_SESSION['senha']){
    ?>
        
            <script>
                alert('Senha de verificação incorreta!');
            </script>
        
        <?php
}else{
    if($senha1 == $senha2){
        $sql = "update admin set senha = '$senha1' where id = '{$_SESSION['id']}'";
        if ($conn->query($sql)) {
        ?>
        
            <script>
                alert('Senha atualizada com sucesso!');
                window.location = 'login-admin.php';
            </script>
        
        <?php
        } else {
        ?>
        
            <script>
                alert('Erro ao atualizar a senha!');
                window.location = 'cadastroAdmin.php';
            </script>
        
        <?php
        }
        
    }
}


?>