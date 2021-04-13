@extends('layouts.profile')

@section('title', 'プロフィールの新規作成')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h2>プロフィール新規作成</h2>
            </div>
            <div class="col-md-10">
            名前<input type="text" class="form-control" name="name" value="{{ old('name') }}">
            </div>
            性別<div class="col-md-10">
            男性<input type="radio" class="form-control" name="gender" value="{{ old('gender') }}">
            女性<input type="radio" class="form-control" name="gender" value="{{ old('gender') }}">
            </div>
            趣味<div class="col-md-10">
                            <textarea class="form-control" name="hobby" rows="5">{{ old('hobby') }}</textarea>
            </div>
            自己紹介<div class="col-md-10">
                            <textarea class="form-control" name="introduction" rows="10">{{ old('introduction') }}</textarea>
            </div>
            <input type="submit" class="btn btn-primary" value="更新">

        </div>
    </div>
@endsection
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