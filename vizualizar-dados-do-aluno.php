<?php
session_start();
include_once('conexao.php');
//receber os dados do form 
if(isset($_POST['nome'])){
    $nome = $_POST['nome'];
    $login = $_POST['login'];
    $senha = $_POST['senha'];
    $email = $_POST['email'];
    $dataNasc = $_POST['dataNasc'];
    $cpf = $_SESSION['cpf'];
    $telefone = $_POST['telefone'];
    $cep = $_POST['cep'];
    $endereco = $_POST['endereco'];
    $bairro = $_POST['bairro'];
    $cidade = $_POST['cidade'];
    $estado = $_POST['estado'];


// criar o comando update

$sql = "UPDATE bibliotech.aluno SET nome = '$nome', 
login = '$login', 
senha = '$senha', 
email = '$email', 
dataNasc = '$dataNasc', 
cpf = '$cpf', 
telefone = '$telefone' 
cep = '$cep', 
endereco = '$endereco', 
bairro = '$bairro', 
cidade = '$cidade', 
estado = '$estado', 
WHERE id = " . $_GET['id'];

//echo $sql;

//executar o comando

if ($conn->query($sql) === TRUE) {
    ?>

    <script>
    alert("Registro atualizado com sucesso!");
    window.location = "consultar-aluno.php";
    </script>

    <?php
}
else {
    ?>

    <script>
    alert("Erro ao atualizar o registro!");
    window.history.back();
    </script>

    <?php
}

}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dados do Aluno</title>

    <link rel="stylesheet" href="css/arquivo1.css">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>



</head>

<body>

    <!--Div para a imagem de fundo de cima (ter em todos os códigos)-->
    <div class="imagemFundoTop">
        <!--<img src="img/fundo-cinza.png" alt="Imagem de Fundo" width=100% height=75px>-->

        <div class="col-6">
            <img id="img-logo" src="img/logo.png" alt="Imagem de Fundo">
            <h1 id="bibliotech-name">BiblioTech</h1>
        </div>

        <!-- Ícones -->
        <div id="icone-livro" class="hover">
            <a href="consultar-livro.php"><img src="img/book-mark.png" alt="ConsultarLivro" title="Livro"></a>Livro
        </div>
        <div id="icone-perfil" class="hover">
            <a href="perfil-admin.php"><img src="img/profile.png" alt="imagem profile" title="Perfil"></a>
        </div>
        <div id="icone-sair" class="hover">
            <img src="img/logout.png" alt="imagem login" title="Sair">Sair
        </div>
        <div class="hover" id="icone-home">
            <a href="inicial.php"><img src="img/home.png" alt="imagem home" title="Página Inicial"></a>Inicial
        </div>
        <div class="hover" id="icone-aluno">
            <a href="perfil-aluno.php"><img src="img/aluno.png" alt="imagem aluno" title="Aluno"></a>Aluno
        </div>
    </div>

    <?php 
    if(isset($_GET['id'])){
        $sql = "SELECT * FROM bibliotech.aluno WHERE id = ". $_GET['id'];
        //echo $sql;
        $consulta = $conn->query($sql);
        $aluno = $consulta->fetch_assoc();
        }
    
    ?>

<div class="container" id="menor">

<form name="Perfil aluno" action="" method="POST" style="padding: 20px; align-content: center; ">

  <div class="row justify-content-around">
    <h1 id="title"><b>Perfil aluno</b></h1>
    <hr width="100%">

    <div class="form-group col-auto w-25">
      <label for="nascdatealuno">Data de Nascimento:</label> <br>
      <input type="date" id="nascdatealuno" class="form-control" placeholder="Data de Nascimento do Aluno" required value="<?php echo $dataNasc['dataNasc'] ?>"readonly>     

    </div>

    <div class="form-group col-auto w-25">
      <label for="RAnumberaluno">Registro Acadêmico:</label> <br>
      <input type="number" id="RAnumberaluno" class="form-control" placeholder="RA do Aluno" required="" disabled>
    </div>

    <div class="form-group col-auto w-25">
      <label for="CPFnumberaluno">CPF:</label> <br>
      <input type="number" id="CPFnumberaluno" class="form-control" placeholder="CPF do Aluno" required="" disabled>
    </div>

    <div class="form-group col-auto w-25">
      <label for="telefonenumberaluno">Telefone:</label> <br>
      <input type="number" id="telefonenumberaluno" class="form-control" placeholder="Telefone do Aluno" required="" disabled>
    </div>

    <div class="form-group col-auto w-25">
      <label for="enderecotxtaluno">Endereço:</label> <br>
      <input type="text" id="enderecotxtaluno" class="form-control" placeholder="Endereço do Aluno" required="" disabled>
    </div>

    <div class="form-group col-auto w-25">
      <label for="bairrotxtaluno">Bairro:</label> <br>
      <input type="text" id="bairrotxtaluno" class="form-control" placeholder="Bairro do Aluno" required="" disabled>
    </div>

    <div class="form-group col-auto w-25">
      <label for="cidadetxtaluno">Cidade:</label> <br>
      <input type="text" id="cidadetxtaluno" class="form-control" placeholder="Cidade do Aluno" required="" disabled>
    </div>


    <div class="form-group col-auto w-25">
      <label for="CEPnumberaluno">CEP:</label> <br>
      <input type="text" id="CEPnumberaluno" class="form-control" placeholder="CEP do Aluno" required="" disabled>
    </div>

    <div class="form-group col-4">
      <label for="nometxtaluno">Nome:</label> <br>
      <input type="text" id="nometxtaluno" class="form-control" placeholder="Nome do Aluno" required="" disabled>
    </div>


    <div class="form-group col-4">
      <label for="logintxtaluno">Login:</label> <br>
      <input type="text" id="logintxtaluno" class="form-control" placeholder="Login do Aluno" required="" disabled>
    </div>

    <div class="form-group col-4">
      <label for="Emailtxtaluno">Endereço de Email:</label><br>
      <input type="text" id="Emailtxtaluno" class="form-control" placeholder="Endereço de Email do Aluno" required="" disabled>
    </div>

    <div style="align-items: center;">
      <a href="perfil-editable-aluno.php"><button type="button" class="btn btn-primary">Editar</button></a>
      <a href="excluir-aluno.php"><button type="button" class="btn btn-danger">Excluir</button></a>

    </div>

  </div>

</div>
</form>
</div>

    <!--Div para a imagem de fundo de baixo (ter em todos os códigos)-->
    <div class="imagemFundoBottom">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col" style="text-align: center;  margin-top: 40px;">
                    <div style="color: white;">
                        <h1>Contate-nos</h1>
                    </div>
                    <div style="color:white" class="hover">
                        <a href="https://www.instagram.com/bibliotechaps/" target="_blank"> <img src="img/instagram.png" alt="iconeInsta"></a>Instagram
                    </div>
                    <div style="color:white">
                        <img src="img/mail.png" alt="iconeMail">bibliotech@outlook.com.br
                    </div>
                </div>

                <div class="col" style="text-align: center; color: white; margin-top: 60px;">
                    <div>
                        <h5>Copyright &copy; Bibliotech 2020</h5>
                    </div>
                </div>

                <div class="col hover" style="text-align: center; color: white; margin-top: 40px;">
                    <h1>Bibliotech</h1>
                    <a href="equipe.php"><img src="img/team.png" alt="IconeTeam"></a>Conheça nossa equipe
                </div>
            </div>
        </div>
    </div>

</body>

</html>