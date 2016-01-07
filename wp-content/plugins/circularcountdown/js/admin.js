jQuery(document).ready(function(){
	
	//Save button click event handler
    jQuery("#circularcountdown_general .circularcountdown_save").click(function(e) { 
		e.preventDefault();
		jQuery("#circularcountdown_form").submit();
    });
	
	//Generate button click event handler
    jQuery("#circularcountdown_general .circularcountdown_generate").click(function(e) {  
		e.preventDefault();
	      
        var shortcode = "[circularcountdown";
            
		jQuery("#circularcountdown_general form input, #circularcountdown_general form textarea#onFinish").each(function() {
			var input = jQuery(this);
			var type = input.attr("type");
			var name = input.attr("name");
			
			if (type!="checkbox") {
				shortcode += " " + name + '="' + input.val() + '"';
			} else {
				if (input.prop('checked')) {
					shortcode += " " + name + '="true"';
				} else {
					shortcode += " " + name + '="false"';
				}
			}
		});
		
		shortcode += "]";
		
		jQuery("#circularcountdown_general #theshortcode textarea").val(shortcode);
		jQuery("#circularcountdown_general #theshortcode").show();
    });
    
	//Date picker
    jQuery('#circularcountdown_general .date').datepicker({
        dateFormat:"yy/mm/dd 00:00:00"
    });
    
	//Color picker
    jQuery('#circularcountdown_general .color_picker').each(function() {	
	    var inputID = jQuery(this).attr('id');
		
	    jQuery(this).ColorPicker({
	    	color:jQuery(this).val(),
	    	onShow:function (colpkr) {
	    		jQuery(colpkr).fadeIn(200);
	    		return false;
	    	},
	    	onHide:function (colpkr) {
	    		jQuery(colpkr).fadeOut(200);
	    		return false;
	    	},
	    	onChange:function (hsb, hex, rgb, el) {
	    		jQuery('#'+inputID).val('#'+hex);
	    		jQuery('#'+inputID+'_bg').css('backgroundColor', '#'+hex);
	    	}
	    });	
	});
	
    //iPhone style checkbox
	jQuery('.iphone_checkboxes').iphoneStyle({
		checkedLabel:'YES',
		uncheckedLabel:'NO'
	});
});