<?php

session_start();

include_once("Conexao.php");


//Captura dos Dados Disreto do Formulário

$nomeadm = filter_input(INPUT_POST, 'nomeadm', FILTER_SANITIZE_STRING);
$matadm = filter_input(INPUT_POST, 'matadm', FILTER_SANITIZE_NUMBER_INT);
$emailadm = filter_input(INPUT_POST, 'emailadm', FILTER_SANITIZE_EMAIL);
$teladm = filter_input(INPUT_POST, 'teladm', FILTER_SANITIZE_STRING);
$senadm = filter_input(INPUT_POST, 'senadm', FILTER_SANITIZE_STRING);
$sencadm = filter_input(INPUT_POST, 'sencadm', FILTER_SANITIZE_STRING);

//Criptografia da senha do adm
$senadm = md5($senadm);


/*
//Teste para verificar o cadastro feito no formulário

echo "Nome: $nomeadm </br>";
echo "Matrícula do Administrador: $matadm </br>";
echo "Email: $emailadm </br>";
echo "Telefone: $teladm </br>";
echo "Senha: $senadm </br>";
echo "Senha: $sencadm </br>";
*/



$result_adm = "INSERT INTO adms 
(nomeadm, matadm, emailadm, teladm, senadm, sencadm) 
VALUES 
('$nomeadm', '$matadm', '$emailadm', '$teladm', '$senadm', '$sencadm')";


$resultado_adm = mysqli_query($conn, $result_adm);

if(mysqli_insert_id($conn)){
    header("Location: formAdm.php");
} else{
    header("Location: formAdm.php");
}
 
 