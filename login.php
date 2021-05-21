<?php
if(isset($_POST['cancel'])) {
    header('location:ind.php');
    return;
}
$traceback='';
$salt = 'XyZzy12*_';
$stored_hash = '1a52e17fa899cf40fb04cfc42e6352f1';
if(isset($_POST["who"]) && isset($_POST["pass"])){
    if(strlen($_POST["who"])< 1 || strlen($_POST["pass"]) < 1) {
        $traceback="User name and password are required";   
    } else {
        $md5 = hash("md5","$salt".$_POST['pass']);

        if($md5==$stored_hash){
            header("location: http://localhost/game.php?name=".urlencode($_POST['who']));
            return;
        }
        else {
            $traceback = "Incorrect password";
        }  
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Log In</title>
</head>
<body>
<link rel="stylesheet" href="style/style_login.css">
<h2>Please log in</h2>
<?php
 if (strlen($traceback) > 0) {
     echo("<p style='color: red'>".htmlentities($traceback)."</p><br>");
 }
?> 

<form method="POST">
<label for="username">USERNAME</label>
<input type="text" name="who" id="username" class="box" ><br>
<label for="key">PASSWORD</label>
<input type="password" name="pass" id="key" class="box" >
<input type="submit" value="Log In" class="button">
<input type="submit" value="Cancel" name="cancel" class="button" >
</form>

</body>
</html>
