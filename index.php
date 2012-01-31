<html>
<head>
<script src="http://code.jquery.com/jquery-latest.js"></script>
<!-- First way How you Get PHP JSON response in Ajax -->
<script type='text/javascript'>
$(document).ready(function () {
	/* call the php that has the php array which is json_encoded */
	$.getJSON('posts.php', function (data) {
		/* Set Result Table Head */
		$('#result').append('<tr><td>Key With First Method</td><td>First Name</td><td>Last Name</td><td>Email Address</td><td>Age</td></tr>');
		/* data will hold the php array as a javascript object */
		$.each(data, function (key, val) {
			$('#result').append('<tr><td>' + key + '</td><td>' + val.first_name + '</td><td>' + val.last_name + '</td><td>' + val.email + '</td><td>' + val.age + '</td></tr>');
		});
	});
});

</script>
<!-- Second way How you Get PHP JSON response in Ajax -->
<script type="text/javascript">
$(document).ready(function () {
	$.ajax({
		type : "POST",
		url : "posts.php",
		data : '',
		dataType : "json",
		success : function (theRes) {
			//alert(theRes[0].first_name);
			$('#result').append('<tr><td>Key With Second Method</td><td>First Name</td><td>Last Name</td><td>Email Address</td><td>Age</td></tr>');
			$.each(theRes, function (key, val) {
				$('#result').append('<tr><td>' + key + '</td><td>' + val.first_name + '</td><td>' + val.last_name + '</td><td>' + val.email + '</td><td>' + val.age + '</td></tr>');
			});
		}
	});
});

</script>
<!-- Third way How you Get PHP JSON response in Ajax -->
<script type="text/javascript">
$(document).ready(function () {
	$.ajax({
		type : "POST",
		url : "posts.php",
		data : '',
		dataType : "json",
		success : function (theRes) {
			$.getJSON('posts.php', function (theRes) {
				/* Set Result Table Head */
				$('#result').append('<tr><td>Key With Third Method</td><td>First Name</td><td>Last Name</td><td>Email Address</td><td>Age</td></tr>');
				/* data will hold the php array as a javascript object */
				$.each(theRes, function (key, val) {
					$('#result').append('<tr><td>' + key + '</td><td>' + val.first_name + '</td><td>' + val.last_name + '</td><td>' + val.email + '</td><td>' + val.age + '</td></tr>');
				});
			});
		}
	});
});
</script>
</head>
<body>
	<!-- this table will be populated with the data from the php array -->
	<table id="result" border="1" cellpadding="3" cellspacing="5"></table>
</body>
</html>
