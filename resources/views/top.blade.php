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
                    <button type="button" class="btn btn-outline-primary w-100px" name="search[category]" value="555089">コート・ジャケット</button>
                    <button type="button" class="btn btn-outline-primary w-100px" name="search[category]" value="555089">ワンピース・ドレス</button>
                    <button type="button" class="btn btn-outline-primary w-200px" name="search[category]" value="555089">チュニック</button>
                    <button type="button" class="btn btn-outline-primary w-200px" name="search[category]" value="555089">オールインワン・サロペット</button>
                    <button type="button" class="btn btn-outline-primary w-200px" name="search[category]" value="555089">ドレス</button>
                    <button type="button" class="btn btn-outline-primary w-200px" name="search[category]" value="555089">スーツ・セットアップ</button>
                    <button type="button" class="btn btn-outline-primary w-200px" name="search[category]" value="555089">ユニセックスウエア</button>
                    <button type="button" class="btn btn-outline-primary w-200px" name="search[category]" value="555089">レインウエア</button>
                    <button type="button" class="btn btn-outline-primary w-200px" name="search[category]" value="555089">和服</button>
                    <button type="button" class="btn btn-outline-primary w-200px" name="search[category]" value="555089">事務服</button>
                    <button type="button" class="btn btn-outline-primary w-200px" name="search[category]" value="555089">作業服</button>
                    <button type="button" class="btn btn-outline-primary w-200px" name="search[category]" value="555089">白衣</button>
                    <button type="button" class="btn btn-outline-primary w-200px" name="search[category]" value="555089">学生服</button>
                    <button type="button" class="btn btn-outline-primary w-200px" name="search[category]" value="555089">水着</button>
                    <button type="button" class="btn btn-outline-primary w-200px" name="search[category]" value="555089">ウェデングドレス</button>
                    <button type="button" class="btn btn-outline-primary w-200px" name="search[category]" value="555089">オーダーメイド</button>
                    <button type="button" class="btn btn-outline-primary w-200px" name="search[category]" value="555089">福袋</button>
                    <button type="button" class="btn btn-outline-primary w-200px" name="search[category]" value="555089">その他</button>
                </form>
                </div>
@endsection