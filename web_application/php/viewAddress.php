<?php include("NavBar.html");
include_once("functions.php");
$address = getAddress();
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

    <h1><img src="https://i.postimg.cc/Hkt2Shfh/Employee-Address.jpg" alt="EnigmaEmployee"></h1>

    <?php if (isset($_GET['deleted'])): ?>


      <p>Employee address has been deleted successfully.</p>


  </div>

<?php endif; ?>

<div class="row">

    <table class="table table-striped">

      <thead class="table-dark">

        <td>Employee Number</td>

        <td>Employee Name</td>

        <td>House Number</td>

        <td>Postcode</td>

        <td>County</td>

        <td>City</td>

        <td>Action</td>



      </thead>


      <?php for ($i = 0; $i < count($address); $i++): ?>


        <tr>

          <td>
            <?php echo $address[$i]['emp_num'] ?>
          </td>

          <td>
            <?php echo $address[$i]['emp_fname'] . ' ' . $address[$i]['emp_mname'] . ' ' . $address[$i]['emp_lname']; ?>
          </td>

          <td>
            <?php echo $address[$i]['house_num'] ?>
          </td>

          <td>
            <?php echo $address[$i]['postcode'] ?>
          </td>

          <td>
            <?php echo $address[$i]['county'] ?>
          </td>

          <td>
            <?php echo $address[$i]['city'] ?>
          </td>

          <td><a href="updateAddress.php?uid=<?php echo $address[$i]['emp_num']; ?>">Update</a> | <a
              href="deleteAddress.php?uid=<?php echo $address[$i]['emp_num']; ?>">Delete</a> </td>

        </tr>

      <?php endfor; ?>

    </table>

</main>

</div>

<?php require("Footer.html"); ?>