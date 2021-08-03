<?php
    if (isset($_POST['name'])) {
        require('../config.php');
        $name = $_POST["name"];
        $text = $_POST["text"];
        $mysqli->query("INSERT INTO test(name, text) VALUES ('$name', '$text');");
    }
header("Location: ../index.php");