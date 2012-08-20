(function(S){
	
	function cssToText(obj){
		var text = '';
		if(!obj){
			return text;
		}
		for(var k in obj){
			text += k + ':' + obj[k] + ';';
		}
		
		return text;
	};
	
	/*坑爹的KISSY1.16 木有first函数，  擦擦~~！！*/
	function _first(el){
		if(el.firstElementChild){
			return el.firstElementChild;
		}
		
		el = el.firstChild;
		while(null !== el && el.nodeType !== 1){
			el = el.nextSiblings;
		}
		
		return el;
	}
	
	window.SizeHelper || (window.SizeHelper = {});
	/*
	 *config:
	 * 	@width, 默认100
	 * 	@height, 默认100
	 * 	@total, 总值，默认18
	 * 	@value, 当前值，默认为0
	 * 	@color, 比例条颜色， 默认橘色
	 *  @renderTo, 渲染父元素
	 * 	@srcNode, 从页面元素渲染
	 * 	@cls,  附加至最外层容器的类名
	 * 	@css, 需要对元素附加的css属性值
	 * */
	var ScaleBar = window.SizeHelper.ScaleBar = function(config){
		var D = S.DOM;
		config = this._config = S.mix({}, config);
		
		config.width || (config.width = 100);
		config.height || (config.height = 16);
		config.total || (config.total = 100);
		config.value || (config.value = 0);
		config.color || (config.color = '#FF954B');
		(config.value > config.total) && (config.value = config.total); 
		
	/*	html =  '<div class="J_ScaleBarWrapper"><div class="J_ScaleBarValue" data-value="'
			 +	 config.value + '"></div></div>';*/
			 
		if(!config.srcNode){
			config.srcNode = D.create('<div>');
			config._valueNode = config.srcNode.appendChild(config.srcNode.cloneNode());
			D.attr(config._valueNode, 'data-value', config.value);
		} else {
			config.srcNode = D.get(config.srcNode);
			config._valueNode = _first(config.srcNode);
			config.value = Number(D.attr(config._valueNode, 'data-value'));
			config.total = Number(D.attr(config._valueNode, 'data-total'));
		}
		
		//D.addClass(config.srcNode, 'J_ScaleBarWrapper');
		//D.addClass(config._valueNode, 'J_ScaleBarValue');
		var cssText = cssToText({
			width: config.width + 'px',
			height: config.height + 'px',
			border: '1px solid #E3E3E3', /*+ config.color*/
			padding: '2px 0',
			overflow: 'hidden'
		}) + cssToText(config.css);
		
		config.srcNode.style.cssText = cssText;
		
		var scale = Number(D.attr(config._valueNode, 'data-value')) / config.total * config.width;
		cssText = cssToText({
			height: '100%',
			width: scale + 'px',
			background: config.color
		});
		config._valueNode.style.cssText = cssText;
		
		config.renderTo && D.get(config.renderTo).appendChild(config.srcNode)
			&& (this._config.rendered = true);			
	};
	
	ScaleBar.prototype = {
		construtor: this,
		setWidth: function(v){
			this._config.srcNode.style.width = v + 'px';
			this._config.width = v;
			return this;
		},
		getWidth: function(){
			return this._config.width;
		},
		setHeight: function(v){
			this._config.srcNode.style.height = v + 'px';
			this._config.height = v;
			return this;
		},
		getWidth: function(){
			return this._config.height;
		},
		setSize: function(obj){
			var n = this._config.srcNode;
			obj.width && this.setWidth(obj.width);
			obj.height && this.setHeight(obj.height);
			return this;
		},
		getSize: function(){
			var n = this._config.srcNode;
			return {
				width:this.getWidth(),
				height: this.getHeight()
			}
		},
		setColor: function(v){
			this._config._valueNode.style.background = v;
			this._config.color = v;
		},
		getColor: function(){
			return this._config.color;
		},
		renderTo: function(el){
			D.get(el).appendChild(this._config.srcNode);
			return this;
		},
		setValue: function(v){
			var config = this._config;
			(v > config.total) && (v = config.total);
			config.srcNode.style.width = v / config.total * config.width + 'px';
			config.value = v;
		},
		getValue: function(){
			return config.value;
		}
	};
})(KISSY);
