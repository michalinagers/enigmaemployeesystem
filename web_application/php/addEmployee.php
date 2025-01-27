<?php require("NavBar.html");
include_once("functions.php");
$employee = addEmployee();
?>

<div class="container">
    <main role="main">
        <h1><img src="https://i.postimg.cc/j2WdLBr3/Add-Employees.jpg" alt="EnigmaEmployee"></h1>



        <div class="add">
            <form method="post">


                <br>
                <br>
                <label>Employee Name :</label>
                <input type="text" name="fname" required>
                <br>
                <br>
                <label>Employee Middle Name :</label>
                <input type="text" name="mname" value="">
                <br>
                <br>
                <label>Employee Last Name :</label>
                <input type="text" name="lname" value="" required>
                <br>
                <br>
                <label>Address ID :</label>
                <input type="text" name="addressid" value="" required>
                <br>
                <br>
                <label>Password :</label>
                <input type="password" id="password" name="pass" required>
                <br>
                <br>
                <label>Phone Number :</label>
                <input type="text" name="phone" value="" required>
                <br>
                <br>
                <label>Email :</label>
                <input type="text" name="email" value="" required>
                <br>
                <br>
                <label>Job ID :</label>
                <input type="text" name="jobid" value="" required>
                <input type="submit" value="Submit">
                <br>
                <br>
                <label>
        </div>
        </form>

    </main>
</div>

<?php require("Footer.html"); ?>