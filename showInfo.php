<html>
<head>
    <meta charset="utf-8">
    <meta name="keywords" content="Лабораторна робота, MySQL, з'єднання з базою даних">
    <meta name="description" content="Лабораторна робота. З'єднання з базою даних">
    <title>Звіт</title>
    <link rel="stylesheet" href="style.css">
</head>
<body style=" background-image: url(img/backgr.jpg);">
    <h1  style="text-align:center; color:f5f5f5">Звіт по всіх ноутбуках на складі</h1>


    <?php

    include_once('db.php');

    $sql = 'SELECT  laptop.name AS ln, cpu.name AS cn, gpu.name AS gn FROM laptop  LEFT JOIN cpu ON laptop.cpu = cpu.id INNER JOIN gpu  ON laptop.gpu = gpu.id ORDER BY laptop.name';


    if($result = $mysqli->query($sql)) {

        printf("<h3>Звіт</h3><br>");   
        printf("<table><tr><th>Назва</th><th>Процесор</th><th>Відеокарта</th></tr>");   
        while( $row = $result->fetch_assoc() ){ 
            printf("<tr><td>%s</td><td>%s</td><td>%s</td></tr>", $row['ln'], $row['cn'], $row['gn']);
        };
        printf("</table>");      
        $result->close();
    }

    $mysqli->close();
    ?>

    <br><br><br>

    <ul>
        <li><a href="showLaptop.php">Таблиця laptop</a><br></li>
        <li><a href="showCpu.php">Таблиця CPU</a><br></li>
        <li><a href="showGpu.php">Таблиця GPU</a><br></li>
        <li><a href="index.html">На головну</a><br></li>
    </ul>
    
</body>
</html>
