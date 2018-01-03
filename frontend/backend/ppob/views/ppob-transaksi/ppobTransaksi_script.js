
/*
 * BUTTON CREATE
*/
$.fn.modal.Constructor.prototype.enforceFocus = function(){};
//$.fn.modal.prototype.constructor.Constructor.DEFAULTS.backdrop = 'static';	
$(document).on('click','#ppobtransaksi-button-create', function(ehead){ 			  
	$('#ppobtransaksi-button-create-modal').modal('show')
	.find('#ppobtransaksi-button-create-content').html('<i class=\"fa fa-2x fa-spinner fa-spin\"></i>')
	//.load(ehead.target.value);
	.load($(this).attr('value'));
});

/*
 * BUTTON VIEW
*/
$.fn.modal.Constructor.prototype.enforceFocus = function(){};
//$.fn.modal.prototype.constructor.Constructor.DEFAULTS.backdrop = 'static';	
$(document).on('click','#ppobtransaksi-button-view', function(ehead){ 			  
	$('#ppobtransaksi-button-view-modal').modal('show')
	.find('#ppobtransaksi-button-view-content').html('<i class=\"fa fa-2x fa-spinner fa-spin\"></i>')
	//.load(ehead.target.value);
	.load($(this).attr('value'));
});

/*
 * BUTTON UPDATE
*/
$.fn.modal.Constructor.prototype.enforceFocus = function(){};
//$.fn.modal.prototype.constructor.Constructor.DEFAULTS.backdrop = 'static';	
$(document).on('click','#ppobtransaksi-button-update', function(ehead){ 			  
	$('#ppobtransaksi-button-update-modal').modal('show')
	.find('#ppobtransaksi-button-update-content').html('<i class=\"fa fa-2x fa-spinner fa-spin\"></i>')
	//.load(ehead.target.value);
	.load($(this).attr('value'));
});