<!-- index.php could also be named read.php -->
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
   <title>Retrieve records</title>
</head>
<body>
   <div class="container" style="text-align: center;">
      <table>
         <tr>
            <th class="p-2">nr_crt</th>
            <th class="p-2">titlu_carte</th>
            <th class="p-2">autor_carte</th>
            <th class="p-2">editura</th>
            <th class="p-2">cod_isbn</th>
            <th class="p-2">anul_aparitiei</th>
            <th class="p-2">nr_exemplare_stoc</th>
            <th class="p-2">pret</th>
            <th class="p-2">nr_exemplare_vandute</th>
            <th class="p-2">pret_total_carte</th>
         </tr>
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
            
            // SQL query to fetch data
            $query = "SELECT * FROM evidenta_carti";
            $result = $conn->query($query);

            // Fetching data from the result
            if ($result->num_rows > 0) {
               while($row = $result->fetch_array(MYSQLI_BOTH)) {
                  print("<tr>");
                  for ($i=0; $i < 10; $i++) { 
                     print("<td class=\"p-2\">$row[$i]</td>");
                  }
                  print("</tr>");
               }
            } else {
               echo "No results found";
            }

            // Close the connection
            $conn->close();
            
         ?>
      </table>
      <hr>
      <a href="add.php"><button class="btn btn-primary" type="submit">Add record</button></a>
      <a href="update_search.php"><button class="btn btn-success" type="submit">Update record</button></a>
      <a href="delete.php"><button class="btn btn-danger" type="submit">Delete record</button></a>
   </div>
</body>
</html>