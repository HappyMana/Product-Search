@extends('layouts.app')

@section('content')
<ul class="ml-auto">
    <!-- Authentication Links -->
    @guest
        <li class="item">
            <a class="link" href="{{ route('login') }}">{{ __('Login') }}</a>
        </li>
        @if (Route::has('register'))
            <li class="item">
                <a class="link" href="{{ route('register') }}">{{ __('Register') }}</a>
            </li>
        @endif
    @else
        <div class="favorite">
            <a href="{{ route('account.favorite') }}">お気に入り一覧</a>
        </div>
        <div class="user-info">
            <button>会員情報</button>
        </div>
        <li class="item dropdown">
            <a id="navbarDropdown" class="link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                {{ Auth::user()->name }} <span class="caret"></span>
            </a>
            
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdown">
                <a class="dropdown-item" href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                                 document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </div>
        </li>
    @endguest
</ul>
@endsection
