

<?php  
include("conexion.php"); // Conexion a nuestra BD 
$filtro=$_GET["filtro"];

$servername = "localhost";
$user="root";
$database = "mydb";
$port = "3306";
$password = "";

$conn = mysqli_connect($servername, $user, $password, $database,$port) or die ("Sin conexion a BD");


$sql= "select j.idJournal,c.idCategory
INTO OUTFILE 'D:\category.csv'
FIELDS TERMINATED BY ','  LINES TERMINATED BY '\r\n'
FROM journal as j, category as c
WHERE   j.categories LIKE  '%".$filtro."%'  AND c.name='".$filtro."'";


if($resul=$conn->query($sql)){
    
    echo "<div class=\"alert alert-success\" role=\"success\">Datos  agregados correctamente</div>";
    
}
else{
    echo "<div class=\"alert alert-danger\" role=\"success\">No se ha agergado nada</div>";
    
}
mysqli_close($conn);




?>  

























<?php
/*$csv_end = "
 ";
 $csv_sep = ",";
 $csv_file = "journalCategory.csv";
 $csv="";  */
/*$file="journalCategory.csv";
file_put_contents($file, "Idjournal, categories" . PHP_EOL);
{
file_put_contents($file, implode(",", $info[$i]), FILE_APPEND); //escribo en el archivo separando el arreglo con comas
file_put_contents($file, PHP_EOL, FILE_APPEND); //agrego un salto de linea
}

if (file_exists($file)) { //verifico que el archivo haya sido creado
header('Content-Description: File Transfer');
header('Content-Type: application/octet-stream');
header('Content-Disposition: attachment; filename='.basename($file));
header('Content-Transfer-Encoding: binary');
header('Expires: 0');
header('Cache-Control: must-revalidate');
header('Pragma: public');
header('Content-Length: ' . filesize($file));
ob_clean();
flush();
readfile($file);
} else
{
//en caso no se haya creado el archivo, muestro un mensaje
echo "Hubo un error al momento de crear el archivo, verifique los permisos de las carpetas del servidor.";
}
//Generamos el csv de todos los datos
/*if (!$handle = fopen($csv,"w") ) {
echo "Cannot open file";
exit;
}
if (fwrite($handle, utf8_decode($csv)) === FALSE) {
echo "Cannot write to file";
exit;
}
fclose($handle); */

//echo ("Holis");*/?>