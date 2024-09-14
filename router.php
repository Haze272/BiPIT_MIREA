<?php

$request = $_SERVER['REQUEST_URI'];
$viewDir = '/';

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

    default:
        http_response_code(404);
        require __DIR__ . $viewDir . '404.php';
}

?>