<?php

function getEmployees()
{
    $db = new SQLite3("F:\\xampp\\htdocs\\Database.db");
    $sql = "SELECT * FROM employees";
    $result = $db->query($sql);

    $arrayResult = array();

    while ($row = $result->fetchArray()) {
        $arrayResult[] = $row;
    }

    return $arrayResult;
}

?>

<?php

function getAddress()
{
    $db = new SQLite3("F:\\xampp\\htdocs\\Database.db");
    $sql = 'SELECT Employees.emp_num, Employees.emp_fname, Employees.emp_mname, Employees.emp_lname, Employees.job_id, Address.house_num, Address.postcode, Address.county, Address.city
    FROM employees
    INNER JOIN address ON (Address.address_id = Employees.address_id);'
    ;
    $result = $db->query($sql);

    $arrayResult = array();

    while ($row = $result->fetchArray()) {
        $arrayResult[] = $row;
    }

    return $arrayResult;
}
?>

<?php

function getProjects()
{
    $db = new SQLite3("F:\\xampp\\htdocs\\Database.db");
    $sql = 'SELECT * FROM project'
    ;
    ;
    $result = $db->query($sql);

    $arrayResult = array();

    while ($row = $result->fetchArray()) {
        $arrayResult[] = $row;
    }

    return $arrayResult;
}

function getDependents()
{
    $db = new SQLite3("F:\\xampp\\htdocs\\Database.db");
    $sql = 'SELECT * FROM dependents'
    ;
    ;
    $result = $db->query($sql);

    $arrayResult = array();

    while ($row = $result->fetchArray()) {
        $arrayResult[] = $row;
    }

    return $arrayResult;
}

function getJobs()
{
    $db = new SQLite3("F:\\xampp\\htdocs\\Database.db");
    $sql = 'SELECT * FROM jobs'
    ;
    ;
    $result = $db->query($sql);

    $arrayResult = array();

    while ($row = $result->fetchArray()) {
        $arrayResult[] = $row;
    }

    return $arrayResult;
}

function userLogin()
{
    $db = new SQLite3("F:\\xampp\\htdocs\\Database.db");

    $useremail = isset($_POST['email']) ? $_POST['email'] : '';
    $password = isset($_POST['password']) ? $_POST['password'] : '';

    $stmt = $db->prepare('SELECT * FROM employees WHERE emp_email = :email');


    $result = $stmt->execute();

}


function addEmployee()
{
    if (!empty($_POST['fname']) && !empty($_POST['addressid'])) {

        $db = new SQLite3("F:\\xampp\\htdocs\\Database.db");
        $sql = 'INSERT INTO employees(emp_num, emp_fname, emp_mname, emp_lname, address_id, password, emp_phone, emp_email, job_id) VALUES (NULL, :fname, :mname, :lname, :addressID, :pass, :phone, :email, :jobid)';
        $stmt = $db->prepare($sql);

        $stmt->bindParam(':empid', $_POST['empid'], SQLITE3_TEXT);
        $stmt->bindParam(':fname', $_POST['fname'], SQLITE3_TEXT);
        $stmt->bindParam(':mname', $_POST['mname'], SQLITE3_TEXT);
        $stmt->bindParam(':lname', $_POST['lname'], SQLITE3_TEXT);
        $stmt->bindParam(':addressID', $_POST['addressid'], SQLITE3_TEXT);
        $stmt->bindParam(':pass', $_POST['pass'], SQLITE3_TEXT);
        $stmt->bindParam(':phone', $_POST['phone'], SQLITE3_TEXT);
        $stmt->bindParam(':email', $_POST['email'], SQLITE3_TEXT);
        $stmt->bindParam(':jobid', $_POST['jobid'], SQLITE3_TEXT);

        $success = $stmt->execute();

        if ($success) {
            header('Location: addEmployeeSummary.php');
            exit;
        }

        return false;
    }
}

function addDependents()
{
    if (!empty($_POST['relation'])) {
        $db = new SQLite3("F:\\xampp\\htdocs\\Database.db");
        $sql = 'INSERT INTO dependents(dependent_id, f_name, m_name, l_name, relationship, emp_num) VALUES (NULL, :fname, :mname, :lname, :relation, :empid)';
        $stmt = $db->prepare($sql);

        $stmt->bindParam(':depid', $_POST['depid'], SQLITE3_TEXT);
        $stmt->bindParam(':fname', $_POST['fname'], SQLITE3_TEXT);
        $stmt->bindParam(':mname', $_POST['mname'], SQLITE3_TEXT);
        $stmt->bindParam(':lname', $_POST['lname'], SQLITE3_TEXT);
        $stmt->bindParam(':relation', $_POST['relation'], SQLITE3_TEXT);
        $stmt->bindParam(':empid', $_POST['empid'], SQLITE3_TEXT);

        $success = $stmt->execute();

        if ($success) {
            header('Location: addDependentSummary.php');
            exit;
        }
    }
}

function addAddress()
{
    if (!empty($_POST['relation'])) {
        $db = new SQLite3("F:\\xampp\\htdocs\\Database.db");
        $sql = 'INSERT INTO address(address_id, house_num, postcode, county, city) VALUES (:addressid, :house, :postcode, :county, :city)';
        $stmt = $db->prepare($sql);

        $stmt->bindParam(':addressid', $_POST['addressid'], SQLITE3_TEXT);
        $stmt->bindParam(':house', $_POST['house'], SQLITE3_TEXT);
        $stmt->bindParam(':postcode', $_POST['postcode'], SQLITE3_TEXT);
        $stmt->bindParam(':county', $_POST['county'], SQLITE3_TEXT);
        $stmt->bindParam(':city', $_POST['city'], SQLITE3_TEXT);

        $success = $stmt->execute();

        if ($success) {
            header('Location: addAddressSummary.php');
            exit;
        }
    }
}

function addJobs()
{
    if (!empty($_POST['jobclass'])) {
        $db = new SQLite3("F:\\xampp\\htdocs\\Database.db");
        $sql = 'INSERT INTO jobs(job_id, job_class, chg_hour) VALUES (NULL, :jobclass, :chghour)';
        $stmt = $db->prepare($sql);

        $stmt->bindParam(':jobid', $_POST['jobid'], SQLITE3_TEXT);
        $stmt->bindParam(':jobclass', $_POST['jobclass'], SQLITE3_TEXT);
        $stmt->bindParam(':chghour', $_POST['chghour'], SQLITE3_TEXT);

        $success = $stmt->execute();

        if ($success) {
            header('Location: addJobsSummary.php');
            exit;
        }
    }
}

function addProjects()
{
    if (!empty($_POST['proj_no'])) {
        $db = new SQLite3("F:\\xampp\\htdocs\\Database.db");
        $sql = 'INSERT INTO project(proj_no, proj_name) VALUES (NULL, :projname)';
        $stmt = $db->prepare($sql);

        $stmt->bindParam(':projno', $_POST['projno'], SQLITE3_TEXT);
        $stmt->bindParam(':projname', $_POST['projname'], SQLITE3_TEXT);

        $success = $stmt->execute();

        if ($success) {
            header('Location: addProjectsSummary.php');
            exit;
        }
    }
}


function updateEmployee()
{
    $db = new SQLite3("F:\\xampp\\htdocs\\Database.db");

    $arrayResult = [];

    if (isset($_POST['submit'])) {

        $sql = "UPDATE employees SET emp_fname = :fname, emp_mname = :mname, emp_lname = :lname, emp_phone = :phone, emp_email = :email WHERE emp_num = :empid";
        $stmt = $db->prepare($sql);

        $stmt->bindParam(':empid', $_GET['uid'], SQLITE3_TEXT);

        $stmt->bindParam(':fname', $_POST['fname'], SQLITE3_TEXT);
        $stmt->bindParam(':mname', $_POST['mname'], SQLITE3_TEXT);
        $stmt->bindParam(':lname', $_POST['lname'], SQLITE3_TEXT);
        $stmt->bindParam(':phone', $_POST['phone'], SQLITE3_TEXT);
        $stmt->bindParam(':email', $_POST['email'], SQLITE3_TEXT);

        $stmt->execute();

        header('Location: viewEmployees.php');
        exit();
    } else {

        $sql = "SELECT * FROM employees WHERE emp_num=:empid";
        $stmt = $db->prepare($sql);
        $stmt->bindParam(':empid', $_GET['uid'], SQLITE3_TEXT);
        $result = $stmt->execute();

        while ($row = $result->fetchArray(SQLITE3_NUM)) {
            $arrayResult[] = $row;
        }

        return $arrayResult;
    }
}

function deleteEmployee()
{
    $db = new SQLite3("F:\\xampp\\htdocs\\Database.db");

    $arrayResult = [];

    $sql = "SELECT emp_num, emp_fname, emp_mname, emp_lname, emp_phone, emp_email FROM employees WHERE emp_num=:empid";

    $stmt = $db->prepare($sql);

    $stmt->bindParam(':empid', $_GET['uid'], SQLITE3_TEXT);

    $result = $stmt->execute();

    $arrayResult = [];

    while ($row = $result->fetchArray(SQLITE3_NUM)) {

        $arrayResult[] = $row;
    }


    if (isset($_POST['delete'])) {

        $db = new SQLite3("F:\\xampp\\htdocs\\Database.db");

        $stmt = "DELETE FROM employees WHERE emp_num = :empid";

        $sql = $db->prepare($stmt);

        $sql->bindParam(':empid', $_POST['uid'], SQLITE3_TEXT);

        $sql->execute();

        header("Location:viewEmployees.php?deleted=true");

        exit();
    }

    return $arrayResult;

}

function updateAddress()
{
    $db = new SQLite3("F:\\xampp\\htdocs\\Database.db");

    $arrayResult = [];

    if (isset($_POST['submit'])) {

        $sql = "UPDATE address SET house_num = :house, postcode = :postcode, county = :county, city = :city WHERE address_id = :addressid";
        $stmt = $db->prepare($sql);

        $stmt->bindParam(':addressid', $_GET['uid'], SQLITE3_TEXT);

        $stmt->bindParam(':addressid', $_POST['addressid'], SQLITE3_TEXT);
        $stmt->bindParam(':house', $_POST['house'], SQLITE3_TEXT);
        $stmt->bindParam(':postcode', $_POST['postcode'], SQLITE3_TEXT);
        $stmt->bindParam(':county', $_POST['county'], SQLITE3_TEXT);
        $stmt->bindParam(':city', $_POST['city'], SQLITE3_TEXT);

        $stmt->execute();

        header('Location: viewAddress.php');
        exit();
    } else {

        $sql = "SELECT * FROM address WHERE address_id = :addressid";
        $stmt = $db->prepare($sql);
        $stmt->bindParam(':addressid', $_GET['uid'], SQLITE3_TEXT);
        $result = $stmt->execute();

        while ($row = $result->fetchArray(SQLITE3_NUM)) {
            $arrayResult[] = $row;
        }

        return $arrayResult;
    }
}

function deleteAddress()
{
    $db = new SQLite3("F:\\xampp\\htdocs\\Database.db");

    $arrayResult = [];

    $sql = "SELECT house_num, postcode, county, city FROM address";

    $stmt = $db->prepare($sql);

    $stmt->bindParam(':addressid', $_GET['address_id'], SQLITE3_TEXT);

    $result = $stmt->execute();

    $arrayResult = [];

    while ($row = $result->fetchArray(SQLITE3_NUM)) {

        $arrayResult[] = $row;
    }


    if (isset($_POST['delete'])) {

        $db = new SQLite3("F:\\xampp\\htdocs\\Database.db");

        $stmt = "DELETE FROM address WHERE address_id=:addressid";

        $sql = $db->prepare($stmt);

        $sql->bindParam(':addressid', $_POST['address_id'], SQLITE3_TEXT);

        $sql->execute();

        header("Location:viewAddress.php?deleted=true");

        exit();
    }

    return $arrayResult;

}

function deleteProject()
{
    $db = new SQLite3("F:\\xampp\\htdocs\\Database.db");

    $arrayResult = [];

    $sql = "SELECT proj_no, proj_name FROM project";

    $stmt = $db->prepare($sql);

    $stmt->bindParam(':proj_no', $_GET['projno'], SQLITE3_TEXT);

    $result = $stmt->execute();

    $arrayResult = [];

    while ($row = $result->fetchArray(SQLITE3_NUM)) {

        $arrayResult[] = $row;
    }


    if (isset($_POST['delete'])) {

        $db = new SQLite3("F:\\xampp\\htdocs\\Database.db");

        $stmt = "DELETE FROM project WHERE proj_no=:projno";

        $sql = $db->prepare($stmt);

        $sql->bindParam(':proj_no]', $_POST['projno'], SQLITE3_TEXT);

        $sql->execute();

        header("Location:viewProjects.php?deleted=true");

        exit();
    }

    return $arrayResult;

}

function updateJobs()
{
    $db = new SQLite3("F:\\xampp\\htdocs\\Database.db");

    $arrayResult = [];

    if (isset($_POST['submit'])) {

        $sql = "UPDATE jobs SET job_id = :jobid, job_class = :jobclass, chg_hour = :chghour WHERE job_id = :jobid";
        $stmt = $db->prepare($sql);

        $stmt->bindParam(':jobid', $_GET['job_id'], SQLITE3_TEXT);
        $stmt->bindParam(':jobclass', $_POST['jobid'], SQLITE3_TEXT);
        $stmt->bindParam(':chghour', $_POST['chghour'], SQLITE3_TEXT);


        $stmt->execute();

        header('Location: viewJobs.php');
        exit();
    } else {

        $sql = "SELECT * FROM jobs WHERE job_id = :jobid";
        $stmt = $db->prepare($sql);
        $stmt->bindParam(':jobid', $_GET['jobid'], SQLITE3_TEXT);
        $result = $stmt->execute();

        while ($row = $result->fetchArray(SQLITE3_NUM)) {
            $arrayResult[] = $row;
        }

        return $arrayResult;
    }
}

function deleteJobs()
{
    $db = new SQLite3("F:\\xampp\\htdocs\\Database.db");

    $arrayResult = [];

    $sql = "SELECT job_id, job_class, chg_hour FROM jobs";

    $stmt = $db->prepare($sql);

    $stmt->bindParam(':jobid', $_GET['jobid'], SQLITE3_TEXT);

    $result = $stmt->execute();

    $arrayResult = [];

    while ($row = $result->fetchArray(SQLITE3_NUM)) {

        $arrayResult[] = $row;
    }


    if (isset($_POST['delete'])) {

        $db = new SQLite3("F:\\xampp\\htdocs\\Database.db");

        $stmt = "DELETE FROM jobs WHERE job_id=:jobid";

        $sql = $db->prepare($stmt);

        $sql->bindParam(':jobid]', $_POST['jobid'], SQLITE3_TEXT);

        $sql->execute();

        header("Location:viewJobs.php?deleted=true");

        exit();
    }

    return $arrayResult;

}

function getInfo()
{
    $db = new SQLite3("F:\\xampp\\htdocs\\Database.db");
    $info = [];

    if (!isset($_POST['filterInfo'])) {
        $sql = "SELECT * FROM employees";
        $stmt = $db->prepare($sql);
        $result = $stmt->execute();

        while ($row = $result->fetchArray(SQLITE3_NUM)) {
            $info[] = $row;
        }
    } else {
        if ($_POST['filterInfo'] != 'All') {
            $id = intval($_POST['filterInfo']);
            $sql = "SELECT * FROM employees WHERE job_id = :id";
            $stmt = $db->prepare($sql);
            $stmt->bindParam(':id', $id, SQLITE3_INTEGER);  // Fix the variable name here
            $results = $stmt->execute();
            $info = [];
            while ($row = $results->fetchArray()) {
                $info[] = $row;
            }
        } else {
            $sql = "SELECT * FROM employees";
            $stmt = $db->prepare($sql);
            $result = $stmt->execute();

            while ($row = $result->fetchArray(SQLITE3_NUM)) {
                $info[] = $row;
            }
        }
    }

    return $info;
}

function deleteDependents()
{
    $db = new SQLite3("F:\\xampp\\htdocs\\Database.db");

    $arrayResult = [];

    $sql = "SELECT dependent_id, f_name, m_name, l_name, relationship, emp_num FROM dependents";

    $stmt = $db->prepare($sql);

    $stmt->bindParam(':dependentid', $_GET['depid'], SQLITE3_TEXT);

    $result = $stmt->execute();

    $arrayResult = [];

    while ($row = $result->fetchArray(SQLITE3_NUM)) {

        $arrayResult[] = $row;
    }


    if (isset($_POST['delete'])) {

        $db = new SQLite3("F:\\xampp\\htdocs\\Database.db");

        $stmt = "DELETE FROM dependents WHERE dependent_id=:dependentid";

        $sql = $db->prepare($stmt);

        $sql->bindParam(':dependentid]', $_POST['depid'], SQLITE3_TEXT);

        $sql->execute();

        header("Location:viewDependents.php?deleted=true");

        exit();
    }

    return $arrayResult;

}

function updateDependents()
{
    $db = new SQLite3("F:\\xampp\\htdocs\\Database.db");

    $arrayResult = [];

    if (isset($_POST['submit'])) {

        $sql = "UPDATE dependents SET dependent_id = :dependentid, f_name = :fname, m_name = :mname, l_name = :lname, relationship = :relationship, emp_num = :empid WHERE dependent_id = :dependentid";
        $stmt = $db->prepare($sql);

        $stmt->bindParam(':dependentid', $_GET['depid'], SQLITE3_TEXT);
        $stmt->bindParam(':fname', $_POST['fname'], SQLITE3_TEXT);
        $stmt->bindParam(':mname', $_POST['mname'], SQLITE3_TEXT);
        $stmt->bindParam(':lname', $_POST['lname'], SQLITE3_TEXT);
        $stmt->bindParam(':relationship', $_POST['relationship'], SQLITE3_TEXT);
        $stmt->bindParam(':empid', $_POST['empid'], SQLITE3_TEXT);

        $stmt->execute();

        header('Location: viewDependents.php');
        exit();
    } else {

        $sql = "SELECT * FROM dependents WHERE dependent_id = :dependentid";
        $stmt = $db->prepare($sql);
        $stmt->bindParam(':dependentid', $_GET['depid'], SQLITE3_TEXT);
        $result = $stmt->execute();

        while ($row = $result->fetchArray(SQLITE3_NUM)) {
            $arrayResult[] = $row;
        }

        return $arrayResult;
    }
}