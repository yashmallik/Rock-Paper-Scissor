<?php
if(!isset($_GET["name"]) || strlen($_GET["name"])<1){
die("Name parameter missing");}
$names = ["Rock","Paper","Scissor"];
function check($human, $computer) {
    if($human==$computer){
        return "Tie";
    }
    elseif($human=="Rock" && $computer=="Scissor"){
        return "You Win";
    }elseif(($human=="Paper" && $computer=="Rock")|| ($human=="Scissor" && $computer=="Paper")) {
        return "You win";
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
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>game</title>
</head>
<body>
    <h1>Stone Paper Scissor</h1>
    <form method="POST">
    </form>
</body>
</html>