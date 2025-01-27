<?php require("NavBar.html");
include_once("functions.php");
$login = userLogin();
?>

<div class="container">
	<main role="main">

		<style>
			.login {

				width: 400px;

				padding: 20px;

				top: 50%;

				left: 50%;

				position: absolute;

				transform: translate(-50%, -50%);

				text-align: center;

				background: gray;

				border-radius: 5px;

				border: 3px solid rgb(0, 0, 0);

				opacity: 0.70;

				color: black;

				font-family: sans-serif;

				font-weight: none;

			}

			.login input[type="submit"] {

				border-radius: 5px;

				border: 3px solid rgb(0, 0, 0);

				background: rgb(0, 0, 0);

				transform: translate(150%, 0%);

				width: 100px;

				height: 30px;

				color: white;

			}

			.login input[type="text"],
			input[type="password"] {

				background: rgb(a6a6a6);

				display: block;

				margin: 20px auto;

				text-align: center;

				border: 2px solid rgb(ffffff);

				padding: 14px 10px;

				width: 200px;

				outline: none;

				color: black;

				border-radius: 5px;

				transition: 0.25s;

			}


			form {

				display: flex;
				flex-direction: column;


			}
		</style>
		<div class="login">


			<form action="EnigmaMenu.php" method="post">

				<h1><img src="https://i.postimg.cc/Gm1BB3gW/Login-5.jpg" alt="EnigmaEmployee"></h1>

				<input type="text" placeholder="e-mail">

				<input type="password" placeholder="password">

				<input type="submit" value="Login">


			</form>

		</div>
	</main>


	<?php require("Footer.html"); ?>