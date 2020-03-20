<!DOCTYPE html>
<html>
	<head>
		<title>String Layout Simulator</title>
		<meta charset="utf-8" lang="ja, en">
		<meta name="author" content="Kazutoshiyoc">
		<meta name="description" content="HTMLとCSSによるspan p divタグの表示が簡易にシミュレートできる。HTML/CSS lettering simulation is available.">
		<meta name="keywords" content="HTML,CSS,シミュレーション,simulation,レイアウト,layout,テスト,test,シミュレーター,simulator,ウェブ,Web,デザイン,design, div, span, p"> 
		<meta http-equiv="Content-Style-Type" content="text/css">
		<meta http-equiv="Content-Script-Type" content="text/javascript">
		<link rel="stylesheet" type="text/css" href="./css/style.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
		<script type="text/javascript" src="./js/script.js"></script>
	</head>

	<body>
		<script>
			var strNum = <?php echo $_GET["num"]; ?>
		</script>

		<div class="dropOut"><a href="https://example.com/"><span id="Back">戻る</span></a></div>

		<div class="title block dropOut">String Layout Simulator</div>

		<div class="menu block dropOut">
			<form id="Setting">
				<span id="Language">Language: </span>
				<select name="language">
					<option value="ja">日本語</option>
					<option value="en">English</option>
				</select>
			</form>
			<form id="BoxNum">
				<span id="Show">表示: </span>
				<select name="tag">
					<option value="p">p</option>
					<option value="span">span</option>
					<option value="div">div</option>
				</select>
				<span id="Comma">で</span>
				<input name="num" type="number" min="0" max="" step="1" value="5" class="numShort">
				<input id="Boxes" type="submit" value="個の文章">
			</form>
		</div>

		<div class="result block">
			<?php
				for ( $i = 1; $i <= $_GET["num"]; $i++ ) {
					$tag = $_GET["tag"];
					echo "<$tag id=\"Str${i}Text\" class=\"str$i str\">.${tag}${i} この文章はサンプルです。</$tag>";
				}
			?>
		</div>
		
		<div class="option block dropOut">
			<form id="Option">
				<div>
					<input id="About" type="button" value="説明">
					<input id="Full" type="button" value="全画面">
					<input id="Update" type="button" value="更新">
					<input id="Reset" type="reset" value="リセット">
				</div>

				<?php
					for ( $i = 1; $i <= $_GET["num"]; $i++ ) {
						echo "<div class=\"opt\">

							<textarea name=\"_str${i}_text\" rows=\"3\" cols=\"100\" class=\"strText\">.${tag}${i} この文章はサンプルです。</textarea>

							<span class=\"optStr\">.${tag}${i} {</span>

								<div class=\"optEle\">font-size:
									<input name=\"_str${i}_font-size_num\" type=\"number\" min=\"0\" max=\"\" step=\"0.1\" value=\"16\" placeholder=\"16\" class=\"num\">
									<select name=\"_str${i}_font-size_select\" class=\"unit\">
										<option value=\"px\">px</option>
										<option value=\"em\">em</option>
										<option value=\"rem\">rem</option>
										<option value=\"%\">%</option>
									</select>
								</div>

								<div class=\"optEle\">line-height: 
									<input name=\"_str${i}_line-height_num\" type=\"number\" min=\"0\" max=\"\" step=\"0.1\" value=\"1\" placeholder=\"1\" class=\"num\">
									<select name=\"_str${i}_line-height_select\" class=\"unit\">
										<option value=\"em\">em</option>
										<option value=\"rem\">rem</option>
										<option value=\"px\">px</option>
										<option value=\"%\">%</option>
									</select>
								</div>

								<div class=\"optEle\">letter-spacing: 
									<input name=\"_str${i}_letter-spacing_num\" type=\"number\" min=\"0\" max=\"\" step=\"0.1\" value=\"0\" placeholder=\"0.1\" class=\"num\">
									<select name=\"_str${i}_letter-spacing_select\" class=\"unit\">
										<option value=\"em\">em</option>
										<option value=\"rem\">rem</option>
										<option value=\"px\">px</option>
										<option value=\"%\">%</option>
									</select>
								</div>
		
								<div class=\"optEle\">margin:
									<select name=\"_str${i}_margin_select\">
										<option value=\"value\"></option>
										<option value=\"auto\">auto</option>
									</select>
								</div>
									<div class=\"eleOp\">top:
										<input name=\"_str${i}_margin-top_num\" type=\"number\" min=\"\" max=\"\" step=\"0.1\" value=\"0\" placeholder=\"0\" class=\"num\">
										<select name=\"_str${i}_margin-top_select\" class=\"unitLong\">
											<option value=\"px\">px</option>
											<option value=\"em\">em</option>
											<option value=\"%\">%</option>
											<option value=\"vw\">vw</option>
											<option value=\"vh\">vh</option>
											<option value=\"auto\">auto</option>
										</select>
										;
									</div>
									<div class=\"eleOp\">left:
										<input name=\"_str${i}_margin-left_num\" type=\"number\" min=\"\" max=\"\" step=\"0.1\" value=\"0\" placeholder=\"0\" class=\"num\">
										<select name=\"_str${i}_margin-left_select\" class=\"unitLong\">
											<option value=\"px\">px</option>
											<option value=\"em\">em</option>
											<option value=\"%\">%</option>
											<option value=\"vw\">vw</option>
											<option value=\"vh\">vh</option>
											<option value=\"auto\">auto</option>
										</select>
										;
									</div>
									<div class=\"eleOp\">right:
										<input name=\"_str${i}_margin-right_num\" type=\"number\" min=\"\" max=\"\" step=\"0.1\" value=\"0\" placeholder=\"0\" class=\"num\">
										<select name=\"_str${i}_margin-right_select\" class=\"unitLong\">
											<option value=\"px\">px</option>
											<option value=\"em\">em</option>
											<option value=\"%\">%</option>
											<option value=\"vw\">vw</option>
											<option value=\"vh\">vh</option>
											<option value=\"auto\">auto</option>
										</select>
										;
									</div>
									<div class=\"eleOp\">bottom:
										<input name=\"_str${i}_margin-bottom_num\" type=\"number\" min=\"\" max=\"\" step=\"0.1\" value=\"0\" placeholder=\"0\" class=\"num\">
										<select name=\"_str${i}_margin-bottom_select\" class=\"unitLong\">
											<option value=\"px\">px</option>
											<option value=\"em\">em</option>
											<option value=\"%\">%</option>
											<option value=\"vw\">vw</option>
											<option value=\"vh\">vh</option>
											<option value=\"auto\">auto</option>
										</select>
										;
									</div>
	
								<div class=\"optEle\">padding:
									<select name=\"_str${i}_padding_select\">
										<option value=\"value\"></option>
										<option value=\"auto\">auto</option>
									</select>
								</div>
									<div class=\"eleOp\">top:
										<input name=\"_str${i}_padding-top_num\" type=\"number\" min=\"\" max=\"\" step=\"0.1\" value=\"0\" placeholder=\"0\" class=\"num\">
										<select name=\"_str${i}_padding-top_select\" class=\"unitLong\">
											<option value=\"px\">px</option>
											<option value=\"em\">em</option>
											<option value=\"%\">%</option>
											<option value=\"vw\">vw</option>
											<option value=\"vh\">vh</option>
											<option value=\"auto\">auto</option>
										</select>
										;
									</div>
									<div class=\"eleOp\">left:
										<input name=\"_str${i}_padding-left_num\" type=\"number\" min=\"\" max=\"\" step=\"0.1\" value=\"0\" placeholder=\"0\" class=\"num\">
										<select name=\"_str${i}_padding-left_select\" class=\"unitLong\">
											<option value=\"px\">px</option>
											<option value=\"em\">em</option>
											<option value=\"%\">%</option>
											<option value=\"vw\">vw</option>
											<option value=\"vh\">vh</option>
											<option value=\"auto\">auto</option>
										</select>
										;
									</div>
									<div class=\"eleOp\">right:
										<input name=\"_str${i}_padding-right_num\" type=\"number\" min=\"\" max=\"\" step=\"0.1\" value=\"0\" placeholder=\"0\" class=\"num\">
										<select name=\"_str${i}_padding-right_select\" class=\"unitLong\">
											<option value=\"px\">px</option>
											<option value=\"em\">em</option>
											<option value=\"%\">%</option>
											<option value=\"vw\">vw</option>
											<option value=\"vh\">vh</option>
											<option value=\"auto\">auto</option>
										</select>
										;
									</div>
									<div class=\"eleOp\">bottom:
										<input name=\"_str${i}_padding-bottom_num\" type=\"number\" min=\"\" max=\"\" step=\"0.1\" value=\"0\" placeholder=\"0\" class=\"num\">
										<select name=\"_str${i}_padding-bottom_select\" class=\"unitLong\">
										<option value=\"px\">px</option>
										<option value=\"em\">em</option>
										<option value=\"%\">%</option>
										<option value=\"vw\">vw</option>
										<option value=\"vh\">vh</option>
											<option value=\"auto\">auto</option>
									</select>
									;
								</div>

								<div class=\"optEle\">color:
									<input name=\"_str${i}_color_text\" type=\"text\" placeholder=\"#000000\" class=\"text\">
									; 
								</div>
	
								<div class=\"optEle\">background-color:
									<input name=\"_str${i}_background-color_text\" type=\"text\" placeholder=\"#ffffff\" class=\"text\">
									; 
								</div>

								<div class=\"optEle\">width:
									<input name=\"_str${i}_width_radio\" type=\"radio\" value=\"auto\" checked> auto
									;
									<br>
									<input name=\"_str${i}_width_radio\" type=\"radio\" value=\"value\" class=\"radioBtn\">
										<input name=\"_str${i}_width_num\" type=\"number\" min=\"0\" max=\"\" step=\"0.1\" placeholder=\"0\" class=\"num\">
										<select name=\"_str${i}_width_select\" class=\"unit\">
											<option value=\"px\">px</option>
											<option value=\"em\">em</option>
											<option value=\"%\">%</option>
											<option value=\"vw\">vw</option>
											<option value=\"vh\">vh</option>
										</select>
										; 
								</div>
								<div class=\"optEle\">height:
									<input name=\"_str${i}_height_radio\" type=\"radio\" value=\"auto\" checked> auto
									; 
									<br>
									<input name=\"_str${i}_height_radio\" type=\"radio\" value=\"value\" class=\"radioBtn\">
										<input name=\"_str${i}_height_num\" type=\"number\" min=\"0\" max=\"\" step=\"0.1\" placeholder=\"0\" class=\"num\">
										<select name=\"_str${i}_height_select\" class=\"unit\">
											<option value=\"px\">px</option>
											<option value=\"em\">em</option>
											<option value=\"%\">%</option>
											<option value=\"vw\">vw</option>
											<option value=\"vh\">vh</option>
										</select>
										;
								</div>

							<span class=\"optStr\">}</span>
						</div>";
					}
				?>
			</form>
		</div>
		
		<div class="source block dropOut">
			
		</div>
	</body>
</html>
