<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>phpを使ってphpMyadminへのデータ入力（出力）</title>
</head>
<body>
<h3>登録中</h3>
<?php

$con = mysql_connect('localhost:8889', 'fukuoka', 'pass888');
if (!$con) {
  exit('データベースに接続できませんでした。');
}

$result = mysql_select_db('test1', $con);
if (!$result) {
  exit('データベースを選択できませんでした。');
}

$result = mysql_query('SET NAMES utf8', $con);
if (!$result) {
  exit('文字コードを指定できませんでした。');
}



$id   = $_POST['id'];
$name = $_POST['name'];

echo $name;

$result = mysql_query("INSERT INTO test2(id, name) VALUES('$id', '$name')", $con);
if (!$result) {
  exit('データを登録できませんでした。');
}

$con = mysql_close($con);
if (!$con) {
  exit('データベースとの接続を閉じられませんでした。');
}

?>
<p>登録が完了しました。<br /><a href="index.html">戻る</a></p>
</body>
</html>