/**
 *    account v0.1.0
 *    Plug-in for Discuz!
 *    Last Updated: 2013-02-05
 *    Author: shumyun
 *    Copyright (C) 2011 - forever isuiji.com Inc
 */
jQuery.noConflict();

/*
 * 修改窗口
 */
jQuery(document).ready(function($) {
	$("#richnum").calculator();
	
	$("#ac_dmodify").detach().appendTo("body").position({
		my: "center center",
		at: "center center",
		of: $("body"),
		offset: "0 -50"
	});
	$("#h3_move").mousedown(function(e){
		dragMenu($("#ac_dmodify")[0], e, 1);
	});
	$("#modify_aclose").click(function(){
		$("#ac_dmodify").hide();
	});
	
	function Setwinmodify(data, fncallback) {
		switch(data['type']) {
		case '支出':
		break;
		case '收入':
			break;
		case '借入':
			break;
		case '借出':
			break;
		case '转账':
			break;
		case '收债':
			break;
		case '坏债':
			break;
		default:break;
		}
		return true;
	};
	
});
