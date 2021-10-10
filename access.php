
<?php 

try {
    $db=new PDO("mysql:host=localhost; dbname=test" , 'root' ,'' );
  
} catch (Exception $e) {
    echo $e ->getMessage();
}

?>