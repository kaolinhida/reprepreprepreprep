<html>
<head>
    <meta charset="utf-8">
    <meta name="keywords" content="Лабораторна робота, MySQL, з'єднання з базою даних">
    <meta name="description" content="Лабораторна робота. З'єднання з базою даних">
    <title>Таблиця CPU</title>
    <link rel="stylesheet" href="style.css">
</head>
<body style=" background-image: url(img/backgr.jpg);" >
    <h1 style="text-align:center; color:f5f5f5">Таблиця процесорів</h1>


    <?php

    include_once('db.php');

    $sql = "SELECT * FROM cpu";


    if($result = $mysqli->query($sql))
    {   
        printf("Список процесорів: <br><br>");   
        printf("<table><tr><th>ІД процесорів</th><th>Модель</th></tr>");
        while( $row = $result->fetch_assoc() )
        {
            printf("<tr><td>%s</td><td>%s</td></tr>", $row['id'], $row['name']);
        };
        printf("</table>");
        $result->close();
    };

    $mysqli->close();
    ?>

    <br><br><br>

    <ul>
        <!-- <li><a href="showGroupsStudCount.php">Звіт</a><br></li> -->
        <li><a href="index.html">На головну</a><br></li>
    </ul>
    
</body>
</html>
