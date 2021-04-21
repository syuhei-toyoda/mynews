<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Myprofile</title>
    </head>
    <body>
        <h1>Myプロフィール編集画面</h1>
    </body>
    {{-- ログインしていなかったらログイン画面へのリンクを表示 --}}
    @guest
        <li><a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a></li>
    {{-- ログインしていたらユーザー名とログアウトボタンを表示 --}}
    @else
        <li class="nav-item dropdown">
               <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                         {{ Auth::user()->name }} <span class="caret"></span>
               </a>

               <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                         <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                 {{ __('Logout') }}
                         </a>

                         <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                         </form>
               </div>
        </li>
        @endguest
</html>
