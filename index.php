<?php
require('config.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Pet-Project</title>
</head>
<form method="post" action="utils/create.php">
    <p>Название записи</p>
    <input name="name" type="text" placeholder="Название">
    <p>Текст</p>
        <textarea id="text2" class="text" name="text" cols="25" rows="14"></textarea>
    </br>
    <input type="submit" value="PUSH">
</form>
<br>
    <?php
    $arr = $mysqli->query("SELECT * FROM test;");
    while($data = mysqli_fetch_assoc($arr)){
        ?>
        <a href="single.php?name=<?php echo $data['name']; ?>"><?php echo $data['name']; ?></a><br>
        <?php
    }
?>
</html>
