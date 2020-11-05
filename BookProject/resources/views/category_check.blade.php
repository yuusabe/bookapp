<?php $title = "DTGBOOK【書籍一覧】";?>
<?php $csspath = "css/category_check.css";?>

@extends("common.header");

<main>
    <div id="category">
        <p>カテゴリ情報表示</p>
    </div>
    <div id="text">
        <p>カテゴリ変更の内容はこちらでよろしいですか？</p>
    </div>
    
    <div id="button">
        <button type="button" class="btn btn-outline-secondary" onclick="location.href='category.html'">
            キャンセル
        </button>
        <button type="button" class="btn btn-outline-secondary" onclick="location.href='completion_category.html'">
            確定
        </button>
    </div>
</main>

@section("common.footer");