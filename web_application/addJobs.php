<?php require("NavBar.html");
include_once("functions.php");
$jobs = addJobs();
?>


<div class="container">
    <main role="main">
        <h1><img src="https://i.postimg.cc/bJSwvKPC/AddJobs.jpg" alt="EnigmaEmployee"></h1>

        <div class="add">
            <form method="post">


                <br>
                <br>
                <label>Job Class :</label>
                <input type="text" name="jobname" value="" required>
                <br>
                <br>
                <label>Charge Per Hour :</label>
                <input type="text" name="chargehour" value="" required>
                <br>
                <br>
                <input type="submit" value="Submit">
                <br>
                <br>

        </div>
        </form>



    </main>
</div>

<?php require("Footer.html"); ?>