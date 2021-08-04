@extends('layouts.app')

@section("content")
    <div class="container-detail">
            <h1>{{ $items[$key]["itemName"] . $items[$key]["catchcopy"] }}</h1>
            <div class="clearfix">
                @if (isset($items[$key]["mediumImageUrl1"]))
                    <img src="{{ $items[$key]["mediumImageUrl1"] }}" class="card-img float col-3" alt="トップ1の画像" title="服1の画像">
                    @if (isset($items[$key]["mediumImageUrl2"]))
                        <img src="{{ $items[$key]["mediumImageUrl2"] }}" class="card-img float col-3" alt="トップ2の画像" title="服2の画像">
                        @if (isset($items[$key]["mediumImageUrl3"]))
                            <img src="{{ $items[$key]["mediumImageUrl3"] }}" class="card-img float col-3" alt="トップ3の画像" title="服3の画像">
                        @endif
                    @endif
                @endif
            </div>
            <h2 class="price">値段：{{ $items[$key]["itemPrice"] }}円</h2>
            <h2 class="reviewAverage">平均評価：{{ $items[$key]["reviewAverage"] }}</h2>
            <h2>ショップ：{{ $items[$key]["shopName"] }}</p>
            <h2>{{ $items[$key]["itemCaption"] }}</h2>
            <button onClick="window.open('{{ $items[$key]["itemUrl"] }}','_blank')">楽天ショップへ</button>
            <button onclick="window.open('{{ $items[$key]["shopUrl"] }}','_blank')">ブランドショップへ</button>
            @if($isFavorite)
                <form action="/home/favorite/{{ $id }}" method="POST">
                    @csrf
                    @method("DELETE")
                    <input type="hidden" name="product" value="{{ $id }}">
                    <button type="submit">お気に入り解除</button>
                </form>
            @else
                <form action="/home/favorite/{{ $key }}" method="POST">
                    @csrf
                    <input type="hidden" name="product" value="{{ $key }}">
                    <button type="submit">お気に入り登録</button>
                </form>
            @endif
            <a href="javascript:history.back()">戻る</a>
    </div>
@endsection