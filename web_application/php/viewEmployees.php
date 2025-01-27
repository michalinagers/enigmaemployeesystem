<?php
include("NavBar.html");
include_once("functions.php");
$user = getEmployees();

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

        <h1><img src="https://i.postimg.cc/5yFYZXjt/Employee-List.jpg" alt="EnigmaEmployee"></h1>

        <?php if (isset($_GET['deleted'])): ?>


            <p>Employee has been deleted successfully.</p>


    </div>

<?php endif; ?>



<div class="row">

    <table class="table table-striped">

        <thead class="table-dark">

            <td>Employee Number</td>

            <td>First Name</td>

            <td>Middle Name</td>

            <td>Last Name</td>

            <td>Phone Number</td>

            <td>Email</td>

            <td>Action</td>

        </thead>


        <?php for ($i = 0; $i < count($user); $i++): ?>


            <tr>

                <td>
                    <?php echo $user[$i]['emp_num'] ?>
                </td>

                <td>
                    <?php echo $user[$i]['emp_fname'] ?>
                </td>

                <td>
                    <?php echo $user[$i]['emp_mname'] ?>
                </td>

                <td>
                    <?php echo $user[$i]['emp_lname'] ?>
                </td>

                <td>
                    <?php echo $user[$i]['emp_phone'] ?>
                </td>

                <td>
                    <?php echo $user[$i]['emp_email'] ?>
                </td>

                <td><a href="updateEmployee.php?uid=<?php echo $user[$i]['emp_num']; ?>">Update</a> | <a
                        href="deleteEmployee.php?uid=<?php echo $user[$i]['emp_num']; ?>">Delete</a> </td>



            </tr>

        <?php endfor; ?>

    </table>

    </main>



    <?php require("Footer.html"); ?>