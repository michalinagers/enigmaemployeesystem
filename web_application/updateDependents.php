<?php require("NavBar.html");
include_once("functions.php");
$updateDep = updateDependents();


?>

<div class="container">
    <main role="main">

        <h1><img src="https://i.postimg.cc/ydR5M24Z/update-Dependents-5.jpg" alt="Enigma"></h1>


        <form method="post" action="updateDependents.php?uid=<?php echo $_GET['depid']; ?>">



            <div class="update">
                <label>Dependent Number:</label>
                <input class="form-control" type="text" name="empid"
                    value="<?php echo !empty($arrayResult) ? $arrayResult[0][0] : ''; ?>">
                </br>
                </br>
                <label>First Name:</label>
                <input class="form-control" type="text" name="fname"
                    value="<?php echo !empty($arrayResult) ? $arrayResult[0][0] : ''; ?>">
                </br>
                </br>
                <label>Middle Name:</label>
                <input class="form-control" type="text" name="mname"
                    value="<?php echo !empty($arrayResult) ? $arrayResult[0][2] : ''; ?>">
                </br>
                </br>
                <label>Last Name:</label>
                <input class="form-control" type="text" name="lname"
                    value="<?php echo !empty($arrayResult) ? $arrayResult[0][3] : ''; ?>">
                </br>
                </br>
                <label>Relationship:</label>
                <input class="form-control" type="text" name="phone"
                    value="<?php echo !empty($arrayResult) ? $arrayResult[0][4] : ''; ?>">
                </br>
                </br>
                <label>Employee Number:</label>
                <input class="form-control" type="text" name="email"
                    value="<?php echo !empty($arrayResult) ? $arrayResult[0][5] : ''; ?>">
                </br>
                </br>
                <input type="submit" name="submit" value="Update" class="btn btn-primary">
                </br>
                </br>
                <div class="updatebutton"><a href="viewEmployees.php">Back</a></div>
        </form>
    </main>


    <?php require("Footer.html"); ?>