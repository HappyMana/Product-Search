<!DOCTYPE html>
<html lang="ja">
    <head>
        @include("parts.head")
    </head>
    <body>
        @include("parts.header")
        <div class="contents-search">
        	<div class="container-search">
        		<form action="/search/result" method="POST">
        		    @csrf
        		    
        			<div class="keyword form-group form-inline input-group-sm">
        			    <label for="keyword" class="col-md-4 control-label">キーワード</label>
        			    <input type="text" class="form-control col-md-5" id="keyword" name="search[keyword]" placeholder="キーワード">
        			</div>
        			<div  class="category form-group form-inline input-group-sm">
        			    <label for="category" class="col-md-4 control-label">カテゴリ</label>
        			    <!--<select name="genre0">-->
        			    <!--    <option hidden></option>-->
        			    <!--    <option name="women" value="women">レディースファッション</option>-->
        			    <!--    <option name="mens" value="men">メンズファッション</option>-->
        			    <!--</select>-->
        			    <select name="genre1">
        			        <option hidden></option>
        			        <option value="tops">トップス</option>
        			        <option value="bottoms">ボトムス</option>
        			        <option value="coat-jacket">コート・ジャケット</option>
        			        <option value="one-piece">ワンピース</option>
        			        <option value="tunic">チュニック</option>
        			        <option value="all-in-one-overalls">オールインワン・サロペット</option>
        			        <option value="dress">ドレス</option>
        			        <option value="suit-setup">スーツ・セットアップ</option>
        			        <option value="one-piece">ユニセックスウエア</option>
        			        <option value="unisex-wear">レインウエア</option>
        			        <option value="kimono">和服</option>
        			        <option value="office-cloth">事務服</option>
        			        <option value="work-cloth">作業服</option>
        			        <option value="white-coat">白衣</option>
        			        <option value="school-uniform">学生服</option>
        			        <option value="swimsuit">水着</option>
        			        <option value="wedding-dress">ウェデングドレス</option>
        			        <option value="made-to-order">オーダーメイド</option>
        			        <option value="lucky-bag">福袋</option>
        			        <option value="other">その他</option>
        			    </select>
        			</div>
        			<div class="form-group form-inline input-group-sm">
        			    <label for="price_from" class="col-md-4 control-label">価格</label>
        			    <input type="number" class="form-control col-md-2" id="price_lower" name="search[price_lower]" placeholder="下限">
        				<label class="col-md-1 control-label">～</label>
        			    <input type="number" class="form-control col-md-2" id="price_upper" name="search[price_upper]" placeholder="上限">
        			</div>
        			<div class="form-group form-inline input-group-sm">
        			  	<label for="brand" class="col-md-4 control-label">ブランド</label>
        			    <input type="text" class="form-control col-md-5" id="brand" name="search[brand]" placeholder="ブランド">
        			</div>
        			<div class="text-center">
        				<button class="btn btn-sm btn-outline-secondary" type="submit">検索</button>
        			</div>
        		</form>
        		<hr>
        	</div>
        </div>
    </body>
</html>
