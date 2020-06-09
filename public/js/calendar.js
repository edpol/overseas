jQuery(function() {
	jQuery('#reservation_date').datepicker();

	jQuery('#test2').datepicker({
		onSelect: function ()
		{
			$(this).change();
		}
	});

	jQuery("input").on("change", function(){
		console.log("change detected");
	});

});
