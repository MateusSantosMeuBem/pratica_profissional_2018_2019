<?php

session_start();

include_once("Conexao.php");


//Captura dos Dados Disreto do Formulário

$nomepac = filter_input(INPUT_POST, 'nomepac', FILTER_SANITIZE_STRING);
$idadepac = filter_input(INPUT_POST, 'idadepac', FILTER_SANITIZE_NUMBER_INT);
$ruapac = filter_input(INPUT_POST, 'ruapac', FILTER_SANITIZE_STRING);
$ypac = filter_input(INPUT_POST, 'ypac', FILTER_SANITIZE_STRING);
$bairropac = filter_input(INPUT_POST, 'bairropac', FILTER_SANITIZE_STRING);
$sexopac = filter_input(INPUT_POST, 'sexopac', FILTER_SANITIZE_STRING);
$cnspac = filter_input(INPUT_POST, 'cnspac', FILTER_SANITIZE_NUMBER_INT);
$numpac = filter_input(INPUT_POST, 'numpac', FILTER_SANITIZE_NUMBER_INT);
$cidpac = filter_input(INPUT_POST, 'cidpac', FILTER_SANITIZE_STRING);
$telpac = filter_input(INPUT_POST, 'telpac', FILTER_SANITIZE_STRING);
$nmae = filter_input(INPUT_POST, 'nmae', FILTER_SANITIZE_STRING);
$rgpac = filter_input(INPUT_POST, 'rgpac', FILTER_SANITIZE_NUMBER_INT);

/*

//Teste para verificar o cadastro feito no formulário

echo "Nome: $nomepac </br>";
echo "Idade do Paciente: $idadepac </br>";
echo "Endereço do Paciente: $ruapac </br>";
echo "Data de Nascimento do Paciente: $ypac </br>";
echo "Bairro do Paciente: $bairropac </br>";
echo "Sexo do Paciente: $sexopac </br>";
echo "Cartão do SUS do Paciente: $cnspac </br>";
echo "Número do Paciente: $numpac </br>";
echo "Cidade do Paciente: $cidpac </br>";
echo "Telefone do Paciente: $telpac </br>";
echo "Nome da Mão do Paciente: $nmae </br>";
echo "RG do Paciente: $rgpac </br>";

*/



$result_pac = "INSERT INTO pacientes 
(nomepac, idadepac, ruapac, ypac, bairropac, sexopac, cnspac, numpac, cidpac, telpac, nmae, rgpac) 
VALUES 
('$nomepac', '$idadepac', '$ruapac', '$ypac', '$bairropac', '$sexopac', '$cnspac', '$numpac', '$cidpac', '$telpac', '$nmae', '$rgpac')";


$resultado_pac = mysqli_query($conn, $result_pac);

if(mysqli_insert_id($conn)){
    header("Location: formPac.php");
} else{
    header("Location: formPac.php");
}
 
 