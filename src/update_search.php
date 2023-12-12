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
         <form style="text-align: center; margin-top: 2rem;" action="update_form.php" method="post">
            <label style="margin-bottom: .5rem;" for="nr_carte">Numar carte: </label>
            <input type="text" name="nr_crt" id="nr_crt">
            <br>
            
            <button class="btn btn-primary" type="submit">Search for record</button>
            <a href="index.php"><button class="btn btn-success" type="button">Return</button></a>
         </form>
    </div>
</body>
</html>