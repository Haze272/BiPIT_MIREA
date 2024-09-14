<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>3DSaM</title>
    <link rel="icon" type="image/x-icon" href="favicon.ico">

    <style>
        .form {
            display: flex;
            flex-direction: column;
            gap: 8px;
        }
    </style>
</head>
<body>
<?php include_once("header.html"); ?>

<h1>Крутые задачки</h1>


<form action="/practice1/practice1_part2_tasks.php" class="form" method="POST">
    Определить дистанцию
    <input type="hidden" name="taskNumber" value="5">

    <input type="number" name="p1x" placeholder="Точка 1 x">
    <input type="number" name="p1y" placeholder="Точка 1 y">

    <input type="number" name="p2x" placeholder="Точка 2 x">
    <input type="number" name="p2y" placeholder="Точка 2 y">

    <input type="submit" value="Отправить">
</form>

<hr/>

<form action="/practice1/practice1_part2_tasks.php" class="form" method="POST">
    Определить ближайшую точку к [0, 0]
    <input type="hidden" name="taskNumber" value="6">

    <input type="number" name="p1x" placeholder="Точка 1 x">
    <input type="number" name="p1y" placeholder="Точка 1 y">

    <input type="number" name="p2x" placeholder="Точка 2 x">
    <input type="number" name="p2y" placeholder="Точка 2 y">

    <input type="submit" value="Отправить">
</form>

<hr/>

<form action="/practice1/practice1_part2_tasks.php" class="form" method="POST">
    Поменять число местами
    <input type="hidden" name="taskNumber" value="7">

    <input type="number" name="value" placeholder="Точка 1 x">

    <input type="submit" value="Отправить">
</form>
</body>
</html>