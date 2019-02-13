<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
	$(".info-item .btn").click(function () {
		$(".container").toggleClass("log-in");
	});

	$(".container-form .btn").click(function () {
		$(".container").addClass("active");
	});

	$('#login').click(function () {
		document.forms[0].submit()
	});

	$('#register').click(function () {
		document.forms[1].submit()
	});

</script>
</body>

</html>
