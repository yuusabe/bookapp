<?php $title = "DTGBOOK【アカウント編集画面】";?>
<?php $csspath = "account_change.css";?>

@extends("common.header")
@section('body')

<main>
  <form>
    <div id=tb_p>
      <div class="form-group" id="account" id="tb">
        <label>アカウント名</label>
        <input type="text" id="tbox" class="form-control" placeholder="アカウント名">
      </div>
      <div class="form-group" id="email" id="tb">
        <label>Email</label>
        <input type="email" id="tbox" class="form-control" placeholder="abc@example.com">
      </div>
      <div class="form-group" id="password" id="tb">
        <label>初期パスワード</label>
        <input type="text" id="tbox" class="form-control" placeholder="password">
      </div>
      <div class="dropdown">
        <button type="button"  id="dropdown" id="tb"
          class="btn btn-outline-secondary dropdown-toggle"
          data-toggle="dropdown"
          aria-haspopup="true"
          aria-expanded="false">
        管理者権限
        </button>
        <ul class="dropdown-menu">
          <li><button class="dropdown-item" value="発行年">管理者</button></li>
          <li><button class="dropdown-item" value="著者">一般ユーザ</button></li>
        </ul>
      </div>
    </div>
    <div id="button_p">
      <div id="button">
        <button type="button" class="btn btn-outline-secondary" onclick="location.href='http://www.dtg-shosekikanri2020-test.tk/account_management'">
          キャンセル
        </button>
      </div>
      <div id="button">
        <button type="button" class="btn btn-outline-secondary" onclick="location.href='http://www.dtg-shosekikanri2020-test.tk/account_change_check'">
          更新
        </button>
      </div>
    </div>
  </form>
</main>

@endsection
@extends("common.footer")