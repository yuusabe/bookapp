<?php $title = "DTGBOOK【アカウント編集確認画面】";?>
<?php $csspath = "css/account_change_check.css";?>

@extends("common.header")
@section('body')
<main>
    <div id="text">アカウント編集の変更内容はこちらでよろしいでしょうか</p>
    <div id="button">
        <button type="button" class="btn btn-outline-secondary" onclick="location.href='http://www.dtg-shosekikanri2020-test.tk/account_change'">
          キャンセル
        </button>
        <button type="button" class="btn btn-outline-secondary" onclick="location.href='http://www.dtg-shosekikanri2020-test.tk/completion.html'">
          確定
        </button>
    </div>
</main>

@endsection
@extends("common.footer")