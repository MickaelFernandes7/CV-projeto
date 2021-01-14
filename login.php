<?php
//declaração de servidor, indireta.
$server = 'localhost';
$user = 'root';
$password = 'root';
$database = 'projeto2';

//Criar conexão ao banco de dados
$strcon = mysqli_connect($server, $user, $password, $database); 
// Teste de Conexão - Check Connection.
#se a conexão falhou,  metodo die, encerra a conexão
if (!$strcon) {
    die('Não foi possível conectar ao MySQL'. mysqli_connect_error());
  }
 //Continuação do código em login2.php
?>