jQuery(document).ready(function ($) {
    "use strict";

    $("#groupSelect").change(function() {
		var a = document.createElement('a');
		a.href = $(this).val();
		a.rel = 'external';
		a.target = '_top';
		document.body.appendChild(a);
		a.click();
	});

/*
	if ($(".rightColumn").width() < 510){		
		$(".sinopsis").hide();
	} 

    $(window).resize(function() {
  		if ($(".rightColumn").width() < 510){
  			$(".sinopsis").hide();
  		} else{
			$(".sinopsis").show();
  		}
	});
*/
});	