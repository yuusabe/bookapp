<?php $title = "DTGBOOK【書籍登録確認画面】";?>
<?php $csspath = "css/book_add_check.css";?>

<?php include("header.php"); ?>

<main>
    <div id="book">
        <p>書籍情報表示</p>
    </div>
    
    <div id="button">
        <button type="button" class="btn btn-outline-secondary" onclick="location.href='book_add.html'">
            キャンセル
        </button>
        <button type="button" class="btn btn-outline-secondary" onclick="location.href='completion_book.html'">
            確定
        </button>
    </div>
</main>

<?php include("footer.php"); ?>