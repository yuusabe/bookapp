<?php $title = "DTGBOOK【アカウント編集確認画面】";?>
<?php $csspath = "css/account_change_check.css";?>

<?php include("header.php"); ?>

<main>
    <div id="text">アカウント編集の変更内容はこちらでよろしいでしょうか</p>
    <div id="button">
        <button type="button" class="btn btn-outline-secondary" onclick="location.href='account_change.html'">
          キャンセル
        </button>
        <button type="button" class="btn btn-outline-secondary" onclick="location.href='completion_account.html'">
          確定
        </button>
    </div>
</main>

<?php include("footer.php"); ?>