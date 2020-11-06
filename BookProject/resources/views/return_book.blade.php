<?php $title = "DTGBOOK【書籍返却画面】";?>
<?php $csspath = "css/return_book.css";?>

@extends("common.header")
@section('body')

<main>
    <div id="book_p">
        <div id="book">
            <img src="image/book_001.png" id="icon" alt="表紙画像" width="135" height="130" />
        </div>
        <div id="book">
            <p>タイトル：RPAのはじめかた</p>
            <p>出版社：技術評論社</p>
            <p>貸出状況：貸出可</p>
            <p>貸出期間：yyyyMMdd ~ yyyyMMdd</p>
        </div>
    </div>
    <div id="return">
        <p>この本を返却します</p>
    </div>
    <div id="button">
        <button type="button" class="btn btn-outline-secondary" onclick="location.href='mypage.html'">
            キャンセル
        </button>
        <button type="button" class="btn btn-outline-secondary" onclick="location.href='return_check.html'">
            確認
        </button>
    </div>
</main>

@endsection
@extends("common.footer")