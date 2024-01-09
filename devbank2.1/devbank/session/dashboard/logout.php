<?php

echo "saindo";

session_start();


session_destroy();

// jogando como a pagina index
header('Location: ../../login/form-login.php');
exit;
?>