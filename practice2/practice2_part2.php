<?php

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php include_once("header.html"); ?>

<h1>Напиши слова а мы тебе текст, где будет поставлен восклицательный знак перед предложением, где встречается твоё слово</h1>

<form action="/practice2/practice2_part2_answer.php" method="POST">

    <input type="text" name="word" placeholder="Слово">

    <input type="submit" value="Отправить">
</form>
</body>
</html>
