<?php require("NavBar.html");
include_once("functions.php");
$arrayResult = deleteEmployee();
?>

<div class="container">
	<main role="main">
		<h1><img src="https://i.postimg.cc/TYgB5T1m/Delete-Employee.jpg" alt="Enigma"></h1>
		<h2>Are you sure you want to delete this employee?</h2>

		<div class="update">
			<label>Employee Number:</label>
			<?php echo $arrayResult[0][0] ?>
			<br>
			<br>
			<label>Employee Name:</label>
			<?php echo $arrayResult[0][1], ' ', $arrayResult[0][2], ' ', $arrayResult[0][3]; ?>
			<br>
			<br>
			<label>Employee Phone Number:</label>
			<?php echo $arrayResult[0][4] ?>
			<br>
			<br>
			<label>Employee Email:</label>
			<?php echo $arrayResult[0][5] ?>

			<form method="post">

				<input type="hidden" name="uid" value="<?php echo $_GET['uid'] ?>">
				<br>
				<input type="submit" value="Delete" name="delete">
				<br>
				<br>
				<div class="updatebutton"><a href="viewEmployees.php">Back</a>

			</form>
	</main>
</div>

<?php require("Footer.html"); ?>