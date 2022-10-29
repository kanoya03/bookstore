<?php
if (isset($_POST["num_genre"])) {
	$connection = mysqli_connect('bzy8pc3fr7gquraud2pm-mysql.services.clever-cloud.com','uhy7drn1dhjfiki6','9Hbyc6SAOF5gHG1YlpNE','bzy8pc3fr7gquraud2pm');
	$conn = mysqli_connect('localhost','root','','book_store');
	if($connection->connect_error){
		die("Ошибка: " . $connection->connect_error);
	}
	if($conn->connect_error){
		die("Ошибка: " . $connection->connect_error);
	}
	$num_genre = $conn->real_escape_string($_POST["num_genre"]);
	$sql = "Select * From Genre  Where num_genre=$num_genre";
	if($result = $conn->query($sql)){
    	foreach($result as $row){
    			$number= $row["num_genre"];
    			$name=$row["name_genre"] ;
    	}
		$result->free();
	}
	$sql3 = "INSERT INTO Genre (num_genre, name_genre) VALUES ($number,'$name')";
	if($connection->query($sql3)){
		echo "Данные добавлены в локальную базу данных <br/>";
	} else{
		echo "Ошибка: " . $connection->error;
	}
	$connection->close();
	$conn->close();
}
?>