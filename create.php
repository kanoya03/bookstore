<?php
if (isset($_POST["num_genre"]) && isset($_POST["name_genre"])) {

	$conn = mysqli_connect('localhost','root','','book_store');
	/*if($connection->connect_error){
		die("Ошибка: " . $connection->connect_error);
	}*/
	if($conn->connect_error){
		die("Ошибка: " . $connection->connect_error);
	}
	$num_genre = $conn->real_escape_string($_POST["num_genre"]);
	$name_genre = $conn->real_escape_string($_POST["name_genre"]);
	$sql = "INSERT INTO Genre (num_genre, name_genre) VALUES ($num_genre, '$name_genre')";
	/*if($connection->query($sql)){
		echo "Данные добавлены в облачную базу данных <br/>";
	} else{
		echo "Ошибка: " . $connection->error;
	}*/
	if($conn->query($sql)){
		echo "Данные добавлены в локальную базу данных <br/>";
	} else{
		echo "Ошибка: " . $connection->error;
	}
	/*$connection->close();*/
	$conn->close();
}
?>