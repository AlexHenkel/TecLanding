new UISearch( document.getElementById( 'sb-search' ) );
new UISearch( document.getElementById( 'sb-search-phone' ) );

var nlform = new NLForm( document.getElementById( 'nl-form' ) );


$(document).ready(function() {
	$("#toggle-nav-label").click(function(event) {
		/* Act on the event */
		$(this).toggleClass('active');
	});

	$(".box").click(function(event) {
		/* Act on the event */
		$("#toggle-nav-label").removeClass('active');
	});
});