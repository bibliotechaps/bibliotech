<?php 
session_start();
$servername = "200.18.128.52";
$username = "pedro_allan_samu";
$password = "pedro_allan_samu";
$nomeBD = "bibliotech";

$strcon = mysqli_connect($servername, $username, $password, $nomeBD) or die('Erro ao conectar no banco');   
$sql = "delete from admin where id=".$_SESSION['id']; 
mysqli_query($strcon,$sql) or die("Erro ao deletar dados");
echo "Excluido";
mysqli_close($strcon);
session_destroy();
header('Location: login-admin.php');
?>