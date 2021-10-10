<!DOCTYPE html>
<html lang="en">
<head>
<script src="main.js"></script>
</head>
<body onlad="VerificationStep2()">
  <script>
    VerificationStep2();
  </script>
<?php
error_reporting(0);
?>
<?php 

include "access.php";

       
       $save=$db->prepare("INSERT INTO yorumverileri set
       
       Posta=:Posta,
       Ad=:Ad,
       Yorum=:Yorum
      
       ");
       $insert=$save->execute(array(

'Posta'=> $_GET['email'],
'Ad'=> $_GET['name'],
'Yorum'=>$_GET['textfield']



       ));
     if ($insert) {
         echo "We direct you to the Home page.";
         header("Refresh: 1.4; url=index.php?=keyingsuccessful");
         
     }
     else{
         echo "Your comment could not be loaded. Error Code: 5XX";
         header("Refresh: 5.6; url=index.php?=keyingfailed");
     }
    
       ?>
</body >
</html>
<?php

// © 2021 | Gezegen Digital All Rights Reserved.


?>


