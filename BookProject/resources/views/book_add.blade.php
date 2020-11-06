<?php $title = "DTGBOOK【書籍登録画面】";?>
<?php $csspath = "css/book_add.css";?>

@extends("common.header")
@section('body')

<main>
    <div id="text">
        <p>書籍を登録します〜情報表示したり画像を選択</p>
    </div>
    <div id="button">
        <button type="button" class="btn btn-outline-secondary" onclick="location.href='list_of_books.html'">
            キャンセル
        </button>
        
        <button type="button" class="btn btn-outline-secondary" onclick="location.href='book_add_check.html'">
            書籍登録
        </button>
    </div>
</main>

@endsection
@extends("common.footer")