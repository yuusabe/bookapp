<?php $title = "DTGBOOK【書籍登録画面】";?>
<?php $csspath = "css/book_add.css";?>

@extends("common.header")
@section('body')

<main>
    <div id="text">
        <p>登録する書籍の内容を入力してください</p>
    </div>
    <div id="b_info">
        <div id="b_image">
            <label>
                <span class="btn btn-outline-secondary">
                    ファイルを選択してください
                    <input type="file" id="b_image" accept="image/*" style="display:none">
                </span>
            </label>
            <img id="preview" width="200" height="200">
        </div>
    </div>
    <div id="b_info">
        <form>
            <div id="tbox">
                　　　　　　タイトル
                <input type="text" name="title" placeholder="title" id="b_tbox">
            </div>
            <div id="tbox">
                タイトル（ふりがな）
                <input type="text" name="title_h" placeholder="title" id="b_tbox">
            </div>
            <div id="tbox">
                <label>
                    <span class="btn btn-outline-ssecondary">
                        　　　　　　　発行年
                        <select name="year" id="id_year">
                        </select>
                    </span>
                </label>
            </div>
            <div id="tbox">
                　　　　　　　　著者
                <input type="text" name="author" placeholder="title" id="b_tbox">
            </div>
            <div id="tbox">
                　　著者（ふりがな）
                <input type="text" name="author_h" placeholder="title" id="b_tbox">
            </div>
            <div id="tbox">
                　　　　　　　出版社
                <input type="text" name="publisher" placeholder="title" id="b_tbox">
            </div>
            <div id="tbox">
                <label>
                    <span class="btn btn-outline-ssecondary">
                        　　　　　　カテゴリ
                        <input type="text" name="category" placeholder="category" id="b_tbox">
                    </span>
                </label>
            </div>
        </form>
    </div>
    <div id="button_p">
        <div id="button">
            <button type="button" class="btn btn-outline-secondary" onclick="location.href='list_of_books.html'">
                キャンセル
            </button>
        </div>
        <div id="button">
            <button type="button" class="btn btn-outline-secondary" onclick="location.href='book_add_check.html'">
                書籍登録
            </button>
        </div>
    </div>
</main>

<script src="{{ asset('/js/image.js') }}"></script>
<script src="{{ asset('/js/date.js') }}"></script>
@endsection
@extends("common.footer")