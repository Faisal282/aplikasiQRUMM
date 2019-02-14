<script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/js/materialize.min.js"></script>
<script>
	document.addEventListener("DOMContentLoaded", function () {
		$('.preloader-background').delay(1700).fadeOut('slow');

		$('.preloader-wrapper')
			.delay(1700)
			.fadeOut();
	});
	$(document).ready(function () {
		$('.button-collapse').sideNav();

		$('.collapsible').collapsible();

		$('select').material_select();
	});

</script>
</body>

</html>
