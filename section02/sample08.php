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
// 配列の書き方は、ブラケットの書き方が新しいのでこっちで書く方がいい
$week_name = ['日', '月', '火', '水', '木', '金', '土'];
// 配列の書き方には上記のブラケット[]の他に、array()で書く方法もある
// $week_name = array('日', '月', '火', '水', '木', '金', '土');

// $week_nameの配列要素指定を、dateファンクションの formatパラメータに w を使って示すことで曜日を数字に変えることができ
// その数字から配列要素を指定、日本語化される
print ($week_name[date('w')]);
?>
</pre>
</main>
</body>    
</html>