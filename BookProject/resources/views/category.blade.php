<?php $title = "DTGBOOK【カテゴリ管理画面】";?>
<?php $csspath = "css/category.css";?>
<?php $jspath = "js/add_del.js";?>

@extends("common.header")
@section('body')

<main>
    <div id="text">
        <p>カテゴリを追加してください。</p>
    </div>
    <div id="category_a">
        <div id="category">
            <input type="text" id="textbox" name="category" class="form-control" placeholder="入力して下さい">
        </div>
    </div>
    <div id="text">
        <p>カテゴリを編集してください。</p>
    </div>
    <div id="category_p">
<<<<<<< HEAD
        <div id="category_ch">
            <input type="text" id="textbox" name="category" class="form-control">
        </div>
        <div id="category_ch">
            <div id="button_p">
                <div id="button">
                    <button type="buuton" class="btn btn-outline-secondary">
                        編集
                    </button>
=======
        <div id="category">
        <form action="{{ route('category.post') }}" method="post" enctype="multipart/form-data">
            @csrf
        @foreach($category as $c)
            <div id="input_pluralBox">
                <div id="input_plural" style="display:inline-flex">
                  <input type="text" id="textbox" name="{{'category'.$c['category_number]}}" value="{{$c['category_name']}}" class="form-control" placeholder="入力して下さい">
                  <input type="button" id="add_del" value="追加" class="add pluralBtn btn btn-outline-secondary">
                  <input type="button" id="add_del" value="削除" class="del pluralBtn btn btn-outline-secondary">
>>>>>>> 98b141907a842927b4525c7ab6d30a8a2ac66fa9
                </div>
                <div id="button">
                    <button type="button" class="btn btn-outline-secondary" onclick="location.href='https://www-cf.dtg-shosekikanri2020-test.tk/account_delete_check'">
                    削除
                </button>
            </div>
        </div>
    </div>
</main>

@endsection