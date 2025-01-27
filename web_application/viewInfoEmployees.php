<?php require("NavBar.html");
include_once("functions.php");
$info = getInfo();
$id = array("All", "1", "2", "3", "4", "5", "6", "7", "8");

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

<body>

    <main role="main">
        <h1><img src="https://i.postimg.cc/FK2kCsjW/Untitled-Project-7.jpg" alt="Enigma"></h1>

        <div class="row">

            <form method="post">

                <label>Filter by Job ID : </label>
                <select type="text" style="width:80px;" name="filterInfo" class="form-control">
                    <?php for ($i = 0; $i < count($id); $i++): ?>
                        <option <?php if (isset($_POST['filterInfo']) && ($id[$i] == $_POST['filterInfo']))
                            echo "selected"; ?>>
                            <?php echo $id[$i]; ?>
                        </option>
                    <?php endfor; ?>
                </select>
        </div>
        <br>

        <button type="nav-menu1" name="submit" value="filter">Filter</button>
        <br>
        </form>
        <br>
        <table class="table table-striped">
            <thead class="table-dark">
                <th>Employee Number</th>
                <th>First Name</th>
                <th>Middle Name</th>
                <th>Last Name</th>
                <th>Address ID</th>
                <th>Phone Number</th>
                <th>Email</th>
                <th>Job ID</th>
            </thead>
            <?php for ($i = 0; $i < count($info); $i++): ?>
                <tr>
                    <td>
                        <?php echo $info[$i][0]; ?>
                    </td>
                    <td>
                        <?php echo $info[$i][1]; ?>
                    </td>
                    <td>
                        <?php echo $info[$i][2]; ?>
                    </td>
                    <td>
                        <?php echo $info[$i][3]; ?>
                    </td>
                    <td>
                        <?php echo $info[$i][4]; ?>
                    </td>
                    <td>
                        <?php echo $info[$i][6]; ?>
                    </td>
                    <td>
                        <?php echo $info[$i][7]; ?>
                    </td>
                    <td>
                        <?php echo $info[$i][8]; ?>
                    </td>
                </tr>
            <?php endfor; ?>
        </table>



        </div>
    </main>
    </div>
</body>
<?php require("Footer.html"); ?>