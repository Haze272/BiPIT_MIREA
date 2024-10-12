<?php

$request = $_SERVER['REQUEST_URI'];
$viewDir = '/';

// Проверяем, если запрос на статический файл, например текстовый
if (preg_match('/\.(?:txt|css|js|jpg|png)$/', $request)) {
    // Определяем путь к файлу
    $file = __DIR__ . $request;

    // Проверяем, существует ли файл
    if (file_exists($file)) {
        // Устанавливаем правильный заголовок для текстовых файлов
        if (str_ends_with($file, '.txt')) {
            header('Content-Type: text/plain');
        }

        // Чтение файла и его вывод
        readfile($file);
        return;
    } else {
        // Если файл не найден, возвращаем ошибку 404
        http_response_code(404);
        echo "Файл не найден";
        return;
    }
}

if (str_contains($request, "/practice1/answer")) {
    require __DIR__ . $viewDir . 'practice1/' . 'practice1_part2_answer.php' . substr($request, 16);
    return;
}

switch ($request) {
    case '':
    case '/':
        require __DIR__ . $viewDir . 'index.php';
        break;

    case '/practice1':
        require __DIR__ . $viewDir . 'practice1/' . 'practice1_part2_form.php';
        break;

    case '/practice1/answer':
        require __DIR__ . $viewDir . 'practice1/' . 'practice1_part2_answer.php';
        break;

    case '/practice2/task1':
        require __DIR__ . $viewDir . 'practice2/' . 'practice2_task1.php';
        break;

    case '/practice2/task2':
        require __DIR__ . $viewDir . 'practice2/' . 'practice2_task2.php';
        break;

    case '/practice2/task2/answer':
        require __DIR__ . $viewDir . 'practice2/' . 'practice2_task2_answer.php';
        break;

    case '/practice2/part2':
        require __DIR__ . $viewDir . 'practice2/' . 'practice2_part2.php';
        break;

    case '/practice2/part2/answer':
        require __DIR__ . $viewDir . 'practice2/' . 'practice2_part2_answer.php';
        break;

    default:
        http_response_code(404);
        require __DIR__ . $viewDir . '404.php';
}

?>