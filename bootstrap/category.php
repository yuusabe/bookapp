<?php $title = "DTGBOOK【カテゴリ管理画面】";?>
<?php $csspath = "css/category.css";?>

<?php include("header.php"); ?>

<main>
    <p>カテゴリ</p>
    <button type="button" class="btn btn-outline-secondary">
        削除
    </button>
    <div id="button">
        <button type="button" class="btn btn-outline-secondary" onclick="location.href='list_of_books.html'">
            キャンセル
        </button>
        <button type="button" class="btn btn-outline-secondary" onclick="location.href='category_check.html'">
            変更
        </button>
    </div>
</main>

<?php include("footer.php"); ?>