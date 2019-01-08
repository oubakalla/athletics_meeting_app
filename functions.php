<?php

function add_athlete(){
    if (!empty($_POST)) {
        if ($_POST['nom']!=="") {
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


function athletes_comboBox(){
    // echo "<select name="ville" class="form-control">"
}
?>