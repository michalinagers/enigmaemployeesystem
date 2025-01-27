<?php
include("NavBar.html");
include_once("functions.php");
$jobs = getJobs();

?>
<style>
    td,
    th {
        font-weight: bold;
        font-size: 15px;
        height: 35px;
        width: 40vw;
        padding: 25px;
        border: 1px solid rgb(0, 0, 0);

    }
</style>
<div class="container">

    <main role="main">

        <h1><img src="https://i.postimg.cc/BvXKx7sD/JobList.jpg" alt="EnigmaEmployee"></h1>

        <?php if (isset($_GET['deleted'])): ?>


            <p>Job has been deleted successfully.</p>


    </div>

<?php endif; ?>

<div class="row">

    <table class="table table-striped">

        <thead class="table-dark">

            <td>Job ID</td>

            <td>Job Class</td>

            <td>Charge Per Hour</td>

            <td>Action</td>


        </thead>


        <?php for ($i = 0; $i < count($jobs); $i++): ?>


            <tr>

                <td>
                    <?php echo $jobs[$i]['job_id'] ?>
                </td>

                <td>
                    <?php echo $jobs[$i]['job_class'] ?>
                </td>

                <td>
                    <?php echo $jobs[$i]['chg_hour'] ?>
                </td>

                <td><a href="updateJobs.php?uid=<?php echo $jobs[$i]['job_id']; ?>">Update</a> | <a
                        href="deleteJobs.php?uid=<?php echo $jobs[$i]['job_id']; ?>">Delete</a> </td>

            </tr>

        <?php endfor; ?>

    </table>

    </main>



    <?php require("Footer.html"); ?>