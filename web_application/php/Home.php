<?php require("NavBar.html");
include_once("functions.php");
$user = getEmployees();
?>

<div class="container">
	<main role="main">

		<h1><img src="https://i.postimg.cc/FK2kCsjW/Untitled-Project-7.jpg" alt="Enigma"></h1>
</div>

<div class="home">

	<p class="enigma">Enigma is a company which works on a variety of projects.</p>
	<br>
	<p class="enigma">Currently, we are working on projects such as:</p>
	<ul>
		<li class="projectlist">Evergreen</li>
		<br>
		<li class="projectlist">Amber Wave</li>
		<br>
		<li class="projectlist">Rolling Tide</li>
		<br>
		<li class="projectlist">Starflight</li>
	</ul>


	</main>
</div>

<?php require("Footer.html"); ?>