<?php require("NavBar.html");
include_once("functions.php");
$updateAddress = updateAddress();


?>

<div class="container">
    <main role="main">

        <h1><img src="https://i.postimg.cc/mk2WNqnR/Update-Address-9.jpg" alt="Enigma"></h1>

        <div class="update">
            <form method="post" action="updateEmployee.php?uid=<?php echo $_GET['uid']; ?>">

                <label class="control-label labelFont">House Number:</label>
                <input class="form-control" type="text" name="housenum"
                    value="<?php echo !empty($arrayResult) ? $arrayResult[0][0] : ''; ?>">


                <br>
                <br>
                <label class="control-label labelFont">Postcode:</label>
                <input class="form-control" type="text" name="postcode"
                    value="<?php echo !empty($arrayResult) ? $arrayResult[0][0] : ''; ?>">

                <br>
                <br>
                <label class="control-label labelFont">County:</label>
                <input class="form-control" type="text" name="county"
                    value="<?php echo !empty($arrayResult) ? $arrayResult[0][2] : ''; ?>">
                <br>
                <br>

                <label class="control-label labelFont">City:</label>
                <input class="form-control" type="text" name="city"
                    value="<?php echo !empty($arrayResult) ? $arrayResult[0][3] : ''; ?>">

                <br>
                <br>
                <input type="submit" name="submit" value="Update" class="btn btn-primary">
                <br>
                <br>
                <div class="updatebutton"><a href="viewAddress.php">Back</a></div>
            </form>

    </main>
</div>

<?php require("Footer.html"); ?>