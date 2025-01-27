<?php require("NavBar.html");
?>

<div class="container">
    <main role="main">
        <h1><img src="https://i.postimg.cc/rpQ8gqVY/Add-Employee-Address.jpg" alt="EnigmaEmployee"></h1>

        <div class="add">
            <form method="post">


                <br>
                <br>
                <label>Address ID :</label>
                <input type="text" name="mname" value="">
                <br>
                <br>
                <label>House/Flat Number:</label>
                <input type="text" name="lname" value="" required>
                <br>
                <br>
                <label>Postcode :</label>
                <input type="text" name="addressid" value="" required>
                <br>
                <br>
                <label>County</label>
                <input type="text" name="addressid" value="" required>
                <br>
                <br>
                <label>City :</label>
                <input type="text" name="phone" value="" required>
                <input type="submit" value="Submit">
                <br>
                <br>

    </main>
</div>

<?php require("Footer.html"); ?>