<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta name="msapplication-TileColor" content="#ffffff">
        <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
        <meta name="theme-color" content="#ffffff">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        @include('components.seo')
        <link rel="apple-touch-icon" sizes="57x57" href="/apple-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="60x60" href="/apple-icon-60x60.png">
        <link rel="apple-touch-icon" sizes="72x72" href="/apple-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="76x76" href="/apple-icon-76x76.png">
        <link rel="apple-touch-icon" sizes="114x114" href="/apple-icon-114x114.png">
        <link rel="apple-touch-icon" sizes="120x120" href="/apple-icon-120x120.png">
        <link rel="apple-touch-icon" sizes="144x144" href="/apple-icon-144x144.png">
        <link rel="apple-touch-icon" sizes="152x152" href="/apple-icon-152x152.png">
        <link rel="apple-touch-icon" sizes="180x180" href="/apple-icon-180x180.png">
        <link rel="icon" type="image/png" sizes="192x192"  href="/android-icon-192x192.png">
        <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="96x96" href="/favicon-96x96.png">
        <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
        <link rel="manifest" href="/manifest.json">
        <link rel="dns-prefetch" href="https://fonts.gstatic.com">
        <link href="{{asset('css/app.css')}}" rel="stylesheet">
    </head>
    <body>
        <header>
            <div class="container">
                <div class="row flex-v-align">
                    <div class="col s12 m5 l3 logo-block margin-b2">
                        <a href="{{route('pages.home')}}" class="logo-link">
                            <img src="{{asset('android-icon-192x192.png')}}" class="logo-img">
                        </a>
                        <a href="{{route('pages.home')}}" class="logo-name">Система ЖКХ</a>
                    </div><div class="col s12 m4 offset-m3 l3 offset-l6">
                        <div class="registration-group">
                            <div class="signup">Регистрация</div>
                            <div class="signin">Вход</div>
                        </div>
                    </div>
                </div>
                <div class="row flex-v-align">
                    <div class="col s12 m8 offset-m4 l6 offset-l6">
                        <div class="row">
                            <div class="col s12 m4 l4 button-v-stack">
                                <div class="v-g-button-element">Отчеты</div>
                            </div>
                            <div class="col s12 m4 l4 button-v-stack">
                                <div class="v-g-button-element">Запросы</div>
                            </div>
                            <div class="col s12 m4 l4 button-v-stack">
                                <div class="v-g-button-element">Обращения</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <main>
            @yield('content')
        </main>
        <footer>
        </footer>
        @include('components.webfont')
        <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>