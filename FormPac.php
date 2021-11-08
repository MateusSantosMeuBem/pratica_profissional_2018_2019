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
                    <form method="post" action="processaPac.php">
                        <fieldset><legend> Dados Pessoais do Paciente</legend>
                            <table id="form"><tr>
                                <tr><td><label for="inomepac">Nome Completo: </label></td>
                                <td><input type="text" id="inomepac" name="nomepac" placeholder="Ex: João Silva e Souza" class="campo">
                                </td>


                                <td><label for="iidade">Idade: </label></td>
                                <td><input type="number" id="iidade" name="idadepac" min="0" max="200"></td>


                                <td><label for="irua">Logradouro: </label></td>
                                <td><input type="text" id="irua" name="ruapac" placeholder="Rua, Trav, Avn." class="campo">
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td></tr>

                                <tr><td>
                                <label for="iy">Data de Nascimento: </label></td>
                                <td><input type="date" id="iy" name="ypac" class="campo"></td>


                                <td><label for="ibairro">Bairro: </label></td>
                                <td><select id="ibairro" name="bairropac">
                                    <option value="Juvenil" selected>Juvenil</option>
                                    <option value="Centro">Centro</option>
                                    <option value="São Francsico">São Francsico</option>
                                    <option value="Aparecida">Aparecida</option>
                                    <option value="Santa Clara">Santa Clara</option>
                                    <option value="Cidade Nova">Cidade Nova</option>
                                    <option value="Conquista">Conquista</option>
                                    <option value="Jamary">Jamary</option>
                                </select></td>
                                
                                
                                <td>Sexo:</td>
                                <td><input type="radio" value="M" name="sexopac" checked> Masculino<br/>
                                    <input  type="radio" value="F" name="sexopac"> Feminino
                                </td></tr>

                                <tr><td>
                                <label for="icns">Nº Cartão do SUS: </label></td><td>
                                <input type="text" id="icns" name="cnspac" placeholder=" xxxxx-xxxxx" class="campo"></td>
                                
                                
                                <td><label for="inome">Número: </label></td>
                                <td><input type="number" id="inum" name="numpac" class="campo" min="1" maxlength="8" value="00001" placeholder=" xxxx-xxxx" size="8" maxlength="8">
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                                
                                
                                
                                <td><label for="icid">Cidade: </label></td>
                                <td><select id="icid" name="cidpac">
                                    <option >Ananindeua</option>
                                    <option >Santarém</option>
                                    <option >Terra Santa</option>
                                    <option checked>óbidos</option>
                                </select></td>
                                </tr>
                                
                                <tr>
                                
                                    
                                <td><label for="itelpac">Tel. Contato: </label></td>
                                <td><input type="text" id="itelpac" name="telpac" placeholder=" xxxxxxx-xxxx" class="campo">
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                                 
                                 
                                <td><label for="inmae">Nome da Mãe: </label></td>
                                <td><input type="text" id="inmae" name="nmae" placeholder="Rosilda Tavares" class="campo">
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td> 
                                    
                                <td><label for="irg">RG : </label></td>
                                <td><input type="number" id="irg" name="rgpac" min="0" maxlength="10" placeholder="xxxx-xxxxx" class="campo">
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>   
                                    
                                </tr>
                                
                            </table>
                            <br/>
                            <input type="submit" value="Cadastrar" class="btn"> <a href="javascript:history.go(-1)"><input type="button" value="Voltar" class="btn"></a>
                            <br>
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
