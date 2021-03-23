<?php
session_start();
include_once('conexao.php');
?>
<DOCTYPE php>
  <php lang=en>

    <head>

      <meta charset="UTF-8">
      <meta name="viewport" content="widht= device-widht, initial-scale = 1.0">
      <title>Editar Aluno</title>

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
      <div class="container">

        <?php
        if (isset($_GET['id'])) {
          $sqlAluno = "SELECT * FROM bibliotech.aluno WHERE id = " . $_GET['id'];
          //echo $sql;
          $consultaAluno = $conn->query($sqlAluno);
          $aluno = $consultaAluno->fetch_assoc();
        }

        ?>

        <form name="Editar Perfil aluno" action="editable-aluno.php?id=<?php echo $aluno["id"]?>" method="POST" style="padding: 20px; align-content: center; ">

          <div class="row justify-content-around">
            <h1 id="title"><b>Editar aluno</b></h1>
            <hr width="100%">

            <div class="row justify-content-around p-3 w-100 m-0">

              <div class="form-group  col-4">
                <label style="margin: auto;" for="nome">Nome:</label><br>
                <input name="nome" id="nome" class="form-control" type="text" value="<?php
                                                                                      echo $aluno['nome'];
                                                                                      ?>" autofocus required>
              </div>

              <div class="form-group  col-4">
                <label style="margin: auto;" for="login">Login:</label><br>
                <input name="login" id="login" class="form-control" type="text" value="<?php
                                                                                        echo $aluno['login'];
                                                                                        ?>" required>
              </div>

              <div class="form-group  col-4">
                <label style="margin: auto;" for="email">Email:</label><br>
                <input name="email" id="email" class="form-control" type="text" value="<?php
                                                                                        echo $aluno['email'];
                                                                                        ?>" required>
              </div>
              <div class="form-group  col-4">
                <label style="margin: auto;" for="dataNasc">Data de Nascimento:</label><br>
                <input name="dataNasc" id="dataNasc" class="form-control" type="date" value="<?php
                                                                                              echo $aluno['dataNasc'];
                                                                                              ?>" required>
              </div>

              <div class="form-group  col-4">
                <label style="margin: auto;" for="cpf">CPF:</label><br>
                <input name="cpf" id="cpf" class="form-control" type="text" onkeypress="$(this).mask('000.000.000-00')" value="<?php
                                                                                                                                echo $aluno['cpf'];
                                                                                                                                ?>" required minlength="11" maxlength="11">
              </div>
              <div class="form-group  col-4">
                <label style="margin: auto;" for="telefone">telefone:</label><br>
                <input name="telefone" id="telefone" class="form-control" onkeypress="$(this).mask('(00) 90000-0000')" type="text" value="<?php
                                                                                                                                          echo $aluno['telefone'];
                                                                                                                                          ?>" minlength="11" maxlength="11">
              </div>

              <div class="form-group  col-3">
                <label style="margin: auto;" for="cep">CEP:</label><br>
                <input name="cep" id="cep" class="form-control" type="text" onkeypress="$(this).mask('00.000-000')" value="<?php echo $aluno['cep']; ?>" required minlength="8" maxlength="8">
              </div>

              <div class="form-group  col-3">
                <label style="margin: auto;" for="estado">Estado:</label><br>
                <select name="estado" style=" text-transform: uppercase" class="form-control" required>
                  <option value="" disabled selected>Anterior - <?php echo $aluno['estado']; ?></option>
                  <option value="ac">AC</option>
                  <option value="al">AL</option>
                  <option value="ap">AP</option>
                  <option value="am">AM</option>
                  <option value="ba">BA</option>
                  <option value="ce">CE</option>
                  <option value="df">DF</option>
                  <option value="es">ES</option>
                  <option value="go">GO</option>
                  <option value="ma">MA</option>
                  <option value="mt">MT</option>
                  <option value="ms">MS</option>
                  <option value="mg">MG</option>
                  <option value="pa">PA</option>
                  <option value="pb">PB </option>
                  <option value="pr">PR</option>
                  <option value="pe">PE </option>
                  <option value="pi">PI</option>
                  <option value="rj">RJ </option>
                  <option value="rn">RN</option>
                  <option value="rs">RS</option>
                  <option value="ro">RO </option>
                  <option value="rr">RR </option>
                  <option value="sc">SC</option>
                  <option value="sp">SP</option>
                  <option value="se">SE</option>
                  <option value="to">TO </option>
                </select>
              </div>
              <div class="form-group  col-3">
                <label style="margin: auto;" for="cidade">Cidade:</label><br>
                <input name="cidade" id="cidade" class="form-control" type="text" value="<?php
                                                                                          echo $aluno['cidade'];
                                                                                          ?>" required>
              </div>

              <div class="form-group  col-3">
                <label style="margin: auto;" for="bairro">Bairro:</label><br>
                <input name="bairro" id="bairro" class="form-control" type="text" value="<?php
                                                                                          echo $aluno['bairro'];
                                                                                          ?>" required>
              </div>
              <div class="col-3">
              </div>
              <div class="form-group  col-6">
                <label style="margin: auto;" for="endereco">Endereço:</label><br>
                <input name="endereco" id="endereco" class="form-control" type="text" value="<?php
                                                                                              echo $aluno['endereco'];
                                                                                              ?>" required>
              </div>
              <div class="col-3">
              </div>

              <div class="col-4">
              </div>
              <div class="col-2 mt-4 mb-4">
                <a href="perfil-senha-aluno.php?id=<?php echo $aluno["id"]?>"><button type="button" class="btn btn-warning">Alterar Senha</button></a>
              </div>
              <div class="mt-4 mb-4 col-6">
                <a href="editable-aluno.php?id=<?php echo $aluno["id"]?>"> <input type="submit" class="btn btn-success w-20" value="Atualizar"> </a>

                <a href="consultar-aluno.php"><button type="button" class="btn btn-danger w-20">Cancelar</button></a>
              </div>
            </div>

          </div>
        </form>
      </div>
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








  </php>