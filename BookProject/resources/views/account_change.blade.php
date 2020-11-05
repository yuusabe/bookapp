<?php $title = "DTGBOOK【アカウント編集画面】";?>
<?php $csspath = "account_change.css";?>

@extends("common.header");

<main>
  <form class="form-inline">
    <div class="form-group">
      <label>アカウント名</label>
      <input type="text" class="form-control" placeholder="アカウント名">
    </div>
    <div class="form-group">
      <label>Email</label>
      <input type="email" class="form-control" placeholder="abc@example.com">
    </div>
    <div class="form-group">
      <label>初期パスワード</label>
      <input type="text" class="form-control" placeholder="password">
    </div>
    <div class="dropdown">
      <button type="button"  id="dropdown" id="search"
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
    <div id="button">
      <button type="button" class="btn btn-outline-secondary" onclick="location.href='account_management.html'">
        キャンセル
      </button>
      <button type="button" class="btn btn-outline-secondary" onclick="location.href='account_change_check.html'">
        更新
      </button>
    </div>
  </form>
</main>

@section("common.footer");