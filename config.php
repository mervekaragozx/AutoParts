<?php

$user="root";
$pass= "";
$server= "localhost";
$vt="yedekparca";
  
      
try {
     $db = new PDO("mysql:host=localhost;dbname=yedekparca", "root", "");
} 
catch ( PDOException $e ){
     print $e->getMessage();
}

?>


<?php
$baglan=mysqli_connect("localhost","root","","yedekparca");
?>
