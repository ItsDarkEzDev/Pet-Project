<?php
require('config.php');
if(isset($_GET["name"])){
    $name = $_GET['name'];
    $result = $mysqli->query("SELECT * FROM test WHERE name='$name';")->fetch_assoc();
    if(is_null($result))
        header("Location: /index.php");

}
    ?>
    <h1><?php echo $_GET['name']; ?></h1>
    <p><?php echo $result["text"]; ?></p>
    <a href='/index.php'>Назад</a>