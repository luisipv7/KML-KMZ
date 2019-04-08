<<<<<<< HEAD
<?php
    session_start(); 
        //Incluindo a conexão com banco de dados   
    include_once("conecta.php");    
    //O campo usuário e senha preenchido entra no if para validar
    if((isset($_POST['usuario'])) && (isset($_POST['senha']))){
        $usuario = mysqli_real_escape_string($conn, $_POST['usuario']); //Escapar de caracteres especiais, como aspas, prevenindo SQL injection
        $senha = mysqli_real_escape_string($conn, $_POST['senha']);
       // $senha = md5($senha);
            
        //Buscar na tabela usuario o usuário que corresponde com os dados digitado no formulário
        $result_usuario = "SELECT * FROM entra WHERE usuario = '$usuario' && senha = '$senha' LIMIT 1";
        $resultado_usuario = mysqli_query($conn, $result_usuario);
        $resultado = mysqli_fetch_assoc($resultado_usuario);
        
        //Encontrado um usuario na tabela usuário com os mesmos dados digitado no formulário
        if(isset($resultado)){
            $_SESSION['usuario'] = $resultado['usuario'];
            $_SESSION['senha'] = $resultado['senha'];
            $_SESSION['cargo'] = $resultado['cargo'];
            if($_SESSION['cargo'] == "engenharia"){
                header("Location: engenharia.php");
            }elseif($_SESSION['cargo'] == "comercial"){
                header("Location: comercial.php");
            }
        //Não foi encontrado um usuario na tabela usuário com os mesmos dados digitado no formulário
        //redireciona o usuario para a página de login
        }else{    
            //Váriavel global recebendo a mensagem de erro
            echo $usuario;
            echo $senha;
            $_SESSION['loginErro'] = "Usuário ou senha Inválido";
            header("Location: index.php");
        }
    //O campo usuário e senha não preenchido entra no else e redireciona o usuário para a página de login
    }else{

      echo "e agora".$usuario;
      echo "e agora".$senha;
        $_SESSION['loginErro'] = "Usuário ou senha inválido";
        header("Location: index.php");
    }
=======
<?php
    session_start(); 
        //Incluindo a conexão com banco de dados   
    include_once("conecta.php");    
    //O campo usuário e senha preenchido entra no if para validar
    if((isset($_POST['usuario'])) && (isset($_POST['senha']))){
        $usuario = mysqli_real_escape_string($conn, $_POST['usuario']); //Escapar de caracteres especiais, como aspas, prevenindo SQL injection
        $senha = mysqli_real_escape_string($conn, $_POST['senha']);
       // $senha = md5($senha);
            
        //Buscar na tabela usuario o usuário que corresponde com os dados digitado no formulário
        $result_usuario = "SELECT * FROM entra WHERE usuario = '$usuario' && senha = '$senha' LIMIT 1";
        $resultado_usuario = mysqli_query($conn, $result_usuario);
        $resultado = mysqli_fetch_assoc($resultado_usuario);
        
        //Encontrado um usuario na tabela usuário com os mesmos dados digitado no formulário
        if(isset($resultado)){
            $_SESSION['usuario'] = $resultado['usuario'];
            $_SESSION['senha'] = $resultado['senha'];
            $_SESSION['cargo'] = $resultado['cargo'];
            if($_SESSION['cargo'] == "engenharia"){
                header("Location: engenharia.php");
            }elseif($_SESSION['cargo'] == "comercial"){
                header("Location: comercial.php");
            }
        //Não foi encontrado um usuario na tabela usuário com os mesmos dados digitado no formulário
        //redireciona o usuario para a página de login
        }else{    
            //Váriavel global recebendo a mensagem de erro
            echo $usuario;
            echo $senha;
            $_SESSION['loginErro'] = "Usuário ou senha Inválido";
            header("Location: index.php");
        }
    //O campo usuário e senha não preenchido entra no else e redireciona o usuário para a página de login
    }else{

      echo "e agora".$usuario;
      echo "e agora".$senha;
        $_SESSION['loginErro'] = "Usuário ou senha inválido";
        header("Location: index.php");
    }
>>>>>>> f191fbf5a0101a9d2e204414021ed87a88ff5059
?>