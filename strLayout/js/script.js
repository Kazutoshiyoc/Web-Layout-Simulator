var val;
var _alrt = "ESCキーをクリックで元に戻ります。";
var _about = "【String Layout Simulator】\n\n HTMLとCSSによるspan p divタグの表示を簡易的にシミュレートできるページ。\n\n文章の数は上部の「表示」から変更可能です。\n\nfont-size, line-height, letter-spacing, margin, padding, color, background-color, width, heightのシミュレーションが可能です。";

function update() {
	for (var i = 1; i <= strNum; i++) {

		// strText
		val = $("#Option [name = _str" + i + "_text]").val();
		setHTML("Str" + i + "Text", val);

		// font-size
		val = $("#Option [name = _str" + i + "_font-size_select]").val();
		val = $("#Option [name = _str" + i + "_font-size_num]").val() + $("#Option [name = _str" + i + "_font-size_select]").val();
		$(".str" + i).css("font-size", val);

		// line-height
		val = $("#Option [name = _str" + i + "_line-height_select]").val();
		val = $("#Option [name = _str" + i + "_line-height_num]").val() + $("#Option [name = _str" + i + "_line-height_select]").val();
		$(".str" + i).css("line-height", val);

		// letter-spacing
		val = $("#Option [name = _str" + i + "_letter-spacing_select]").val();
		val = $("#Option [name = _str" + i + "_letter-spacing_num]").val() + $("#Option [name = _str" + i + "_letter-spacing_select]").val();
		$(".str" + i).css("letter-spacing", val);

		// width
		val = $("#Option [name = _str" + i + "_width_radio]:checked").val();
		if ( val == "value" )	val = $("#Option [name = _str" + i + "_width_num]").val() + $("#Option [name = _str" + i + "_width_select]").val();
		$(".str" + i).css("width", val);

		// height
		val = $("#Option [name = _str" + i + "_height_radio]:checked").val();
		if ( val == "value" )	val = $("#Option [name = _str" + i + "_height_num]").val() + $("#Option [name = _str" + i + "_height_select]").val();
		$(".str" + i).css("height", val);

		// margin
		val = $("#Option [name = _str" + i + "_margin_select]").val();
		if ( val == "value" ){
			val = $("#Option [name = _str" + i + "_margin-top_select]").val();
			if ( val != "auto" )	val = $("#Option [name = _str" + i + "_margin-top_num]").val() + $("#Option [name = _str" + i + "_margin-top_select]").val();
			$(".str" + i).css("margin-top", val);
			
			val = $("#Option [name = _str" + i + "_margin-left_select]").val();
			if ( val != "auto" )	val = $("#Option [name = _str" + i + "_margin-left_num]").val() + $("#Option [name = _str" + i + "_margin-left_select]").val();
			$(".str" + i).css("margin-left", val);
			
			val = $("#Option [name = _str" + i + "_margin-right_select]").val();
			if ( val != "auto" )	val = $("#Option [name = _str" + i + "_margin-right_num]").val() + $("#Option [name = _str" + i + "_margin-right_select]").val();
			$(".str" + i).css("margin-right", val);
			
			val = $("#Option [name = _str" + i + "_margin-bottom_select]").val();
			if ( val != "auto" )	val = $("#Option [name = _str" + i + "_margin-bottom_num]").val() + $("#Option [name = _str" + i + "_margin-bottom_select]").val();
			$(".str" + i).css("margin-bottom", val);

		} else {
			$(".str" + i).css("margin", val);
		}

		// padding
		val = $("#Option [name = _str" + i + "_padding_select]").val();
		if ( val == "value" ){
			val = $("#Option [name = _str" + i + "_padding-top_select]").val();
			if ( val != "auto" )	val = $("#Option [name = _str" + i + "_padding-top_num]").val() + $("#Option [name = _str" + i + "_padding-top_select]").val();
			$(".str" + i).css("padding-top", val);
			
			val = $("#Option [name = _str" + i + "_padding-left_select]").val();
			if ( val != "auto" )	val = $("#Option [name = _str" + i + "_padding-left_num]").val() + $("#Option [name = _str" + i + "_padding-left_select]").val();
			$(".str" + i).css("padding-left", val);
			
			val = $("#Option [name = _str" + i + "_padding-right_select]").val();
			if ( val != "auto" )	val = $("#Option [name = _str" + i + "_padding-right_num]").val() + $("#Option [name = _str" + i + "_padding-right_select]").val();
			$(".str" + i).css("padding-right", val);
			
			val = $("#Option [name = _str" + i + "_padding-bottom_select]").val();
			if ( val != "auto" )	val = $("#Option [name = _str" + i + "_padding-bottom_num]").val() + $("#Option [name = _str" + i + "_padding-bottom_select]").val();
			$(".str" + i).css("padding-bottom", val);

		} else {
			$(".str" + i).css("padding", val);
		}

		// background-color
		val = $("#Option [name = _str" + i + "_background-color_text]").val();
		$(".str" + i).css("background-color", val);

		// color
		val = $("#Option [name = _str" + i + "_color_text]").val();
		$(".str" + i).css("color", val);

	};
}

function fullWindow() {
	var result = $(".result");
	result.css("width", "100%");
	result.css("height", "100vh");
	$(".block").css("margin", 0);
	$("body").css("margin", 0);
	$(".dropOut").css("display", "none");
	alert(_alrt);
}

function about() {
	alert(_about);
}

function setText(purposeId, str) {
	document.getElementById(purposeId).value = str;
}

function setHTML(purposeId, str) {
	document.getElementById(purposeId).innerHTML = str;
}

function setLanguage() {
	val = $("#Setting [name = language]").val();
	if ( val == "ja" ) {
		setText("About", "説明");
		setText("Full", "全画面");
		setText("Update", "更新");		
		setText("Reset", "リセット");
		setText("Boxes", "個の文章");
		setHTML("Back", "戻る");
		setHTML("Show", "表示: ");
		setHTML("Comma", "で");
		_alrt = "ESCキーをクリックで元に戻ります。";
		_about = "【String Layout Simulator】\n\n HTMLとCSSによるspan p divタグの表示を簡易的にシミュレートできるページ。\n\n文章の数は上部の「表示」から変更可能です。\n\nfont-size, line-height, letter-spacing, margin, padding, color, background-color, width, heightのシミュレーションが可能です。";
	}
	if ( val == "en" ) {
		setText("About", "About");
		setText("Full", "FullWindow");
		setText("Update", "Update");		
		setText("Reset", "Reset");
		setText("Boxes", "strings");
		setHTML("Back", "back");
		setHTML("Show", "Show: ");
		setHTML("Comma", ", ");
		_alrt = "Please return from ESC key.";
		_about = "【String Layout Simulator】\n\n You can simulate of the span/p/div tags lettering (viewing).\n\nThe string type and the number of strings can be changed with the page top.\n\nfont-size, line-height, letter-spacing, margin, padding, color, background-color, width and height simulation are available.";
	}
}

function setting() {
	setLanguage();
}

// ページ読み込み時（画像読み込み前）の処理
$(function() {
	$("#Update").click(function() {
		update();
	});

	$("#Full").click(function() {
		fullWindow();
	});

	$("#About").click(function() {
		about();
	});

	$("#Setting").click(function() {
		setting();
	});

	$("body").on("keydown", function(e) {
		if (e.keyCode === 27 || e.keyCode === 8) {
			var result = $(".result");
			result.css("width", "95%");
			result.css("height", "50vh");
			$(".block").css("margin", "20px");
			$("body").css("margin", "");
			$(".dropOut").css("display", "block");
		}
	})
});

// ウィンドウサイズ変更時の処理
$(window).resize(function() {
});
