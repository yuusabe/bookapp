<?php $title = "DTGBOOK【アカウント削除確認画面】";?>
<?php $csspath = "css/account_delete_check.css";?>

@extends("common.header")
@section('body')

<main>
  <div id="text">
    <p>削除するアカウント情報はこちらでよろしいでしょうか</p>
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

@endsection
@extends("common.footer")