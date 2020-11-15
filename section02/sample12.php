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
// %の次に置換する文字を書く。今回は 0 で置き換える
// 文字を表示したいときは %04dを %04sにする。 s = string
$date = sprintf('%04d年 %02d月 %02d日 %s ', 2018, 1, 3, '日曜日');
printf($date);
?>
</pre>
</main>
</body>    
</html>