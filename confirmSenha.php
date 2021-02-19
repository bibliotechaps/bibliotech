<?php
include_once("conexao.php");
session_start();

$sqlSenha = "SELECT senha FROM admin WHERE id=" . $_SESSION['id'];
$senhaantiga = $_POST["senhaAtual"];
$senhanova = $_POST["senha"];

$resultSenha = mysqli_query($conn, $sqlSenha);
$rowSenha = mysqli_fetch_assoc($resultSenha);
$senhaantigabd = $rowSenha['senha'];

if (md5($senhanova) == $senhaantigabd) {
?>
    <script>
        alert('Essa já é a sua senha');
        window.location = 'perfil-senha-admin.php';
    </script>

    <?php
} else {

    if (md5($senhaantiga) == $senhaantigabd) {
        $sqlUpdate = "UPDATE admin SET senha = '" . md5($senhanova) . "' WHERE id=" . $_SESSION['id'];
        if ($conn->query($sqlUpdate) === TRUE) {
            $_SESSION['senha'] = md5($senhanova);
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
            alert('Senha antiga digitada foi incorreta!');
            window.location = 'perfil-senha-admin.php';
        </script>

<?php
    }
}
