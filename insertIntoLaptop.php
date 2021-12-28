<?php

include_once('db.php');


$name = $_POST['name']; $cpu = $_POST['CPU'];$gpu = $_POST['GPU'];

$sql = "INSERT INTO laptop (name, cpu, gpu) VALUES ('$name', '$cpu', '$gpu' )";


if($mysqli->query($sql)){
    echo "Рядок вставлено успішно";
    }
else
    {
        echo "Error" . $sql . "<br/>" . $mysqli->error;
    }


include_once("showLaptop.php");

?>
