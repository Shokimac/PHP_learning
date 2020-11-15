<!doctype html>
<html lang="ja">
<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="css/style.css">

<title>PHP</title>
</head>
<body>
<header>
<h1 class="font-weight-normal">PHP</h1>    
</header>

<main>
<h2>Practice</h2>
<pre>
<?php
// ファイル読み込み関数
$news = file_get_contents('../news_data/news.txt');
$news .= "2018-06-03 ニュースを追加しました";
// .= は、$x += 5; と書くのと同じように、$x = $x . 'add' を $x .= 'add' と文字列に対して書くようにできる
file_put_contents('../news_data/news.txt', $news);

print($news);

// ファイルを読み込んで表示させるだけなら readfile()
// 書き換えや処理を行うなどは出来ない
// readfile('../news_data/news.txt');
?>
</pre>
</main>
</body>    
</html>