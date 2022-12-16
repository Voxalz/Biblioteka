<?php 
   $user = "root";  
   $password = "";  
   $host = "localhost";  
   $dbase = "bibioteka";  
   $table = "books"; 
   
   $tytul= $_POST['title'];
   $data_wydania= $_POST['release_date'];
   $autor= $_POST['author'];
   $isbn= $_POST['isbn'];
   $wypozyczona= $_POST['borrowed'];
   
   $dbc= mysqli_connect($host,$user,$password, $dbase)  
   
   or die("Unable to select database"); 
   
   
   $query= "INSERT INTO $table (title, release_date , author, isbn, borrowed) VALUES ('$tytul','$data_wydania','$autor','$isbn','$wypozyczona')";
   
   
   
   mysqli_query ($dbc, $query) 
   or die ("Error querying database"); 
   
   header("Location: index.php");
   die(); 
   
   
   mysqli_close($dbc); 
    
   ?>