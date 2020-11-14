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
$today = new DateTime();
print($today->format('G時 i分 s秒'));
// -> この記号は、 DateTimeオブジェクトのインスタンス $today のメソッドを使っていることを表す
// PHPは、オブジェクト型思考と手続き型が混在している
?>
</pre>
</main>
</body>    
</html>