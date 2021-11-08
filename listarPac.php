<?php
include_once("conexao.php");
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Lista de Pacientes</title>
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
                    
                        <fieldset><legend> Dados Pessoais dos Paciente</legend>
                            
                                
                                <?php
                                
                                    //Receber o número da página
                                    $pagina_atual = filter_input(INPUT_GET, 'pagina', FILTER_SANITIZE_NUMBER_INT);
                                    $pagina = (!empty($pagina_atual))? $pagina_atual : 1;
                                    
                                    //Setar a quantidadde de intens por página
                                    $qnt_result_pg = 4;
                                    
                                    //Calcular início da visualização
                                    $inicio = ($qnt_result_pg * $pagina) - $qnt_result_pg;
                                    
                                    $result_pacientes = "SELECT * FROM pacientes LIMIT $inicio, $qnt_result_pg";
                                    $resultado_pacientes = mysqli_query($conn, $result_pacientes);

                                    while($row_adm = mysqli_fetch_assoc($resultado_pacientes)){
                                        echo "<table id='listarPac'>"
                                        . "<tr>";
                                        echo "<td>Nome: </td><td>" . $row_adm['nomepac'] . "</td>";
                                        echo "<td>Idade: </td><td>" . $row_adm['idadepac'] . "</td>";
                                        echo "</tr><tr>";
                                        echo "<td>Endereço: </td><td>" . $row_adm['ruapac'] . "</td>";
                                        echo "<td>Data de Nascimento: </td><td>" . $varData = date("d/m/Y", strtotime($row_adm['ypac'])) . "</td>";
                                        echo "</tr><tr>";
                                        echo "<td>Bairo: </td><td>" . $row_adm['bairropac'] . "</td>";
                                        echo "<td>Sexo: </td><td>" . $row_adm['sexopac'] . "</td>";
                                        echo "</tr><tr>";
                                        echo "<td>Nº Cartão SUS: </td><td>" . $row_adm['cnspac'] . "</td>";
                                        echo "<td>Número: </td><td>" . $row_adm['numpac'] . "</td><br/>";
                                        echo "</tr><tr>";
                                        echo "<td>Ciadade de Origem: </td><td>" . $row_adm['cidpac'] . "</td>";
                                        echo "<td>Telefone: </td><td>" . $row_adm['telpac'] . "</td>";
                                        echo "</tr><tr>";
                                        echo "<td>Nome da Mãe: </td><td>" . $row_adm['nmae'] . "</td>";
                                        echo "<td>RG: </td><td>" . $row_adm['rgpac'] . "</td>";
                                        echo "</tr></table>"
                                        . "<hr/>";
                                    
                                    }
                                    
                                ?>    
                                    
                                
                                
                            
                            <?php
                                //Paginação - Somar a quantidade de usuários
                                    $result_pg = "SELECT COUNT(numpac) AS num_result FROM pacientes";
                                    $resultado_pg = mysqli_query($conn, $result_pg);
                                    $row_pg = mysqli_fetch_assoc($resultado_pg);
                                    //echo $row_pg['num_result'];
                                //Quantidade de páginas]
                                $quantidade_pg = ceil($row_pg['num_result'] / $qnt_result_pg);
                                
                                //Limitar os links antes e depois
                                $max_links = 2;
                                echo "<a href='listarPac.php?pagina=1'>Primeira </a>";
                                
                                for($pag_ant = $pagina - $max_links; $pag_ant <= $pagina - 1; $pag_ant++){
                                    if($pag_ant >= 1){
                                        echo "<a href='listarPac.php?pagina=$pag_ant'>$pag_ant </a>";
                                    }
                                }
                                echo "&nbsp"."$pagina ";
                                
                                for($pag_dep = $pagina + 1; $pag_dep <= $pagina + $max_links; $pag_dep++){
                                    if($pag_ant <= $quantidade_pg){
                                        echo "<a href='listarPac.php?pagina=$pag_dep'>$pag_dep </a>";
                                    }
                                        
                                }
                                
                                echo "<a href='listarPac.php?pagina=$quantidade_pg'>Ultima </a>";
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
