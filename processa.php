<?php

	include_once("conexao.php");
	
	//$dados = $_FILES['arquivo'];
	//var_dump($dados);
	
	if(!empty($_FILES['arquivo']['tmp_name'])){
		$arquivo = new DomDocument();
		$arquivo->load($_FILES['arquivo']['tmp_name']);
		//var_dump($arquivo);
		
		$linhas = $arquivo->getElementsByTagName("Row");
		//var_dump($linhas);
		
		$primeira_linha = true;
		
		foreach($linhas as $linha){
			if($primeira_linha == false){

				$nome = $linha->getElementsByTagName("Data")->item(0)->nodeValue;
				//echo "NOME: $nome <br>";

				$lat = $linha->getElementsByTagName("Data")->item(1)->nodeValue;
				//echo "LAT: $lat <br>";
				
				$lng = $linha->getElementsByTagName("Data")->item(2)->nodeValue;
				//echo "LNG: $lng <br>";
				
				$coordinates = $linha->getElementsByTagName("Data")->item(3)->nodeValue;
				//echo "COORD: $coordinates <br>";

				$link = $linha->getElementsByTagName("Data")->item(4)->nodeValue;
				//echo "COORD: $coordinates <br>";
				
				$empresa = $linha->getElementsByTagName("Data")->item(5)->nodeValue;
				//echo "COORD: $coordinates <br>";

				$cidade = $linha->getElementsByTagName("Data")->item(6)->nodeValue;
				//echo "COORD: $coordinates <br>";


				//Inserir o usuário no BD
				$result_usuario = "INSERT INTO markers (nome, lat,lng, coordinates,link,empresa,cidade) VALUES ('$nome','$lat', '$lng', '$coordinates', '$link', '$empresa','$cidade') ";
				//$result_usuario->set_charset('utf8');
				$resultado_usuario = mysqli_query($conn, $result_usuario);
			}
			$primeira_linha = false;
		}
	}

	header('location:phpsql_genkml.php');
?>