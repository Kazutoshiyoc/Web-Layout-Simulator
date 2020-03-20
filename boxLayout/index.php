<!DOCTYPE html>
<html>
	<head>
		<title>Box Layout Simulator</title>
		<meta charset="utf-8" lang="ja, en">
		<meta name="author" content="Kazutoshiyoc">
		<meta name="description" content="HTMLとCSSによるレイアウトの描画が簡易にシミュレートできる。HTML/CSS lettering simulation is available.">
		<meta name="keywords" content="HTML,CSS,シミュレーション,simulation,レイアウト,layout,テスト,test,シミュレーター,simulator,ウェブ,Web,デザイン,design, div"> 
		<meta http-equiv="Content-Style-Type" content="text/css">
		<meta http-equiv="Content-Script-Type" content="text/javascript">
		<link rel="stylesheet" type="text/css" href="./css/style.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
		<script type="text/javascript" src="./js/script.js"></script>
	</head>

	<body>
		<script>
			var boxNum = <?php echo $_GET["num"]; ?>
		</script>

		<div class="dropOut"><a href="https://example.com/"><span id="Back">戻る</span></a></div>

		<div class="title block dropOut">Box Layout Simulator</div>

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
				<input name="num" type="number" min="0" max="" step="1" value="3" class="numShort">
				<input id="Boxes" type="submit" value="個の箱">
			</form>
		</div>

		<div class="result block">
			<?php
				for ( $i = 1; $i <= $_GET["num"]; $i++ ) {
					$rndColor[$i] = 0;
					while ( $rndColor[$i] < 1048576 )	$rndColor[$i] = mt_rand(0, 16777215);
					$rndColor[$i] = dechex($rndColor[$i]);
					echo "<div class=\"box$i box\" style=\"background-color: #${rndColor[${i}]}\">.box$i</div>";
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
							<span class=\"optStr\">.box${i} {</span>
								<div class=\"optEle\">width:
									<input name=\"_box${i}_width_radio\" type=\"radio\" value=\"value\" checked>
										<input name=\"_box${i}_width_num\" type=\"number\" min=\"0\" max=\"\" step=\"0.1\" value=\"80\" placeholder=\"80\" class=\"num\">
										<select name=\"_box${i}_width_select\" class=\"unit\">
											<option value=\"px\">px</option>
											<option value=\"em\">em</option>
											<option value=\"%\">%</option>
											<option value=\"vw\">vw</option>
											<option value=\"vh\">vh</option>
										</select>
										;
										<br>
									<input name=\"_box${i}_width_radio\" type=\"radio\" value=\"auto\" class=\"radioAuto\"> auto
									; 
								</div>
								<div class=\"optEle\">height:
									<input name=\"_box${i}_height_radio\" type=\"radio\" value=\"value\" checked>
										<input name=\"_box${i}_height_num\" type=\"number\" min=\"0\" max=\"\" step=\"0.1\" value=\"80\" placeholder=\"80\" class=\"num\">
										<select name=\"_box${i}_height_select\" class=\"unit\">
											<option value=\"px\">px</option>
											<option value=\"em\">em</option>
											<option value=\"%\">%</option>
											<option value=\"vw\">vw</option>
											<option value=\"vh\">vh</option>
										</select>
										;
										<br>
									<input name=\"_box${i}_height_radio\" type=\"radio\" value=\"auto\" class=\"radioAuto\"> auto
									; 
								</div>
		
								<div class=\"optEle\">margin:
									<select name=\"_box${i}_margin_select\">
										<option value=\"value\"></option>
										<option value=\"auto\">auto</option>
									</select>
								</div>
									<div class=\"eleOp\">top:
										<input name=\"_box${i}_margin-top_num\" type=\"number\" min=\"\" max=\"\" step=\"0.1\" value=\"0\" placeholder=\"0\" class=\"num\">
										<select name=\"_box${i}_margin-top_select\" class=\"unitLong\">
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
										<input name=\"_box${i}_margin-left_num\" type=\"number\" min=\"\" max=\"\" step=\"0.1\" value=\"0\" placeholder=\"0\" class=\"num\">
										<select name=\"_box${i}_margin-left_select\" class=\"unitLong\">
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
										<input name=\"_box${i}_margin-right_num\" type=\"number\" min=\"\" max=\"\" step=\"0.1\" value=\"0\" placeholder=\"0\" class=\"num\">
										<select name=\"_box${i}_margin-right_select\" class=\"unitLong\">
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
										<input name=\"_box${i}_margin-bottom_num\" type=\"number\" min=\"\" max=\"\" step=\"0.1\" value=\"0\" placeholder=\"0\" class=\"num\">
										<select name=\"_box${i}_margin-bottom_select\" class=\"unitLong\">
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
									<select name=\"_box${i}_padding_select\">
										<option value=\"value\"></option>
										<option value=\"auto\">auto</option>
									</select>
								</div>
									<div class=\"eleOp\">top:
										<input name=\"_box${i}_padding-top_num\" type=\"number\" min=\"\" max=\"\" step=\"0.1\" value=\"0\" placeholder=\"0\" class=\"num\">
										<select name=\"_box${i}_padding-top_select\" class=\"unitLong\">
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
										<input name=\"_box${i}_padding-left_num\" type=\"number\" min=\"\" max=\"\" step=\"0.1\" value=\"0\" placeholder=\"0\" class=\"num\">
										<select name=\"_box${i}_padding-left_select\" class=\"unitLong\">
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
										<input name=\"_box${i}_padding-right_num\" type=\"number\" min=\"\" max=\"\" step=\"0.1\" value=\"0\" placeholder=\"0\" class=\"num\">
										<select name=\"_box${i}_padding-right_select\" class=\"unitLong\">
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
										<input name=\"_box${i}_padding-bottom_num\" type=\"number\" min=\"\" max=\"\" step=\"0.1\" value=\"0\" placeholder=\"0\" class=\"num\">
										<select name=\"_box${i}_padding-bottom_select\" class=\"unitLong\">
										<option value=\"px\">px</option>
										<option value=\"em\">em</option>
										<option value=\"%\">%</option>
										<option value=\"vw\">vw</option>
										<option value=\"vh\">vh</option>
											<option value=\"auto\">auto</option>
									</select>
									;
								</div>

								<div class=\"optEle\">position: 
									<select name=\"_box${i}_position_select\">
										<option value=\"static\">static</option>
										<option value=\"absolute\">absolute</option>
										<option value=\"relative\">relative</option>
										<option value=\"fixed\">fixed</option>
									</select>
									;
								</div>
									<div class=\"eleOp\">top:
										<input name=\"_box${i}_top_num\" type=\"number\" min=\"\" max=\"\" step=\"0.1\" placeholder=\"0\" class=\"num\">	
										<select name=\"_box${i}_top_select\" class=\"unit\">
											<option value=\"px\">px</option>
											<option value=\"em\">em</option>
											<option value=\"%\">%</option>
											<option value=\"vw\">vw</option>
											<option value=\"vh\">vh</option>
										</select>
										;
									</div>
									<div class=\"eleOp\">left: 
										<input name=\"_box${i}_left_num\" type=\"number\" min=\"\" max=\"\" step=\"0.1\" placeholder=\"0\" class=\"num\">
										<select name=\"_box${i}_left_select\" class=\"unit\">
											<option value=\"px\">px</option>
											<option value=\"em\">em</option>
											<option value=\"%\">%</option>
											<option value=\"vw\">vw</option>
											<option value=\"vh\">vh</option>
										</select>
										;
									</div>
									<div class=\"eleOp\">right: 
										<input name=\"_box${i}_right_num\" type=\"number\" min=\"\" max=\"\" step=\"0.1\" placeholder=\"0\" class=\"num\">
										<select name=\"_box${i}_right_select\" class=\"unit\">
											<option value=\"px\">px</option>
											<option value=\"em\">em</option>
											<option value=\"%\">%</option>
											<option value=\"vw\">vw</option>
											<option value=\"vh\">vh</option>
										</select>
										;
									</div>
									<div class=\"eleOp\">bottom: 
										<input name=\"_box${i}_bottom_num\" type=\"number\" min=\"\" max=\"\" step=\"0.1\" placeholder=\"0\" class=\"num\">
										<select name=\"_box${i}_bottom_select\" class=\"unit\">
											<option value=\"px\">px</option>
											<option value=\"em\">em</option>
											<option value=\"%\">%</option>
											<option value=\"vw\">vw</option>
											<option value=\"vh\">vh</option>
										</select>
										;
									</div>

								<div class=\"optEle\">display: 
									<select name=\"_box${i}_display_select\">
											<option value=\"block\">block</option>
											<option value=\"inline\">inline</option>
											<option value=\"none\">none</option>
									</select>
									;
								</div>
		
								<div class=\"optEle\">border: 
									<select name=\"_box${i}_border_select\">
											<option value=\"none\">none</option>
											<option value=\"solid\">solid</option>
											<option value=\"dashed\">dashed</option>
											<option value=\"dotted\">dotted</option>
									</select>
									; 
								</div>
									<div class=\"eleOp\">radius: 
										<input name=\"_box${i}_border-radius_num\" type=\"number\" min=\"0\" max=\"\" step=\"0.1\" value=\"0\" placeholder=\"0\" class=\"num\">
										<select name=\"_box${i}_border-radius_select\" class=\"unit\">
											<option value=\"px\">px</option>
											<option value=\"em\">em</option>
											<option value=\"%\">%</option>
											<option value=\"vw\">vw</option>
											<option value=\"vh\">vh</option>
										</select>
										; 
									</div>
									<div class=\"eleOp\">width: 
										<input name=\"_box${i}_border-width_num\" type=\"number\" min=\"0\" max=\"\" step=\"0.1\" placeholder=\"0\" class=\"num\">
										<select name=\"_box${i}_border-width_select\" class=\"unit\">
											<option value=\"px\">px</option>
											<option value=\"em\">em</option>
											<option value=\"%\">%</option>
											<option value=\"vw\">vw</option>
											<option value=\"vh\">vh</option>
										</select>
										; 
									</div>
									<div class=\"eleOp\">color:
										<input name=\"_box${i}_border-color_text\" type=\"text\" placeholder=\"#cccccc\" class=\"text\">
										; 
									</div>

								<div class=\"optEle\">float: 
									<select name=\"_box${i}_float_select\">
										<option value=\"none\">none</option>
										<option value=\"left\">left</option>
										<option value=\"right\">right</option>
									</select>
									;
								</div>

								<div class=\"optEle\">background-color:
									<input name=\"_box${i}_background-color_text\" type=\"text\" value=\"#${rndColor[${i}]}\" placeholder=\"#cccccc\" class=\"text\">
									; 
								</div>
		
							<span class=\"optStr\">}</span>
						</div>";
					}
				?>
			</form>
		</div>
	</body>
</html>
