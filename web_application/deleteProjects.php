<?php require("NavBar.html");
include_once("functions.php");
$delProject = deleteProject();
?>

<div class="container">

    <main role="main">

        <h1><img src="https://i.postimg.cc/Dfrwn3hj/Delete-Project.jpg" alt="Enigma"></h1>
        <h2>Are you sure you want to delete this project?</h2>
        <div class="update">
            <label>Project Number:</label>
            <?php echo $delProject[0][0] ?>
            <br>
            <br>
            <label>Project Name:</label>
            <?php echo $delProject[0][1] ?>

            <form method="post">

                <input type="hidden" name="uid" value="<?php echo $_GET['uid'] ?>">
                <br>
                <input type="submit" value="Delete" name="delete">
                <br>
                <br>
                <div class="updatebutton"><a href="viewProjects.php">Back</a>

            </form>
    </main>
</div>

<?php require("Footer.html"); ?>