<?php require("NavBar.html");
include_once("functions.php");
$updateJobs = updateJobs();


?>

<div class="container">
    <main role="main">

        <h1><img src="https://i.postimg.cc/d1tK6SHq/Update-Jobs.jpg" alt="Enigma"></h1>
        <div class="update">
            <form method="post" action="updateJobs.php?uid=<?php echo $_GET['jobid']; ?>">
                <label>Job ID</label>
                <input class="form-control" type="text" name="jobid"
                    value="<?php echo !empty($arrayResult) ? $arrayResult[0][0] : ''; ?>">
                <br>
                <br>
                <label>Job Class</label>
                <input class="form-control" type="text" name="jobclass"
                    value="<?php echo !empty($arrayResult) ? $arrayResult[0][0] : ''; ?>">
                <br>
                <br>
                <label>Charge Per Hour</label>
                <input class="form-control" type="text" name="chghour"
                    value="<?php echo !empty($arrayResult) ? $arrayResult[0][2] : ''; ?>">
                <br>
                <br>
                <label>City</label>
                <input class="form-control" type="text" name="city"
                    value="<?php echo !empty($arrayResult) ? $arrayResult[0][3] : ''; ?>">
                <br>
                <br>
                <input type="submit" name="submit" value="Update" class="btn btn-primary">
                <br>
                <br>
                <div class="updatebutton"><a href="viewJobs.php">Back</a></div>
            </form>



    </main>
</div>

<?php require("Footer.html"); ?>