<?php
include_once('../configuration/connection.php');
session_start();
if(isset($_POST['submit']) && !empty($_POST['email']) and !empty($_POST['senha'])){

    //acessa sistema
    
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    //está chegando o post email e senha na variavel senha e email
    // print_r('Email:' . $email . "<br>");
    // print_r('senha:' . $senha);

$sql = "SELECT * FROM usuario WHERE email = '$email' and senha= SHA1('$senha') and ativo='1';" ;

$resultado = mysqli_query($conexao, $sql);
// print_r(($resultado));

// print_r($sql);
if(mysqli_num_rows($resultado)< 1){
    // print_r("nop");

    // destroi os dados
    unset($_SESSION['email']);
    unset($_SESSION['senha']);
    header('Location: ../login/form-login.php');
}
else{
    $_SESSION['email'] = $email;
    $_SESSION['senha'] = $senha;

    header('Location: ../session/dashboard/dashboard.php');
}
}
else{
    header('Location: ../login/form-login.php');
}
?>