<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>База данных</title>
</head>
<body>
	<?php
	echo "Clever-cloud:";
		$connection=mysqli_connect('bzy8pc3fr7gquraud2pm-mysql.services.clever-cloud.com','uhy7drn1dhjfiki6','9Hbyc6SAOF5gHG1YlpNE','bzy8pc3fr7gquraud2pm');
		$conn=mysqli_connect('localhost','root','','book_store');
		$sql="Select * From Genre order by num_genre";
		if($result = $connection->query($sql)){
			echo "<table><tr><th>Номер жанра</th><th>Название Жанра</th></tr>";
    	foreach($result as $row){
    		echo "<tr>";
    			echo "<td>" . $row["num_genre"] . "</td>";
    			echo "<td>" . $row["name_genre"] . "</td>";
    		echo "</tr>";
    	}
    }
    	echo "</table>";
		$result->free();
		echo "localhost:";
		if($result = $conn->query($sql)){
			echo "<table><tr><th>Номер жанра</th><th>Название Жанра</th></tr>";
    	foreach($result as $row){
    		echo "<tr>";
    			echo "<td>" . $row["num_genre"] . "</td>";
    			echo "<td>" . $row["name_genre"] . "</td>";
    		echo "</tr>";
    	}
    	echo "</table>";
		$result->free();
		mysqli_close($conn);
		mysqli_close($connection);
	}
	
	?>


	<h3>Добавление пользователя в локальную</h3>
	<form action="create.php" method="post">
    <p>Номер жанра:
    <input type="number" name="num_genre" /></p>
    <p>Название жанра:
    <input type="text" name="name_genre" /></p>
    <input type="submit" value="Добавить">
	</form>
	<h3>Добавление пользователя в облачную по номеру жанра</h3>
	<form action="add.php" method="post">
    <p>Номер жанра:
    <input type="number" name="num_genre" /></p>
    <p>Название жанра:
    <input type="submit" value="Добавить">
</form>
<div class="displayerBoxes">
<center>
  <table class="Displaytable">
  <tr>
    <th>num of genre</th>
    <th>name of genre</th>
  </tr>
 <?php
		$connection=mysqli_connect('bzy8pc3fr7gquraud2pm-mysql.services.clever-cloud.com','uhy7drn1dhjfiki6','9Hbyc6SAOF5gHG1YlpNE','bzy8pc3fr7gquraud2pm');
		$sql="Select * From Genre order by num_genre";
		if($result = $connection->query($sql)){
    	foreach($result as $row){
    			$r1= $row["num_genre"];
    			$r2=$row["name_genre"] ;
    	}
		$result->free();
	}
  echo "<tr>";
    echo "<td>";
    	echo"<textarea id=NumberDisplay>";
    	 print($r1);
    	 echo "</textarea>";
    	echo"</td>";
    echo "<td>";
    	echo "<textarea id=nameDisplay>";
    	print($r2);
    	echo "</textarea>";
    	echo "</td>";
  echo "</tr>";
  mysqli_close($connection);
	?>
</table>
</center>
</div>

</body>
</html>