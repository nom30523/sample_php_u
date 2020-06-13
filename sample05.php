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
$sum = 100 + 1050 + 200 + 500;
$tax = 1.08;
print('合計価格は：' . $sum . '円です') . PHP_EOL;
print('税込価格は：' . $sum * $tax . '円です');
?>
</pre>
</main>
</body>    
</html>