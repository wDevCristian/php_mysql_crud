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
   @$titlu_carte = $_POST['titlu_carte'];
   @$autor_carte = $_POST['autor_carte'];
   @$editura = $_POST['editura'];
   @$cod_isbn = $_POST['cod_isbn'];
   @$anul_aparitiei = $_POST['anul_aparitiei'];
   @$nr_exemplare_stoc = $_POST['nr_exemplare_stoc'];
   @$pret = $_POST['pret'];
   @$nr_exemplare_vandute = $_POST['nr_exemplare_vandute'];
   @$pret_total_carte = $_POST['pret_total_carte'];

   $query = "UPDATE evidenta_carti
      SET 
      titlu_carte = '$titlu_carte',
      autor_carte = '$autor_carte',
      editura = '$editura',
      cod_isbn = '$cod_isbn',
      anul_aparitiei = $anul_aparitiei,
      nr_exemplare_stoc = $nr_exemplare_stoc,
      pret = $pret,
      nr_exemplare_vandute = $nr_exemplare_vandute,
      pret_total_carte = $pret_total_carte
      WHERE nr_crt = $nr_crt";

   echo $query;

   $result = $conn->query($query);

   mysqli_close($conn);

   header("Location: index.php");
?>