<?php require("NavBar.html");
include_once("functions.php");
$delDependents = deleteDependents();
?>

<div class="container">

    <main role="main">

        <h1><img src="https://i.postimg.cc/0jq3PZPH/delete-Dependents.jpg" alt="Enigma"></h1>
        <h2>Are you sure you want to delete this dependent?</h2>
        <div class="update">
            <label>Dependent ID:</label>
            <?php echo $delDependents[0][0] ?>
            <br>
            <br>
            <label>Dependent Name:</label>
            <?php echo $delDependents[0][1],' ', $delDependents[0][2],' ', $delDependents[0][3]; ?>
            <br>
            <br>
            <label>Relationship:</label>
            <?php echo $delDependents[0][4] ?>
            <br>
            <br>
            <label>Employee Number:</label>
            <?php echo $delDependents[0][5] ?>

            <form method="post">

                <input type="hidden" name="depid" value="<?php echo $_GET['depid'] ?>">
                <br>
                <input type="submit" value="Delete" name="delete">
                <br>
                <br>
                <div class="updatebutton"><a href="viewDependents.php">Back</a>

            </form>
    </main>
</div>

<?php require("Footer.html"); ?>