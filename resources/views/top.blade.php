@extends('layouts.app')

@section("content")
        <div class="contents-top">
            <div class="container-top">
                <form action="/search/result" method="POST">
                    @csrf
                    <input type="hidden" name="search[keyword]">
                    <input type="hidden" name="search[price_lower]">
                    <input type="hidden" name="search[price_upper]">
                    <input type="hidden" name="search[sort]" value="">
                    <button type="submit" class="btn btn-outline-primary w-100px" name="search[category]" value=555086>トップス</button>
                    <button type="button" class="btn btn-outline-primary w-100px" name="search[category]" value="555089">ボトムス </button>
                    <button type="button" class="btn btn-outline-primary w-100px" name="search[category]" value="555087">コート・ジャケット</button>
                    <button type="button" class="btn btn-outline-primary w-100px" name="search[category]" value="110729">ワンピース・ドレス</button>
                    <button type="button" class="btn btn-outline-primary w-200px" name="search[category]" value="553029">チュニック</button>
                    <button type="button" class="btn btn-outline-primary w-200px" name="search[category]" value="555083">オールインワン・サロペット</button>
                    <button type="button" class="btn btn-outline-primary w-200px" name="search[category]" value="555084">ドレス</button>
                    <button type="button" class="btn btn-outline-primary w-200px" name="search[category]" value="555089">スーツ・セットアップ</button>
                    <button type="button" class="btn btn-outline-primary w-200px" name="search[category]" value="200074">ユニセックスウエア</button>
                    <button type="button" class="btn btn-outline-primary w-200px" name="search[category]" value="553036">レインウエア</button>
                    <button type="button" class="btn btn-outline-primary w-200px" name="search[category]" value="100428">和服</button>
                    <button type="button" class="btn btn-outline-primary w-200px" name="search[category]" value="409165">事務服</button>
                    <button type="button" class="btn btn-outline-primary w-200px" name="search[category]" value="303735">学生服</button>
                    <button type="button" class="btn btn-outline-primary w-200px" name="search[category]" value="409365">水着</button>
                    <button type="button" class="btn btn-outline-primary w-200px" name="search[category]" value="564338">ウェデングドレス</button>
                    <button type="button" class="btn btn-outline-primary w-200px" name="search[category]" value="566016">オーダーメイド</button>
                    <button type="button" class="btn btn-outline-primary w-200px" name="search[category]" value="403911">福袋</button>
                    <button type="button" class="btn btn-outline-primary w-200px" name="search[category]" value="101801">その他</button>
                </form>
                </div>
@endsection