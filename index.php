<!doctype html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <title>タイトル</title>
        <meta name="description" content="width=device-width,inital-scale=1, shrink-to-fit=no">
<!-- Bootstrap CSS -->
<link rel='stylesheet' here='css/style.css'>

    </head>
    <body>
	<header>
        <h1 class='font-weight-normal'>よくわかるPHPの教科書</h1>
	</header>
    <main>
	<h2>Practice</h2>
	<pre>
	<?php
	/* ここにPHPのプログラムを記述する */
	date_default_timezone_set('Asia/Tokyo');
	print('現在は' .date('G時 i分 s秒').'です');
	for ($num=1; $num<=100; $num++){
		print($num . "\n" );
	}
	?>
	</pre>
	</main>
    </body>
</html>

