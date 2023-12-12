<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "evidenta";
    
    // Create a connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    
    // Check connection
    if ($conn->connect_error) {
          die("Connection failed: " . $conn->connect_error);
    }
 
    @$nr_crt = $_POST['nr_crt'];
 
    $query = "DELETE FROM evidenta_carti WHERE nr_crt = $nr_crt;";
    
    $result = $conn->query($query);
 
    mysqli_close($conn);
 
    header("Location: index.php"); 
?>