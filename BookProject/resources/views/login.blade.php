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
    <input type="text" id="email" class="fadeIn second" name="email" placeholder="メールアドレス">
    <input type="text" id="pass" class="fadeIn third" name="pass" placeholder="パスワード">
    <input type="submit" class="fadeIn fourth" value="ログイン" onclick="writeCookie();location.href='https://www-cf.dtg-shosekikanri2020-test.tk/login_check'">
    

    <button onclick="readCookie()">読み込み</button><br>
    <button onclick="deleteCookie()">削除</button><br>

    <script type="text/javascript">
      // cookieの値を読み書きする要素
      var email = document.getElementById("email");
      var pass = document.getElementById("pass");

      // 書き込み
      function writeCookie() {
        var email_v = email.value;
        var pass_v = pass.value;
        document.cookie = "email=" + email_v;
        document.cookie = "pass=" + pass_v;
        console.log(document.cookie);
      }

      function readCookie() {
        var tmp = document.cookie;
        var email_v = document.cookie.replace(/(?:(?:^|.*;\s*)email\s*\=\s*([^;]*).*$)|^.*$/, "$1");
        var pass_v = document.cookie.replace(/(?:(?:^|.*;\s*)pass\s*\=\s*([^;]*).*$)|^.*$/, "$1");
        email.value = email_v;
        pass.value = pass_v;
        console.log(document.cookie);
      }

      function deleteCookie() {
        document.cookie = "email=; pass=";
        console.log(document.cookie);
      }

    </script>

    <!-- Remind Passowrd -->
    <div id="formFooter">
      <a class="underlineHover" href="#" onclick="location.href='https://www-cf.dtg-shosekikanri2020-test.tk/password_send'">パスワードを忘れた方はこちら</a>
    </div>

  </div>
</div>