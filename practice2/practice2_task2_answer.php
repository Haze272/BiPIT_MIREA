<?php
$number1=$_POST["number1"];
$number2=$_POST["number2"];
$number3=$_POST["number3"];

$result = ($number1 - $number2) / $number3;
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>3DSaM</title>
    <link rel="icon" type="image/x-icon" href="favicon.ico">
</head>
<body>
<?php include_once("header.html"); ?>

<h1>Спасибо за ваше мнение, <?php echo $result ?>!</h1>
</body>
</html>