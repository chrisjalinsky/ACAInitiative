//tooltips
$(document).ready(function(){
	$('.tip').tooltip();
});
     
//popovers
$(document).ready(function() {
    $("[rel=popover]")
        .popover({
            offset: 10
        })
        .click(function(e) {
            e.preventDefault()
        })
});

//button click loading state
$(document).ready(function() {

	$("[rel=btnLoading]")
	.button()
	.click(function(e) {
		e.preventDefault();
	    $(this).button('loading');
	});
});