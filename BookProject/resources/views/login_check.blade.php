<link href="css/login.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<div class="wrapper fadeInDown">
  <div id="formContent">
    <!-- Tabs Titles -->

<?php

$email_in = "無し";
$password_in = "無し";

  if (!empty($_COOKIE["email"]))
  {
    $email_in = $_COOKIE["email"];
  }
  if (!empty($_COOKIE["password"]))
  {
    $password_in = $_COOKIE["password"];
  }
  $address = "login";

  if ($email_in == "email@email" || $password_in == "password")
  {
      $comment = "ログインに成功しました!";
      $address = "list_of_books";
  }
  else
  {
      $comment = "ログインに失敗しました";
      $address = "login";
  }

  echo $email_in.$password_in;
  echo $comment.$address;

?>

<script type="text/javascript">
      // cookieの値を読み書きする要素
      var login = document.getElementById("login");
      var password = document.getElementById("password");

      // 書き込み
      function writeCookie() {
        var login_v = login.value;
        var password_v = password.value;
        document.cookie = "email=" + login_v + "; domain=www-cf.dtg-shosekikanri2020-test.tk; path=/";
        document.cookie = "password=" + password_v + "; domain=www-cf.dtg-shosekikanri2020-test.tk; path=/";
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
</script>

<input type="text" id="login" class="fadeIn second" name="email" placeholder="メールアドレス">
<input type="text" id="password" class="fadeIn third" name="password" placeholder="パスワード">
<button onclick="readCookie()">読み込み</button><br>

    <!-- Login Form -->
    <form>
      <input type="submit" value="<?php echo $comment ?>" onclick="location.href='https://www-cf.dtg-shosekikanri2020-test.tk/<?php echo $address ?>'">
    </form>


  </div>
</div>