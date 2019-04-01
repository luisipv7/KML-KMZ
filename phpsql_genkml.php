<?php
require('phpsqlajax_dbinfo.php');

 // Opens a connection to a MySQL server.
$connection = mysql_connect ($server, $username, $password);
if (!$connection) 
{
  die('Not connected : ' . mysql_error());
}

// Sets the active MySQL database.
$db_selected = mysql_select_db($database, $connection);
if (!$db_selected) 
{
  die ('Can\'t use db : ' . mysql_error());
}

 // Selects all the rows in the markers table.
 $query = 'SELECT * FROM markers WHERE 1';
 $result = mysql_query($query);
 if (!$result) 
 {
  die('Invalid query: ' . mysql_error());
 }

 $nrRede = 01;

 $cont=0;

// Creates an array of strings to hold the lines of the KML file.
$file = fopen('arquivos_salvos\doc.kml','w');
$kml = array('<?xml version="1.0" encoding="UTF-8"?>');
$kml[] = '<kml xmlns="http://www.opengis.net/kml/2.2" xmlns:gx="http://www.google.com/kml/ext/2.2" xmlns:kml="http://www.opengis.net/kml/2.2" xmlns:atom="http://www.w3.org/2005/Atom">';
$kml[] = ' <Document>';
$kml[] = ' <Style id="restaurantStyle">';
$kml[] = ' <IconStyle id="restuarantIcon">';
$kml[] = ' <Icon>';
$kml[] = ' <href>http://maps.google.com/mapfiles/kml/pal2/icon63.png</href>';
$kml[] = ' </Icon>';
$kml[] = ' </IconStyle>';
$kml[] = ' </Style>';
$kml[] = ' <Style id="barStyle">';
$kml[] = ' <IconStyle id="barIcon">';
$kml[] = ' <Icon>';
$kml[] = ' <href>http://maps.google.com/mapfiles/kml/pal2/icon27.png</href>';
$kml[] = ' </Icon>';
$kml[] = ' </IconStyle>';
$kml[] = ' </Style>';
$kml[] = ' <Camera>';       

$resultado = mysql_query("SELECT lng,lat FROM markers WHERE id = '2'");
if (!$resultado) {
    echo 'Could not run query: ' . mysql_error();
    exit;
}
$row = mysql_fetch_row($resultado);

//echo $row[0]; // 42
//echo $row[1]; // the email value
$kml[] ='<longitude>'. $row[0] .'</longitude>
<latitude>'. $row[1] .'</latitude>   
 <altitude>2000</altitude>
     
</Camera>';

$kml[] = ' <Folder>
<name>Logotipo</name>
 <ScreenOverlay>


   <!-- Origin (x=0/y=0) is in the lower left corner.

        y goes up, x goes right.

     -->

<!-- Place the upper left corner (0/1) of the image... -->
       <overlayXY x="0" y="1" xunits="fraction" yunits="fraction"/>
       <screenXY x="0" y="1" xunits="fraction" yunits="fraction"/>
       <rotationXY x="0" y="0" xunits="fraction" yunits="fraction"/>
       <size x="150" y="150" xunits="pixels" yunits="pixels"/>

    <Icon><href>files/logo.png</href></Icon>
 
 </ScreenOverlay>
 </Folder>';




// Iterates through the rows, printing a node for each row.

$kml[] = '<Folder>';
$kml[] = '<name>NAP</name>';
$kml[] = '<Folder>';
$kml[] = '<name>Rede'.$nrRede.' </name>';
while ($row = @mysql_fetch_assoc($result)) 
{
  $kml[] = ' <Placemark>';
  $kml[] = ' <name>' . ($row['nome']) . '</name>';
  $kml[] = '<ExtendedData>
  <Data name=" Provedor  ">
  <value>'.($row['empresa']) .'</value>  
  </Data>
  <Data name="Reserva recomendada">
    <value>10m</value>
  </Data>
  <Data name="Cidade">
    <value>'.($row['cidade']) .'</value>
  </Data>
  <Data name="Gerenciador de Rede">
    <value><a href="'.($row['link']).'">Entrar</a></value>
  </Data>
</ExtendedData>';

  


  
  
  $kml[] = ' <description> </description>';
  $kml[] = ' <LookAt>';
  $kml[] = ' <longitude>'. $row['lng'] .'</longitude>';
  $kml[] = ' <latitude>'. $row['lat'] .'</latitude>';
  $kml[] = ' <altitude> 0 </altitude>';
  $kml[] = ' <gx:altitudeMode>relativeToSeaFloor</gx:altitudeMode>';  
  $kml[] = ' </LookAt>';
  $kml[] = ' <styleUrl>#msn_triangle4</styleUrl>';
  $kml[] = ' <Point>';
  $kml[] = ' <coordinates>' .($row['coordinates']) . '</coordinates>';
  $kml[] = ' </Point>';
  $kml[] = ' </Placemark>';
  

  $cont++;

  if($cont==8){
    $kml[] = '</Folder>';
    $cont=0;
    $nrRede++;
    $kml[] = '<Folder>';
    $kml[] = '<name>Rede'.$nrRede.' </name>';

  }
 
} 

// End XML file
$kml[] = ' </Folder>';
$kml[] = ' </Folder>';
$kml[] = ' </Document>';
$kml[] = '</kml>';
$kmlOutput = join("\n", $kml);
//header('Content-type: application/vnd.google-earth.kml+xml');
//echo $kmlOutput;
header('location: index.php');
fwrite($file,  print_r($kmlOutput, TRUE));
//file_put_contents ( ' doc.kml ' , $kmlOutput , FILE_APPEND );
?>