@if (Route::has('login'))
    <div class="top-right links">
        @auth
            @if(Auth::user()->isDisabled())
                <a href="{{ url('/') }}">Главная</a>
            @elseif(Auth::user()->isUser())
                <a href="{{ url('/user/index') }}">Кабинет</a>
            @elseif(Auth::user()->isAdmin())
                <a href="{{ url('/admin/index') }}">Панель</a>
            @endif

            <strong>
                <a href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                             document.getElementById('logout-form').submit();">
                    Выйти
                </a>
            </strong>

             <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
            </form>
        @else
            <strong>
                <a href="{{ route('login') }}">Войти</a>
            </strong>

            @if(Route::has('register'))
                <strong>
                    <a href="{{ route('register') }}">Регистрация</a>
                </strong>
            @endif
        @endauth
    </div>
@endif