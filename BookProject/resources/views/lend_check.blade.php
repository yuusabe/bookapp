<?php $title = "DTGBOOK【貸出確認画面】";?>
<?php $csspath = "css/lend_check.css";?>

@extends("common.header")
@section('body')

<main>
    <div id="book_p">
        <div id="book">
            <img src="book_001.png" id="icon" alt="アイコン" width="135" height="130" />
        </div>
        
        <div id="book">
            <p>タイトル：RPAのはじめかた</p>
            <p>出版社：技術評論社</p>
            <p>貸出状況：貸出可</p>
            <p>貸出期間：yyyyMMdd ~ yyyyMMdd</p>
        </div>
    </div>
    <div id="lend">
        <p>貸出書籍の内容はこれでよろしいでしょうか</p>
    </div>
    <div id="button">
        <button type="button" class="btn btn-outline-secondary" onclick="location.href='lend_book.html'">
            キャンセル
        </button>
        <button type="button" class="btn btn-outline-secondary" onclick="location.href='completion.html'">
            確定
        </button>
    </div>
</main>

@endsection
@extends("common.footer")