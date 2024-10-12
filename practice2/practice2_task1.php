<?php
$array = array(
    array(
        "id" => 1,
        "name" => "John",
        "surname" => "Smith",
    ),
    array(
        "id" => 2,
        "name" => "Salivon",
        "surname" => "Guido",
    ),
    array(
        "id" => 3,
        "name" => "Arifullah",
        "surname" => "Stanikzai",
    ),
    array(
        "id" => 4,
        "name" => "Vadim",
        "surname" => "Umarau",
    ),
    array(
        "id" => 5,
        "name" => "Khalid",
        "surname" => "Khashmiri",
    ),
    array(
        "id" => 6,
        "name" => "Muhhamad",
        "surname" => "Sumbul",
    ),
    array(
        "id" => 6,
        "name" => "Kamidi",
        "surname" => "Ariglar",
    ),
);

usort($array, function($a, $b) {
    return strcmp($a['surname'], $b['surname']);
});

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>pr2_task5</title>

    <link rel="icon" type="image/x-icon" href="favicon.ico">

</head>
<body>
<?php include_once("header.html"); ?>

<h1>мОи ЛуЧшИе ДрУзЬя (лд)</h1>

<table>
    <?php foreach ($array as $key => $value) { ?>
        <tr>
            <?php foreach ($value as $key1 => $value1) { ?>
                <td><?php echo $value1; ?></td>
            <?php } ?>
        </tr>
    <?php } ?>
</table>
</body>
</html>