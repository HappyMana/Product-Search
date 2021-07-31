@extends('layouts.app')

@section("content")
    <div class="container-detail">
            <h1>{{ $items[$key]["itemName"] . $items[$key]["catchcopy"] }}</h1>
            <div class="clearfix">
                    <img src="{{ $items[$key]["mediumImageUrl1"] }}" class="card-img float col-3" alt="トップ1の画像" title="服1の画像">
                    <img src="{{ $items[$key]["mediumImageUrl2"] }}" class="card-img float col-3" alt="トップ2の画像" title="服2の画像">
                    <img src="{{ $items[$key]["mediumImageUrl3"] }}" class="card-img float col-3" alt="トップ3の画像" title="服3の画像">
            </div>
            <p class="price">値段：{{ $items[$key]["itemPrice"] }}円</p>
            <p>ショップ：{{ $items[$key]["shopName"] }}</p>
            <p>{{ $items[$key]["itemCaption"] }}</p>
            <button onClick="window.open('{{ $items[$key]["itemUrl"] }}','_blank')">楽天ショップへ</button>
            <button onclick="window.open('{{ $items[$key]["shopUrl"] }}','_blank')">ブランドショップへ</button>
            <form action="/home/favorite/{{ $key }}" method="POST">
                @csrf
                <input type="hidden" name="product" value="{{ $key }}">
                <button type="submit" onclick="clickBtn()">お気に入り登録</button>
            </form>
            <form action="/home/favorite/{{ $key }}" method="POST">
                @csrf
                @method("DELETE")
                <input type="hidden" name="product" value="{{ $key }}">
                <button type="submit" onclick="clickBtn()" id="delete_btn">お気に入り解除</button>
            </form>
            <a href="javascript:history.back()">戻る</a>
    </div>
    <script>
        //初期表示は非表示
        document.getElementById("delete_btn").style.visibility ="hidden";
        
        function clickBtn(){
        	const btn = document.getElementById("delete_btn");
        
        	if(btn.style.visibility=="visible"){
        		// hiddenで非表示
        		btn.style.visibility ="hidden";
        	}else{
        		// visibleで表示
        		btn.style.visibility ="visible";
        	}
        }
    </script>
@endsection