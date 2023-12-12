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

   // SQL query to fetch data
   $query = "SELECT * FROM evidenta_carti WHERE nr_crt = $nr_crt";
   $result = $conn->query($query);

   // Fetching data from the result
   if ($result->num_rows > 0) {
      $row = $result->fetch_array(MYSQLI_NUM);
   } else {
      echo "No results found";
   }

   mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
   <title>Update record</title>
</head>
<body>
<div class="container" style="width:1170px; margin: 0 auto;">
         <form style="text-align: center; margin-top: 2rem;" action="update_logic.php" method="post">
            <label style="margin-bottom: .5rem;" for="nr_carte">Numar carte: </label>
            <input type="text" name="nr_crt" id="nr_crt" value="<?php echo $row[0];?>" readonly>
            <br>
            <label style="margin-bottom: .5rem;" for="nr_carte">Titlul: </label>
            <input type="text" name="titlu_carte" id="titlu_carte" value="<?php echo $row[1];?>">
            <br>
            <label style="margin-bottom: .5rem;" for="nr_carte">Autorul: </label>
            <input type="text" name="autor_carte" id="autor_carte" value="<?php echo $row[2];?>">
            <br>
            <label style="margin-bottom: .5rem;" for="nr_carte">Editura: </label>
            <input type="text" name="editura" id="editura" value="<?php echo $row[3];?>">
            <br>
            <label style="margin-bottom: .5rem;" for="nr_carte">Cod ISBN: </label>
            <input type="text" name="cod_isbn" id="cod_isbn" value="<?php echo $row[4];?>">
            <br>
            <label style="margin-bottom: .5rem;" for="nr_carte">Anul aparitiei: </label>
            <input type="text" name="anul_aparitiei" id="anul_aparitiei" value="<?php echo $row[5];?>">
            <br>
            <label style="margin-bottom: .5rem;" for="nr_carte">Numar exemplare stoc: </label>
            <input type="text" name="nr_exemplare_stoc" id="nr_exemplare_stoc" value="<?php echo $row[6];?>">
            <br>
            <label style="margin-bottom: .5rem;" for="nr_carte">Pret: </label>
            <input type="text" name="pret" id="pret" value="<?php echo $row[7];?>">
            <br>
            <label style="margin-bottom: .5rem;" for="nr_carte">Numar exemplare vandute: </label>
            <input type="text" name="nr_exemplare_vandute" id="nr_exemplare_vandute" value="<?php echo $row[8];?>">
            <br>
            <label style="margin-bottom: .5rem;" for="nr_carte">Pret total carte: </label>
            <input type="text" name="pret_total_carte" id="pret_total_carte" value="<?php echo $row[9];?>">
            <br>
            
            <button class="btn btn-primary" type="submit">Update record</button>
            <a href="index.php"><button class="btn btn-success" type="button">Return</button></a>
         </form>
    </div>
</body>
</html>