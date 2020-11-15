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
// while文の構成
// 初期化処理
$i = 1;
// while (繰り返す条件) {
while($i <= 365) {
    //     繰り返したい処理
    print($i . "\n");
    //     更新処理
    $i = $i + 1;
}
// }
?>
</pre>
</main>
</body>    
</html>