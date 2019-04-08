<<<<<<< HEAD
<?php
    $servidor = "localhost";
    $usuario = "root";
    $senha = "";
    $dbname = "converte";    
    //Criar a conexao
    $conn = mysqli_connect($servidor, $usuario, $senha, $dbname);
    
    if(!$conn){
        die("Falha na conexao: " . mysqli_connect_error());
    }else{
        //echo "Conexao realizada com sucesso";
    }      
=======
<?php
    $servidor = "localhost";
    $usuario = "root";
    $senha = "";
    $dbname = "converte";    
    //Criar a conexao
    $conn = mysqli_connect($servidor, $usuario, $senha, $dbname);
    
    if(!$conn){
        die("Falha na conexao: " . mysqli_connect_error());
    }else{
        //echo "Conexao realizada com sucesso";
    }      
>>>>>>> f191fbf5a0101a9d2e204414021ed87a88ff5059
?> 