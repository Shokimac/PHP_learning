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
// JSON: JavaScript Object Notation (JSのオブジェクトで使える表記法)
// 最近は、JSONがXMLよりも一般的になりつつある
// 利点は、:を使って簡潔に書けて、各データの中身が分かりやすい。
$file = file_get_contents('https://h2o-space.com/feed/json/');
// JSONのデータを使うには以下を使って、PHPのオブジェクト化する
$json = json_decode($file);

foreach($json->items as $item):
?>
<a href="<?php print($item->url)?>"><?php print($item->title); ?></a>
<?php
endforeach;
?>
</pre>
</main>
</body>    
</html>