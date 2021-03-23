<?php
    session_start();
    include_once('conexao.php');
    $pesquisa = $conn->real_escape_string($_POST['pesquisa']);

    //criar o comando sql para a busca na base de dados
    $sql =  "SELECT * 
                FROM aluno
                where nome like '%$pesquisa%' 
                or cpf like '%$pesquisa%'
                order by nome";

     //executar o comando sql
     $dadosAlunos = $conn->query($sql);
     if($dadosAlunos->num_rows > 0){
        ?>
        
        
            <table class="table table-striped table-hover">
                    <tr>
                        <td><b>ID</b></td>
                        <td><b>Login</b></td>
                        <td><b>Senha</b></td>
                        <td><b>Email</b></td>
                        <td><b>Nome</b></td>
                        <td><b>Data de Nascimento</b></td>
                        <td><b>CPF</b></td>
                        <td><b>Telefone</b></td>
                        <td><b>Cep</b></td>
                        <td><b>Endereço</b></td>
                        <td><b>Bairro</b></td>
                        <td><b>Cidade</b></td>
                        <td><b>Estado</b></td>
                        <td><b>Vizualizar</b></td>
                        <td><b>Editar</b></td>
                        <td><b>Excluir</b></td>
                        
                        
                    </tr>

                    <?php 

                        //fetch_assoc() retorna cada linha da matriz
                        while($exibir = $dadosAlunos->fetch_assoc()){ 
                            ?>
                            <tr>
                                <td><?php echo $exibir["id"]?></td>
                                <td><?php echo $exibir["login"]?></td>
                                <td><?php echo $exibir["senha"]?></td>
                                <td><?php echo $exibir["email"]?></td>
                                <td><?php echo $exibir["nome"]?></td>
                                <td><?php echo $exibir["dataNasc"]?></td>
                                <td><?php echo $exibir["cpf"]?></td>
                                <td><?php echo $exibir["telefone"]?></td>
                                <td><?php echo $exibir["cep"]?></td>
                                <td><?php echo $exibir["endereco"]?></td>
                                <td><?php echo $exibir["bairro"]?></td>
                                <td><?php echo $exibir["cidade"]?></td>
                                <td><?php echo $exibir["estado"]?></td>
                                
                                <td> <div class = "hover"> <a href="vizualizar-dados-do-aluno.php?id=<?php echo $exibir["id"]?>"><img src="img/search-line (2).png" title="Vizualizar"></a></div> </td>
                                <td> <div class="hover"> <a href="editar-autor.php?id=<?php echo $exibir["id"]?>"><img src="img/edit-box-line (1).png" title="Editar"></a> </div></td>
                                <td> <div class= "hover"><a href="#" onclick="confirmarExclusao('<?php echo $exibir["id"] ?> ',' <?php echo $exibir["nome"]?>')" ><img src="img/delete-bin-6-line (1).png " title="Excluir"></a></div> </td>
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