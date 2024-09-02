<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<a href="update.php?msg=welcome to php learn">Update</a>
<?php

$str="welcome to phplearn";
$pattern= "/phplearn/i";
if(preg_match($pattern,$str)){
    echo "match";
};

echo "</br>";
$str= "welcome to phplearn.phplearn is best seriz.welcome to phplearn.phplearn is best seriz";
$pattern= "/phplearn/i";
echo "total match : ".preg_match_all($pattern,$str);

echo "</br>";
$str= "welcome to phplearn.php is best seriz";
$pattern= "/phplearn/i";

echo preg_replace($pattern,"bestphplearn",$str);

?>
    
</body>
</html>