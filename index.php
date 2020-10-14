<?php
    $random_card_1_player = rand(1, 11);
    $random_card_2_player = rand(1, 11);
    $random_card_1_dealer = rand(1, 11);
    $random_card_2_dealer = rand(1, 11);

    $player_hand = $random_card_1_player + $random_card_2_player;
    $dealer_hand = $random_card_1_dealer + $random_card_2_dealer;

    if ($player_hand < $dealer_hand) {
        $winner = 'Dealer';
        $winner_hand = 'with ' . $dealer_hand;
    } else {
        if ($player_hand == $dealer_hand) {
            $winner = 'No one';
            $winner_hand = null;
        } else {
            $winner = 'Player';
            $winner_hand = 'with ' . $player_hand;
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Clauses</title>
    <meta charset="UTF-8">
</head>
<body>
    <h1><?php print $winner; ?> is the winner <?php print $winner_hand; ?></h1>
    <div>
        <h2>Dealer gets <?php print $dealer_hand; ?></h2>
        <div><?php print $random_card_1_dealer; ?></div>
        <div><?php print $random_card_2_dealer; ?></div>
    </div>
    <div>
        <h2>Player gets <?php print $player_hand; ?></h2>
        <div><?php print $random_card_1_player; ?></div>
        <div><?php print $random_card_2_player; ?></div>
    </div>
</body>
</html>