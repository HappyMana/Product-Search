@extends('layouts.app')

@section("content")
    <div class="container-detail">
        <h1>{{ $favorite_product["itemName"] . $favorite_product["catchcopy"] }}</h1>
        <div class="clearfix">
            @if (isset($favorite_product["mediumImageUrl1"]))
                <img src="{{ $favorite_product["mediumImageUrl1"] }}" class="card-img float col-3" alt="トップ1の画像" title="服1の画像">
                @if (isset($favorite_product["mediumImageUrl2"]))
                    <img src="{{ $favorite_product["mediumImageUrl2"] }}" class="card-img float col-3" alt="トップ2の画像" title="服2の画像">
                    @if ($favorite_product["mediumImageUrl3"]))
                        <img src="{{ $favorite_product["mediumImageUrl3"] }}" class="card-img float col-3" alt="トップ3の画像" title="服3の画像">
                    @endif
                @endif
            @endif
        </div>
        <p class="price">値段：{{ $favorite_product["itemPrice"] }}円</p>
        <p>ショップ：{{ $favorite_product["shopName"] }}</p>
        <p>{{ $favorite_product["itemCaption"] }}</p>
        <button onclick="window.open('{{ $favorite_product["itemUrl"] }}','_blank')">楽天ショップへ</button>
        <button onclick="window.open('{{ $favorite_product["shopUrl"] }}','_blank')">ブランドショップへ</button>
        <form action="/home/favorite/{{ $favorite_product['id'] }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit">お気に入り解除</button>
        </form>
        <a href="javascript:history.back()">戻る</a>
    </div>
@endsection
