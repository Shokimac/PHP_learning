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
    <!-- 正規表現で郵便番号をチェックする -->
    <!-- 正規表現を用いることで、複雑な書式を決まった形式でチェックできる。 -->
    <?php 
        $zip = '１２３-３４５６';

        // 引数に 'a'を指定することで英数字を半角に直す。今回は、郵便番号でハイフンを使用する為、'a'を使う
        $zip = mb_convert_kana($zip, 'a', 'UTF-8');
        // preg_match()は、正規表現でマッチするかどうかを判定。
        // \Aは文章の頭であることを明示化している。つまり、指定した条件が文章の頭から正しいのかどうかを判定させるためにつける
        // \d{3}は、d:decimal(数値)、{3}は個数。数字が3回続く条件を指定している。
        // [-]は、数字同士をハイフンで結ぶように指定している
        // \d{4}は、数字が4つ並ぶ書式を指定
        // \z は、文章のお尻であることを示している
        if (preg_match("/\A\d{3}[-]\d{4}\z/", $zip)) {
            print('郵便番号：〒' . $zip);
        } else {
            print('郵便番号を123-4567の形式でご記入ください');
        }
    ?>
</pre>
</main>
</body>    
</html>