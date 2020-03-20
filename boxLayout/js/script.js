var val;
var _alrt = "ESCキーをクリックで元に戻ります。";
var _about = "【Box Layout Simulator】\n\n このページはHTMLとCSSによる四角形の表示を簡易的にシミュレートできるページです。\n\nboxの数は上部の「表示」から変更可能です。\n\nwidth, height, margin, padding, position, top, left, right, bottom, display, border, border-radius, border-width, border-color, float, background-colorのシミュレーションが可能です。";

function update() {
	for (var i = 1; i <= boxNum; i++) {

		// width
		val = $("#Option [name = _box" + i + "_width_radio]:checked").val();
		if ( val == "value" )	val = $("#Option [name = _box" + i + "_width_num]").val() + $("#Option [name = _box" + i + "_width_select]").val();
		$(".box" + i).css("width", val);

		// height
		val = $("#Option [name = _box" + i + "_height_radio]:checked").val();
		if ( val == "value" )	val = $("#Option [name = _box" + i + "_height_num]").val() + $("#Option [name = _box" + i + "_height_select]").val();
		$(".box" + i).css("height", val);

		// margin
		val = $("#Option [name = _box" + i + "_margin_select]").val();
		if ( val == "value" ){
			val = $("#Option [name = _box" + i + "_margin-top_select]").val();
			if ( val != "auto" )	val = $("#Option [name = _box" + i + "_margin-top_num]").val() + $("#Option [name = _box" + i + "_margin-top_select]").val();
			$(".box" + i).css("margin-top", val);
			
			val = $("#Option [name = _box" + i + "_margin-left_select]").val();
			if ( val != "auto" )	val = $("#Option [name = _box" + i + "_margin-left_num]").val() + $("#Option [name = _box" + i + "_margin-left_select]").val();
			$(".box" + i).css("margin-left", val);
			
			val = $("#Option [name = _box" + i + "_margin-right_select]").val();
			if ( val != "auto" )	val = $("#Option [name = _box" + i + "_margin-right_num]").val() + $("#Option [name = _box" + i + "_margin-right_select]").val();
			$(".box" + i).css("margin-right", val);
			
			val = $("#Option [name = _box" + i + "_margin-bottom_select]").val();
			if ( val != "auto" )	val = $("#Option [name = _box" + i + "_margin-bottom_num]").val() + $("#Option [name = _box" + i + "_margin-bottom_select]").val();
			$(".box" + i).css("margin-bottom", val);

		} else {
			$(".box" + i).css("margin", val);
		}

		// padding
		val = $("#Option [name = _box" + i + "_padding_select]").val();
		if ( val == "value" ){
			val = $("#Option [name = _box" + i + "_padding-top_select]").val();
			if ( val != "auto" )	val = $("#Option [name = _box" + i + "_padding-top_num]").val() + $("#Option [name = _box" + i + "_padding-top_select]").val();
			$(".box" + i).css("padding-top", val);
			
			val = $("#Option [name = _box" + i + "_padding-left_select]").val();
			if ( val != "auto" )	val = $("#Option [name = _box" + i + "_padding-left_num]").val() + $("#Option [name = _box" + i + "_padding-left_select]").val();
			$(".box" + i).css("padding-left", val);
			
			val = $("#Option [name = _box" + i + "_padding-right_select]").val();
			if ( val != "auto" )	val = $("#Option [name = _box" + i + "_padding-right_num]").val() + $("#Option [name = _box" + i + "_padding-right_select]").val();
			$(".box" + i).css("padding-right", val);
			
			val = $("#Option [name = _box" + i + "_padding-bottom_select]").val();
			if ( val != "auto" )	val = $("#Option [name = _box" + i + "_padding-bottom_num]").val() + $("#Option [name = _box" + i + "_padding-bottom_select]").val();
			$(".box" + i).css("padding-bottom", val);

		} else {
			$(".box" + i).css("padding", val);
		}


		// position
		val = $("#Option [name = _box" + i + "_position_select]").val();
		$(".box" + i).css("position", val);

		val = $("#Option [name = _box" + i + "_top_num]").val() + $("#Option [name = _box" + i + "_top_select]").val();
		$(".box" + i).css("top", val);

		val = $("#Option [name = _box" + i + "_left_num]").val() + $("#Option [name = _box" + i + "_left_select]").val();
		$(".box" + i).css("left", val);

		val = $("#Option [name = _box" + i + "_right_num]").val() + $("#Option [name = _box" + i + "_right_select]").val();
		$(".box" + i).css("right", val);

		val = $("#Option [name = _box" + i + "_bottom_num]").val() + $("#Option [name = _box" + i + "_bottom_select]").val();
		$(".box" + i).css("bottom", val);

		// display
		val = $("#Option [name = _box" + i + "_display_select]").val();
		$(".box" + i).css("display", val);

		// border
		val = $("#Option [name = _box" + i + "_border_select]").val();
		$(".box" + i).css("border", val);

		val = $("#Option [name = _box" + i + "_border-radius_num]").val() + $("#Option [name = _box" + i + "_border-radius_select]").val();
		$(".box" + i).css("border-radius", val);

		val = $("#Option [name = _box" + i + "_border-width_num]").val() + $("#Option [name = _box" + i + "_border-width_select]").val();
		$(".box" + i).css("border-width", val);

		val = $("#Option [name = _box" + i + "_border-color_text]").val();
		$(".box" + i).css("border-color", val);

		// float
		val = $("#Option [name = _box" + i + "_float_select]").val();
		$(".box" + i).css("float:width", val);

		// background-color
		val = $("#Option [name = _box" + i + "_background-color_text]").val();
		$(".box" + i).css("background-color", val);

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
		setText("Boxes", "個の箱");
		setHTML("Back", "戻る");
		setHTML("Show", "表示: ");
		_alrt = "ESCキーをクリックで元に戻ります。";
		_about = "【Box Layout Simulator】\n\n このページはHTMLとCSSによる四角形の表示を簡易的にシミュレートできるページです。\n\nboxの数は上部の「表示」から変更可能です。\n\nwidth, height, margin, padding, position, top, left, right, bottom, display, border, border-radius, border-width, border-color, float, background-colorのシミュレーションが可能です。";
	}
	if ( val == "en" ) {
		setText("About", "About");
		setText("Full", "FullWindow");
		setText("Update", "Update");		
		setText("Reset", "Reset");
		setText("Boxes", "boxes");
		setHTML("Back", "back");
		setHTML("Show", "Show: ");
		_alrt = "Please return from ESC key.";
		_about = "【Box Layout Simulator】\n\n You can simulate of the HTML/CSS lettering (viewing).\n\nThe number of boxes can be changed with the page top.\n\nwidth, height, margin, padding, position, top, left, right, bottom, display, border, border-radius, border-width, border-color, float and background-color simulation are available.";
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
