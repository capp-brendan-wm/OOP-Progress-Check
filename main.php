<!DOCTYPE html>
<html>
<head>
    <meta charset = "UHF-8">
    <title>OOP Progress Check</title>

    <?php include ("secondary.php"); ?>
</head>
<body>

</body>
<?php

    $CSGO = new gamedetails ("Counter Strike Global Offensive", "shooter", "PC", "cheap");
    echo "This game is " . $CSGO -> get_game () . ".<br />";
    echo "This game is a " . $CSGO -> get_genre () . ".<br />";
    echo "This game is played on a " . $CSGO -> get_platform () . " platform" . ".<br />";
    echo "This game's cost is " . $CSGO -> get_price () . ".<br />";
    if (gamestatistics::game_validation($id)) {
        echo "This game code is valid";
        echo "<br />";
    }
    echo $lrating -> rating();echo "<br />";
    echo $lrating -> date(); echo "<br />";
    echo $cguns -> guns (); echo "<br />";
    echo $storage -> storage_req (); echo "<br />";
    echo "<br />";

    $LoL = new gamedetails ("League of Legends", "moba", "PC", "standard");
    echo "This game is " . $LoL -> get_game () . ".<br />";
    echo "This game is a " . $LoL -> get_genre () . ".<br />";
    echo "This game is played on a " . $LoL -> get_platform () . " platform" . ".<br />";
    echo "This game's cost is " . $LoL -> get_price () . ".<br />";
    if (gamestatistics::game_validation($id)) {
        echo "This game code is valid";
        echo "<br />";
    }
    echo $crating -> rating (); echo "<br />";
    echo $crating -> date(); echo "<br />";
    echo $lcharacters -> characters (); echo "<br />";
    echo $storage -> storage_req ();
?>
</html>