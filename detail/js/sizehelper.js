KISSY.ready(function(S){
	var scaleEl = S.DOM.query('.J_ScaleBar');
	for(var i = 0; i < scaleEl.length; ++i){
		new SizeHelper.ScaleBar({
			width:120,
			srcNode: scaleEl[i]
		});
	}
})
