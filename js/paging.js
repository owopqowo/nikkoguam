ajax_paging = {
	obj:null,
	optionDefault:{
		'url':'',		// 목록 URL
		'selector':'',		// 목록 item selector
		'selector_btn':{
			'next':'',
			'prev':'',
			'page':'',
		},		// 버튼 selector
		'selector_label':{
			'current_page':'',
			'total_page':'',
			'current_items':'',
			'total_items':''
		},		// 페이지 label
		'page':1,	// 현재 페이지
		'count':0,	// 레코드 총 갯수
		'ipp':6,		// 페이지 당 항목 갯수 (item per page)
		'page_total':1,	// 총 페이지 갯수 Math.ceil(count / ipp)
		'load_before':function(){},			// 페이지 load 직전
		'load_complete':function(){}		// 페이지 load 완료 후
	},
	option:{},
	label:{
		'current_page':null,
		'total_page':null,
		'current_items':null,
		'total_items':null
	},
	objtemp:null,
	init:function(option){
		var _this = this;
		this.option = $.extend(this.optionDefault, option);
		this.obj = $(this.option.selector);
		this.option.page_total = Math.ceil(this.option.count / this.option.ipp);
		if (document.getElementById('area_temp') == null)
		{
			var objtemp = document.createElement('div');
			objtemp.id = 'area_temp';
			document.body.appendChild(objtemp);
		}
		this.objtemp = $('#area_temp');

		if (this.option.selector_label.current_page) this.label.current_page = $(this.option.selector_label.current_page);
		if (this.option.selector_label.total_page) $(this.option.selector_label.total_page).text(this.option.page_total);
		if (this.option.selector_label.current_items) this.label.current_items = $(this.option.selector_label.current_items);
		if (this.option.selector_label.total_items) $(this.option.selector_label.total_items).text(this.option.count);
		this.updateLabel();
		if (this.option.selector_btn.next) $(this.option.selector_btn.next).on('click', function(){
			if (_this.option.page < _this.option.page_total) _this.load(_this.getNextPage());
			return false;
		});
	},
	getNextPage:function(){
		return ++this.option.page;
	},
	load:function(page){
		var _this = this;
		if (this.option.load_before) this.option.load_before.call(this, this.obj);
		this.objtemp.load(this.option.url+this.option.page+' '+this.option.selector+' > ', function(){
			_this.objtemp.children().appendTo(_this.obj);
			_this.objtemp.empty();
			if (_this.option.load_complete) _this.option.load_complete.call(_this, _this.obj);

			// 페이지 업데이트
			_this.updateLabel();
		});
	},
	updateLabel:function(){
		// 페이지 업데이트
		if (this.label.current_page !== null) this.label.current_items.text(this.option.page);
		if (this.label.current_items !== null) {
			let tmp_items = this.option.ipp * this.option.page;
			if (tmp_items > this.option.count) tmp_items = this.option.count;
			this.label.current_items.text(tmp_items);
		}

		// 모든 페이지가 보여지는 상황에는 라벨 및 버튼 숨기기
		if (this.option.page >= this.option.page_total) {
			if (this.label.current_page !== null) this.label.current_page.parents('.box_more').hide();
			if (this.label.current_items !== null) this.label.current_items.parents('.box_more').hide();
		} else {
			if (this.label.current_page !== null) this.label.current_page.parents('.box_more').show();
			if (this.label.current_items !== null) this.label.current_items.parents('.box_more').show();
		}
	}
}