<?php
$servidor = "localhost";
$usuario = "root";
$senha = "root ";
$dbname = "sa";

//Criar a conexao
$conn = mysqli_connect($servidor, $usuario, $senha,$dbname);
// $conn = new mysqli($servidor, $usuario, $senha,$dbname);

// if($conn->connect_errno)
// 	echo "Falha na conexão: (".$conn->connect_errno.")" .$conn->connect_error;


// mysql_select_db($dbname, $conn);

?>