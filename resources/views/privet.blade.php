<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Главная</title>
</head>
<body>
                        @if (Route::has('login'))
                            <nav class="-mx-3 flex flex-1 justify-end">
                                @auth
                                    <a href="{{ url('/dashboard') }}" class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">Панель</a>
                                @else
                                    <a href="{{ route('login') }}" class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">Авторизация</a>
                                    @if (Route::has('register'))
                                        <a href="{{ route('register') }}" class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">Регистрация</a>
                                    @endif
                                @endauth
                            </nav>
                        @endif
                    </header>
<link rel="stylesheet" href="css/1.css">
<style>
   .ramka {
    border: 3px solid #00a8e1;
   }
</style>
<div class="site-index">

    <div class="jumbotron text-center bg-transparent mt-5 mb-5">
<h1 class="display-4" align="center">Ангарский политехнический техникум!</h1>

    <div class="body-content">

        <div class="row">
            <div class="col-lg-4 mb-3">
                <h2 align="left">Основные сведения</h2>
                <p>Полное наименование: Государственное бюджетное профессиональное образовательное учреждение Иркутской области «Ангарский политехнический техникум». Сокращенное наименование: ГБПОУ ИО «АПТ». Государственное бюджетное профессиональное образовательное учреждение Иркутской области «Ангарский политехнический техникум» организовано 1 августа 1947 года</p>
            </div>
            <div class="col-lg-4 mb-3">
                <h2>История создания</h2>
<p>Техникум организован 1 августа 1947 года в Иркутске на базе авиационного техникума и назывался Иркутским техникумом исскуственного жидкого топлива и газа (ИЖТ).
В 1950 году техникум переводится в Ангарск и арендует помещение школы №2 по улице Иркутской, а в 1951 году техникум получает постоянный учебно — лабораторный комплекс.
В 1952 году открывается вечернее отделение и производится набор первой группы.
10 августа 1957 года техникум переименовывается в Ангарский строительный техникум, в него влились Иркутский строительный техникум и Иркутский энергостроительный техникум.
3 октября 1958 года при техникуме создается заочное отделение. В связи с широкой подготовкой специалистов различных отраслей народного хозяйства 1 декабря 1961 года техникум получает статус Ангарского политехнического техникума.</p>
<div align="center"><img src="img/222.jpeg" width="50%" class="ramka"></div>
</div>
            <div class="col-lg-4">
            </div>
</body>
</html>