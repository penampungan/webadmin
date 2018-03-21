
/*
 * BUTTON CREATE
*/
$.fn.modal.Constructor.prototype.enforceFocus = function(){};
//$.fn.modal.prototype.constructor.Constructor.DEFAULTS.backdrop = 'static';	
$(document).on('click','#storemembershippakage-button-create', function(ehead){ 			  
	$('#storemembershippakage-button-create-modal').modal('show')
	.find('#storemembershippakage-button-create-content').html('<i class=\"fa fa-2x fa-spinner fa-spin\"></i>')
	//.load(ehead.target.value);
	.load($(this).attr('value'));
});

/*
 * BUTTON VIEW
*/
$.fn.modal.Constructor.prototype.enforceFocus = function(){};
//$.fn.modal.prototype.constructor.Constructor.DEFAULTS.backdrop = 'static';	
$(document).on('click','#storemembershippakage-button-view', function(ehead){ 			  
	$('#storemembershippakage-button-view-modal').modal('show')
	.find('#storemembershippakage-button-view-content').html('<i class=\"fa fa-2x fa-spinner fa-spin\"></i>')
	//.load(ehead.target.value);
	.load($(this).attr('value'));
});

/*
 * BUTTON UPDATE
*/
$.fn.modal.Constructor.prototype.enforceFocus = function(){};
//$.fn.modal.prototype.constructor.Constructor.DEFAULTS.backdrop = 'static';	
$(document).on('click','#storemembershippakage-button-update', function(ehead){ 			  
	$('#storemembershippakage-button-update-modal').modal('show')
	.find('#storemembershippakage-button-update-content').html('<i class=\"fa fa-2x fa-spinner fa-spin\"></i>')
	//.load(ehead.target.value);
	.load($(this).attr('value'));
});