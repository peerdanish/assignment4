<html>
<head>
	<title>Registration Form</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

	<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
</head>
<body>
<div class="container">
<?php if (array_key_exists('check_submit', $_POST)) 


echo "
	<h1>Here is the detail you entered : </h1>
	<table>
	<tr>
		<th> Institute </th>
		<th>Name</th>
		<th>Gender</th>
		<th>Contact</th>
		<th>Qualification</th>
		<th>Graduation year</th>
		<th>WorkXP</th>
		<th>State</th>
		<th>City</th>
	</tr>
";

echo"
	<tr>";
	echo "<td>". $_POST['institute']."</td>";
	echo "<td>". $_POST['name']."</td>";
	echo "<td>". $_POST['gender']."</td>";
	echo "<td>". $_POST['contact']."</td>";
	echo "<td>". $_POST['qualification']."</td>";
	echo "<td>". $_POST['graduation']."</td>";
	echo "<td>". $_POST['workxp']."</td>";
	echo "<td>". $_POST['state']."</td>";
	echo "<td>". $_POST['city']."</td>";
echo "
	</tr>
	</table>
";
?>
</div>
</body> 
</html>