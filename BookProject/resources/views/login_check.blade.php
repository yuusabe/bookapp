<link href="css/login.css" rel="stylesheet" id="bootstrap-css">
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<div class="wrapper fadeInDown">
  <div id="formContent">
    <!-- Tabs Titles -->

<?php

$email_in = "無し";
$pass_in = "無し";
$atype_in = "無し";

  if (!empty($_COOKIE["email"]))
  {
    $email_in = $_COOKIE["email"];
  }
  if (!empty($_COOKIE["pass"]))
  {
    $pass_in = $_COOKIE["pass"];
  }
  if (!empty($_COOKIE["atype"]))
  {
    $atype_in = $_COOKIE["atype"];
  }

  if ($email_in == "email@email" || $pass_in == "password")
  {
      $comment = "ログインに成功しました!";
      $address = "list_of_books";
  }
  else
  {
      $comment = "ログインに失敗しました";
      $address = "login";
  }

  echo $email_in.$pass_in.$atype_in;
  echo $comment.$address;

?>

<input type="text" id="email" class="fadeIn second" name="email" placeholder="メールアドレス">
<input type="text" id="pass" class="fadeIn third" name="pass" placeholder="パスワード">
<button onclick="readCookie()">読み込み</button><br>

<script type="text/javascript">
      // cookieの値を読み書きする要素
      var email = document.getElementById("email");
      var pass = document.getElementById("pass");

      // 書き込み
      function writeCookie() {
        var email_v = email.value;
        var pass_v = pass.value;
        document.cookie = "email=" + email_v + "; domain=www-cf.dtg-shosekikanri2020-test.tk; path=/";
        document.cookie = "pass=" + pass_v + "; domain=www-cf.dtg-shosekikanri2020-test.tk; path=/";
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
</script>

    <!-- Login Form -->
    <form>
      <input type="button" value="<?php echo $comment ?>" onclick="location.href='https://www-cf.dtg-shosekikanri2020-test.tk/<?php echo $address ?>'">
    </form>


  </div>
</div>