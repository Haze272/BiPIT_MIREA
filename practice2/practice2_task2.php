<?php

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>pr2_task2</title>

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

<h1>Отнимем от первого числа второе и поделим на третье!</h1>

<form action="/practice2/practice2_task2_answer.php" class="form" method="POST">
    Определить дистанцию

    <input type="number" name="number1" placeholder="Число 1">
    <input type="number" name="number2" placeholder="Число 2">
    <input type="number" name="number3" placeholder="Число 3">

    <input type="submit" value="Отправить">
</form>
</body>
</html>
