<?php $title = "DTGBOOK【カテゴリ管理画面】";?>
<?php $csspath = "css/category.css";?>
<?php $jspath = "js/add_del.js";?>

@extends("common.header")
@section('body')

<main>
    <div id="text">
        <p>カテゴリを編集してください。</p>
    </div>
    <div id="category_p">
        <div id="category">
            <input type="text" id="textbox" name="category" value="category" placeholder="入力してください">
            <button type="button" class="btn btn-outline-secondary">
                削除
            </button>
        </div>
        <div id="input_pluralBox">
            <div id="input_plural">
                <input type="text" class="form-control" placeholder="入力して下さい">
                <input type="button" value="＋" class="add pluralBtn">
                <input type="button" value="－" class="del pluralBtn">
            </div>
        </div>
    </div>
    <div id="button_p">
        <div id="button">
            <button type="button" class="btn btn-outline-secondary" onclick="location.href='https://www-cf.dtg-shosekikanri2020-test.tk/list_of_books'">
                キャンセル
            </button>
        </div>
        <div id="button">
            <button type="button" class="btn btn-outline-secondary" onclick="location.href='https://www-cf.dtg-shosekikanri2020-test.tk/category_check'">
                変更
            </button>
        </div>
     </div>
</main>

@endsection