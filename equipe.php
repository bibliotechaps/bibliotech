<?php
include_once("conexao.php");
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Equipe</title>
    <link rel="stylesheet" href="css/arquivo1.css">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- JQuerry masks -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>


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

    </div>




    <div class="container">

        <form method="post" autocomplete="off" action="insert-emprestimo.php" name="meuformulario">

            <!--Título-->
            <div class="col-12 mb-2">
                <h1 id="title"><b> Nossa Equipe <hr style="width: 250px;"></b></h1>
                
            </div>
            <div class="col-2"></div>
            <div class="col-12">
                <h6 style="text-align: justify;">Bibliotech é um Trabalho de Conclusão de Curso do 3º ano de Informática em 2020, do IFMG - Campus Ouro Branco. Seu objetivo é facilitar o trabalho de profissionais bibliotecários de escolas públicas, afim de realizar empréstimo na escola com mais facilidade e economia de tempo. Destina-se principalmente para as escolas públicas urbanas e rurais da região. </h6>
            </div>
            <div class="col-2"></div>

            <hr>

            <div>
                <div class="col-12">
                    <h5>Allan Teixeira de Sousa</h5>
                    <h6 style="text-align: justify;"> Desenvolvedor do website e aluno do Curso Técnico Integrado em Informática do IFMG - Campus Ouro Branco. </h6>
                    <img src="img/Allan2.jpeg" alt="imagem Allan" title="Perfil" width=”150” height="150">
                </div>
                <div class="col-6">
                </div>
            </div>
            <hr>
            <br>
            <div>
                <div class="col-12">
                    <h5>Pedro Henrique Nunes Ribeiro Costa</h5>
                    <h6 style="text-align: justify;"> Desenvolvedor do website e aluno do Curso Técnico Integrado em Informática do IFMG - Campus Ouro Branco. </h6>
                    <img src="img/Allan2.jpeg" alt="imagem Allan" title="Perfil" width=”150” height="150">
                </div>
                <div class="col-6">
                </div>
            </div>
            <hr>
            <br>
            <div>
                <div class="col-12">
                    <h5>Allan Teixeira de Sousa</h5>
                    <h6 style="text-align: justify;"> Desenvolvedor do website e aluno do Curso Técnico Integrado em Informática do IFMG - Campus Ouro Branco. </h6>
                    <img src="img/Allan2.jpeg" alt="imagem Allan" title="Perfil" width=”150” height="150">
                </div>
                <div class="col-6">
                </div>
            </div>
            <br><br>
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