<?php

$servername = "localhost";
$username = "root"; 
$password = "";  
$dbname = "programador_web"; 

$conn = new mysqli($servername, $username, $password, $dbname);

if($conn->connect_error) {
    die("Falha na conexão!" . $conn->connect_error);
}

$nome= $_POST['nome'];
$email= $_POST['email'];
$senha= $_POST['senha'];

$sql = "INSERT INTO usuarios (nome, email, senha) VALUES ('$nome', '$email', '$senha')";

if ($conn->query($sql) === TRUE) {
   header("Location: index.php");
} else {
    echo "Erro: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>