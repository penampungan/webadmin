
/*
 * BUTTON CREATE
*/
$.fn.modal.Constructor.prototype.enforceFocus = function(){};
//$.fn.modal.prototype.constructor.Constructor.DEFAULTS.backdrop = 'static';	
$(document).on('click','#ppobsaldoutama-button-create', function(ehead){ 			  
	$('#ppobsaldoutama-button-create-modal').modal('show')
	.find('#ppobsaldoutama-button-create-content').html('<i class=\"fa fa-2x fa-spinner fa-spin\"></i>')
	//.load(ehead.target.value);
	.load($(this).attr('value'));
});

/*
 * BUTTON VIEW
*/
$.fn.modal.Constructor.prototype.enforceFocus = function(){};
//$.fn.modal.prototype.constructor.Constructor.DEFAULTS.backdrop = 'static';	
$(document).on('click','#ppobsaldoutama-button-view', function(ehead){ 			  
	$('#ppobsaldoutama-button-view-modal').modal('show')
	.find('#ppobsaldoutama-button-view-content').html('<i class=\"fa fa-2x fa-spinner fa-spin\"></i>')
	//.load(ehead.target.value);
	.load($(this).attr('value'));
});

/*
 * BUTTON UPDATE
*/
$.fn.modal.Constructor.prototype.enforceFocus = function(){};
//$.fn.modal.prototype.constructor.Constructor.DEFAULTS.backdrop = 'static';	
$(document).on('click','#ppobsaldoutama-button-update', function(ehead){ 			  
	$('#ppobsaldoutama-button-update-modal').modal('show')
	.find('#ppobsaldoutama-button-update-content').html('<i class=\"fa fa-2x fa-spinner fa-spin\"></i>')
	//.load(ehead.target.value);
	.load($(this).attr('value'));
});