<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
<script>
	$(document).ready(function () {
		$('.sidenav').sidenav();


		$(".dropdown-trigger").dropdown({
			inDuration: 150,
			outDuration: 150,
		});

		// $('#slide-out').sidenav('open');

		// $(document).click(function () {
		// 	$('.dropdown-trigger').close();
		// });
		$('#myTable').pageMe({
			pagerSelector: '#myPager',
			activeColor: 'blue',
			prevText: 'Anterior',
			nextText: 'Siguiente',
			showPrevNext: true,
			hidePageNumbers: false,
			perPage: 10
		});
	});

</script>
</body>

</html>
