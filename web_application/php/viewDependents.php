<?php include("NavBar.html");
include_once("functions.php");
$dependents = getDependents();
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

    <h1><img src="https://i.postimg.cc/T1mjn7VQ/Dependents-List.jpg" alt="EnigmaEmployee"></h1>

    <?php if (isset($_GET['deleted'])): ?>


      <p>Dependent has been deleted successfully.</p>


  </div>

<?php endif; ?>

<div class="row">

  <table class="table table-striped">

    <thead class="table-dark">

      <td>Dependent ID</td>

      <td>Dependent Name</td>

      <td>Relationship</td>

      <td>Employee Number</td>

      <td>Action</td>

    </thead>


    <?php for ($i = 0; $i < count($dependents); $i++): ?>


      <tr>

        <td>
          <?php echo $dependents[$i]['dependent_id'] ?>
        </td>

        <td>
          <?php echo $dependents[$i]['f_name'] . ' ' . $dependents[$i]['m_name'] . ' ' . $dependents[$i]['l_name']; ?>
        </td>

        <td>
          <?php echo $dependents[$i]['relationship'] ?>
        </td>

        <td>
          <?php echo $dependents[$i]['emp_num'] ?>
        </td>

        <td><a href="updateDependents.php?uid=<?php echo $dependents[$i]['dependent_id']; ?>">Update</a> | <a
            href="deleteDependents.php?uid=<?php echo $dependents[$i]['dependent_id']; ?>">Delete</a> </td>


      </tr>

    <?php endfor; ?>

  </table>

  </main>

</div>

<?php require("Footer.html"); ?>