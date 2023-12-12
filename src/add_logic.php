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

   @$titlu_carte = $_POST['titlu_carte'];
   @$autor_carte = $_POST['autor_carte'];
   @$editura = $_POST['editura'];
   @$cod_isbn = $_POST['cod_isbn'];
   @$anul_aparitiei = $_POST['anul_aparitiei'];
   @$nr_exemplare_stoc = $_POST['nr_exemplare_stoc'];
   @$pret = $_POST['pret'];
   @$nr_exemplare_vandute = $_POST['nr_exemplare_vandute'];
   @$pret_total_carte = $_POST['pret_total_carte'];

   $query = "INSERT INTO evidenta_carti(
      titlu_carte,
      autor_carte,
      editura,
      cod_isbn,
      anul_aparitiei,
      nr_exemplare_stoc,
      pret,
      nr_exemplare_vandute,
      pret_total_carte
   ) VALUES(
      '$titlu_carte',
      '$autor_carte',
      '$editura',
      '$cod_isbn',
      $anul_aparitiei,
      $nr_exemplare_stoc,
      $pret,
      $nr_exemplare_vandute,
      $pret_total_carte)";

   $result = $conn->query($query);

   mysqli_close($conn);

   header("Location: index.php");
?>