@extends('layouts.app')

@section("content")
    <h1>検索結果</h1>
    <div class="container-fluid card-group">
        <div class="row">
        @foreach($items as $key => $item)
            <div class="card col-3">
                <a href="{{ route('search.result.detail', $key) }}">
                    <img src="{{ $item["mediumImageUrl1"] }}" class="card-img-top" alt="トップの画像" title="服の画像">
                    <h5 class="card-title">{{ $item["itemName"] }}</h5>
                    <p class="price">値段：{{ $item["itemPrice"] }}円</p>
                    <p>ショップ：{{ $item["shopName"] }}</p>
                </a>
            </div>
        @endforeach
        </div>
    </div>
    <div>
        <a href="{{ route('search') }}">検索画面に戻る</a>
    </div>
@endsection