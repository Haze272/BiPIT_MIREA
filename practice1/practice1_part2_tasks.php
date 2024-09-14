<?php
$taskNumber=$_POST["taskNumber"];

$p1x=$_POST["p1x"];
$p1y=$_POST["p1y"];

$p2x=$_POST["p2x"];
$p2y=$_POST["p2y"];

$value=$_POST['value'];

$result = 0;

if ($taskNumber == 5) {
    $result = distance([intval($p1x), intval($p1y)], [intval($p2x), intval($p2y)]);
}
else if ($taskNumber == 6) {
    $result = implode(",", compareNearestToO([intval($p1x), intval($p1y)], [intval($p2x), intval($p2y)]));
}
else if ($taskNumber == 7) {
    $result = magicValue($value);
}

function distance($p1, $p2) {
    return sqrt(pow($p2[0] - $p1[0], 2) + pow($p2[1] - $p1[1], 2));
    echo "\ndistance between [$p1[0], $p1[1]] and [$p2[0], $p2[1]] is $distance";
}


function compareNearestToO($point1, $point2) {
    $d1 = sqrt(pow(0 - $point1[0], 2) + pow(0 - $point1[1], 2));
    $d2 = sqrt(pow(0 - $point2[0], 2) + pow(0 - $point2[1], 2));
    echo "\nd1 is $d1";
    echo "\nd2 is $d2";

    if ($d1 > $d2) {
        return $point2;
    }
    else if ($d1 < $d2) {
        return $point1;
    }
    else if ($d1 == $d2) {
        return 0;
    }
    else {
        return new Error('Unexpected input');
    }
}

function magicValue($value) {
    $strN = strval($value);

    if (strlen($strN) === 1) return $value;
    else if (strlen($strN) > 1) {
        $buffer = $strN[0];
        $strN[0] = $strN[-1];
        $strN[-1] = $buffer;

        return intval($strN);
    }
    else return 0;
}

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

<h1>Результат задания <?php echo $taskNumber ?> - <?php echo $result ?></h1>

</body>
</html>