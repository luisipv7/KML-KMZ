<<<<<<< HEAD
<?php
    session_start();   
    unset(
        $_SESSION['usuario'],
        $_SESSION['senha'],
        $_SESSION['cargo']
    );   
    $_SESSION['logindeslogado'] = "Deslogado com sucesso";
    //redirecionar o usuario para a página de login
    header("Location: index.php");
=======
<?php
    session_start();   
    unset(
        $_SESSION['usuario'],
        $_SESSION['senha'],
        $_SESSION['cargo']
    );   
    $_SESSION['logindeslogado'] = "Deslogado com sucesso";
    //redirecionar o usuario para a página de login
    header("Location: index.php");
>>>>>>> f191fbf5a0101a9d2e204414021ed87a88ff5059
?>