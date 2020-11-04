<?php $title = "DTGBOOK【パスワード変更画面】";?>
<?php $csspath = "css/password_change.css";?>

@extends("common.header");


    <main>
        <p>Hi!</p>

        <p>めんどくさいのでテキストボックスは後で作ります。</p>

        <div id="button">
            <button type="button" class="btn btn-outline-secondary" onclick="location.href='mypage.php'">
                キャンセル
            </button>
            <button type="button" class="btn btn-outline-secondary" onclick="location.href='completion.php'">
                設定
            </button>
        </div>
    </main>

@extends("common.footer");
