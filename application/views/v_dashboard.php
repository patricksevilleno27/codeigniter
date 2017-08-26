<!DOCTYPE html>
<html>
<head>
	<title>My Phonebook</title>
</head>
<body>

<br>
<br>
<br>
<center>
<h1>Welcome to My page</h1>
</center>
<br>
<br>
<center>
	<h1><a href="index.php/phonebook/aboutMe" style="text-decoration: none">About Me </a> </h1>
	<h1><a href="index.php/phonebook/myContact" style="text-decoration: none">Contact Me </a> </h1>
</center>
<br>
<br>
<center>
	<h1>My Contacts</h1>
	<hr>

	<table border=1>
	 <tr>
	 	<td><strong>Full Name</strong></td>
	 	<td><strong>Contact</strong></td>
	 </tr>
	 <?php
	 	foreach ($contacts as $c) { ?>
	 	

	 <tr>
	  <td><?= $c->fullname ?></td>
	  <td><?= $c->contactno ?></td>
	 </tr>
	 <?php } ?>
</table>
</center>
</body>
</html>