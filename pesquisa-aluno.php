<?php
    session_start();
    include_once('conexao.php');
    $pesquisa = $conn->real_escape_string($_POST['pesquisa']);

    //criar o comando sql para a busca na base de dados
    $sql =  "SELECT * 
                FROM aluno
                where cpf like '%$pesquisa%' 
                order by nome";

     //executar o comando sql
     $dadosAlunos = $conn->query($sql);
     if($dadosAlunos->num_rows > 0){
        ?>
        <table class="table table-striped table-hover">
                    <tr>
                        <td><b>nome</b></td>
                        <td><b>cpf</b></td>
                        <td><b>email</b></td>
                        <td><b>login</b></td>
                        <td><b>telefone</b></td>
                        <td><b>datanasc</b></td>
                        <td><b>cep</b></td>
                        <td><b>endereco</b></td>
                        <td><b>bairro</b></td>
                        <td><b>cidade</b></td>
                        <td><b>estado</b></td>
                        <td><b>Vizualizar</b></td>
                        <td><b>Editar</b></td>
                        <td><b>Excluir</b></td>
                        
                        
                    </tr>

                    <?php 

                        //fetch_assoc() retorna cada linha da matriz
                        while($exibir = $dadosAlunos->fetch_assoc()){ 
                            ?>
                            <tr>
                                <td><?php echo $exibir["nome"]?></td>
                                <td><?php echo $exibir["cpf"]?></td>
                                <td><?php echo $exibir["email"]?></td>
                                <td><?php echo $exibir["login"]?></td>
                                <td><?php echo $exibir["telefone"]?></td>
                                <td><?php echo $exibir["dataNasc"]?></td>
                                <td><?php echo $exibir["cep"]?></td>
                                <td><?php echo $exibir["endereco"]?></td>
                                <td><?php echo $exibir["bairro"]?></td>
                                <td><?php echo $exibir["cidade"]?></td>
                                <td style="text-transform: uppercase"><?php echo $exibir["estado"]?></td>
                                <td> <div class = "hover"> <a href="perfil-aluno.php?id=<?php echo $exibir["id"]?>"><img src="img/search-line (2).png" title="Vizualizar"></a></div> </td>
                                <td> <div class="hover"> <a href="perfil-editable-aluno.php?id=<?php echo $exibir["id"]?>"><img src="img/edit-box-line (1).png" title="Editar"></a> </div></td>
                                <td> <div class= "hover"><a href="#" onclick="confirmarExclusao('<?php echo $exibir["id"] ?> ',' <?php echo $exibir["nome"]?>')" ><img src="img/delete-bin-6-line (1).png " title="Excluir"></a></div> </td>

                                <?php
                                //busca os dados do cpf com base no código da tabela de livros
                                $sqlcpf = "SELECT cpf FROM aluno WHERE id = " . $exibir["cpf"];
                                $dadoscpf = $conn->query($sqlcpf);
                                $dadoscpfaluno = $dadosaluno->fetch_assoc();
                                ?>
                                <td><?php echo $cpf["nome"]?></td>
                                <td> <div class = "hover"> <a href="perfil-aluno.php?id=<?php echo $exibir["id"]?>"><img src="img/search-line (2).png" title="Vizualizar"></a></div> </td>
                                <td> <div class="hover"> <a href="perfil-editable-aluno.php?id=<?php echo $exibir["id"]?>"><img src="img/edit-box-line (1).png" title="Editar"></a> </div></td>
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