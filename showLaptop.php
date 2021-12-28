<html>
<head>
    <meta charset="utf-8">
    <meta name="keywords" content="Лабораторна робота, MySQL, з'єднання з базою даних">
    <meta name="description" content="Лабораторна робота. З'єднання з базою даних">
    <title>Таблиця Ноутбуків</title>
    <link rel="stylesheet" href="style.css">
</head>
<body style=" background-image: url(img/backgr.jpg);">
    <h1 style="text-align:center; color:f5f5f5">Таблиця ноутбуків</h1>


    <?php

    include_once('db.php');

    $sql = 'SELECT * FROM laptop'; 


    /* Надсилаємо запит серверу */
    if($result = $mysqli->query($sql)) {   // $mysqli - наш об'єкт, через який здійснюємо підключення, query - метод, який дозволяє виконати довільний запит

        printf("Список ноутбуків: <br><br>");   // <br> в html - розрив рядка
        printf("<table><tr><th>ID</th><th>Ноутбук</th><th>СPU</th><th>GPU</th></tr>");   // <br> в html - розрив рядка
        /* Вибірка результатів запиту  */
        while( $row = $result->fetch_assoc() ){ // fetch_assoc() повертає рядок із запиту у вигляді асоціативного масиву, наприклад $row = ['id'=>'1', 'pib'=>'Олександр', 'grupa'=>'ІПЗ-31']
            printf("<tr><td>%s</td><td>%s</td><td>%s</td><td>%s</td></tr>", $row['id'], $row['name'], $row['cpu'], $row['gpu']); //виводимо результат на сторінку
        };
        printf("</table>");
        /*Звільняємо пам'ять*/
        $result->close();
    };

    /*Закриваємо з'єднання*/
    $mysqli->close();
    ?>

    <br><br><br>

    <ul style="padding-right:-40px  ;">
        <li><a href="insertIntoLaptopForm.php">Вставити рядок</a><br></li>
        <li><a href="updateLaptopForm.php">Змінити рядок</a><br></li>
        <li><a href="deleteFromLaptopForm.php">Видалити рядок</a><br></li>
        <li><a href="showInfo.php">Звіт по ноутбуках</a><br></li>
        <li><a href="index.html">На головну</a><br></li>
    </ul>
    
</body>
</html>
