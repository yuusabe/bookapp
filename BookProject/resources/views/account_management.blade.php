<?php $title = "DTGBOOK【アカウント管理画面】";?>
<?php $csspath = "css/account_management.css";?>

@extends("common.header")
@section('body')

<main>
<form action="http://www.dtg-shosekikanri2020-test.tk/account_management_check" method="post">
    <div id=tb_p>
      <div id="account" id="tb">
        <div id="text">
          <p>アカウント名</p>
        </div>
        <input type="text" id="tbox" name="account_name" placeholder="DTG太郎">
      </div>
      <div id="email" id="tb">
        <div id="text">
          <p>メールアドレス</p>
        </div>
        <input type="email" id="tbox" name="address" placeholder="abc@example.com">
      </div>
      <div id="password" id="tb">
        <div id="text">
          <p>パスワード</p>
        </div>
        <input type="text" id="tbox" name="password" placeholder="password">
      </div>
      <div id="radio">
        <div id="text">
          <p>管理者権限</p>
        </div>
          <input type="radio" name="accounttype" value="1">一般ユーザ
          <input type="radio" name="accounttype" value="2">管理者ユーザ
      </div>
    </div>
    <div id="button_p">
      <div id="button">
        <button type="submit" class="btn btn-outline-secondary" onclick="location.href='http://www.dtg-shosekikanri2020-test.tk/account_management_check'">
          アカウント登録
        </button>
        <button type="submit" class="btn btn-outline-secondary" onclick="location.href='http://www.dtg-shosekikanri2020-test.tk/account_management_check'">
          アカウント登録（実験用）
        </button>
      </div>
    </div>
    <div id="text">
      <p>アカウント情報</p>
    </div>
    <div id="button_p">
      <div id="button">
        <button type="button" class="btn btn-outline-secondary" onclick="location.href='http://www.dtg-shosekikanri2020-test.tk/account_change'">
          編集
        </button>
      </div>
      <div id="button">
        <button type="button" class="btn btn-outline-secondary" onclick="location.href='http://www.dtg-shosekikanri2020-test.tk/account_delete_check'">
          削除
        </button>
      </div>
    </div>
  </form>
</main>

@endsection
@extends("common.footer")