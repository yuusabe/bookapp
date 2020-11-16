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
    <form>
      <input type="text" id="login" class="fadeIn second" name="email" placeholder="メールアドレス">
      <input type="text" id="password" class="fadeIn third" name="password" placeholder="パスワード">
      <input type="submit" class="fadeIn fourth" value="ログイン" onclick="location.href='https://www-cf.dtg-shosekikanri2020-test.tk/list_of_books'">
    </form>

    <!-- Remind Passowrd -->
    <div id="formFooter">
      <a class="underlineHover" href="#" onclick="location.href='https://www-cf.dtg-shosekikanri2020-test.tk/password_send'">パスワードを忘れた方はこちら</a>
    </div>

  </div>
</div>