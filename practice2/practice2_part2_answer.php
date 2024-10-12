<?php

$searchWord = $_POST["word"];

// Открытие файла
$file = fopen('sample-text.txt', 'r');

// Проверка успешности открытия файла
if ($file) {
    // Чтение содержимого файла
    $A = fread($file, filesize('sample-text.txt'));
    fclose($file);  // Закрытие файла после чтения

    // Разбиение текста на предложения
    $sentences = preg_split('/(?<=[.!?])\s+/', $A);

    // Поиск и замена предложений, содержащих искомое слово
    foreach ($sentences as &$sentence) {
        if (stripos($sentence, $searchWord) !== false) {
            $sentence = '!' . $sentence;
        }
    }

    // Сбор предложений обратно в текст
    $modifiedText = implode(' ', $sentences);
    $result = $modifiedText;
} else {
    $result = 'Не удалось открыть файл.';
}

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
<h1>Результат</h1>
<p> <?php echo $result ?></p>
</body>
</html>
