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
// 連想配列は キーとバリューで構成される
$fruits = [
    'apple'=>'りんご',
    'grape'=>'ぶどう',
    'lemon'=>'レモン',
    'tomato'=>'トマト',
    'peach'=>'もも'
];

// 連想配列を繰り返し処理するときは、foreach文を使う
// foreach($fruits as $val) {
//     print($val . "\n");
// }

// 連想配列のキーとバリューを取り出したいときは、以下のように書く
// $english にキー情報, $japanese にバリュー値が入る
foreach($fruits as $english => $japanese) {
    print($english . ':' . $japanese . "\n");
}

?>
</pre>
</main>
</body>    
</html>