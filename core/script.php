<?php

session_start();

include_once("conexao.php");

    $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);

    // echo "Nome: $nome <br>";
    // echo "Emal: $email";


$result_usuario = "INSERT INTO usuarios (nome, email, created) VALUES ('$nome', '$email', NOW())";

$resultado_usuario = mysqli_query($conn, $result_usuario);

if(mysqli_insert_id($conn)){
    $_SESSION['msg'] = "Usuário cadastrado com sucesso";
    header("Location: ./index.php");
}else{
    header("Location: index.php");
}

?>

