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
        <div class="col s12 m8 offset-m4 l8 offset-l4">
            <div class="row">
                <div class="col s12 m3 l3 button-v-stack">
                    <a href="{{route('pages.home')}}" class="v-g-button-element active">Главная</a>
                </div>
                <div class="col s12 m3 l3 button-v-stack">
                    <a href="{{route('report.index')}}" class="v-g-button-element">Отчеты</a>
                </div>
                <div class="col s12 m3 l3 button-v-stack">
                    <a href="{{route('inquiry.index')}}" class="v-g-button-element">Запросы</a>
                </div>
                <div class="col s12 m3 l3 button-v-stack">
                    <a href="{{route('appeal.index')}}" class="v-g-button-element">Обращения</a>
                </div>
            </div>
        </div>
    </div>
</div>