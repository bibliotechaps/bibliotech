<?php
    session_start();
    include_once('conexao.php');
    $pesquisa = $conn->real_escape_string($_POST['pesquisa']);

    //criar o comando sql para a busca na base de dados
    $sql =  "SELECT * 
                FROM livro
                where titulo like '%$pesquisa%' 
                or anoEdicao like '%$pesquisa%'
                order by titulo";

     //executar o comando sql
     $dadosLivros = $conn->query($sql);
     if($dadosLivros->num_rows > 0){
        ?>
        <table class="table table-striped table-hover">
                    <tr>
                        <td><b>ID</b></td>
                        <td><b>ISBN</b></td>
                        <td><b>Título</b></td>
                        <td><b>Ano</b></td>
                        <td><b>Páginas</b></td>
                        <td><b>Volume</b></td>
                        <td><b>Editora</b></td>
                        <td><b>Autor</b></td>
                        <td><b>Vizualizar</b></td>
                        <td><b>Editar</b></td>
                        <td><b>Excluir</b></td>
                        
                    </tr>

                    <?php 

                        //fetch_assoc() retorna cada linha da matriz
                        while($exibir = $dadosLivros->fetch_assoc()){ 
                            ?>
                            <tr>
                                <td><?php echo $exibir["id"]?></td>
                                <td><?php echo $exibir["isbn"]?></td>
                                <td><?php echo $exibir["titulo"]?></td>
                                <td><?php echo $exibir["anoEdicao"]?></td>
                                <td><?php echo $exibir["numPaginas"]?></td>
                                <td><?php echo $exibir["volume"]?></td>
                                <?php
                                //busca os dados da editora com base no código da tabela de livros
                                $sqlEditora = "SELECT * FROM editora WHERE id = " . $exibir["editora_id"];
                                $dadosEditora = $conn->query($sqlEditora);
                                $editora = $dadosEditora->fetch_assoc();
                                ?>
                                <td><?php echo $editora["nome"]?></td>
                                <?php
                                //busca os dados do autor com base no código da tabela de livros
                                $sqlAutor = "SELECT * FROM autor WHERE id = " . $exibir["autor_id"];
                                $dadosAutor = $conn->query($sqlAutor);
                                $autor = $dadosAutor->fetch_assoc();
                                ?>
                                <td><?php echo $autor["nome"]?></td>
                                <td> <div class = "hover"> <a href="vizualizar-dados-livro.php?id=<?php echo $exibir["id"]?>"><img src="img/search-line (2).png" title="Vizualizar"></a></div> </td>
                                <td> <div class="hover"> <a href="editar-livro.php?id=<?php echo $exibir["id"]?>"><img src="img/edit-box-line (1).png" title="Editar"></a> </div></td>
                                <td> <div class= "hover"><a href="#" onclick="confirmarExclusao('<?php echo $exibir["id"] ?> ',' <?php echo $exibir["titulo"]?>')" ><img src="img/delete-bin-6-line (1).png " title="Excluir"></a></div> </td>
                            </tr>
                            <?php
                        }

                    ?>

                </table>

                <br> 
                <br>
        


     <?php
         
     }         
     else{
        echo "Nenhum registro retornado! Verifique seus filtros.";
        ?>
            <br>
            <br>
           
        <?php
     }
?>