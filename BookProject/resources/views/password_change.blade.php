<?php $title = "DTGBOOK【パスワード設定画面】";?>
<?php $csspath = "css/password_change.css";?>

@extends("common.header")
@section('body')

<main>
    <div id="oldpass">
        <p>
            <div id="text">
                現在のパスワードを入力してください
            </div>
            <form>
                <input type="password" name="old_pass" size="20" minlength="8">
            </form>
        </p>
    </div>
    <div id="newpass">
        <p>
            <div id="text">
                新しいパスワードを入力してください
            </div>
            <form>
                <input type="password" name="new_pass" size="20" minlength="8">
            </form>
        </p>
    </div>
    <div id="newpass">
        <p>
            <div id="text">
                確認のためもう一度入力してください
            </div>
            <form>
                <input type="password" name="new_pass" size="20" minlength="8">
            </form>
        </p>
    </div>
    <div id="button">
        <button type="button" class="btn btn-outline-secondary" onclick="location.href='mypage.html'">
            キャンセル
        </button>
        <button type="button" class="btn btn-outline-secondary" onclick="location.href='completion.html'">
            設定
        </button>
    </div>
</main>

@endsection
@extends("common.footer")