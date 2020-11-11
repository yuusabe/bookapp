<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <!-- viewport meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href=<?=$csspath?>>
    <link rel="stylesheet" href="css/header.css">
    <style>
        body {background-color: rgb(187, 239, 255);}
        header {background-color: #fffef4;}
        main {background-color: rgb(187, 239, 255);}
    </style>
    <title><?=$title?></title>
</head>
<body>
<header class="header_button">
        <div>
            <img src="image/dtg_book_logo.png" id="pine" alt="アイコン" width="135" height="130" />
        </div>
        <div id="header" id="pine">
            <button type="button" class="btn btn-outline-danger" onclick="location.href='http://www.dtg-shosekikanri2020-test.tk/book_add'">
                書籍登録
            </button>
            <button type="button" class="btn btn-outline-danger" onclick="location.href='http://www.dtg-shosekikanri2020-test.tk/category'">
                カテゴリ管理
            </button>
            <button type="button" class="btn btn-outline-danger" onclick="location.href='http://www.dtg-shosekikanri2020-test.tk/account_management'">
                アカウント管理
            </button>
            <button type="button" class="btn btn-outline-secondary" onclick="location.href='http://www.dtg-shosekikanri2020-test.tk/list_of_books'">
                書籍一覧
            </button>
            <button type="button" class="btn btn-outline-secondary" onclick="location.href='http://www.dtg-shosekikanri2020-test.tk/mypage'">
                マイページ
            </button>
            <button type="button" class="btn btn-outline-secondary" onclick="location.href='http://www.dtg-shosekikanri2020-test.tk/login'">
                ログアウト
            </button>
        </div>
</header>
@yield('body')
</body>

