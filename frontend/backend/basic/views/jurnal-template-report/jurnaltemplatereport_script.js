
/*
 * BUTTON CREATE
*/
$.fn.modal.Constructor.prototype.enforceFocus = function(){};
//$.fn.modal.prototype.constructor.Constructor.DEFAULTS.backdrop = 'static';	
$(document).on('click','#jurnal-template-report-button-create', function(ehead){ 			  
	$('#jurnal-template-report-button-create-modal').modal('show')
	.find('#jurnal-template-report-button-create-content').html('<i class=\"fa fa-2x fa-spinner fa-spin\"></i>')
	//.load(ehead.target.value);
	.load($(this).attr('value'));
});

/*
 * BUTTON VIEW
*/
$.fn.modal.Constructor.prototype.enforceFocus = function(){};
//$.fn.modal.prototype.constructor.Constructor.DEFAULTS.backdrop = 'static';	
$(document).on('click','#jurnal-template-report-button-view', function(ehead){ 			  
	$('#jurnal-template-report-button-view-modal').modal('show')
	.find('#jurnal-template-report-button-view-content').html('<i class=\"fa fa-2x fa-spinner fa-spin\"></i>')
	//.load(ehead.target.value);
	.load($(this).attr('value'));
});

/*
 * BUTTON UPDATE
*/
$.fn.modal.Constructor.prototype.enforceFocus = function(){};
//$.fn.modal.prototype.constructor.Constructor.DEFAULTS.backdrop = 'static';	
$(document).on('click','#jurnal-template-report-button-update', function(ehead){ 			  
	$('#jurnal-template-report-button-update-modal').modal('show')
	.find('#jurnal-template-report-button-update-content').html('<i class=\"fa fa-2x fa-spinner fa-spin\"></i>')
	//.load(ehead.target.value);
	.load($(this).attr('value'));
});