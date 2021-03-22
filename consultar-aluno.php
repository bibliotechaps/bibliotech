<?php
session_start();
include_once('conexao.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consultar Aluno</title>
    <link rel="stylesheet" href="css/arquivo1.css   ">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script>
        function confirmarExclusao(id, tt) {
            if (window.confirm("Deseja realmente excluir :\n" + id + "-" + tt)) {
                window.location = "excluir-aluno.php?id=" + id;
            }
        }
    </script>


    <script text="text/javascript">
        $(document).ready(function() {
            //var nome_da_variável = $("id_do_elemento).val();
            var pesquisa = $("#pesquisa").val();

            //criar um objeto com os dados recebidos para enviar via post
            var dados = {
                pesquisa: pesquisa
            }

            //enviar os dados via post para consultar-aluno.php
            $.post('pesquisa-aluno.php', dados, function(retorna) {
                //o parametro retorna é o responsável por recuperar os dados que vem do arquivo consultar-aluno.php
                $(".resultados").html(retorna);
            });

            //pesquisa os dados do form por submit
            $("#busca").submit(function(evento) {
                //cancela a ação padrão do formulário, impedindo que ele atualize a página
                evento.preventDefault();

                //recupera o valor da input para as variáveis
                //var nome_da_variável = $("id_do_elemento).val();
                var pesquisa = $("#pesquisa").val();

                //criar um objeto com os dados recebidos para enviar via post
                var dados = {
                    pesquisa: pesquisa
                }

                //enviar os dados via post para consultar-aluno.php
                $.post('pesquisa-aluno.php', dados, function(retorna) {
                    //o parametro retorna é o responsável por recuperar os dados que vem do arquivo consultar-aluno.php
                    $(".resultados").html(retorna);
                });
            });
        });
    </script>

</head>

<body id="busca">

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
            <a href="perfil-admin.php"><img src="img/profile.png" alt="imagem profile" title="Perfil"></a>Perfil
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
        <?php

        
        $sql = "SELECT * FROM bibliotech.aluno order by cpf";
        //executar o comando sql
        $dadosAluno = $conn->query($sql);
        if ($dadosAluno->num_rows > 0) {
        ?>

            <!--Título-->
            <div class="col-12 mb-2">
                <h1 id="title"><b> Consultar Aluno </b></h1>
                <hr>
            </div>

            <form id="form-pesquisa" action="" method="post">
                <h3>Pesquisar aluno</h3>

                <input type="text" id="pesquisa" name="pesquisa" placeholder="Informe cpf do(s) aluno(s) a ser(em) pesquisado(s):" value="" size="50" class="form-control" style="width: 50%"> <br>
                <input type="submit" class="btn btn-primary" name="enviar" value="Pesquisar"> <br> <br>


            </form>


            <div class="resultados" style="min-height: 230px;">
            </div>
           
        <?php
        }

        ?>

        

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

</html>