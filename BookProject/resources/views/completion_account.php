<?php $title = "DTGBOOK【完了画面】";?>
<?php $csspath = "css/completion.css";?>

@extends("header_completion.php");

<main>
    <div id="apple">
        <p>
            完了しました。
        </p>
        <button type="button" class="btn btn-outline-secondary" onclick="location.href='account_management.html'">
            OK
        </button>
    </div>
</main>

@extends("common.footer");