<?php
#Verifica se tem um login para pesquisa
if(isset($_POST['login'])){ 

    #Recebe o login Postado
    $loginPostado = $_POST['login'];

    #Conecta banco de dados 
    $con = mysqli_connect("localhost", "root", "", "outrasintencoes");
    $sql = mysqli_query($con, "SELECT * FROM admin WHERE login = '{$loginPostado}'");

    #Se o retorno for maior do que zero, diz que já existe um.
    if(mysqli_num_rows($sql)>0) 
        echo json_encode(array('login' => 'Ja existe um usuario cadastrado com este login')); 
    else 
        echo json_encode(array('login' => 'Usuário valido.' )); 
}
?>