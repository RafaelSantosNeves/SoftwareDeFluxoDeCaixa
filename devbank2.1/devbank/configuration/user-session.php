<?php

//verifica se a secao do usuario existe !

 if(!isset($_SESSION)){

//         // caso ela nao exista cria a sessao de usuario
        session_start();

//         //verifica se o usuario fez o login
       if(!isset($_SESSION["email"])){


//             // caso o usuario nao tenha feito o login, redireciona para o login
            header("Location: ../../login/form-login.php");
        };
};

// if(!isset($_SESSION['email']) == true  and(!isset($_senha) == true )){
//     header('Location: ../login/form-login.php');
// }
?>