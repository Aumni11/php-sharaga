<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <header>
        <div class="header">
            <div class="logo">Logo</div>
            <ul>
                <li><a href="#">Главная</a></li>
                <li><a href="#">Массивы</a></li>
            </ul>
        </div>
    </header>
    <main>
        <img src="{{ Vite::asset('resources/images/имя.расширение') }}">
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat quo officiis quia quisquam unde, iste libero voluptate similique vel itaque modi ut, in magnam! Praesentium porro libero distinctio quibusdam non.</p>
    </main>
    <footer>
        <p>Токарев 27.04.2006</p>
    </footer>
</body>
</html>