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

	$(".features-link").mouseover(function(event) {
		/* Act on the event */
		$(".features-link").removeClass('active');
		$(this).addClass('active');

		var index = $(this).attr('value');
		$(".features-background").removeClass('active');
		$(".features-background[value=" + index + "]").addClass('active');

		var arrCaptions  =     ["",
								"El sal\u00f3n de clases ya no es lo que parece. <strong>Reinventamos</strong> la forma educativa.",
								"1 de cada 2 alumnos ya vivi\u00f3 una experiencia en el <strong>extranjero</strong>. ¿T\u00fa qu\u00e9 esperas?",
								"Ya no se trata de las horas. Se trata de las <strong>personas</strong>.",
								"Ser <strong>borrego</strong> en la cancha y en el coraz\u00f3n.",
								"A la vanguardia con la <strong>ciencia</strong>. A la vanguardia con el mundo.",
								"¿Qui\u00e9n dijo que el <strong>arte</strong> no era para nosotros?"];

	    $(".caption").html(arrCaptions[index]);
	});
});