@extends('layouts.app')

@section("content")
        
        <div class="contents-top">
            <div class="container-top">
                <button type="button" class="btn btn-outline-primary w-200px">トップス</button>
                <button type="button" class="btn btn-outline-primary w-200px">コート・ジャケット</button>
                <button type="button" class="btn btn-outline-primary w-200px">パンツ</button>
                <button type="button" class="btn btn-outline-primary w-200px">ワンピース・ドレス</button>
                <button type="button" class="btn btn-outline-primary w-200px">スカート</button>
                <button type="button" class="btn btn-outline-primary w-200px">シューズ</button>
                <button type="button" class="btn btn-outline-primary w-200px">腕時計</button>
        </div>
        
        <!--@foreach($products as $key => $product)-->
        <!--    <p>{{ $key }}</p>-->
        <!--    <br>-->
        <!--    <p>{{ $product["id"] }}</p>-->
        <!--    <br>-->
        <!--@endforeach-->
        
@endsection