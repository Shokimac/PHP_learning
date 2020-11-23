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
    $age = '２０';

    // mbはマルチバイトの略で全角を指す。つまり、様々な仮名をコンバートする。引数に、$age, 'n', と指定すると半角数字に変換するという動きになる。
    $age = mb_convert_kana($age, 'n', 'UTF-8');

    // is_numericは数値であるかを判定する
    if (is_numeric($age)) {
        print($age . '歳');
    } else {
        print('年齢が数字ではありません');
    }
    ?>
</pre>
</main>
</body>    
</html>