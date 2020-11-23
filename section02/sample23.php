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

<!-- 剰余算の特徴は、連続した数字を同じ数字で割った場合に、2で剰余算をすれば 0 1 0 1 と並び 3で剰余算すれば 0 1 2 0 1 2 と並ぶ -->
<!-- <pre>
    <?php
    // $week = array('金', '土', '日', '月', '火', '水', '木');
    // for($i = 1; $i < 31; $i++) {
    //     // 7を使った剰余算を使うと、1週間毎に曜日を表示する事ができる。
    //     print($week[$i%7] . "\n");
    // }
    ?>
</pre> -->

<!-- 剰余算の特徴を活かして、ストライプ柄のテーブルを作る事ができる -->
<table>
    <?php 
    for ($i=1; $i<=10; $i++){
        if ($i % 2) {
            print('<tr style="background-color: #ccc;">');
        } else {
            print('<tr>');
        }
        print('<td>' . $i . '行目');
        print('</tr>');
    }
    ?>
</table>

</main>
</body>    
</html>