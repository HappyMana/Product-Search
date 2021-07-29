@extends('layouts.app')

@section("content")
    <h1>お気に入り一覧</h1>
    <div class="container-fluid card-group">
        <div class="row">
        @foreach($favoriteproducts as $id => $product)
            <div class="card col-3">
                <a href="{{ route('account.favorite.detail', $id) }}">
                    <img src="{{ $product["mediumImageUrl1"] }}" class="card-img-top" alt="トップの画像" title="服の画像">
                    <h5 class="card-title">{{ $product["itemName"] }}</h5>
                    <p class="price">値段：{{ $product["itemPrice"] }}円</p>
                    <p>ショップ：{{ $product["shopName"] }}</p>
                </a>
            </div>
        @endforeach
        </div>
    </div>
@endsection
