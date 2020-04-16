<?php

include 'potfolio.php';


$nome = $_POST['nome'];
$email = $_POST['email'];
$comentario = $_POST['comentario'];

$query = "INSERT INTO DADOS(nome, email, comentario) VALUES ('$nome','$email','$comentario')";

mysqli_query($conexao,$query);

header('location:index.php');

?>