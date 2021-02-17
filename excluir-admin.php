<?php
session_start();
include_once('conexao.php');

if (isset($_GET['id'])) {


    $sqlDelete = "delete from admin where id=" . $_GET['id'];

    if ($conn->query($sqlDelete) === TRUE) {
    ?>
        <script>
            alert("Admin excluido com sucesso");
            window.location = "login.php";
            session_destroy();
        </script>

    <?php
    } else {
    ?>
        <script>
            alert("Erro ao exluir Admin");
            window.location = "perfil-admin.php";
        </script>

<?php
    }
}
?>