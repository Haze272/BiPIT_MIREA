<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <style>
        .form {
            display: flex;
            flex-direction: column;
            gap: 8px;
        }
    </style>
</head>
<body>
    <h1>Оцените качество предоставляемых услуг!</h1>

    <form action="/practice1/practice1_part2_answer.php" class="form" method="POST">
        Насколько вы довольны использованием модуля хранения документов информационной системы управления интеллектуальной собсвтенностью (1 - очень плохо, 5 - очень хорошо)?

        <div class="estimate">
            <label>
                <input type="radio" name="ratingAll" value="1" />
                1
            </label>

            <label>
                <input type="radio" name="ratingAll" value="2" />
                2
            </label>

            <label>
                <input type="radio" name="ratingAll" value="3" />
                3
            </label>

            <label>
                <input type="radio" name="ratingAll" value="4" />
                4
            </label>

            <label>
                <input type="radio" name="ratingAll" value="5" />
                5
            </label>
        </div>

        Насколько интуитивно понятный интерфейс (1 - очень плохо, 5 - очень хорошо)?

        <div class="estimate">
            <label>
                <input type="radio" name="ratingUI" value="1" />
                1
            </label>

            <label>
                <input type="radio" name="ratingUI" value="2" />
                2
            </label>

            <label>
                <input type="radio" name="ratingUI" value="3" />
                3
            </label>

            <label>
                <input type="radio" name="ratingUI" value="4" />
                4
            </label>

            <label>
                <input type="radio" name="ratingUI" value="5" />
                5
            </label>
        </div>

        <input type="text" name="respondentName" placeholder="Введите ваше имя">

        <input type="submit" value="Отправить">
    </form>
</body>
</html>