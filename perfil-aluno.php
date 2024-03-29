<?php
session_start();
?>
<DOCTYPE html>
  <html lang=en>

  <head>

    <meta charset="UTF-8">
    <meta name="viewport" content="widht= device-widht, initial-scale = 1.0">
    <title>Perfil Aluno</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- CSS -->
    <link rel="stylesheet" href="css/arquivo1.css">

  </head>

  <body>
    <!--Div para a imagem de fundo de cima (ter em todos os códigos)-->
    <div class="imagemFundoTop">
      <!--<img src="img/fundo-cinza.png" alt="Imagem de Fundo" width=100% height=75px>-->

      <div class="col-6">
        <img id="img-logo" src="img/logo.PNG" alt="Imagem de Fundo">
        <h1 id="bibliotech-name">BiblioTech</h1>
      </div>
    </div>
    <!-- Ícones -->
    <div id="icone-livro" class="hover">
      <a href="consultar-livro.php"><img src="img/book-mark.png" alt="ConsultarLivro" title="Livro"></a>Livro
    </div>
    <div id="icone-perfil" class="hover">
      <a href="perfil-admin.php"><img src="img/profile.png" alt="imagem profile" title="Perfil"></a><?php
                                                                                                    echo $_SESSION['login'];
                                                                                                    ?>
    </div>
    <div id="icone-sair" class="hover">
            <a href="logout.php"><img src="img/logout.png" alt="imagem login" title="Sair"></a>Sair
        </div>
    <div class="hover" id="icone-home">
      <a href="inicial.php"><img src="img/home.png" alt="imagem home" title="Página Inicial"></a>Inicial
    </div>
    <div class="container" id="menor">

      <form name="Perfil aluno" action="" method="POST" style="padding: 20px; align-content: center; ">

        <div class="row justify-content-around">
          <h1 id="title"><b>Perfil aluno</b></h1>
          <hr width="100%">

          <div class="form-group col-auto w-25">
            <label for="nascdatealuno">Data de Nascimento:</label> <br>
            <input type="date" id="nascdatealuno" class="form-control" placeholder="Data de Nascimento do Aluno" required="" disabled>
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