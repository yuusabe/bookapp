<?php $title = "DTGBOOK【書籍詳細画面】";?>
<?php $csspath = "css/information_of_book.css";?>

@extends("common.header")
@section('body')

<main>
{{$num}}
@foreach(array($category) as $c)
{{$c}}
@endforeach
    <div id="book_p">
        <div id="book">
            <img src="image/book_001.png" id="image" alt="表紙画像" width="135" height="130" />
        </div>
        <div id="book">
            <div id="text">
                <p id="title">タイトル：</p>
                <p>発行年：a</p>
                <p>著者：</p>
                <p>出版社：</p>
                <p>カテゴリ：</p>
                <p>貸出状況：</p>
                <p>返却予定日：</p>
                <p>貸出者：真島</p>
            </div>
        </div>
    </div>
    <div id="button_p">
        <div id="button">
            <button type="button" class="btn btn-outline-secondary"  onclick="location.href='https://www-cf.dtg-shosekikanri2020-test.tk/list_of_books'">
                一覧へ
            </button>
        </div>
        <form action="{{ route('book.l_post') }}" method="post">
    @csrf
    <input type = "hidden" name="number" value="{{$num}}">
        <div id="button">
            <button type="submit" class="btn btn-outline-secondary" >
                貸出手続きへ
            </button>

            <button type="submit" class="btn btn-outline-secondary" disabled>
                貸出手続きへ
            </button>

            </form>

        </div>
    </div>
 </main>

@endsection