<?php
session_start();
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

    <div class="container" id="menor">
        <form method="POST" action="editable-admin.php">

            <!--Título-->
            <div class="col-12 mb-2">
                <h1 id="title"><b>Perfil do Admin</b></h1>
                <hr>
            </div>  
            

            <div class="row justify-content-around p-3 w-100 m-0">

                <div class="form-group  col-4">
                    <label style="margin: auto;" for="nome_cad">Nome:</label><br>
                    <input name="nome_cad" id="nome_cad" class="form-control" type="text" placeholder="Seu nome"
                        autofocus required>
                </div>

                <div class="form-group  col-4">
                    <label style="margin: auto;" for="login_cad">Login:</label><br>
                    <input name="login_cad" id="login_cad" class="form-control" type="text" placeholder="Seu Login"
                        required>
                </div>

                <div class="form-group  col-4">
                    <label style="margin: auto;" for="email_cad">Email:</label><br>
                    <input name="email_cad" id="email_cad" class="form-control" type="text" placeholder="Seu Email"
                        required>
                </div>
                <div class="form-group  col-4">
                    <label style="margin: auto;" for="datanasc_cad">Data de Nascimento:</label><br>
                    <input name="datanasc_cad" id="datanasc_cad" class="form-control" type="date" required>
                </div>

                <div class="form-group  col-4">
                    <label style="margin: auto;" for="cpf_cad">CPF:</label><br>
                    <input name="cpf_cad" id="cpf_cad" class="form-control" type="number" placeholder="Seu CPF" required
                        minlength="11" maxlength="11">
                </div>
                <div class="form-group  col-4">
                    <label style="margin: auto;" for="tel_cad">Telefone:</label><br>
                    <input name="tel_cad" id="tel_cad" class="form-control" type="tel" placeholder="Seu Telefone"
                        minlength="11" maxlength="11">
                </div>
                <div class="form-group  col-3">
                    <label style="margin: auto;" for="end_cad">Endereço:</label><br>
                    <input name="end_cad" id="end_cad" class="form-control" type="text" placeholder="Seu Endereço"
                        required>
                </div>

                <div class="form-group  col-3">
                    <label style="margin: auto;" for="cep_cad">CEP:</label><br>
                    <input name="cep_cad" id="cep_cad" class="form-control" type="number" placeholder="Seu CEP" required
                        minlength="8" maxlength="8">
                </div>

                <div class="form-group  col-3">
                    <label style="margin: auto;" for="bairro_cad">Bairro:</label><br>
                    <input name="bairro_cad" id="bairro_cad" class="form-control" type="text" placeholder="Seu Bairro"
                        required>
                </div>

                <div class="form-group  col-3">
                    <label style="margin: auto;" for="cidade_cad">Cidade:</label><br>
                    <input name="cidade_cad" id="cidade_cad" class="form-control" type="text" placeholder="Sua Cidade"
                        required>
                </div>


                <div class="">
                    <a href="perfil-senha-admin.php"><button type="button" class="btn btn-warning">Alterar Senha</button></a>
                </div>

                <div style="align-items: center;">
                    <a href="perfil-admin.php"> <input type="submit" class="btn btn-success" value="salvar"> </a>
                    <a href="perfil-admin.php"><button type="button" class="btn btn-danger">Cancelar</button></a>
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
                        <a href="https://www.instagram.com/bibliotechaps/" target="_blank"> <img src="img/instagram.png"
                                alt="iconeInsta"></a>Instagram
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