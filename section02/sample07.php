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
// string to time = 文字列をタイムスタンプに変換する関数
// for($i = 1; $i <= 365; $i++){
//     print(date('n/j(D)', strtotime("+" . $i . "day")) . "\n");
// }

// :から始めてendforで締める書き方は分かりやすい。PHP独特??
for($i = 1; $i <= 365; $i++):
    print(date('n/j(D)', strtotime("+" . $i . "day")) . "\n");
endfor;
?>
</pre>
</main>
</body>    
</html>