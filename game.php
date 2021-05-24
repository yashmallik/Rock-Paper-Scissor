<?php
if(!isset($_GET["name"]) || strlen($_GET["name"])<1){
die("Name parameter missing");}

if(isset($_POST['logout'])) {
    header('location:ind.php');
    return;
}
$names = ["Rock","Paper","Scissor"];
function check($human, $computer) {
    if($human==$computer){
        return "Tie";
    }
    elseif($human=="Rock" && $computer=="Scissor"){
        return "You Win";
    }elseif(($human=="Paper" && $computer=="Rock")|| ($human=="Scissor" && $computer=="Paper")) {
        return "You Win";
    }else{
        return "You Lose";
    }
}
for($c=0;$c<3;$c++){
    for($h=0;$h<3;$h++) {
        $r=check($names[$c], $names[$h]);
        print ("Human = $names[$c] Computer = $names[$h] Result = $r<br>");
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8   b">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>game</title>
</head>
<body>
    <h1>Stone Paper Scissor</h1>
    <form method="POST">
    <select name="human">
    <option value="-1">Select</option>
    <option value="0">Rock</option>
    <option value="1">Paper</option>
    <option value="2">Stone</option>
    <option value="3">Test</option>
    </select>
    <input type="button" value="Play">
    <input type="button" value="Logout" name="logout">
    </form>
</body>
</html>

