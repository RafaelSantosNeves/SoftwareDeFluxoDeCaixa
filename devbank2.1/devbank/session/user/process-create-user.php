<?php
 //Chamada para o arquivo que verifica se o usuário está logado.
 include('../../configuration/connection.php');
 //variaveis que irao receber os dados via post do formulario;
 include("../../configuration/connection.php");
 session_start();

$nome = $_POST["nome"];
$cpf = $_POST["cpf"];
$email = $_POST["email"];
$senha = $_POST["senha"];
$confirmarSenha = $_POST["confirmarSenha"];

//Instrução que verifica se o CPF já existe no banco de dados.
$SQLVerificaCPF = "SELECT cpf FROM usuario WHERE cpf = '$cpf' ;";
$SQLVerificaEmail = "SELECT email FROM usuario WHERE email = '$email' ;";

//Executa a consulta do CPF.
$consultaCPF = mysqli_query($conexao, $SQLVerificaCPF);
$consultaEmail = mysqli_query($conexao, $SQLVerificaEmail);

if($senha != $confirmarSenha){
    //Cria uma variável de retorno usando a sessão.
    $_SESSION['retorno'] = "As senhas não coincidem!!!";

    //Redireciona o usuário.
    header("location: form-create-user.php");

//verifica se ja tem um cpf igual cadastrado
}else if(mysqli_num_rows($consultaCPF) > 0){

    //Encerra a conexão com o BD.
    mysqli_close($conexao);

    //Cria uma variável de retorno usando a sessão.
    $_SESSION['retorno'] = "O CPF digitado já está cadastro!!!";

    //Redireciona o usuário.
    header("location: form-create-user.php");

//verifica se ja tem um email igual cadastrado
}else if(mysqli_num_rows($consultaEmail) > 0){

    //Encerra a conexão com o BD.
    mysqli_close($conexao);

    //Cria uma variável de retorno usando a sessão.
    $_SESSION['retorno'] = "O email digitado já está cadastro!!!";

    //Redireciona o usuário.
    header("location: form-create-user.php");
}else{

    // introducao SQl
    $sql= "INSERT INTO usuario (nome,
                                cpf,
                                email,
                                senha,
                                ativo)
                                SELECT '$nome', '$cpf', '$email', SHA1('$senha'), 1 FROM DUAL WHERE NOT EXISTS (SELECT * FROM usuario WHERE email = '$email' OR cpf = '$cpf')";

    //Faz a tentativa de inserção dos dados no BD.
    if (mysqli_query($conexao, $sql)) {
            
        //Encerra a conexão com o BD.
        if(mysqli_affected_rows($conexao) == 0){
                // print_r("good");
            mysqli_close($conexao);

            $_SESSION['retorno'] = "Não foi possível cadastrar o usuário!!!";
            header('location: ../session/form-create.php');
            
        }
        else{
            header("location: ../../login/form-login.php");
        }
        
    } else{
        header("location: form-create-user.php");
    }
}