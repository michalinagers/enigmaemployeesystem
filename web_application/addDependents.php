<?php require("NavBar.html");
include_once("functions.php");
$dependents = addDependents();
?>


<div class="container">
    <main role="main">
        <h1><img src="https://i.postimg.cc/pLBhbbVK/Add-Dependents.jpg" alt="EnigmaEmployee"></h1>

        <div class="add">
            <form method="post">


                <br>
                <br>
                <label>First Name :</label>
                <input type="text" name="mname" value="">
                <br>
                <br>
                <label>Middle Name :</label>
                <input type="text" name="lname" value="" required>
                <br>
                <br>
                <label>Last Name :</label>
                <input type="text" name="addressid" value="" required>
                <br>
                <br>
                <label class="control-label labelFont">Relationship</label>
                <select name="relationship" class="form-control">
                    <option value="Mother">Mother</option>
                    <option value="Father">Father</option>
                    <option value="Wife">Wife</option>
                    <option value="Husband">Husband</option>
                    <option value="Son">Son</option>
                    <option value="Daughter">Daughter</option>
                    <option value="Cousin">Cousin</option>
                </select>
                <br>
                <br>
                <label>Employee Number :</label>
                <input type="text" name="phone" value="" required>
                <input type="submit" value="Submit">
                <br>
                <br>

        </div>
        </form>



    </main>
</div>

<?php require("Footer.html"); ?>