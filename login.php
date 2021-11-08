<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Preencher Ficha</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="css/folhaEstilo.css"/>
       
    </head>
    <body>
        </br>
            <div class="page">
                <div class="menu">    
                     <table id="menu"> 
                        <tr>
                        <td><a href="inicio.php" class="menu">Início</a></td>
                        <td><a  href="login.php" class="menu">Entrar</a></td>
                        </tr>
                        <br/>
                     </table>
                    <br/>
                </div>
                <div class="logo">
                        <div class="    img1">
                            <img src="imagens/logo4k2.png" width="350px">
                        </div>
                        <div class="NomeUPA">
                            <h1>Sistema UPA - UCUÍ II</h1>
                        </div>
                    
                    </div>
                <div class="dadosp">
                    <form id="formlog" method="post" action="validalogin.php">
                        <fieldset><legend> Login</legend>
                            <table id="formlog"><tr>
                                <tr>
                                    
                                    <td><label for="inomeadm">Matrícula: </label></td>
                                    <td><input type="text" id="inomeadm" name="nomeadm" class="campo" width="1000px">
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                                    
                                    
                                </tr>

                                <tr>
                                    
                                    <td><label for="isen">Senha: </label></td>
                                    <td><input type="password" id="isen" name="sen" class="campo">
                                    </td>   
                                    
                                </tr>
                            </table>
                            <br/>
                            <input type="submit" value="Entrar" class="btn"/><a href="javascript:history.go(-1)"><input type="button" value="Voltar" class="btn"></a>
                        </fieldset>
                        <br/>
                    </form>
                </div>
                <?php      
                    require_once('footer.php');
                ?>
            </div>
    </body>
</html>
