<!DOCTYPE html>
<html>
<head>
	<title>Add New Contact</title>
</head>
<body>
<h1>Add New Contact</h1>
<hr>
<form action="http://localhost/pb/index.php/phonebook/saveContact" method="post">
	<label for="">Full Name : </label>
	<input type="text" name="fullname"> <br>

	<label for="">Contact No : </label>
	<input type="text" name="contactno"> <br>

	<button type="submit">Save</button>
	</form>

</body>
</html>