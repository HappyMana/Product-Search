<!DOCTYPE html>
<html lang="ja">
    <head>
        @include("parts.head")
    </head>
    <body>
        @include("parts.header")
        
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
        
        <!--@foreach($products as $product)-->
        <!--    <p>{{ $product }}</p>-->
        <!--@endforeach-->
    </body>
</html>
