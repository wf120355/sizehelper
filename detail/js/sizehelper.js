KISSY.ready(function(S){
	var D = S.DOM,
		scaleEl = D.query('.J_ScaleBar');
	for(var i = 0; i < scaleEl.length; ++i){
		new SizeHelper.ScaleBar({
			width:120,
			srcNode: scaleEl[i]
		});
	}
	
	S.Event.on('#J_SizeHelperTrigger', 'click', function(){
		D.toggleClass('.J_Tb_r-summary', '.tb-r-no-bottom-border')
		D.toggleClass(this, 'tb-r-helper-expand');
		D.toggleClass('#J_SizeHelperPanel', 'SizeHelperPanelExpand');
	});
})
