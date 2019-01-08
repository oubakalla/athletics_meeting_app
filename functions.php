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
?>