<?php
session_start();
include_once('conexao.php');
//receber os dados do form 
if(isset($_POST['txtTitulo'])){
    $titulo = $_POST["txtTitulo"];
    $autor = $_POST["autor_id"];
    $editora = $_POST["editora_id"];
    $ano = $_POST["IntAnoEdicao"];
    $paginas = $_POST["IntNumeroPag"];
    $volume = $_POST["Volume"];
    $isbn = $_POST["txtISBN"];


// criar o comando update

$sql = "UPDATE bibliotech.livro SET titulo = '$titulo', 
autor_id = '$autor', 
editora_id = '$editora', 
anoEdicao = '$ano', 
numPaginas = '$paginas', 
volume = '$volume', 
isbn = '$isbn' 
WHERE id = " . $_GET['id'];

//echo $sql;

//executar o comando

if ($conn->query($sql) === TRUE) {
    ?>

    <script>
    alert("Registro atualizado com sucesso!");
    window.location = "consultar-livro.php";
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
    <title>Editar Livro</title>

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
            <a href="perfil-admin.php"><img src="img/profile.png" alt="imagem profile" title="Perfil"></a>
        </div>
        <div id="icone-sair" class="hover">
            <img src="img/logout.png" alt="imagem login" title="Sair">Sair
        </div>
        <div class="hover" id="icone-home">
            <a href="inicial.php"><img src="img/home.png" alt="imagem home" title="Página Inicial"></a>Inicial
        </div>
    </div>

    <?php 
    if(isset($_GET['id'])){
        $sql = "SELECT * FROM bibliotech.livro WHERE id = ". $_GET['id'];
        //echo $sql;
        $consulta = $conn->query($sql);
        $livro = $consulta->fetch_assoc();
        }
    
    ?>

    <div class="container" id="menor">
        <form method="post" autocomplete="on" action = "editar-livro.php?id=<?php echo $_GET['id']?>">



            <!--Título-->
            <div class="col-12 mb-2">
                <h1 id="title"><b> Editar Livro </b></h1>
                <hr>
            </div>



            <div class="row justify-content-md-center ">
                <div class="form-group col-auto col-6 col-lg-4 col-xl-3">
                    <label style="margin: auto;" for="txtTitulo">Título:</label>
                    <input type="text" name="txtTitulo" id="txtTitulo" placeholder="Nome do livro:" class="form-control" autofocus required value="<?php echo $livro['titulo'] ?>">
                </div>

                <div class="form-group col-auto col-6
        col-lg-4 
        col-xl-3">
                    <label style="margin: auto;" for="txtAutor">Autor:</label> <br>
                    <select name="autor_id" class="form-control" required>
                        <?php
                        include_once('conexao.php');

                        $sqlAutor = "SELECT id, nome FROM autor ORDER BY nome";

                        $nomeAutor = $conn->query($sqlAutor);

                        while($rowAutor = $nomeAutor->fetch_assoc()){
                            ?>

                            <option value="<?php echo $rowAutor["id"]; ?>" <?php echo ($rowAutor["id"] == $livro["autor_id"]) ? "selected" : "" ?> >
                            <?php echo $rowAutor["nome"]; ?>
                            
                            </option>
                             <?php
                        }

                        ?>
                    </select>

                </div>

                <div class="form-group col-auto col-6
        col-lg-4 
        col-xl-3">
                    <label style="margin: auto;" for="txtEditora">Editora:</label> <br>
                    <select name="editora_id" class="form-control" required>
                        <?php
                        include_once('conexao.php');

                        $sqlEditora = "SELECT id, nome FROM editora ORDER BY nome";

                        $nomeEditora = $conn->query($sqlEditora);

                        while($rowEditora = $nomeEditora->fetch_assoc()){
                            ?>

                            <option value="<?php echo $rowEditora["id"]; ?>" <?php echo ($rowEditora["id"] == $livro["editora_id"]) ? "selected" : "" ?> >
                            <?php echo $rowEditora["nome"]; ?>
                            
                            </option>
                             <?php
                        }

                        ?>
                    </select>
     
                </div>
            </div>


            <div class="row justify-content-md-center ">


                <div class="form-group col-auto col-6
        col-lg-4 
        col-xl-3">
                    <label style="margin: auto;" for="IntAnoEdicao">Ano de Edição:</label> <br>
                    <input type="number" name="IntAnoEdicao" id="IntAnoEdicao" placeholder="Ano de edição:" class="form-control" required value="<?php echo $livro['anoEdicao'] ?>" onkeypress="$(this).mask('0000')">
                </div>

                <div class="form-group col-auto col-6
        col-lg-4 
        col-xl-3">
                    <label style="margin: auto;" for="IntNumeroPag">Número de Páginas:</label> <br>
                    <input type="number" name="IntNumeroPag" id="IntNumeroPag" placeholder="Número de páginas:" class="form-control" required value="<?php echo $livro['numPaginas'] ?>" onkeypress="$(this).mask('0000')">
                </div>

                <div class="form-group col-auto col-6
        col-lg-4 
        col-xl-3">  
                    <label style="margin: auto;" for="Volume">Volume:</label> <br>
                    <input type="number" name="Volume" id="Volume" placeholder="Informe o volume:" class="form-control" required value="<?php echo $livro['volume'] ?>" onkeypress="$(this).mask('00')" >
                </div>
            </div>


            <div class="row justify-content-md-center ">
                <div class="form-group col-auto col-6
        col-lg-4 s
        col-xl-3">
                    <label style="margin: auto;" for="txtISBN">ISBN:</label> <br>
                    <input type="text" name="txtISBN" id="txtISBN" placeholder="Informe o ISBN do livro:" class="form-control" required value="<?php echo $livro['isbn'] ?>" onkeypress="$(this).mask('000-00-000-0000-0')" required minlength="17" maxlength="17">
                </div>

            </div>


            <div class="row justify-content-md-center">
                <div style="align-items: center;">
                    <input type="submit" class="btn btn-success" value="salvar">
                    <a href="consultar-livro.php"><button type="button" class="btn btn-danger">Cancelar</button></a>
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

        <!-- 
     <div class="row justify-content-center">
        <div class="mr-1">
            <input type="submit" class="btn btn-success" value="salvar"> 
        </div>
        <div>
            <a href="ConsultarLivro.php"><button type="button" class="btn btn-danger">Cancelar</button></a>
        </div>
    </div>
-->


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