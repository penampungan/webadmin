
/*
 * BUTTON CREATE
*/
$.fn.modal.Constructor.prototype.enforceFocus = function(){};
//$.fn.modal.prototype.constructor.Constructor.DEFAULTS.backdrop = 'static';	
$(document).on('click','#ppobtransaksisaldo-button-create', function(ehead){ 			  
	$('#ppobtransaksisaldo-button-create-modal').modal('show')
	.find('#ppobtransaksisaldo-button-create-content').html('<i class=\"fa fa-2x fa-spinner fa-spin\"></i>')
	//.load(ehead.target.value);
	.load($(this).attr('value'));
});

/*
 * BUTTON VIEW
*/
$.fn.modal.Constructor.prototype.enforceFocus = function(){};
//$.fn.modal.prototype.constructor.Constructor.DEFAULTS.backdrop = 'static';	
$(document).on('click','#ppobtransaksisaldo-button-view', function(ehead){ 			  
	$('#ppobtransaksisaldo-button-view-modal').modal('show')
	.find('#ppobtransaksisaldo-button-view-content').html('<i class=\"fa fa-2x fa-spinner fa-spin\"></i>')
	//.load(ehead.target.value);
	.load($(this).attr('value'));
});

/*
 * BUTTON UPDATE
*/
$.fn.modal.Constructor.prototype.enforceFocus = function(){};
//$.fn.modal.prototype.constructor.Constructor.DEFAULTS.backdrop = 'static';	
$(document).on('click','#ppobtransaksisaldo-button-update', function(ehead){ 			  
	$('#ppobtransaksisaldo-button-update-modal').modal('show')
	.find('#ppobtransaksisaldo-button-update-content').html('<i class=\"fa fa-2x fa-spinner fa-spin\"></i>')
	//.load(ehead.target.value);
	.load($(this).attr('value'));
});