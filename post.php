<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


<form action="<?php $_SERVER['PHP_SELF']?>" method="get">
<label for="username">User Name</label>
<input type="text" name="username"></br>
<label for="username">Email</label>
<input type="email" name="email"></br>
<button type="submit">Submit</button>

</form>

<?php
if($_SERVER['REQUEST_METHOD']=="GET"){
    $username =$_GET['username'];
    $email =$_GET['email'];
    if(!empty($username)){
        echo $username.' '.$email;
    }
    else{
        echo "username is faka";
    }
}
?>
    
</body>
</html>