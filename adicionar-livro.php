<?php
include_once("conexao.php");
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adicionar Livro</title>
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

    


    <div class="container" id="menor">

    

        <form method="post" autocomplete="off" action="insert-livro.php">

        

            <!--Título-->
            <div class="col-12 mb-2">
                <h1 id="title"><b> Adicionar Livro </b></h1>
                <hr>
            </div>



            <div class="row justify-content-md-center ">
                <div class="form-group col-auto col-6 col-lg-4 col-xl-3">
                    <label style="margin: auto;" for="titulo">Título:</label>
                    <input type="text" name="titulo" placeholder="Título do livro:" class="form-control" autofocus required>
                </div>

                <div class="form-group col-auto col-6
                            col-lg-4 
                            col-xl-3">
                    <label for="autor_id" class="control-label" style="margin: auto;"> Autor:  </label>
                    <select name="autor_id" class="form-control" required>
                        <?php
                        $result_niveis_autor = "SELECT * FROM autor";
                        $resultado_niveis_autor = mysqli_query($conn, $result_niveis_autor);
                        while ($row_niveis_autor = mysqli_fetch_assoc($resultado_niveis_autor)) { ?>
                            <option value="<?php echo $row_niveis_autor['id']; ?>"><?php echo $row_niveis_autor['nome']; ?>
                            </option><?php
                                    }
                                        ?>
                    </select>
                </div>

                <div class="form-group col-auto col-6
        col-lg-4 
        col-xl-3">
                    <label for="editora_id" class="control-label" style="margin: auto;">Editora: </a></label>
                    <select name="editora_id" class="form-control" required>
                        <?php
                        $result_niveis_editora = "SELECT * FROM editora";
                        $resultado_niveis_editora = mysqli_query($conn, $result_niveis_editora);
                        while ($row_niveis_editora = mysqli_fetch_assoc($resultado_niveis_editora)) { ?>
                            <option value="<?php echo $row_niveis_editora['id']; ?>"><?php echo $row_niveis_editora['nome']; ?>
                            </option><?php
                                    }
                                        ?>
                    </select>
                </div>                
                    
                
                 
                
            </div>


            <div class="row justify-content-md-center ">


                <div class="form-group col-auto col-6 
        col-lg-4 
        col-xl-3">
                    <label style="margin: auto;" for="anoEdicao">Ano de Edição:</label> <br>
                    <input type="number" name="anoEdicao" placeholder="Ano de edição:" class="form-control" required onkeypress="$(this).mask('0000')">
                </div>

                <div class="form-group col-auto col-6
        col-lg-4 
        col-xl-3">
                    <label style="margin: auto;" for="numPaginas">Número de Páginas:</label> <br>
                    <input type="number" name="numPaginas" id="numPaginas" placeholder="Número de páginas:" class="form-control" required onkeypress="$(this).mask('0000')">
                </div>

                <div class="form-group col-auto col-6
        col-lg-4 
        col-xl-3">
                    <label style="margin: auto;" for="volume">Volume:</label> <br>
                    <input type="number" name="volume" placeholder="Informe o volume:" class="form-control" required onkeypress="$(this).mask('00')">
                </div>

            </div>


            <div class="row justify-content-md-center ">
                <div class="form-group col-auto col-6
        col-lg-4 
        col-xl-3">
                    <label style="margin: auto;" for="isbn">ISBN:</label> <br>
                    <input type="text" name="isbn" placeholder="Informe o ISBN do livro:" class="form-control" required onkeypress="$(this).mask('000-00-000-0000-0')" required minlength="17" maxlength="17">
                </div>

            </div>


            <div class="row justify-content-md-center">

                <div style="align-items: center;">
                    <input type="submit" class="btn btn-success" name="btnAdicionar" value="Adicionar">
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
                    <a href="equipe.html"><img src="img/team.png" alt="IconeTeam"></a>Conheça nossa equipe
                </div>
            </div>
        </div>
    </div>

</body>

</html>