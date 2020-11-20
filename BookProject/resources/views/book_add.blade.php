<?php $title = "DTGBOOK【書籍登録画面】";?>
<?php $csspath = "css/book.css";?>
<?php $jspath = "js/date.js";?>

@extends("common.header")
@section('body')

<main>
    <div id="text">
        <p>登録する書籍の内容を入力してください。</p>
    </div>
    <div id="b_info">
        <div id="b_image">
            <!-- トリガー -->
            <form method="POST" action="/book_add" enctype="multipart/form-data">
                {{ csrf_field() }}

                <label>
                    <span class="btn btn-outline-secondary">
                        ファイルを選択してください
                        <input type="file" name="img_file" id="b_image" accept="image/*" style="display:none" onchange="previewImage(this);">
                    </span>
                </label>
            
                <p>
                プレビュー:<br>
                <img id="preview" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" style="max-width:220px;">
                </p>
                <script>
                // fileAPIでの画像プレビュー
                function previewImage(obj)
                {
                    var fileReader = new FileReader();
                    fileReader.onload = (function() {
                        document.getElementById('preview').src = fileReader.result;
                    });
                    fileReader.readAsDataURL(obj.files[0]);
                }
                </script>
                <p>
                    <input type="submit" value="アップロード">
                </p>
            </form>
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
            <button type="button" class="btn btn-outline-secondary" onclick="location.href='https://www-cf.dtg-shosekikanri2020-test.tk/list_of_books'">
                キャンセル
            </button>
        </div>
        <div id="button">
            <button type="button" class="btn btn-outline-secondary" onclick="location.href='https://www-cf.dtg-shosekikanri2020-test.tk/book_add_check'">
                書籍登録
            </button>
        </div>
    </div>
</main>

@endsection