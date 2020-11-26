<?php $title = "DTGBOOK【アカウント登録確認画面】";?>
<?php $csspath = "css/account_check.css";?>

@extends("common.header")
@section('body')

<?php
$account_name = "NULL";
$address = "NULL";
$password = "NULL";
$accounttype = "NULL";
if (!empty($_GET["account_name"]))
{
  $account_name = $_GET['account_name'];
}
else if (empty($_GET["account_name"]))
{
  $account_name = "なし";
}
if (!empty($_GET["address"]))
{
  $address = $_GET['address'];   
}
if (!empty($_GET["password"]))
{
  $password = $_GET['password'];   
}
if (!empty($_GET["accounttype"]))
{
  $accounttype = $_GET['accounttype'];   
}
?>

<main>
    <form method="post" action="{{ route('book_add.send') }}" enctype="multipart/form-data">
      @csrf
      <div id="account">
          <p>アカウント名　　：{{ $input["account_name"] }}</p>
          <p>メールアドレス　：{{ $input["address"] }}</p>
          <p>パスワード　　　：{{ $input["password"] }}</p>
          <p>アカウントタイプ：{{ $input["accounttype"] }}</p>
      </div>
      <div id="text">
          <p>アカウント登録の内容はこちらでよろしいですか。</p>
      </div>
      <div id="button_p">
          <div id="button">
              <button type="button" class="btn btn-outline-secondary" onclick="location.href='https://www-cf.dtg-shosekikanri2020-test.tk/account_management'">
                  キャンセル
              </button>
          </div>
          <div id="button">
              <button type="button" class="btn btn-outline-secondary" onclick="location.href='https://www-cf.dtg-shosekikanri2020-test.tk/completion'">
                  確定
              </button>
          </div>
      </div>
    </form>
</main>

@endsection