<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consultar Livro</title>
    <link rel="stylesheet" href="css/arquivo1.css   ">
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
            <a href="perfil-admin.php"><img src="img/profile.png" alt="imagem profile" title="Perfil"></a>Perfil
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
        <form method="post" autocomplete="on">



            <!--Título-->
            <div class="col-12 mb-2">
                <h1 id="title"><b> Consultar Livro </b></h1>
                <hr>
            </div>



            <div class="row justify-content-md-center ">
                <div class="form-group col-auto col-6 col-lg-4 col-xl-3">
                    <label style="margin: auto;" for="txtTitulo">Título:</label>
                    <input type="text" name="txtTitulo" id="txtTitulo" placeholder="123" class="form-control" readonly>
                </div>

                <div class="form-group col-auto col-6
                            col-lg-4 
                            col-xl-3">
                    <label style="margin: auto;" for="txtAutor">Autor:</label> <br>
                    <input type="text" name="txtAutor" id="txtAutor" placeholder="Pedro" class="form-control" readonly>
                </div>

                <div class="form-group col-auto col-6
                            col-lg-4 
                            col-xl-3">
                    <label style="margin: auto;" for="txtEditora">Editora:</label> <br>
                    <input type="text" name="txtEditora" id="txtEditora" placeholder="Pedro" class="form-control"
                        readonly>
                </div>
            </div>


            <div class="row justify-content-md-center ">


                <div class="form-group col-auto col-6
                            col-lg-4 
                            col-xl-3">
                    <label style="margin: auto;" for="IntAnoEdicao">Ano de Edição:</label> <br>
                    <input type="number" name="IntAnoEdicao" id="IntAnoEdicao" placeholder="2020" class="form-control"
                        readonly>
                </div>

                <div class="form-group col-auto col-6
                            col-lg-4 
                            col-xl-3">
                    <label style="margin: auto;" for="IntNumeroPag">Número de Páginas:</label> <br>
                    <input type="number" name="IntNumeroPag" id="IntNumeroPag" placeholder="500" class="form-control"
                        readonly>
                </div>

                <div class="form-group col-auto col-6
                            col-lg-4 
                            col-xl-3">
                    <label style="margin: auto;" for="Volume">Volume:</label> <br>
                    <input type="number" name="Volume" id="Volume" placeholder="20" class="form-control" readonly>
                </div>
            </div>


            <div class="row justify-content-md-center ">
                <div class="form-group col-auto col-6
                            col-lg-4 
                            col-xl-3">
                    <label style="margin: auto;" for="txtISBN">ISBN:</label> <br>
                    <input type="text" name="txtISBN" id="txtISBN" placeholder="00989" class="form-control" readonly>
                </div>

            </div>

            <!--
           <div class="row justify-content-md-center">
        
            <div style="align-items: center;" >
                <a href="EditarLivro.php"> <button class="btn btn-primary">Editar</button></a>
                <input  type="reset" class="btn btn-danger" name="btnExcluir" value="Excluir">
            </div>
            
        
        </div>
        -->

        </form>

        <div class="row justify-content-center">
            <div class="mr-1">
                <a href="EditarLivro.php"><button class="btn btn-primary">Editar</button></a>
            </div>
            <div>
                <button class="btn btn-danger ">Excluir</button>
            </div>
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

</html>