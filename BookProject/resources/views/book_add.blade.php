<?php $title = "DTGBOOK【書籍登録画面】";?>
<?php $csspath = "css/book_add.css";?>

@extends("common.header")
@section('body')

<main>
    <div id="text">
        <p>登録する書籍の内容を入力してください。</p>
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
                <input type="text" name="title" placeholder="タイトルを入力してください" id="b_tbox">
            </div>
            <div id="tbox">
                タイトル（フリガナ）
                <input type="text" name="title_h" placeholder="タイトルのフリガナを入力してください" id="b_tbox">
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
                <input type="text" name="author" placeholder="著者を入力してください" id="b_tbox">
            </div>
            <div id="tbox">
                　　著者（フリガナ）
                <input type="text" name="author_h" placeholder="著者のフリガナを入力してください" id="b_tbox">
            </div>
            <div id="tbox">
                　　　　　　　出版社
                <input type="text" name="publisher" placeholder="出版社を入力してください" id="b_tbox">
            </div>
            <div id="tbox">
                <label>
                    <span class="btn btn-outline-ssecondary">
                        　　　　　　カテゴリ
                        <select name="category" id="b_tbox">
                            <option value="">選択してください
                            <option value="0">RPA
                            <option value="1">統計学
                            <option value="2">AI
                        </select>
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