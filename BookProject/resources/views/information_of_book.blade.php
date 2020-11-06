<?php $title = "DTGBOOK【書籍詳細画面】";?>
<?php $csspath = "css/information_of_book.css";?>

@extends("common.header")
@section('header_body')

<main>
    <div id="book_p">
        <div id="book">
            <img src="book_001.png" id="icon" alt="アイコン" width="135" height="130" />
        </div>
        
        <div id="book">
            <p>タイトル：RPAのはじめかた</p>
            <p>出版社：技術評論社</p>
            <p>貸出状況：貸出可</p>
        </div>
    </div>
    <div id="button">
        <button type="button" class="btn btn-outline-secondary"  onclick="location.href='list_of_books.html'">
            一覧へ
        </button>
        <button type="button" class="btn btn-outline-secondary" onclick="location.href='lend_book.html'">
            貸出手続きへ
        </button>
    </div>
 </main>

 @endsection
@extends("common.footer")