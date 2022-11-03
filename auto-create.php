<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
    <?php
    $connection = mysqli_connect('bzy8pc3fr7gquraud2pm-mysql.services.clever-cloud.com','uhy7drn1dhjfiki6','9Hbyc6SAOF5gHG1YlpNE','bzy8pc3fr7gquraud2pm');
    $login =$connection->real_escape_string($_POST["login"]);
    $password =$connection->real_escape_string($_POST["password"]);
    $sql="Select * From Customer where login= '$login'and password='$password'";
        if($result = $connection->query($sql)){
        foreach($result as $row){
                $log= $row["login"];
                $pass=$row["password"] ;
        }
        $result->free();
    }
    
 if(!empty($log)&&!empty($pass)){
        $new_url = 'genre.php';
        header('Location: '.$new_url);
    }else{
        echo "Неверный ввод <br/>";
    }
    mysqli_close($connection);
    ?>
</body>
</html>