<link href="css/login.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<div class="wrapper fadeInDown">
  <div id="formContent">
    <!-- Tabs Titles -->

<?php

$email_in = $_COOKIE["email"];
$password_in = $_COOKIE["password"];

if ($email_in == "email@email" || $password_in == "password")
{
    $comment = "ログインに成功しました";
    $address = "list_of_books";
}
else
{
    $comment = "ログインに失敗しました";
    $address = "login";
}
?>


    <!-- Login Form -->
    <form>
      <input type="submit" value="<?php echo $comment ?>" onclick="location.href='https://www-cf.dtg-shosekikanri2020-test.tk/<?php echo $address ?>'">
    </form>


  </div>
</div>