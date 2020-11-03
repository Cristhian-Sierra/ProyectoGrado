
<html>
<head>
  
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</head>
</html>





<div class="container">
<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Title</th>
      <th scope="col">issn</th>
      <th scope="col">sjr</th>
      <th scope="col">Best_quartile</th>
      <th scope="col">H index</th>
      <th scope="col">Total documents</th>
      <th scope="col">Total references</th>
      <th scope="col">Total cites</th>
      <th scope="col">Citable docs</th>
      <th scope="col">Id Country</th>
      <th scope="col">Coverage</th>
      <th scope="col">All categories</th>
      
    </tr>
  </thead>
  <tbody>
  <?php 
    $servername = "localhost";
    $user="root";
    $database = "mydb";
    $port = "3306";
    $password = "";

    $conn = mysqli_connect($servername, $user, $password, $database,$port) or die ("Sin conexion a BD");
	$consulta="select * from journal";
	$i=1;
	if($resul=$conn->query($consulta)){
	    echo "Consulta correcta"."<br>";
	    while($fila=$resul->fetch_row()){
	        
	        echo "<tr>";
	        echo "<td>".$fila[0]."</td>";
	        echo "<td>".$fila[1]."</td>";
            echo "<td>".$fila[2]."</td>";
            echo "<td>".$fila[3]."</td>";
            echo "<td>".$fila[4]."</td>";
            echo "<td>".$fila[5]."</td>";
            echo "<td>".$fila[6]."</td>";
            echo "<td>".$fila[7]."</td>";
            echo "<td>".$fila[8]."</td>";
            echo "<td>".$fila[9]."</td>";
            echo "<td>".$fila[10]."</td>";
            echo "<td>".$fila[11]."</td>";
            echo "<td>".$fila[12]."</td>";
	        echo "</tr>";
	        $i++;
	    }
	}
	$resul->close();
?>
 

	</tbody> 
   <form action="index.php" method="GET">
    		<input type="submit" class="btn btn-dark" value="Back">	
   </form>
   
    
    <form action="extraer.php" method="GET">	
   	 	<input name="filtro" class="form-control mr-sm-2" type="text" placeholder="Digite su categoria" aria-label="Search">		
    	<input type="submit" class="btn btn-dark" value="Generate .CSV">
    			
   </form>
    	
</table>


