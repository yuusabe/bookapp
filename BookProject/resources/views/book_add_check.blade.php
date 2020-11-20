<?php $title = "DTGBOOK【書籍登録確認画面】";?>
<?php $csspath = "css/book_add_check.css";?>

@extends("common.header")
@section('body')

<main>
    <form method="post" action="{{ route('book_add.send') }}">
        @csrf
        <div id="book_p">
            <div id="book">
                <img src="{{ $input['read_temp_path'] }}"  id="image" alt="表紙画像" width="135" height="130" />
            </div>
            
            <div id="book">
                
                    <div>
                    <p>タイトル：{{ $input["title"] }}</p>
                    <!-- <input type="submit" value="送信"> -->
                    <p>タイトル（フリガナ）：{{ $input["title_h"] }}</p>
                    <p>発行年：{{ $input["year"] }}</p>
                    <p>著者：{{ $input["author"] }}</p>
                    <p>著者（フリガナ）：{{ $input["author_h"] }}</p>
                    <p>出版社：{{ $input["publisher"] }}</p>
                    <p>カテゴリ：{{ $input["category"] }}</p>
                    </div>
        </form>
        </div>
    </div>
    <div id="text">
        <p>登録する書籍の内容はこちらでよろしいですか。</p>
    </div>
    <div id="button_p">
        <div id="button">
            <button type="button" class="btn btn-outline-secondary" onclick="location.href='https://www-cf.dtg-shosekikanri2020-test.tk/book_add'">
                キャンセル
            </button>
        </div>
        <div id="button">
            <button type="button" class="btn btn-outline-secondary" onclick="location.href='https://www-cf.dtg-shosekikanri2020-test.tk/completion'">
                確定
            </button>
        </div>
    </div>
</main>

@endsection
@extends("common.footer")