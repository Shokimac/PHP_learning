<!doctype html>
<html lang="ja">
<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="../css/style.css">

<title>PHP</title>
</head>
<body>
<header>
<h1 class="font-weight-normal">PHP</h1>    
</header>

<main>
<h2>Practice</h2>
<pre>
    <!-- $_REQUESTはグローバル変数で、inputタグのname属性を指定することでフォームの値を受け取れる -->
    <!-- htmlspecialchars は、フォームに入力された値にHTMLタグがあった場合にそれを逃す(エスケープする)役割を持つ。（セキュリティの観点） -->
    <!-- ENT_QUOTESは、定義済み定数である。 -->
    <!-- $_REQUEST は、$_GET も $_POSTも両方取得することができる。
    が、セキュリティ観点上パスワードなどの機密情報がGETで送られてきた場合も受け取れてしまう為、
    メソッドが分かっている場合には、$_GET や $_POSTで使い分けることが重要。-->
    <!-- HTTPメソッドのGETは、URLに載せてデータを送信。POSTは裏側で送信できる。 フォーム側とPHP側で合わせる必要がある。 -->
    お名前：<?php print(htmlspecialchars($_REQUEST['my_name'], ENT_QUOTES)); ?>
</pre>
</main>
</body>    
</html>