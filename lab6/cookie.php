<?php
declare(strict_types=1);

/*
ЗАДАНИЕ 1
- Инициализируйте переменную для подсчета количества посещений
- Если соответствующие данные передавались через куки
  сохраняйте их в эту переменную 
- Нарастите счетчик посещений
- Инициализируйте переменную для хранения значения последнего посещения страницы
- Если соответствующие данные передавались из куки, отфильтруйте их и сохраните в эту переменную.
  Для фильтрации используйте функции trim(), htmlspecialchars()
- С помощью функции setcookie() установите соответствующие куки.  Задайте время хранения куки 1 сутки. 
  Для задания времени последнего посещения страницы используйте функцию date()
*/

// Инициализируем переменные
$visits = 1;
$visitMessage = '';

// Проверяем существование куки с количеством посещений
if (isset($_COOKIE['visits'])) {
    $visits = (int)$_COOKIE['visits'] + 1;
}

// Формируем сообщение о последнем посещении
$lastVisitText = '';
if (isset($_COOKIE['last_visit'])) {
    $lastVisitText = htmlspecialchars(trim($_COOKIE['last_visit']));
    $visitMessage = "<p>Последнее посещение: $lastVisitText</p>";
} else {
    // Если куки нет - это первый визит
    $visitMessage = "<p><strong>Добро пожаловать! Это ваш первый визит на наш сайт.</strong></p>";
}

// Устанавливаем куки на следующие 24 часа
setcookie('visits', (string)$visits, time() + 86400);
setcookie('last_visit', date('Y-m-d H:i:s'), time() + 86400);
?>
<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Последний визит</title>
</head>

<body>

  <h1>Последний визит</h1>

  <?php
  echo "<p>Количество посещений: $visits</p>";
  echo $visitMessage;
  ?>

</body>

</html>