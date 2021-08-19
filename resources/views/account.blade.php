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
            <a href="{{ route('home.favorite') }}">お気に入り一覧</a>
        </div>
        <div class="have">
            <a href="{{ route('home.have') }}">持っている服</a>
        </div>
        <div class="user-info">
            <a href="{{ route('home.info') }}">会員情報</a>
        </div>
    @endguest
</ul>
@endsection
