<?php $title = "DTGBOOK【完了画面】";?>
<?php $csspath = "css/completion.css";?>

@extends("common.header")
@section('header_body')

<main>
    <div id="apple">
        <div id="text">
            <p>完了しました。</p>
        </div>
        <button type="button" class="btn btn-outline-secondary" onclick="location.href='list_of_books.php'">
            OK
        </button>
    </div>
</main>

@endsection
@extends("common.footer")