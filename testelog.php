<?php
include_once('config.php');
session_start();

if(empty($_POST['email']) || empty($_POST['senha'])){
    header('Location: login.php');
    exit();
    
} else {
    
$email = mysqli_real_escape_string($conexao, trim($_POST['email']));
$senha = mysqli_real_escape_string($conexao, trim($_POST['senha']));

    
$sql = "SELECT email, senha, tipo FROM usuario WHERE email = '$email' AND senha = md5('{$senha}')";
$result = mysqli_query($conexao, $sql);

if ($result->num_rows == 1) {
    
    $row = $result->fetch_assoc();
    $_SESSION['tipo'] = $row['tipo'];
    $_SESSION['email'] = $email;
    $_SESSION['senha'] = $senha;
    if($row["tipo"] == 'comum') {
       header ("Location: home.php");
    } elseif ($row ['tipo'] == 'profissional') {
        header ("Location: homeProf.php");
    } else {
        echo "Tipo de usuario desconhecido";
    }
} else {
        header('Location: login.php?erro=1');
    }
}
?>
