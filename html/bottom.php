<!-- jQuery -->
<script src="js/jquery.nivo.slider.pack.js"></script>
<script src="js/nivo-lightbox.min.js"></script>
<!-- Bootstrap JavaScript -->
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
<script type="text/javascript">
$(window).load(function() {
	$('#slider').nivoSlider({
		slices: 3,
		directionNav: false,
		pauseTime: 2000,
		startSlide: 0,
		controlNav: false,
		pauseOnHover: false
	});
});

(function(){
	// Privacy toggle
	$("#toggled").click( function(){
		$("#privacy").toggle("slideDown");
	})

	// Form toggle
	$(".toggle_form").click(function(){
		$("#form").toggle("slideDown");
	})

	// Closing form
	$(".form__close").click(function(){
		$("#form").hide("slideUp");
	})

	// Lightbox
	$('.lightbox').nivoLightbox();

	// Hover
	$(".imagesOnHover").hover(function(){
		// $(this).attr('data-img') == 'azotea' or 'nivel8'
		// so we end up with $('#azotea').show(), for example.
		$('#' + $(this).attr('data-img')).show("slideDown");
	}, function () {
	  $('#' + $(this).attr('data-img')).hide("slideUp");
	});
})();
</script>
<script type="text/javascript" src="js/methods.js"></script>
<script src="js/functions.min.js"></script>