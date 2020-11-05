<?php $title = "DTGBOOK【完了画面】";?>
<?php $csspath = "css/completion.css";?>

@extends("common.header_completion");

<main>
    <div id="apple">
        <p>
            完了しました。
        </p>
        <button type="button" class="btn btn-outline-secondary" onclick="location.href='category.html'">
            OK
        </button>
    </div>
</main>

@extends("common.footer");