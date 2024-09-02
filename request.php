<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>User Registration</h1>
    <form action="<?php $_SERVER['PHP_SELF'];?>" method="post">
    <label for="username">User Name</label>

    <input type="text" name="username">

    <button type="submit">Submit</button>
    </form>

    <?php 
    IF($_SERVER['REQUEST_METHOD']=="POST"){
       $username= $_REQUEST['username'];

    //    IF(empty($username)){
    //     echo "ai beta input field puron koro";
    //    }
    //    else{
    //     echo "$username";
    //    }

    if(!empty($username)){
        echo $username;
    }
    else{
        echo "ai beta fajil form puron kor age";
    }
    }
    else{
        echo "tomar method holo get change method";
    }

    
    ?>


</body>
</html>