<?php
$traceback='';
if(isset($_POST["who"]) && isset($_POST["pass"])){
if(strlen($_POST["who"])< 1 || strlen($_POST["pass"]) < 1) {
    $traceback="User name and password are required";
    
}
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="POST">
<h2>Please log in</h2>
<?php
 if (strlen($traceback) > 0) {
     echo("<p style='color: red'>".htmlentities($traceback)."</p><br>");
 }
?>
<label for="username">USERNAME</label>
<input type="text" name="who" id="username" ><br>
<label for="key">PASSWORD</label>
<input type="password" name="pass" id="key"><br>
<input type="submit" value="Log In">
<input type="submit" value="Cancel">
</form>
    
</body>
</html>
