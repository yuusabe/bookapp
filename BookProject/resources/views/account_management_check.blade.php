<?php $title = "DTGBOOK【アカウント登録確認画面】";?>
<?php $csspath = "css/account_management_check.css";?>

@extends("common.header");

<main>
    <div id="account">
        <p>アカウント情報表示</p>
    </div>
    
    <div id="button">
        <button type="button" class="btn btn-outline-secondary" onclick="location.href='account_management.html'">
            キャンセル
        </button>

        <button type="button" class="btn btn-outline-secondary" onclick="location.href='completion_account.html'">
            確定
        </button>
    </div>
</main>

@section("common.footer");