new UISearch( document.getElementById( 'sb-search' ) );
new UISearch( document.getElementById( 'sb-search-phone' ) );

var nlform = new NLForm( document.getElementById( 'nl-form' ) );

(function() {
	[].slice.call( document.querySelectorAll( 'select.cs-select' ) ).forEach( function(el) {	
		new SelectFx(el, {
			stickyPlaceholder: false
		});
	} );
})();

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