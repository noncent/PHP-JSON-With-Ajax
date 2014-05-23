PHP-JSON-With-Ajax
==================

Hi friends, It is just a example for beginners who are not friendly to send and get JSON data from server side.
Here I am showing you 3 way to do it;

#### First:

```html
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
```

#### Second:

```html
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
```

#### Third:

```html
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
```
