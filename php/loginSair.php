<?php
    session_start();   
    unset(
        $_SESSION['loginFunc']
     );   
    
    //redirecionar o usuario para a página de login
    header("Location: ../index.html");
?>