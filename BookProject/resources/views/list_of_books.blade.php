<?php $title = "DTGBOOK【書籍一覧】";?>
<?php $csspath = "css/list_of_books.css";?>

@extends("common.header");

<main>
  <div id="search"><form>
    <input id="sbox" name="s" type="text" placeholder="キーワードを入力" />
  </form>
  
  <div class="dropdown">
    <button type="button" id="dropdown" id="search"
      class="btn btn-outline-secondary dropdown-toggle"
      data-toggle="dropdown"
      aria-haspopup="true"
      aria-expanded="false">
    カテゴリ検索
    </button>
    <ul class="dropdown-menu">
      <li><button class="dropdown-item" value="RPA">RPA</button></li>
      <li><button class="dropdown-item" value="統計学">統計学</button></li>
      <li><button class="dropdown-item" value="AI">AI</button></li>
    </ul>
  </div>
  
  <div class="dropdown">
    <button type="button"  id="dropdown" id="search"
      class="btn btn-outline-secondary dropdown-toggle"
      data-toggle="dropdown"
      aria-haspopup="true"
      aria-expanded="false">
    並び替え
    </button>
    <ul class="dropdown-menu">
      <li><button class="dropdown-item" value="発行年">発行年</button></li>
      <li><button class="dropdown-item" value="著者">著者</button></li>
      <li><button class="dropdown-item" value="タイトル">タイトル</button></li>
    </ul>
  </div>
  
  <input id="sbtn" id="search" type="submit" value="検索" /></div>
  <div id="book_p">
    <div id="book">
      <img src="book_001.png" id="icon" alt="アイコン" width="135" height="130" />
    </div>
    
    <div id="book">
      <p>タイトル：RPAのはじめかた</p>
      <p>出版社：技術評論社</p>
      <p>貸出状況：貸出可</p>
    </div>
    
    <div id="book">
      <button type="button" class="btn btn-outline-secondary" onclick="location.href='information_of_book.php'">
        詳細表示
      </button>
      
      <button type="button" class="btn btn-outline-danger">
        書籍編集
      </button>
    </div>
  </div>
</main>

@section("common.footer");