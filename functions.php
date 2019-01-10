<?php

function add_athlete(){
    if (!empty($_POST)) {
        if ($_POST['submit']=="add") {
            $nom = $_POST['nom'];
            $prenom = $_POST['prenom'];
            $dateNaissance = $_POST['dateNaissance'];
            $ville = $_POST['ville'];
    
            
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "athletisme";
    
            // Create connection
            $conn = mysqli_connect($servername, $username, $password, $dbname);
    
            // Check connection
            if (!$conn) {
                die("Connection failed: " . mysqli_connect_error());
            }
    
    
            // Query database
            $sql = "INSERT INTO athlete (nomAthlete,prenomAthlete,dateNaissance,ville) VALUES ('$nom', '$prenom', '$dateNaissance', '$ville');";
            if (!mysqli_query($conn, $sql)) {
                echo "Error: " . $sql . "<br>" . mysqli_error($conn);
            }
    
            mysqli_close($conn);
        }
    }
}


function list_all_athletes(){
    
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "athletisme";

    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $sql = "SELECT numAthlete,nomAthlete,prenomAthlete,dateNaissance,ville FROM athlete";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        echo "<table class='table table-bordered table-condensed'>";
        echo "<tr>";
        echo "<th>Id</th><th>Name</th><th>Birth date</th><th>Country</th>";
        echo "</tr>";
        // output data of each row
        while($row = mysqli_fetch_assoc($result)) {
            echo "<tr class='info'><td>" . $row["numAthlete"] . "</td><td>" . $row["nomAthlete"] . " " . $row["prenomAthlete"] . "</td><td>" . $row["dateNaissance"] . "</td><td>" . $row["ville"] . "</td></tr>";
        }
        echo "</table>";
    } else {
        echo "0 results";
    }

    mysqli_close($conn);
}


function updateAthleteForm(){
    echo "<form class='col-xs-12 well' action='index.php' method='POST'>";
    echo "<legend>Update Athlete</legend>";
    echo '<fieldset>';
    echo "<select name='athlete' class='form-control col-xs-4'>";
    
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "athletisme";

    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $sql = "SELECT numAthlete,nomAthlete,prenomAthlete FROM athlete";
    $result = mysqli_query($conn, $sql);



    if (mysqli_num_rows($result) > 0) {
        // output data of each row
        while($row = mysqli_fetch_assoc($result)) {
            echo "<option value=" . "'" . $row["numAthlete"] . "'" . ">" . $row['numAthlete'] . " " . $row['nomAthlete'] . " " . $row['prenomAthlete'] . "</option>";
        }
    } else {
        echo "<option value=''>0 results</option>";
    }

    mysqli_close($conn);

    echo "</select>";
    echo "<label for='firstName'>First name: </label>";
    echo "<input type='text' name='nom' id='firstName' class='form-control'>";
    echo "<label for='lastName'>Last name: </label>";
    echo "<input type='text' name='prenom' id='lastName' class='form-control'>";
    echo "<label for='birthDate'>Birth date: </label>";
    echo "<input type='date' name='dateNaissance' id='birthDate' class='form-control'>";
    echo "<label for='country'>Country: </label>";
    echo '<select name="ville" class="countries form-control" id="countryId"><option value="">Select Country</option></select><script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script><script src="//geodata.solutions/includes/countrystatecity.js"></script>';
    echo '<button class="btn btn-primary" type="submit" name="submit" value="update">Update</button>';
    echo "</fieldset>";
    echo "</form>";
}

function updateAthlete(){
    if (!empty($_POST)) {
        if ($_POST['submit']=="update") {
            $nom = $_POST['nom'];
            $prenom = $_POST['prenom'];
            $dateNaissance = $_POST['dateNaissance'];
            $ville = $_POST['ville'];
            $numAthlete = $_POST['athlete'];
    
            
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "athletisme";
    
            // Create connection
            $conn = mysqli_connect($servername, $username, $password, $dbname);
    
            // Check connection
            if (!$conn) {
                die("Connection failed: " . mysqli_connect_error());
            }
    
    
            // Query database
            $sql = "UPDATE athlete set nomAthlete='$nom', prenomAthlete='$prenom', dateNaissance='$dateNaissance', ville='$ville' WHERE numAthlete='$numAthlete';";
            if (!mysqli_query($conn, $sql)) {
                echo "Error: " . $sql . "<br>" . mysqli_error($conn);
            }
    
            mysqli_close($conn);
        }
    }
}


function list_rejected_athletes(){
    
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "athletisme";

    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $sql = "SELECT athlete.numAthlete,nomAthlete,prenomAthlete,dateNaissance,ville FROM athlete,notes WHERE athlete.numAthlete = notes.numAthlete and notes.note < 10;";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        echo "<table class='table table-bordered table-condensed'>";
        echo "<tr>";
        echo "<th>Id</th><th>Name</th><th>Birth date</th><th>Country</th>";
        echo "</tr>";
        // output data of each row
        while($row = mysqli_fetch_assoc($result)) {
            echo "<tr class='info'><td>" . $row["numAthlete"] . "</td><td>" . $row["nomAthlete"] . " " . $row["prenomAthlete"] . "</td><td>" . $row["dateNaissance"] . "</td><td>" . $row["ville"] . "</td></tr>";
        }
        echo "</table>";
    } else {
        echo "0 results";
    }

    mysqli_close($conn);
}

function list_admitted_athletes(){
    
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "athletisme";

    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $sql = "SELECT athlete.numAthlete,nomAthlete,prenomAthlete,dateNaissance,ville FROM athlete,notes WHERE athlete.numAthlete = notes.numAthlete and notes.note >= 10;";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        echo "<table class='table table-bordered table-condensed'>";
        echo "<tr>";
        echo "<th>Id</th><th>Name</th><th>Birth date</th><th>Country</th>";
        echo "</tr>";
        // output data of each row
        while($row = mysqli_fetch_assoc($result)) {
            echo "<tr class='info'><td>" . $row["numAthlete"] . "</td><td>" . $row["nomAthlete"] . " " . $row["prenomAthlete"] . "</td><td>" . $row["dateNaissance"] . "</td><td>" . $row["ville"] . "</td></tr>";
        }
        echo "</table>";
    } else {
        echo "0 results";
    }

    mysqli_close($conn);
}


?>