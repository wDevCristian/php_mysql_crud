<!-- index.php could also be named read.php -->
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
   <title>Add new record</title>
</head>
<body>
<div class="container" style="width:1170px; margin: 0 auto;">
        <form style="text-align: center; margin-top: 2rem;" action="add_data.php" method="post">
            <label style="margin-bottom: .5rem;" for="nr_carte">Titlul: </label>
            <input type="text" name="titlu_carte" id="titlu_carte">
            <br>
            <label style="margin-bottom: .5rem;" for="nr_carte">Autorul: </label>
            <input type="text" name="autor_carte" id="autor_carte">
            <br>
            <label style="margin-bottom: .5rem;" for="nr_carte">Editura: </label>
            <input type="text" name="editura" id="editura">
            <br>
            <label style="margin-bottom: .5rem;" for="nr_carte">Cod ISBN: </label>
            <input type="text" name="cod_isbn" id="cod_isbn">
            <br>
            <label style="margin-bottom: .5rem;" for="nr_carte">Anul aparitiei: </label>
            <input type="text" name="anul_aparitiei" id="anul_aparitiei">
            <br>
            <label style="margin-bottom: .5rem;" for="nr_carte">Numar exemplare stoc: </label>
            <input type="text" name="nr_exemplare_stoc" id="nr_exemplare_stoc">
            <br>
            <label style="margin-bottom: .5rem;" for="nr_carte">Pret: </label>
            <input type="text" name="pret" id="pret">
            <br>
            <label style="margin-bottom: .5rem;" for="nr_carte">Numar exemplare vandute: </label>
            <input type="text" name="nr_exemplare_vandute" id="nr_exemplare_vandute">
            <br>
            <label style="margin-bottom: .5rem;" for="nr_carte">Pret total carte: </label>
            <input type="text" name="pret_total_carte" id="pret_total_carte">
            <br>
            
            <button class="btn btn-primary" type="submit">Add record</button>
            <a href="index.php"><button class="btn btn-success" type="button">Return</button></a>
         </form>
    </div>
</body>
</html>