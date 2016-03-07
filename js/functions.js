new UISearch( document.getElementById( 'sb-search' ) );
new UISearch( document.getElementById( 'sb-search-phone' ) );

var nlform = new NLForm( document.getElementById( 'nl-form' ) );

(function() {
	[].slice.call( document.querySelectorAll( 'select.cs-select.select-0' ) ).forEach( function(el) {	
		new SelectFx(el, {
			stickyPlaceholder: false
		});
	} );
})();

(function() {
	[].slice.call( document.querySelectorAll( 'select.cs-select.select-1' ) ).forEach( function(el) {	
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

	$(".select-0 .cs-placeholder").click(function(event) {
		/* Act on the event */
		$(".select-1 .cs-placeholder").hide();
	});

	$(".cs-options").click(function(event) {
		/* Act on the event */
		$(this).closest(".cs-select").toggleClass('cs-active');
		$(".select-1 .cs-placeholder").show();
	});

	$(".cs-optgroup ul li").click(function(event) {
		/* Act on the event */
		$(this).closest(".cs-select").toggleClass('cs-active');
		$(".select-1 .cs-placeholder").show();
	});
});