<?php
session_start();
include_once("conexao.php");
?>
<!DOCTYPE php>
<php lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Editar Perfil</title>

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
        <!-- JS -->
        <script type="text/javascript" src="js/arquivo-js.js"></script>
        <!-- JQuerry masks -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>

    </head>

    <body>
        <!-- div para barra de configurações (ter em todos os códigos)-->
        <div class="imagemFundoTop">
            <!--<img src="img/fundo-cinza.png" alt="Imagem de Fundo" width=100% height=75px>-->

            <div class="col-6">
                <img id="img-logo" src="img/logo.PNG" alt="Imagem de Fundo">
                <h1 id="bibliotech-name">BiblioTech</h1>
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
                <img src="img/logout.png" alt="imagem login" title="Sair">Sair
            </div>
            <div class="hover" id="icone-home">
                <a href="inicial.php"><img src="img/home.png" alt="imagem home" title="Página Inicial"></a>Inicial
            </div>
            <div class="hover" id="icone-aluno">
                <a href="perfil-aluno.php"><img src="img/aluno.png" alt="imagem aluno" title="Aluno"></a>Aluno
            </div>
        </div>

        <div class="container">
            <form method="POST" action="editable-admin.php">

                <!--Título-->
                <div class="col-12 mb-2">
                    <h1 id="title"><b>Perfil do Admin</b></h1>
                    <hr>
                </div>
 



                <div class="row justify-content-around p-3 w-100 m-0">

                    <div class="form-group  col-4">
                        <label style="margin: auto;" for="nome">Nome:</label><br>
                        <input name="nome" id="nome" class="form-control" type="text" value="<?php
                                                                                                echo $_SESSION['nome'];
                                                                                                ?>" autofocus required>
                    </div>

                    <div class="form-group  col-4">
                        <label style="margin: auto;" for="login">Login:</label><br>
                        <input name="login" id="login" class="form-control" type="text" value="<?php
                                                                                                echo $_SESSION['login'];
                                                                                                ?>" required>
                    </div>

                    <div class="form-group  col-4">
                        <label style="margin: auto;" for="email">Email:</label><br>
                        <input name="email" id="email" class="form-control" type="text" value="<?php
                                                                                                echo $_SESSION['email'];
                                                                                                ?>" required>
                    </div>
                    <div class="form-group  col-4">
                        <label style="margin: auto;" for="dataNasc">Data de Nascimento:</label><br>
                        <input name="dataNasc" id="dataNasc" class="form-control" type="date" value="<?php
                                                                                                        echo $_SESSION['dataNasc'];
                                                                                                        ?>" required>
                    </div>

                    <div class="form-group  col-4">
                        <label style="margin: auto;" for="cpf">CPF:</label><br>
                        <input name="cpf" id="cpf" class="form-control" type="text" onkeypress="$(this).mask('000.000.000-00')" value="<?php
                                                                                            echo $_SESSION['cpf'];
                                                                                            ?>" required minlength="11" maxlength="11">
                    </div>
                    <div class="form-group  col-4">
                        <label style="margin: auto;" for="telefone">telefone:</label><br>
                        <input name="telefone" id="telefone" class="form-control" onkeypress="$(this).mask('(00) 90000-0000')" type="text" value="<?php
                                                                                                            echo $_SESSION['telefone'];
                                                                                                            ?>" minlength="11" maxlength="11">
                    </div>

                    <div class="form-group  col-3">
                        <label style="margin: auto;" for="cep">CEP:</label><br>
                        <input name="cep" id="cep" class="form-control" type="text" onkeypress="$(this).mask('00.000-000')" value="<?php echo $_SESSION['cep']; ?>" required minlength="8" maxlength="8">
                    </div>

                    <div class="form-group  col-3">
                        <label style="margin: auto;" for="estado">Estado:</label><br>
                        <select name="estado" style=" text-transform: uppercase" class="form-control" required>
                        <option value =""disabled selected>Anterior - <?php echo $_SESSION['estado'];?></option>
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
                    <div class="form-group  col-3">
                        <label style="margin: auto;" for="cidade">Cidade:</label><br>
                        <input name="cidade" id="cidade" class="form-control" type="text" value="<?php
                                                                                                    echo $_SESSION['cidade'];
                                                                                                    ?>" required>
                    </div>

                    <div class="form-group  col-3">
                        <label style="margin: auto;" for="bairro">Bairro:</label><br>
                        <input name="bairro" id="bairro" class="form-control" type="text" value="<?php
                                                                                                    echo $_SESSION['bairro'];
                                                                                                    ?>" required>
                    </div>
                    <div class="col-3">
                    </div>
                    <div class="form-group  col-6">
                        <label style="margin: auto;" for="endereco">Endereço:</label><br>
                        <input name="endereco" id="endereco" class="form-control" type="text" value="<?php
                                                                                                        echo $_SESSION['endereco'];
                                                                                                        ?>" required>
                    </div>
                    <div class="col-3">
                    </div>

                    <div class="col-4">
                    </div>
                    <div class="col-2 mt-4 mb-4">
                        <a href="perfil-senha-admin.php"><button type="button" class="btn btn-warning">Alterar Senha</button></a>
                    </div>
                    <div class="mt-4 mb-4 col-6">
                        <a href="perfil-admin.php"> <input type="submit" class="btn btn-success w-20" value="Atualizar"> </a>
                        <a href="perfil-admin.php"><button type="button" class="btn btn-danger w-20">Cancelar</button></a>
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

</php>