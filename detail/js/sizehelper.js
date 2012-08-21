KISSY.ready(function(S){
	var D = S.DOM;
	var UserData = [
		{
			userId:'0000008',
			nick:'aaaaaaaaaaa8',
			comment: 'asssssss测试测试8',
			buySize:38,
			size:37,
			feel:'fit',
			feelDes:'合适',
			actualSize:'small'
		},
		{
			userId:'0000009',
			nick:'aaaaaaaaaaa8',
			comment: 'asssssss测试测试8',
			buySize:36,
			size:37,
			feel:'fit',
			feelDes:'合适',
			actualSize:'larger'
		}
	];
	
	for(var i = 0; i < 8; ++i){
		UserData.push({
			userId:'000000' + i,
			nick:'test' + i,
			comment: '测试测试' + i,
			buySize:37,
			size:37,
			feel:'fit',
			feelDes:'合适',
			actualSize:'fit'
		})
	}
	
	for(var i = 10; i < 20; ++i){
		UserData.push({
			userId:'000000' + i,
			nick:'test' + i,
			comment: '测试测试' + i,
			buySize:40,
			size:40,
			feel:'fit',
			feelDes:'合适',
			actualSize:'fit'
		})
	}
	
	var tb_size = D.get('.tb-r-size'),
		size_ret = D.get('#J_SizeHelperResult');
	tb_size.style.display = 'none';
	size_ret.style.display = 'none';
	//存储总描述的比例组件实例
	var totalScaleBar = [],
		sizeScaleBar = [];
	var srcNodes = D.query('.J_ScaleBar', tb_size);
	for(i = 0; i < srcNodes.length; ++i){
		totalScaleBar.push(new SizeHelper.ScaleBar({
			width:120,
			srcNode: srcNodes[i]
		}));
	}
	srcNodes = D.query('.J_ScaleBar', size_ret);
	for(i = 0; i < srcNodes.length; ++i){
		sizeScaleBar.push(new SizeHelper.ScaleBar({
			width:120,
			srcNode: srcNodes[i]
		}));
	}
	
	function addComment(data){
		var div = D.create('<div>'),
			cnt = D.get('.tb-r-comments');
		div.innerHTML = S.substitute(TMP, data);
		cnt.insertBefore(div.firstChild, cnt.firstChild);
	}
	
	function setOrder(ret){
		if(ret.fit >= ret.small){
			ret.order[0]  = ret.fit >= ret.larger ? 'fit' : 'larger';
			if(ret.order[0] === 'fit'){
				if(ret.small >= ret.larger){
					ret.order[1] = 'small';
					ret.order[2] = 'larger';
				} else {
					ret.order[1] = 'larger';
					ret.order[2] = 'small';
				}
			} else {
				ret.order[1] = 'fit';
				ret.order[2] = 'small';
			}
		} else {
			ret.order[0]  = ret.small >= ret.larger ? 'small' : 'larger';
			if(ret.order[0] === 'small'){
				if(ret.fit >= ret.larger){
					ret.order[1] = 'fit';
					ret.order[2] = 'larger';
				} else {
					ret.order[1] = 'larger';
					ret.order[2] = 'fit';
				}
			} else {
				ret.order[1] = 'small';
				ret.order[2] = 'fit';
			}	
		}
	}
	
	function calTotal(){
		var ret = {
			total: UserData.length,
			fit: 0,
			small: 0,
			larger: 0,
			order: ['fit', 'small', 'larger']
		};
		
		for(var i = 0; i < UserData.length; ++i){
			switch(UserData[i].actualSize){
				case 'fit':
					++ret.fit;
					break;
				case 'small':
					++ret.small;
					break;
				case 'larger':
					++ret.larger;
					break;
			}
		}
		if(!ret.total){
			return ret;
		}
		setOrder(ret);
		ret.fit = Math.round(ret.fit / ret.total * 100);
		ret.small = Math.round(ret.small / ret.total * 100);
		ret.larger = Math.round(ret.larger / ret.total * 100);
		return ret;
	}
	
	function calTotalBySize(value){
		var low = value - 1;
			large = value + 1,
			ret = {
				fit: 0,
				larger: 0,
				small: 0,
				total: 0,
				order: ['fit', 'small', 'larger']
			};
			
		for(var i = 0, len = UserData.length; i < len; ++i){
			if(UserData[i].size == value && UserData[i].feel == 'fit'){
				UserData[i].buySize == low && ++ret.small;
				UserData[i].buySize == large && ++ret.larger;
				UserData[i].buySize == value && ++ret.fit;
				++ret.total;
			}	
		}
		
		if(!ret.total){
			return ret;
		}
		setOrder(ret);
		ret.fit = Math.round(ret.fit / ret.total * 100);
		ret.small = Math.round(ret.small / ret.total * 100);
		ret.larger = Math.round(ret.larger / ret.total * 100);
		
		return ret;
	}
	
	var mapFeel = {
		fit: '标准',
		small: '偏小',
		larger: '偏大'
	};
	
	function setTotal(){
		var totalInfo = calTotal(),
			order = totalInfo.order,
			total = totalInfo.total,
			first = order[0],
			second = order[1],
			third = order[2];
			
		var tb_size = D.get('.tb-r-size');
		tb_size.style.display = '';
		D.get('.tb-r-des-total', tb_size).innerHTML = '共' + totalInfo.total + '次描述';
		totalScaleBar[0].setValue(totalInfo[first]);
		totalScaleBar[1].setValue(totalInfo[second]);
		totalScaleBar[2].setValue(totalInfo[third]);
		var des = D.query('.tb-r-comment-des', tb_size);
		des[0].innerHTML = totalInfo[first] + '%买家认为鞋码' + mapFeel[first];
		des[1].innerHTML = totalInfo[second] + '%买家认为鞋码' + mapFeel[second];
		des[2].innerHTML = totalInfo[third] + '%买家认为鞋码' + mapFeel[third];
	}
	
	function setTotalBySize(value){
		var mapValue = {
			small:value - 1,
			fit: value,
			larger: value + 1
		};
		var totalInfo = calTotalBySize(value),
			order = totalInfo.order,
			total = totalInfo.total,
			scale_ret = D.get('#J_SizeHelperResult');
		
		if(!total){
			scale_ret.style.display = 'none';
			var nosize = D.get('#J_NoSize');
			nosize.innerHTML = '暂时没有平常穿' + value + '码的买家购买该宝贝！';
			nosize.style.display = 'block';
			return;
		}
			D.get('#J_NoSize').style.display = 'none';
			scale_ret.style.display = '';
		
		var sizelabel = D.query('.J_Sh-size', scale_ret),
			sizeTips = D.query('.sh-scale-tips', scale_ret);
		for(var i = 0; i < sizelabel.length; ++i){
			var prop = order[i];
			sizelabel[i].innerHTML = mapValue[prop] + '码';
			sizeScaleBar[i].setValue(totalInfo[prop]);
			sizeTips[i].innerHTML = totalInfo[prop] + '%平常穿' + value + '码的买家购买了' + mapValue[prop]
				+ '码，并认为合适';
		}
		
	}
	
	var TMP = '<li tabindex="0" hidefocus="true" class="tb-r-comment"><div class="tb-r-buyer">'
		+ '<div class="tb-r-avatar">'
		+ '<a href="http://wow.taobao.com/u/MTAxMjYxNDUw/view/ta_taoshare_list.htm?redirect=fa"' 
		+ 'target="_blank" class="tb-action" data-act="sendclick" data-val="12.18">' 
		+ '<img width="40" height="40" data-act="sns" data-val="img"'
		+ 'src="http://wwc.taobaocdn.com/avatar/getAvatar.do?userId={userId}&amp;width=40&amp;height=40'
		+  '&amp;type=sns"></a></div><div class="tb-r-nick">'
		+  '<a href="http://wow.taobao.com/u/MTAxMjYxNDUw/view/ta_taoshare_list.htm?redirect=fa"' 
		+  'title="" target="_blank" class="tb-action" data-act="sendclick" data-val="12.17">{nick}</a>'
		+  '</div><div class="tb-r-rank"><a class="tb-action" data-act="sendclick" data-val="12.16"'
		+  'href="http://rate.taobao.com/rate.htm?user_id=101261450&amp;rater=1"' 
		+  'title="251-501个买家信用积分，请点击查看详情" target="_blank"><img ' 
		+  'src="http://a.tbcdn.cn/sys/common/icon/rank_s/b_red_4.gif?t=20111027"></a></div></div>'
		+  '<div class="tb-r-bd"><div class="tb-r-body"><div class="tb-r-cnt">{comment}</div>'
		+  '<div class="tb-r-info"><span class="tb-r-date">[2012.08.22]</span><span '
		+  'class="tb-r-sku">颜色分类:2432黄绿色&nbsp;&nbsp;尺码:{buySize}</span><span class="tb-r-usual"'
		+  '>（平时穿{size}码）</span><span class="tb-r-feel">&nbsp;&nbsp;&nbsp;&nbsp;上脚感受：{feelDes}</span>'
		+  '</div></div><div class="tb-r-act"><div class="tb-r-useful   tb-r-useful-zero">'
		+  '<div class="tb-r-msg">提交中...</div><a href="#" class="tb-r-normal tb-useful-btn tb-action"'
		+  ' title="有0人认为此评论有用" data-act="markuseful" data-val="19827632895">有用<span '
		+  'class="tb-r-ucount">(0)</span></a></div></div></div></li>';
	
	S.Event.on('#J_SizeHelperTrigger', 'click', function(){
		D.toggleClass('.J_Tb_r-summary', '.tb-r-no-bottom-border')
		D.toggleClass(this, 'tb-r-helper-expand');
		D.toggleClass('#J_SizeHelperPanel', 'SizeHelperPanelExpand');
	});
	
	S.Event.on('#J_SizeHelperSize', 'change', function(){
		if(this.value == '0'){
			return;
		}
		setTotalBySize(parseInt(this.value));
	});
	
	setTotal();
	S.Event.on(window, 'message', function(evt){
		var data = evt.data;
			val  = parseInt(D.get('#J_SizeHelperSize').value);
		UserData.push(data);
		addComment(data);
		setTotal();
		if(val){
			setTotalBySize(parseInt(D.get('#J_SizeHelperSize').value));
		}
	});
});
