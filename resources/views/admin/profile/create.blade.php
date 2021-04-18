@extends('layouts.profile')

@section('title', 'プロフィールの新規作成')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h2>プロフィール新規作成</h2>
                <form action="{{ action('Admin\ProfileController@create') }}" method="post" enctype="multipart/form-data">

                    @if (count($errors) > 0)
                        <ul>
                            @foreach($errors->all() as $e)
                                <li>{{ $e }}</li>
                            @endforeach
                        </ul>
                    @endif
                    <div class="form-group row">
                        <label class="col-md-2" for="name">名前</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="name" value="{{ old('name') }}">
                        </div>
                    </div>
                    <div class="form-group row">
                    <label class="col-md-2" for="gender">性別</label>
                    <div class="col-md-10">
                    <input type="radio" name="gender" value="男性" checked>男性<br>
                    <input type="radio" name="gender" value="女性">女性
                    </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2" for="hobby">趣味</label>
                        <div class="col-md-10">
                            <textarea class="form-control" name="hobby" rows="8">{{ old('body') }}</textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2" for="introduction">自己紹介欄</label>
                        <div class="col-md-10">
                            <textarea class="form-control" name="introduction" rows="8">{{ old('body') }}</textarea>
                        </div>
                    {{ csrf_field() }}
                    <input type="submit" class="btn btn-primary" value="更新">
                </form>
            </div>
        </div>
    </div>
@endsection

<!-- @section('content')
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
@guest
　　<li><a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a></li>
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
        @endguest -->