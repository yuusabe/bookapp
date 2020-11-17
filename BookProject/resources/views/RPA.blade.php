<?php $title = "DTGBOOK【完了画面】";?>
<?php $csspath = "css/completion.css";?>

@extends("common.header")
@section('body')
<main>
<table border="1">
    <tr>
      <th>ユーザ</th>
      <th>メールアドレス</th>
      <th>書籍タイトル</th>
      <th>書籍返却期日</th>
    </tr>
    <tr>
      <td>佐藤美緑</td>
      <td>minosatou@pasona.tech</td>
      <td>みのりの本</td>
      <td>2020年11月13日</td>
    </tr>
    <tr>
    　<td>阿部雄介</td>
      <td>yuusabe@pasona.tech</td>
      <td>あべちゃんの本</td>
      <td>2020年11月13日</td>
    </tr>
  </table>
 </main> 

@endsection
@extends("common.footer")