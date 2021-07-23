@extends('layouts.app')

@section("content")
        <div class="container-fluid card">
                <h1>{{ $item["itemName" ]}}</h1>
                <img src="{{ $item["mediumImageUrls"][0]["imageUrl"] }}" class="card-img-top" alt="トップの画像" title="服の画像">
                <p class="price">値段：{{ $item["itemPrice"] }}円</p>
                <p>ショップ：{{ $item["shopName"] }}</p>
                <a href="{{ $item['shopURL']}}">ショップへ</a>
        </div>
        
@endsection