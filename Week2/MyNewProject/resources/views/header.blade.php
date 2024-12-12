<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ваш сайт</title>
    <!-- Добавьте стили или другие ресурсы -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <style>
        /* Стили для навигационного меню */
        nav {
            text-align: right; /* Выравнивание меню справа */
            padding: 10px 20px;
        }

        nav ul {
            list-style-type: none; /* Убираем маркеры */
            margin: 0;
            padding: 0;
            display: flex; /* Горизонтальное выравнивание */
            justify-content: flex-end; /* Выравнивание элементов вправо */
        }

        nav ul li {
            margin-left: 20px; /* Отступы между элементами */
        }

        nav ul li a {
            text-decoration: none; /* Убираем подчеркивание */
            color: #333; /* Цвет текста */
            font-size: 16px;
            padding: 10px;
        }

        nav ul li a:hover {
            color: #007bff; /* Цвет текста при наведении */
        }
    </style>
</head>
<body>
<header>
    <nav>
        <ul>
            <li><a href="/">Главная страница</a></li>
            <li><a href="/company">Про нас</a></li>
            <!-- This is a comment <li><a href="">Логин</a></li>
            <li><a href="">Регистрация</a></li>-->
        </ul>
    </nav>
</header>

<!-- Контент страницы будет вставляться сюда -->
</body>
</html>
