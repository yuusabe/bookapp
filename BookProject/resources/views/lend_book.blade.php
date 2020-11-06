<?php $title = "DTGBOOK【貸出画面】";?>
<?php $csspath = "css/lend_book.css";?>

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
        </div>
    </div>
    
    <div id="lend">
        <p>貸出期間選択</p>
    </div>
    
    <div class="form-group" id="datepicker-daterange">
        <div class="col-sm-9 form-inline" id="lend">
            <div class="input-daterange input-group" id="datepicker">
                <input type="date" class="input-sm form-control" name="start" />
                <span class="input-group-addon">　〜　</span>
                <input type="date" class="input-sm form-control" name="end" />
            </div>
        </div>
    </div>
    <div id="button">
        <button type="button" class="btn btn-outline-secondary" onclick="location.href='information_of_book.html'">
            キャンセル
        </button>
    </div>
    <div id="button">
        <button type="button" class="btn btn-outline-secondary" onclick="location.href='lend_check.html'">
            確認
        </button>
    </div>
</main>

@endsection
@extends("common.footer")