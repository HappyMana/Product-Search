@extends('layouts.app')

@section("content")
    <div class="container-detail">
        <h1>{{ $favoriteproduct["itemName"] . $favoriteproduct["catchcopy"] }}</h1>
        <div class="clearfix">
            <img src="{{ $favoriteproduct["mediumImageUrl1"] }}" class="card-img float col-3" alt="トップ1の画像" title="服1の画像">
            <img src="{{ $favoriteproduct["mediumImageUrl2"] }}" class="card-img float col-3" alt="トップ2の画像" title="服2の画像">
            <img src="{{ $favoriteproduct["mediumImageUrl3"] }}" class="card-img float col-3" alt="トップ3の画像" title="服3の画像">
        </div>
        <p class="price">値段：{{ $favoriteproduct["itemPrice"] }}円</p>
        <p>ショップ：{{ $favoriteproduct["shopName"] }}</p>
        <p>{{ $favoriteproduct["itemCaption"] }}</p>
        <button onclick="window.open('{{ $favoriteproduct["itemUrl"] }}','_blank')">楽天ショップへ</button>
        <button onclick="window.open('{{ $favoriteproduct["shopUrl"] }}','_blank')">ブランドショップへ</button>
        <form action="/home/favorite/{{ $favoriteproduct['id'] }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit">お気に入り解除</button>
        </form>
        <a href="javascript:history.back()">戻る</a>
    </div>
@endsection
