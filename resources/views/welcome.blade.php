<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Styles -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="antialiased">
    <div
        class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">
        @if (Route::has('login'))
            <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                @auth
                    <a href="{{ route('profile.logout') }}"
                        class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Выйти</a>
                @else
                    <a href="{{ route('login') }}"
                        class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Войти</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}"
                            class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Регистрация</a>
                    @endif
                @endauth
            </div>
        @endif

        <div class="max-w-7xl mx-auto p-6 lg:p-8">
            <div class="flex justify-center">

            </div>

            <div class="mt-16">
                <div class="text-center text-5xl text-gray-500 dark:text-gray-400 sm:text-middle sm:ml-0">
                    Приглашаем Вас принять участие конкурсе новогодних открыток.
                </div>
                <div class="text-center text-xl text-gray-500 dark:text-gray-400 sm:text-left sm:ml-0">
                    Приглашаем Вас принять участие конкурсе новогодних открыток.
                    Присылайте рисунки на заданную тему.
                    Правила участия:
                    1. Ребенок может выслать на конкурс только одну работу.
                    2. Работы, в соответствующих категорией, должны быть выполнены детьми самостоятельно и
                    индивидуально.
                    3. Стиль всегда остаются на усмотрение участника.
                    Номинации:
                    • рисунок,
                    • акварель,
                    • гуашь,
                    • другое
                    К участию в конкурсе допускаются:
                    • Ученики 1-11 классов школ, лицеев, гимназий, колледжей и любых других образовательных учреждений
                    без предварительного отбора.

                    Требования к работам:
                    • соответствие содержания творческой работы заявленной тематике
                    • актуальность конкурсной работы
                    • творческая индивидуальность
                    • оригинальность идеи, новаторство, творческий подход
                    • полнота и образность раскрытия темы
                    • качество оформления и наглядность материала
                    • соответствие творческого уровня возрасту автора
                    • степень самостоятельности выполнения

                    Требование к файлу:
                    • Объем файла с работой не должен превышать 1 Мб.

                </div>
                <div class="text-center text-5xl text-gray-500 dark:text-gray-400 sm:text-middle sm:ml-0">
                    <a class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150"
                        href="{{ route('work.create') }}">
                        {{ __('Принять участие') }}
                    </a>
                </div>

            </div>


        </div>
    </div>
</body>

</html>