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
        $sql="Select * From Customer";
        if($result = $connection->query($sql)){
            echo "<table><tr><th>Номер жанра</th><th>Название Жанра</th></tr>";
        foreach($result as $row){
            echo "<tr>";
                echo "<td>" . $row["login"] . "</td>";
                echo "<td>" . $row["password"] . "</td>";
            echo "</tr>";
        }
    }
        echo "</table>";
        $result->free();
        mysqli_close($connection);
    
    ?>


    <h3>Добавление пользователя в локальную</h3>
    <form action="auto-create.php" method="post">
    <p>Логин:
    <input type="text" name="login" /></p>
    <p>Пароль:
    <input type="password" name="password" /></p>
    <input type="submit" value="Авторизоваться">
    </form>

</body>
</html>