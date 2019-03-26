<?php
require('conexao.php');

mysqli_query($conn,'TRUNCATE TABLE markers');


header('location:index.php');

?>