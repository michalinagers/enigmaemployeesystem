<?php require("NavBar.html");

?>

<body>
  <div class="container">
    <main role="main">
      <h1><img src="https://i.postimg.cc/FK2kCsjW/Untitled-Project-7.jpg" alt="Enigma"></h1>
      <nav>
        <ul>
          <button class="nav-menu1" onclick="location.href='viewEmployees.php'">View Employees</button>
          <button class="nav-menu1" onclick="location.href='viewInfoEmployees.php'">Employee Information</button>
          <button class="nav-menu1" onclick="location.href='addEmployee.php'">Add Employee</button>
          <button class="nav-menu1" onclick="location.href='viewAddress.php'">Employee Address</button>
          <button class="nav-menu1" onclick="location.href='addAddress.php'">Add Employee Address</button>
          <button class="nav-menu1" onclick="location.href='viewDependents.php'">Dependents</button>
          <button class="nav-menu1" onclick="location.href='addDependents.php'">Add Dependents</button>
          <button class="nav-menu1" onclick="location.href='viewJobs.php'">Job List</button>
          <button class="nav-menu1" onclick="location.href='addJobs.php'">Add Jobs</button>
          <button class="nav-menu1" onclick="location.href='viewProjects.php'">Project List</button>
          <button class="nav-menu1" onclick="location.href='addProjects.php'">Add Projects</button>



        </ul>
      </nav>
    </main>
  </div>
</body>
<?php require("Footer.html"); ?>