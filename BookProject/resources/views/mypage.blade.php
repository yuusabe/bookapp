<?php $title = "DTGBOOK【マイページ】";?>
<?php $csspath = "css/mypage.css";?>

@extends("common.header")
@section('body')

<main>
    <div id="account">
        <p>アカウント情報</p>
    </div>
    <div id="button">
        <button type="button" class="btn btn-outline-secondary"  onclick="location.href='password_change.html'">
            パスワード変更
        </button>
    </div>
    <div id="book_p">
        <div id="book">
            <img src="image/book_001.png" id="icon" alt="アイコン" width="135" height="130" />
        </div>
        
        <div id="book">
            <p>貸出中書籍</p>
            <p>タイトル：RPAのはじめかた</p>
            <p>出版社：技術評論社</p>
            <p>貸出状況：貸出可</p>
        </div>
    </div>
    <div id="button">
        <button type="button" class="btn btn-outline-secondary" onclick="location.href='return_book.html'">
            返却手続きへ
        </button>
    </div>
</main>

@endsection
@extends("common.footer")