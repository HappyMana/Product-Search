<!DOCTYPE html>
<html lang="ja">
    <head>
        @include('parts.head')
    </head>
    <body>
        @include('parts.header')
        <div class="contents-search">
        	<div class="container-search">
        		<form action="/search/result" method="POST">
        		    @csrf
        			<div class="form-group form-inline input-group-sm">
        			    <label for="keyword" class="col-md-4 control-label">キーワード</label>
        			    <input type="text" class="form-control col-md-5" id="keyword" name="search[keyword]" placeholder="キーワード">
        			</div>
        			<div class="form-group form-inline input-group-sm">
        			    <label for="keyword" class="col-md-4 control-label">カテゴリ</label></label>
        			    <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="custom-check-1">
                            <label class="custom-control-label" for="custom-check-1">トップス</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="custom-check-2">
                            <label class="custom-control-label" for="custom-check-2">コート・ジャケット</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="custom-check-3">
                            <label class="custom-control-label" for="custom-check-3">パンツ</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="custom-check-4">
                            <label class="custom-control-label" for="custom-check-4">ワンピース・ドレス</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="custom-check-5">
                            <label class="custom-control-label" for="custom-check-5">スカート</label>
                        </div>
                         <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="custom-check-6">
                            <label class="custom-control-label" for="custom-check-6">シューズ</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="custom-check-7">
                            <label class="custom-control-label" for="custom-check-7">腕時計</label>
                        </div>
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
