<?php include("NavBar.html");
include_once("functions.php");
$project = getProjects();
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

    <h1><img src="https://i.postimg.cc/8cDcnZ8Z/Project-List.jpg" alt="EnigmaEmployee"></h1>

    <?php if (isset($_GET['deleted'])): ?>


      <p>Project has been deleted successfully.</p>


  </div>

<?php endif; ?>


<table class="table table-striped">

  <thead class="table-dark">

    <td>Project Number</td>

    <td>Project Name</td>

    <td>Action</td>


  </thead>


  <?php for ($i = 0; $i < count($project); $i++): ?>


    <tr>

      <td>
        <?php echo $project[$i]['proj_no'] ?>
      </td>

      <td>
        <?php echo $project[$i]['proj_name'] ?>
      </td>

      <td><a href="deleteProjects.php?uid=<?php echo $project[$i]['proj_no']; ?>">Delete</a> </td>

    </tr>

  <?php endfor; ?>

</table>

</main>

</div>

<?php require("Footer.html"); ?>