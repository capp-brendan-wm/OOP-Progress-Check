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
    echo "<br />";
    $LoL = new gamedetails ("League of Legends", "moba", "PC", "standard");
    echo "This game is " . $LoL -> get_game () . ".<br />";
    echo "This game is a " . $LoL -> get_genre () . ".<br />";
    echo "This game is played on a " . $LoL -> get_platform () . " platform" . ".<br />";
    echo "This game's cost is " . $LoL -> get_price () . ".<br />";

?>
</html>