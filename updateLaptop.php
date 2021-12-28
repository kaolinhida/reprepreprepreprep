<?php

include_once('db.php');



 $cpu = $_POST['CPU'];$gpu = $_POST['GPU'];$id = $_POST['id'];

$sql = "UPDATE laptop SET  CPU='$cpu', GPU='$gpu'  WHERE id='$id'";


if($mysqli->query($sql)){
    echo "Рядок змінено успішно";
    }
else
    {
        echo "Error" . $sql . "<br/>" . $mysqli->error;
    }




include_once("showLaptop.php");
?>
