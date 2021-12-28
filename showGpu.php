<html>
<head>
    <meta charset="utf-8">
    <meta name="keywords" content="Лабораторна робота, MySQL, з'єднання з базою даних">
    <meta name="description" content="Лабораторна робота. З'єднання з базою даних">
    <title>Таблиця GPU</title>
    <link rel="stylesheet" href="style.css">
</head>
<body style=" background-image: url(img/backgr.jpg);" >
    <h1 style="text-align:center;color:#F5F5F5">Таблиця відеокарт</h1>


    <?php

    include_once('db.php');

    $sql = 'SELECT * FROM gpu';


    if($result = $mysqli->query($sql)) {  

        printf("Список відеокарт: <br><br>");   
        printf("<table><tr><th>ІД відеокарти</th><th>Модель</th></tr>");   
        while( $row = $result->fetch_assoc() ){ 
            printf("<tr><td>%s</td><td>%s</td></tr>", $row['id'], $row['name']); 
        };
        printf("</table>");
        
        $result->close();
    };

    
    $mysqli->close();
    ?>

    <br><br><br>

    <ul>
        <li><a href="index.html">На головну</a><br></li>
    </ul>
    
</body>
</html>
