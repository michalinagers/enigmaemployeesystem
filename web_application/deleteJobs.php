<?php require("NavBar.html");
include_once("functions.php");
$delJob = deleteJobs();
?>

<div class="container">

    <main role="main">

        <h1><img src="https://i.postimg.cc/XYd3Y5B0/Delete-Jobs.jpg" alt="Enigma"></h1>
        <h2>Are you sure you want to delete this job?</h2>
        <div class="update">
            <label>Job Number:</label>
            <?php echo $delJob[0][0] ?>
            <br>
            <br>
            <label>Job Class:</label>
            <?php echo $delJob[0][1] ?>
            <br>
            <br>
            <label>Charge Per Hour:</label>
            <?php echo $delJob[0][2] ?>

            <form method="post">

                <input type="hidden" name="job" value="<?php echo $_GET['jobid'] ?>">
                <br>
                <input type="submit" value="Delete" name="delete">
                <br>
                <br>
                <div class="updatebutton"><a href="viewJobs.php">Back</a>

            </form>
    </main>
</div>

<?php require("Footer.html"); ?>