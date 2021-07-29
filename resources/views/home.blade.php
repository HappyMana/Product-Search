@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <!--<div class="card">-->
                <!--<div class="card-header">Dashboard</div>-->

                <!--<div class="card-body">-->
                <!--    @if (session('status'))-->
                <!--        <div class="alert alert-success" role="alert">-->
                <!--            {{ session('status') }}-->
                <!--        </div>-->
                <!--    @endif-->

                <!--    You are logged in!-->
                <!--</div>-->
                <div class="favorite">
                    <button onclick="location.href='{{ route('home.favorite') }}'">お気に入り一覧</button>
                </div>
                <div class="user-info">
                    <button>会員情報</button>
                </div>
            <!--</div>-->
        </div>
    </div>
</div>
@endsection
