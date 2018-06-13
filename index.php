<!DOCTYPE html>
<html>
<head>
    <title>Rock, Paper, Scissors!</title>
<!--CSS-->
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Yellowtail" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
<!--CSS-->
</head>
<body>
<div class="title-container">      
    <h1>Rock, Paper, Scissors!</h1>
</div> 
<?php
$rps = array("rock", "paper", "scissors");
$computer = $rps[array_rand($rps)];
if ($_POST["player_input"]) {
   
    $player_input = $_POST["player_input"];



    if ($player_input == 'rock' && $computer == 'scissors') {
        echo "<h2>You win!</h2>";
    } else if 
        ($player_input == 'paper' && $computer == 'rock') {
            echo "<h2>You win!</h2>";
    } else if 
        ($player_input == 'scissors' && $computer == 'paper') {
            echo "<h2>You win!</h2>";
    } else if 
        ($player_input == 'rock' && $computer == 'paper') {
            echo "<h2>You lose!</h2>";
    } else if 
        ($player_input == 'paper' && $computer == 'scissors') {
            echo "<h2>You lose!</h2>";
    } else if 
        ($player_input == 'scissors' && $computer == 'rock') {
            echo "<h2>You lose!</h2>";
    } else if 
        ($player_input == $computer) {
            echo "<h2>It's a tie!</h2>";
    } else {
        echo "<h1>NO MATCH FOUND</h1>";
    }
}
?>


<form method="post">
    <div class="button-container">
    <button type="submit" name="player_input" value="rock" class="buttons <?php echo ($player_input == 'rock' ? 'selected' : '') ?>"><i class="fas fa-hand-rock"></i></button>
    <button type="submit" name="player_input" value="paper" class="buttons <?php echo ($player_input == 'paper' ? 'selected' : '') ?>"><i class="fas fa-hand-paper"></i></button>
    <button type="submit" name="player_input" value="scissors" class="buttons <?php echo ($player_input == 'scissors' ? 'selected' : '') ?>"><i class="fas fa-hand-scissors"></i></button>
    </div>
</form>
</body>

</html>