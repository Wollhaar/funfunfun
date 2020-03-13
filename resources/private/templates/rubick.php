<?php

?>

<div class="game-box row col-12">
    <div class="discription col-9">
        <h2 class="title-game font-title">Rubick&acute;s Cube</h2>
        <p>L&ouml;se einen durcheinander gew&uuml;rfeltenen Rubick&acute;s Cube. Und time deine beste Zeit in der Highscore-Tabelle.</p>
        <?php include $_SERVER['DOCUMENT_ROOT'] . '/funfunfun/resources/private/partials/timer.php'; ?>
    </div>
    <div class="sidebar col-3">
        <h2 class="font-title">Links</h2>
        <ul class="sidebar-links--list">
<!--            <li><a href="/funfunfun/index.php?game=rucbick&action=timer">Start Game</a></li>-->
            <li><a href="http://speedcube.de/index.php">Spielregeln/Leitfaden</a></li>
            <li><a href="#highscore">Highscore</a></li>
        </ul>
    </div>
    <div class="highscore col-9"><?php include $_SERVER['DOCUMENT_ROOT'] . '/funfunfun/resources/private/partials/highscore.php'; ?></div>
</div>
