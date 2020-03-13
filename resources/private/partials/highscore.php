<?php
$game = $_GET['game'];

$highscore = new \model\Classes\Data\Highscore($game, 'time');
if($_GET['highscore'] == 'all') $highscore_list = $highscore->getAll();
else $highscore_list = $highscore->getTopTen();

?>

<div class="highscore-list">
    <?php if(is_array($highscore_list) && count($highscore_list) < 10): ?>
    <div class="top-ten">
        <ul class="top-list">
        <?php foreach($highscore_list AS $key => $row) {
            echo "<li>++$key. {$row['name']} {$row['score']} Zeit (Min:Sek:mSek)</li>";
         } ?>
        </ul>
    </div>
    <?php elseif(is_array($highscore_list) && count($highscore_list) > 10): ?>
    <?php else: ?>
    <span><i>Kein Highscore</i></span>
    <?php endif; ?>
</div>
