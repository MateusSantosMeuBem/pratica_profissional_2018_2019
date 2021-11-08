<?php
include_once("conexao.php");
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Lista de Usuários</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="css/folhaEstilo.css"/>
       
    </head>
    <body>
        <br/>
            <div class="page">
                <div class="menu">    
                     <table id="menu"> 
                        <tr>
                        <td><a href="formCad.php" class="menu">Cadastrar/Pesquisar</a></td>
                        <td><a href="inicio.php" class="menu">Sair</a></td>
                        </tr>
                        <br/>
                     </table>
                    <br/>
                </div>
                <div class="logo">
                        <div class="img1">
                            <img src="imagens/logo4k2.png" width="350px">
                        </div>
                        <div class="NomeUPA">
                            <h1>Sistema UPA - ICUÍ II</h1>
                        </div>
                    
                    </div>
                <div class="dadosp">
                    
                        <fieldset><legend> Dados Pessoais dos Usuários</legend>
                            
                                
                                <?php
                                    
                                    //Receber o número da página
                                    $pagina_atual = filter_input(INPUT_GET, 'pagina', FILTER_SANITIZE_NUMBER_INT);
                                    $pagina = (!empty($pagina_atual))? $pagina_atual : 1;
                                    
                                    //Setar a quantidadde de intens por página
                                    $qnt_result_pg = 2;
                                    
                                    //Calcular início da visualização
                                    $inicio = ($qnt_result_pg * $pagina) - $qnt_result_pg;
                                
                                    $result_adms = "SELECT * FROM adms";
                                    $resultado_adms = mysqli_query($conn, $result_adms);

                                    while($row_usuario = mysqli_fetch_assoc($resultado_adms)){
                                        echo "<table id='listarAdm'>"
                                        . "<tr>";
                                        echo "<td>Nome: </td><td>" . $row_usuario['nomeadm'] . "</td>";
                                        echo "<td>N° da Matrícula: </td><td>" . $row_usuario['matadm'] . "</td>";
                                        echo "</tr><tr>";
                                        echo "<td>E-mail: </td><td>" . $row_usuario['emailadm'] . "</td>";
                                        echo "<td>Telefone: </td><td>" . $row_usuario['teladm'] . "</td>";
                                        echo "</tr></table>"
                                        . "<hr/>";
                                    
                                    }
                                ?>    
                                    
                                
                            
                            
                                <?php
                                    //Paginação - Somar a quantidade de usuários
                                        $result_pg = "SELECT COUNT(matadm) AS num_result FROM adms";
                                        $resultado_pg = mysqli_query($conn, $result_pg);
                                        $row_pg = mysqli_fetch_assoc($resultado_pg);
                                        //echo $row_pg['num_result'];
                                        
                                    //Quantidade de páginas]
                                    $quantidade_pg = ceil($row_pg['num_result'] / $qnt_result_pg);

                                    //Limitar os links antes e depois
                                    $max_links = 2;
                                    echo "<a href='listarAdm.php?pagina=1'>Primeira </a>";

                                    for($pag_ant = $pagina - $max_links; $pag_ant <= $pagina - 1; $pag_ant++){
                                        if($pag_ant >= 1){
                                            echo "<a href='listarAdm.php?pagina=$pag_ant'>$pag_ant </a>";
                                        }
                                    }
                                    echo "&nbsp"."$pagina ";

                                    for($pag_dep = $pagina + 1; $pag_dep <= $pagina + $max_links; $pag_dep++){
                                        if($pag_ant <= $quantidade_pg){
                                            echo "<a href='listarAdm.php?pagina=$pag_dep'>$pag_dep </a>";
                                        }
                                        
                                }
                                
                                echo "<a href='listarAdm.php?pagina=$quantidade_pg'>Ultima </a>";
                            ?>
                            
                            <br/>
                            <a href="javascript:history.go(-1)"><input type="button" value="Voltar" class="btn"></a>
                            <br>
                        </fieldset>
                    <br/>
                </div>
                <?php      
                    require_once('footer.php');
                ?>
            </div>
    </body>
</html>
