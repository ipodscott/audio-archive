<?php require_once('inc_header.php');?> 
<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">
  <title><?php echo $player_title;?></title>
  <meta name="description" content="Dieselpunk Industries OTR Library">
  <meta name="author" content="Dieselpunk Industries">
  <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, viewport-fit=cover">
  <meta name="apple-mobile-web-app-capable" content="yes" />
  <link rel='stylesheet' href='https://unpkg.com/plyr@3/dist/plyr.css'>
  <link rel="stylesheet" href="style.css">
</head>
<body>
 
<div class="background-overlay" style="background-image: url(<?php echo $background_image;?>)"></div>

<?php if(strpos($_SERVER['REQUEST_URI'], 'series') == false){ ?>
 <?php require_once('inc_homepage.php');?>
<?php } ?>

<?php if(strpos($_SERVER['REQUEST_URI'], 'series') == true){  ?>
  <?php require_once('inc_series.php');?>
<?php }?>
  
<?php require_once('inc_menu.php');?>
<script src="script.js"></script> 
</body>
</html>