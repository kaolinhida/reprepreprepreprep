<html>
<head>
    <meta charset="utf-8">
    <meta name="keywords" content="Лабораторна робота, MySQL, з'єднання з базою даних">
    <meta name="description" content="Лабораторна робота. З'єднання з базою даних">
    <title>Вставка даних</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <?php
        include_once("showLaptop.php")    
    ?>

    <form action="insertIntoLaptop.php" method="post">
        <label>Назва ноутбука</label><input name="name" type="text"><br>
        <label>Процесор ID </label><input name="CPU" type="text"><br>
        <label>Відеокарта ID</label><input name="GPU" type="text"><br>
        <input type="submit" value="Вставити рядок">
    </form>

</body>
</html>
