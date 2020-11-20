<link href="css/login.css" rel="stylesheet" id="bootstrap-css">
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<div class="wrapper fadeInDown">
  <div id="formContent">
    <!-- Tabs Titles -->

    <!-- Icon -->
    <div class="fadeIn first">
      <img src="image/dtg_book_logo.png" id="icon" alt="アイコン" />
    </div>



    <!-- Login Form -->
    <input type="text" id="login" class="fadeIn second" name="email" placeholder="メールアドレス">
    <input type="text" id="password" class="fadeIn third" name="password" placeholder="パスワード">
    <input type="submit" class="fadeIn fourth" value="ログイン" onclick="writeCookie();location.href='https://www-cf.dtg-shosekikanri2020-test.tk/login_check'">
    

    <button onclick="readCookie()">読み込み</button><br>
    <button onclick="deleteCookie()">削除</button><br>

    <script type="text/javascript">
      // cookieの値を読み書きする要素
      var login = document.getElementById("login");
      var password = document.getElementById("password");

      // 書き込み
      function writeCookie() {
        var login_v = login.value;
        var password_v = password.value;
        document.cookie = "email=" + login_v;
        document.cookie = "password=" + password_v;
        console.log(document.cookie);
      }

      function readCookie() {
        var tmp = document.cookie;
        var login_v = document.cookie.replace(/(?:(?:^|.*;\s*)email\s*\=\s*([^;]*).*$)|^.*$/, "$1");
        var password_v = document.cookie.replace(/(?:(?:^|.*;\s*)password\s*\=\s*([^;]*).*$)|^.*$/, "$1");
        login.value = login_v;
        password.value = password_v;
        console.log(document.cookie);
      }

      function deleteCookie() {
        document.cookie = "email=; password=";
        console.log(document.cookie);
      }

    </script>

    <!-- Remind Passowrd -->
    <div id="formFooter">
      <a class="underlineHover" href="#" onclick="location.href='https://www-cf.dtg-shosekikanri2020-test.tk/password_send'">パスワードを忘れた方はこちら</a>
    </div>

  </div>
</div>