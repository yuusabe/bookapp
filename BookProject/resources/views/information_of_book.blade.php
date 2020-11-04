<?php $title = "DTGBOOK【書籍詳細】";?>
<?php $csspath = "css/information_of_book.css";?>

@extends("common.header");


    <main>
        <div id="book_p">
            <div id="book">
                <img src="book_001.png" id="icon" alt="アイコン" width="135" height="130" />
            </div>
            
            <div id="book">
                <p>
                  タイトル：RPAのはじめかた
                </p>
                <p>
                  出版社：技術評論社
                </p>
                <p>
                  貸出状況：貸出可
                </p>
            </div>
        </div>

        <div id="button">
            <button type="button" class="btn btn-outline-secondary"  onclick="location.href='http://localhost:8001/書籍一覧'">
                一覧へ
            </button>

            <button type="button" class="btn btn-outline-secondary" onclick="location.href='http://localhost:8001/貸出'">
              貸出手続きへ
            </button>
        </div>

    </main>

@extends("common.footer");
