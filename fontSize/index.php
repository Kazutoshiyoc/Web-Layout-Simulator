<!DOCTYPE html>
<html>
	<head>
		<title>Font Size Checker</title>
		<meta charset="utf-8" lang="ja, en">
		<meta name="author" content="Kazutoshiyoc">
		<meta name="description" content="1px〜100pxのフォントサイズのチェックができる。">
		<meta name="keywords" content="HTML,CSS,レイアウト,layout,テスト,test,ウェブ,Web,デザイン,design,フォントサイズ,font-size,ピクセル,px"> 
		<meta http-equiv="Content-Style-Type" content="text/css">
		<meta http-equiv="Content-Script-Type" content="text/javascript">
		<link rel="stylesheet" type="text/css" href="./css/style.css">
	</head>

	<body>

		<div><a href="https://example.com/"><span id="Back">back</span></a></div>

		<div class="title block">Font Size Checker (<?php $min = $_GET["min"]; echo"$min" ?>〜<?php $max = $_GET["max"]; echo"$max" ?>px, <?php $step = $_GET["step"]; echo"$step" ?> step)</div>

		<div class="menu block">
			<form id="BoxNum">
				min: 
				<input name="min" type="number" min="0" max="" step="0.1" value="1" class="numShort">
				, max: 
				<input name="max" type="number" min="0" max="" step="1" value="100" class="numShort">
				, step: 
				<input name="step" type="number" min="0" max="" step="0.1" value="1" class="numShort">
				<input id="Boxes" type="submit" value="OK">
			</form>
		</div>


		<hr>

		<div class="result block">
			<?php
				$count = 0;
				for ( $i = $_GET["min"]; $i <= $_GET["max"]; $i += $_GET["step"] ) {
					$count += 1;
					echo "<div class=\"text$i text\" style=\"font-size: ${i}px\">${i}px<br>
						abcdefghijklmnopqrstuvwxyz 0123456789<br>
						ABCDEFGHIJKLMNOPQRSTUVWXYZ _!?-~{}[]()'\"\$%&=*+:\;@\\/<br>
						あいうえお　かきくけこ　さしすせそ　たちつてと　なにぬねの<br>
						漢字　平仮名　片仮名　カタカナ＿！？−〜｛｝「」（）’”＄％＆＝＊＋：；＠￥・／
					</div>";
					if ( $count > 100 )	break;
				}
			?>
		</div>
	</body>
</html>
