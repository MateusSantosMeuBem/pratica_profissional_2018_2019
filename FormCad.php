<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Preencher Ficha</title>
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
                    
                    
                    <div class="cad">
                            <br/><h1>Quem você quer que cadastrar?</h1>
                            <a href="FormPac.php"><img src="imagens/pac.png" style="width: 200px" ></a>
                                <?php
                                    $n = 5;
                                    for($c = 1; $c <= $n; $c++){
                                        echo"&nbsp;";
                                    }
                                ?>
                            <a href="FormAdm.php"><img src="imagens/adm.png" style="width: 200px"></a>
                        
                    </div>
                     <br/><br/>
                     
                                <?php
                                    $n = 20;
                                    for($c = 1; $c <= $n; $c++){
                                        echo"&nbsp;";
                                    }
                                ?>
                    <br/>
                    
                    <div class="cad">
                            <br/><h1>Quem você está procurando?</h1>
                            <a href="listarPac.php"><img src="imagens/pac.png" style="width: 200px" ></a>
                                <?php
                                    $n = 5;
                                    for($c = 1; $c <= $n; $c++){
                                        echo"&nbsp;";
                                    }
                                ?>
                            <a href="listarAdm.php"><img src="imagens/adm.png" style="width: 200px"></a>
                        
                    </div>
                     <br/><br/>
                     
                                <?php
                                    $n = 20;
                                    for($c = 1; $c <= $n; $c++){
                                        echo"&nbsp;";
                                    }
                                ?>
                     
                     <a href="javascript:history.go(-1)"><input type="button" value="Voltar" class="btn"></a><br/><br/>
                    <br/>
                </div>
                <?php      
                    require_once('footer.php');
                ?>
            </div>
    </body>
</html>
