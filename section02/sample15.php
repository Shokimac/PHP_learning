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
// XML: Extensible Markup Language 拡張できるマークアップ言語
// HTML: HyperText Markup Language 
// RSS や 外部の更新された情報に対して、XMLを取得することで簡単かつ自動的にページ更新ができる

$xmlTree = simplexml_load_file('https://h2o-space.com/feed/');
foreach($xmlTree->channel->item as $item):
?>
・<a href="<?php print($item->link); ?>">
<?php print($item->title); ?></a>
<?php
endforeach;
?>
</pre>
</main>
</body>    
</html>