
/*
 * BUTTON CREATE
*/
$.fn.modal.Constructor.prototype.enforceFocus = function(){};
//$.fn.modal.prototype.constructor.Constructor.DEFAULTS.backdrop = 'static';	
$(document).on('click','#productunit-button-create', function(ehead){ 			  
	$('#productunit-button-create-modal').modal('show')
	.find('#productunit-button-create-content').html('<i class=\"fa fa-2x fa-spinner fa-spin\"></i>')
	//.load(ehead.target.value);
	.load($(this).attr('value'));
});

/*
 * BUTTON VIEW
*/
$.fn.modal.Constructor.prototype.enforceFocus = function(){};
//$.fn.modal.prototype.constructor.Constructor.DEFAULTS.backdrop = 'static';	
$(document).on('click','#productunit-button-view', function(ehead){ 			  
	$('#productunit-button-view-modal').modal('show')
	.find('#productunit-button-view-content').html('<i class=\"fa fa-2x fa-spinner fa-spin\"></i>')
	//.load(ehead.target.value);
	.load($(this).attr('value'));
});

/*
 * BUTTON UPDATE
*/
$.fn.modal.Constructor.prototype.enforceFocus = function(){};
//$.fn.modal.prototype.constructor.Constructor.DEFAULTS.backdrop = 'static';	
$(document).on('click','#productunit-button-update', function(ehead){ 			  
	$('#productunit-button-update-modal').modal('show')
	.find('#productunit-button-update-content').html('<i class=\"fa fa-2x fa-spinner fa-spin\"></i>')
	//.load(ehead.target.value);
	.load($(this).attr('value'));
});