<?php
session_start();
include_once("conexao.php");

$senhaAtual = "".$_POST('senhaAtual');
$senha1 = $_POST('senha1');
$senha2 = $_POST('senha2');

$result="";

if($senhaAtual != $_SESSION['senha']){
    echo "Senha de verificação incorreta";
}else{
    if($senha1 == $senha2){
        $sql = "update admin set senha = '$senha1' where id = '{$_SESSION['id']}'";
        if ($conn->query($sql)) {
        ?>
        
            <script>
                alert('Registro inserido com sucesso!');
                window.location = 'login-admin.php';
            </script>
        
        <?php
        } else {
        ?>
        
            <script>
                alert('Erro ao inserir o registro!');
                window.location = 'cadastroAdmin.php';
            </script>
        
        <?php
        }
        
    }
}


?>