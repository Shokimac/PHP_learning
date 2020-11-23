<!-- PHPの場合は、ページ毎に session_start が必要。
    設定で、sessionを自動スタートすることも変更可。
    ただし、負荷が上がる-->
<!-- session は、Webサーバに保存される。Cookieよりはセキュリティ高い。
    Cookieにsession ID が保存されることで、session をサーバから渡される。
    ただし、CookieのSession IDを盗まれるセッションハイジャックで
    Session情報を盗まれることもあるので、セキュリティには要注意-->
<?php 
session_start();
// グローバル変数 $_SESSIONに好きなキー名をつけて値を保存する。
$_SESSION['session_message'] = '値をセッションに保存しました。';
?>
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
<p><a href="page02.php">Page02へ</a></p>
</pre>
</main>
</body>    
</html>