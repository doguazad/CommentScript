<?php include "access.php"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
<script src="main.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="main.css">

</head>
<body><center>
    <h2>Comments</h2>
    <div id="CommentBorder">
        
         
    <p> 
    <?php
    //echo "<br>";
    $commentlist=$db->prepare("SELECT * from yorumverileri");
    $commentlist->execute();
    while ($commentlist2=$commentlist->fetch(PDO::FETCH_ASSOC)) {
       
    
   
    

echo $commentlist2['Ad'] ;
echo ":";
echo "&nbsp";
echo $commentlist2['Yorum'];
echo "<hr>";



?> </p>
<?php } ?>
 
    
    </div> 
    <br>
    <h2>Add To Comment</h2>
    <div id="Submit">
        <form action="process.php" method="get">
            <input type="email"  id="email"name="email" placeholder="Your E-Mail Adress" required maxlength="25">
            <input type="text" id="name" name="name" placeholder="Your Name " required maxlength="29"></div>
            <textarea name="textfield" maxlength="99"   required placeholder="Your Comment (Max 100 Character)" id="textfield"  style="overflow: auto;" cols="45" rows="4"></textarea>
            <div><button name="basket" id="basket"  onclick="Verification()"action="process.php"><?php include "iplog.php"; ?>Add Comment</button>
            </form>
        </div>

        
</center></body>
</html>
<?php

// © 2021 | Gezegen Digital All Rights Reserved.


?>