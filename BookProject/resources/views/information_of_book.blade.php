<?php $title = "DTGBOOK【書籍詳細画面】";?>
<?php $csspath = "css/information_of_book.css";?>

@extends("common.header")
@section('body')

<main>
{{$num}}
{{$category}}

    <div id="book_p">
        <div id="book">
            <img src="image/book_001.png" id="image" alt="表紙画像" width="135" height="130" />
        </div>
        <div id="book">
            <div id="text">
                <p id="title">タイトル：{{$book_data->title}}</p>
                <p>発行年：{{$book_data->year_of_issue}}</p>
                <p>著者：{{$book_data->Author}}</p>
                <p>出版社：{{$book_data->publisher}}</p>
                <p>カテゴリ：{{$category_name}}</p>
                <p>貸出状況：{{}}</p>
                <p>返却予定日：{{$return_day}}</p>
                <p>貸出者：{{$account_name}}</p>
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