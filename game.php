<?php
if(!isset($_GET["name"]) || strlen($_GET["name"])<1){
die("Name parameter missing");}

if(isset($_POST['logout'])) {
    header('location:ind.php');
    return;
}
$names = ["Stone","Paper","Scissor"];
$human=isset($_POST['human'])?$_POST["human"]:-1;
$computer= rand(0,2);
function check($human, $computer) {
    if($human==$computer){
        return "Tie";
    }
    elseif($human=="0" && $computer=="2"){
        return "You Win";
    }
    elseif(($human=="1" && $computer=="0")|| ($human=="2" && $computer=="1")) {
        return "You Win";
    }
    else{
        return "You Lose";
    } 
}
$test = check($human,$computer);

?>
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php 
    require_once  "bootstrap.php"
    ?>
    <link rel="stylesheet" href="style/style_game.css">
    <title>game</title>
</head>
<body>
    <h1>Stone Paper Scissor</h1>
    <?php
        if(isset($_GET['name'])) {
            print("<p> Welcome: \n");
            echo htmlentities($_REQUEST['name']);
        echo "<p>\n";        };
    ?>
    <form method="post">
    <select name="human">
    <option value="-1">Select</option>
    <option value="0">Stone</option>
    <option value="1">Paper</option>
    <option value="2">Scissor</option>
    <option value="3">Test</option>
    </select>
    <input type="submit" value="Play">
    <input type="submit" value="Logout" name="logout">
    </form>
    <pre>
<?php
    if($human==-1) {
        echo "Please press a strategy and play the game \n";
    }
    elseif($human==3) {
        for($c=0;$c<3;$c++){
            for($h=0;$h<3;$h++) {
                $r=check($c, $h);
                print ("Human = $names[$c] Computer = $names[$h] Result = $r<br>");
            }
        }
    }
    else{
        print("Human = $names[$human] Computer = $names[$computer] Result = $test");
    }
    ?>
    </pre>
</body>
</html>
