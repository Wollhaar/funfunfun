<?php

?>
<!DOCTYPE html>
<html>
<head>
<title>anbeca FUN-Games - <?php echo ucfirst($template); ?></title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<link href="/funfunfun/resources/public/css/default.css" type="text/css" rel="stylesheet" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</head>
<body>
<header class="center-block"><a href="<?php echo $_SERVER['DOCUMENT_ROOT']; ?>/funfunfun/index.php"><h1 class="title">FuNFuNFuN</h1></a></header>
<div class="wrapper col-12">
    <?php require_once $_SERVER['DOCUMENT_ROOT'] . '/funfunfun/resources/private/templates/' . $template . '.php'; ?>
</div>
<footer>
    <a href="impressum.php">Impressum</a>
    <a href="contact.php">Kontakt</a>
    <a href="faq.php">FAQ</a>
</footer>
<script src="/funfunfun/resources/public/js/timer.js" type="text/javascript"></script>
</body>
</html>
