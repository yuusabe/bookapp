<?php $title = "DTGBOOK【パスワード変更画面】";?>
<?php $csspath = "css/password_change.css";?>

@extends("common.header");

<main>
    <p>Hi!</p>
    <p>めんどくさいのでテキストボックスは後で作ります。</p>
    <div id="button">
        <button type="button" class="btn btn-outline-secondary" onclick="location.href='mypage.html'">
            キャンセル
        </button>
        <button type="button" class="btn btn-outline-secondary" onclick="location.href='completion.html'">
            設定
        </button>
    </div>
</main>

@section("common.footer");