<?php
session_start();
?>
<!DOCTYPE html>
<html lang=en>

<head>

  <meta charset="UTF-8">
  <meta name="viewport" content="widht= device-widht, initial-scale = 1.0">
  <title>Cadastro Aluno</title>
  <s></s>



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
  <!-- JQuerry masks -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>

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
  <div class="hover" id="icone-aluno">
    <a href="perfil-aluno.php"><img src="img/aluno.png" alt="imagem aluno" title="Aluno"></a>Aluno
  </div>
  <div class="container">
    <form method="POST" action="insert-aluno.php" autocomplete="off">

      <div class="col-12 mb-2">
        <h1 id="title"><b>Cadastrar Aluno</b></h1>
        <hr>
      </div>

      <div class="row justify-content-around p-3 w-100 m-0">

        <div class="form-group  col-3">
          <label style="margin: auto;" for="nome">Nome:</label><br>
          <input name="nome" class="form-control" type="text" placeholder="Seu nome" autofocus required>
        </div>

        <div class="form-group  col-3" id="resposta1">
          <label style="margin: auto;" for="login">Login:</label><br>
          <input name="login" class="form-control" type="text" placeholder="Seu Login" required>
        </div>

        <div class="form-group  col-3">
          <label style="margin: auto;" for="senha">Senha:</label><br>
          <input name="senha" id="senha" class="form-control" type="password" placeholder="1234" required>
        </div>

        <div class="form-group  col-3">
          <label style="margin: auto;" for="senha2">Confirmar Senha:</label><br>
          <input name="senha2" id="senha2" class="form-control" type="password" placeholder="1234" required>
        </div>

        <div class="form-group  col-3">
          <label style="margin: auto;" for="email">Email:</label><br>
          <input name="email" class="form-control" type="text" placeholder="Seu Email" required>
        </div>

        <div class="form-group  col-3">
          <label style="margin: auto;" for="telefone">Telefone:</label><br>
          <input name="telefone" class="form-control" type="tel" placeholder="Seu Telefone" required onkeypress="$(this).mask('(00) 90000-0000')">
        </div>
        <div class="form-group  col-3">
          <label style="margin: auto;" for="dataNasc">Data de Nascimento:</label><br>
          <input name="dataNasc" class="form-control" type="date" required>
        </div>

        <div class="form-group  col-3">
          <label style="margin: auto;" for="cpf">CPF:</label><br>
          <input name="cpf" type="text" class="form-control" placeholder="Ex.: 000.000.000-00" required onkeypress="$(this).mask('000.000.000-00');">
        </div>
        <div class="form-group col-3">
          <label style="margin: auto;" for="cep">CEP:</label><br>
          <input name="cep" type="text" class="form-control" placeholder="Seu CEP" required onkeypress="$(this).mask('00.000-000')">
        </div>
        <div class="form-group col-3">
          <label style="margin: auto;" for="name">Estado:</label><br>
          <!--<input name="estado" id="estado" class="form-control" type="text" placeholder="Seu Estado" required>-->
          <select name="estado" class="form-control" required>
            <option value="ac">Acre</option>
            <option value="al">Alagoas</option>
            <option value="ap">Amapá</option>
            <option value="am">Amazonas</option>
            <option value="ba">Bahia</option>
            <option value="ce">Ceará</option>
            <option value="df">Distrito Federal</option>
            <option value="es">Espirito Santo</option>
            <option value="go">Goiás</option>
            <option value="ma">Maranhão</option>
            <option value="mt">Mato Grosso</option>
            <option value="ms">Mato Grosso do Sul</option>
            <option value="mg">Minas Gerais</option>
            <option value="pa">Pará</option>
            <option value="pb">Paraíba </option>
            <option value="pr">Paraná</option>
            <option value="pe">Pernambuco </option>
            <option value="pi">Piauí</option>
            <option value="rj">Rio de Janeiro </option>
            <option value="rn">Rio Grande do NorteAlagoas</option>
            <option value="rs">Rio Grande do Sul</option>
            <option value="ro">Rondônia </option>
            <option value="rr">Roraima </option>
            <option value="sc">Santa Catarina Alagoas</option>
            <option value="sp">São Paulo</option>
            <option value="se">Sergipe</option>
            <option value="to">Tocantins </option>
          </select>
        </div>
        <div class="form-group col-3">
          <label style="margin: auto;" for="cidade">Cidade:</label><br>
          <input name="cidade" class="form-control" type="text" placeholder="Sua Cidade" required>
        </div>
        <div class="form-group  col-3">
          <label style="margin: auto;" for="bairro">Bairro:</label><br>
          <input name="bairro" class="form-control" type="text" placeholder="Seu Bairro" required>
        </div>
        <div class="col-4">
          <!-- só para identar -->
        </div>
        <div class="form-group  col-4">
          <label style="margin: auto;" for="endereco">Endereço:</label><br>
          <input name="endereco" class="form-control" type="text" placeholder="Nome da rua e número da casa" required>
        </div>
        <div class="col-4">
          <!-- só para identar -->
        </div>
        <script>
          //verifica se as senhas são iguais
          var senha = document.getElementById("senha"),
            senha2 = document.getElementById("senha2");

          function validatePassword() {
            if (senha.value != senha2.value) {
              senha2.setCustomValidity("Senhas diferentes!");
            } else {
              senha2.setCustomValidity('');
            }
          }

          senha.onchange = validatePassword;
          senha2.onkeyup = validatePassword;
        </script>
        <div style="align-items: center;">
          <input class="btn btn-success" type="submit" name="btnCadastrar" value="Cadastrar">
          <a href="inicial.php"><button type="button" class="btn btn-danger">Cancelar</button></a>
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