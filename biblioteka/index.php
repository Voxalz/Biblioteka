<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>

    
</head>
<body>
    <?php $pdo = new PDO('sqlite:database.db')?>
        <div class="container">
            <div class="blue">
                <img src="logo.png" alt="Logo">
                <a href="https://google.com">Google</a>
                <a href="https://google.com">Google</a>
                <a href="https://google.com">Google</a>
              </div>
              
              <div class="green">
              <?php  
              include_once "najnowsze.php"

              ?>
              </div>
              
              <div class="red">
          <form action="form.php" method="post">
            <h1>Formularz dodawania książek</h1>
            <div class="Formularz">
              
               <label for="title">Tytuł:</label><br>
               <input type="text" id="tytul" name="title" required><br>

               <label for="author">Autor:</label><br>
               <input type="text" id="autor" name="author" required><br>

               <label for="isbn">ISBN:</label><br>
               <input type="text" id="isbn" name="isbn" title="Please enter a valid ISBN" required><br>

               <label for="release_date">Data Wydania:</label><br>
               <input type="date" id="release_date" name="release_date" required><br>

               <label for="borrowed">Status wypożyczenia:</label><br>
               <input type="radio" id="wypozyczona" name="borrowed" value="1"><br>

               <input type="submit" id="submit"value="Submit">
            </div>
          </form>
              </div>
               
              <div class="yellow">
                Address: 123 Main Street<br>
                Phone: 555-555-5555
              </div>
              
        </div>


        
</body>
</html>