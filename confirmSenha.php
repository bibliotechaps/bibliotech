<?php
include_once("conexao.php");
session_start();
if (isset($_GET['id'])) {
    $sqlSenha = "SELECT senha FROM admin WHERE id=" . $_GET['id'];

    $senhaantiga = md5($_POST["senhaAtual"]);
    $senhanova = md5($_POST["senha"]);
    $rsenhanova = md5($_POST["senha2"]);

    $resultSenha = mysqli_query($conn, $sqlSenha);
    $rowSenha = mysqli_fetch_assoc($resultSenha);
    $senhaantigabd = md5($rowSenha['senha']);

    if ($senhaantiga == $senhaantigabd) {
        $sqlUpdate = "UPDATE admin SET senha =".md5($senhanova)." WHERE id=" . $_GET['id'];
        if ($conn->query($sqlUpdate) === TRUE) {
            $_SESSION['senha'] = $senhanova;
?>
            <script>
                alert('Senha atualizada com sucesso!');
                window.location = 'perfil-admin.php';
            </script>

        <?php
        }
    } else {
        ?>

        <script>
            alert('Senha atual digitada foi incorreta!');
            window.location = 'perfil-senha-admin.php';
        </script>

    <?php
    }
}

