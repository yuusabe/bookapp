<?php $title = "DTGBOOK【書籍削除確認画面】";?>
<?php $csspath = "css/book_delete_check.css";?>

@extends("common.header");

<main>
    <div id="text">
        <p>削除する本の内容はこちらでよろしいでしょうか。</p>
    </div>
    
    <div id="button">
        <button type="button" class="btn btn-outline-secondary" onclick="location.href='book_change.html'">
            キャンセル
        </button>
        
        <button type="button" class="btn btn-outline-secondary" onclick="location.href='completion.html'">
            確定
        </button>
    </div>
</main>

@section("common.footer");