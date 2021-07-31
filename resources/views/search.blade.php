@extends('layouts.app')

@section("content")
        <div class="contents-search">
        	<div class="container-search">
        		<form action="/search/result" method="POST">
        		    @csrf
        		    
        			<div class="form-group form-inline input-group-sm">
        			    <label for="keyword" class="col-md-4 control-label">キーワード</label>
        			    <input type="text" class="form-control col-md-5" id="keyword" name="search[keyword]" placeholder="キーワード">
        			</div>
        			<div  class="form-group form-inline input-group-sm">
        			    <label for="category" class="col-md-4 control-label">カテゴリ</label>
        			    <select name="search[category]">
        			        <option hidden></option>
        			        <option value=555086>トップス</option>
        			        <option value=555089>ボトムス</option>
        			        <option value=555087>コート・ジャケット</option>
        			        <option value=110729>ワンピース</option>
        			        <option value=553029>チュニック</option>
        			        <option value=555083>オールインワン・サロペット</option>
        			        <option value=555084>ドレス</option>
        			        <option value=555091>スーツ・セットアップ</option>
        			        <option value=200074>ユニセックスウエア</option>
        			        <option value=553036>レインウエア</option>
        			        <option value=100428>和服</option>
        			        <option value=409165>事務服</option>
        			        <option value=210800>作業服</option>
        			        <option value=509252>白衣</option>
        			        <option value=303735>学生服</option>
        			        <option value=409365>水着</option>
        			        <option value=564338>ウェデングドレス</option>
        			        <option value=566016>オーダーメイド</option>
        			        <option value=403911>福袋</option>
        			        <option value=101801>その他</option>
        			    </select>
        			</div>
        			<div class="form-group form-inline input-group-sm">
        			    <label for="price_from" class="col-md-4 control-label">価格</label>
        			    <input type="number" class="form-control col-md-2" id="price_lower" name="search[price_lower]" placeholder="下限">
        				<label class="col-md-1 control-label">～</label>
        			    <input type="number" class="form-control col-md-2" id="price_upper" name="search[price_upper]" placeholder="上限">
        			</div>
        			
        			<div  class="form-group form-inline input-group-sm">
        			    <label for="sort" class="col-md-4 control-label">ソート順</label>
        			    <select name="search[sort]">
        			        <option value="standard" hidden></option>
        			        <option value="+itemPrice">安い順</option>
        			        <option value="-itemPrice">高い順</option>
        			        <option value="-reviewCount">レビュー件数多い順</option>
        			        <option value="+reviewCount">レビュー件数少ない順</option>
        			        <option value="-reviewAverage">レビュー平均高い順</option>
        			        <option value="+reviewAverage">レビュー平均低い順</option>
        			    </select>
        			</div>
        			
        			<!--<div class="form-group form-inline input-group-sm">-->
        			<!--  	<label for="brand" class="col-md-4 control-label">ブランド</label>-->
        			<!--    <input type="text" class="form-control col-md-5" id="brand" name="search[brand]" placeholder="ブランド">-->
        			<!--</div>-->
        			<div class="text-center">
        				<button class="btn btn-sm btn-outline-secondary" type="submit">検索</button>
        			</div>
        		</form>
        		<hr>
        	</div>
        </div>
        <a href="javascript:history.back()">戻る</a>
@endsection
