KISSY.ready(function(S) {
	var DOM = S.DOM, Event = S.Event;
	var $ = S.all;

	//    �������һ���û�����ĳ��루35-45��
	var buySize = init_buySize();

	//ѡ��
	var optionNode = $("ul.optionList").all("li");
	optionNode.on('click', function(e) {
		var self = S.one(this);
		var selected = self.siblings(".sel");
		selected.removeClass("sel");
		self.addClass("sel");
	});
	//��껮��
	optionNode.on('mouseenter mouseleave', function(e) {
		var self = S.one(this);
		self.toggleClass("hov");
	});

	//���ۿ�����
	$(".fold-msg-box").on('click', function(e) {
		var self = S.one(this);
		var commentbox = self.parent(".sizebar").siblings(".bd");
		commentbox.parent(".rate-msg-box").siblings(".share-box").hide();
		commentbox.hide();
		self.siblings(".show-msg-box").show();
		self.hide();
	});

	$(".show-msg-box").on('click', function(e) {
		var self = S.one(this);
		var commentbox = self.parent(".sizebar").siblings(".bd");
		commentbox.parent(".rate-msg-box").siblings(".share-box").show();
		commentbox.show();
		self.siblings(".fold-msg-box").show();
		self.hide();
	});

	//��ʼ������ѡ��
	function init_sizeList(size) {
		size = size - 3;
		var html = '<li data-value=\"' + size + '\"><a href=\"#\" class=\"first\"><span>' + size + '</span></a></li>';
		for (var i = -2; i <= 3; i++) {
			size = size + 1;
			if (i == 0) {
				var str = '<li data-value=\"' + size + '\" class=\"sel\"><a href=\"#\"><span>' + size + '</span></a></li>';
			} else {
				var str = '<li data-value=\"' + size + '\"><a href=\"#\"><span>' + size + '</span></a></li>';
			}
			html = html + str;
		}
		$("ul.sizeList").html(html);
	}

	//    �������һ���û�����ĳ��루35-45��
	function init_buySize() {
		var s = parseInt(Math.random() * 10) + 35;
		$("ul.sku").one("li").text("��ɫ����:ǳ��;����:" + s);
		init_sizeList(s);
		return s;
	}

	var mapFeel = {
		fit:'����',
		small:'ƫС',
		larger:'ƫ��'
	};
	//    �ύ����ѡ����
	$("#size-sub-btn").on('click', function(e) {
		var size = $("ul.optionList").all("li.sel").attr("data-value");
		var feel = $("ul.fellList").all("li.sel").attr("data-value");
		var comment = $(".rate-msg").val();
		var actualSize = measureSize(buySize, size, feel);
		var result = {
			userId : "0000001",
			nick:'��ʮ������IE6',
			buySize : buySize,
			size : size,
			feel : feel,
			feelDes: mapFeel[feel],
			comment : comment,
			actualSize : actualSize
		};
		top.document.getElementById('J_Detail').contentWindow.postMessage(result, '*');
	});

	//    ����Ь��ʵ�ʳ���
	function measureSize(buySize, size, feel) {
		var actualSize = "";
		if (buySize == size) {
			actualSize = feel;
		} else if (buySize < size) {
			if (feel == "small") {
				actualSize = ""
			} else {
				actualSize = "larger";
			}
		} else {
			if (feel == "fit") {
				actualSize = "";
			} else {
				actualSize = "small";
			}
		}
		return actualSize;
	}

}); 