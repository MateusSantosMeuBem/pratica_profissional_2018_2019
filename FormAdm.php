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
                    <form method="post" action="processaAdm.php">
                        <fieldset><legend> Dados do Administrador</legend>
                            <table id="formAdm"><tr>
                                <tr>
                                    
                                    <td><label for="inomeadm">Nome Completo: </label></td>
                                    <td><input type="text" id="inomeadm" name="nomeadm" placeholder=" Ex: João Silva e Souza"  class="campoAdm">
                                    </td>
                                    
                                    
                                    <td><label for="imat">Matrícula: </label></td>
                                    <td><input type="number" id="imat" name="matadm"  min="1" max="9999999999" placeholder=" null" class="campoAdm">
                                    </td>
                                    
                                    <td><label for="iemail">Email: </label></td>
                                    <td><input type="email" id="iemail" name="emailadm" placeholder=" Ex: joao@ifpa.com" class="campoAdm">
                                    </td>
                                    
                                    
                                </tr>

                                <tr>
                                    
                                    <td><label for="iteladm">Tel. Contato: </label></td>
                                    <td><input type="text" id="iteladm" name="teladm" placeholder=" xxxxxxxxxx" class="campoAdm">
                                    </td>
                                    
                                    
                                    <td><label for="isen">Senha: </label></td>
                                    <td><input type="password" id="isen" name="senadm" placeholder=" mn. 8 dígitos" class="campoAdm">
                                    </td>
                                    
                                    
                                    <td><label for="isenc">Confirmar Senha: </label></td>
                                    <td><input type="password" id="isenc" name="sencadm"  class="campoAdm">
                                    </td>
                                    
                                </tr>
                            </table>
                            <br/>
                            <input type="submit" value="Cadastrar" class="btn"> <a href="javascript:history.go(-1)"><input type="button" value="Voltar" class="btn"></a>
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
