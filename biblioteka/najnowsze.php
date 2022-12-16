<?php
  $con = mysqli_connect("localhost","root","","bibioteka");
  
  if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    exit();
  }
  
  $sql = "SELECT DISTINCT  id,author, title FROM books ORDER BY add_date DESC LIMIT 10; ";
  
  
  if ($result = mysqli_query($con, $sql)) {
    echo '<table>
    <tr>
    <th>lp</th> 
    <th>Autor</th> 
    <th>Tytuł</th>
    </tr>';
    while ($row = mysqli_fetch_row($result)) {
        echo '<tr><td>'.$row[0].'</td><td>'.$row[1].'</td><td>'.$row[2].'</td></tr>';

    }
    echo '</table>';
    mysqli_free_result($result);
  }
  
  mysqli_close($con);
   ?>