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
  
  <!-- Include iOS favicon -->
 <link rel="apple-touch-icon" sizes="180x180" href="https://media.dieselpunkindustries.com/apple-touch-icon.png">
 <link rel="icon" type="image/png" sizes="32x32" href="https://media.dieselpunkindustries.com/favicon-32x32.png">
 <link rel="icon" type="image/png" sizes="16x16" href="https://media.dieselpunkindustries.com/favicon-16x16.png">
 <link rel="manifest" href="https://media.dieselpunkindustries.com/site.webmanifest">
 <meta property="og:image" content="https://www.radio.dieselpunkindustries.com/screen_shot.jpg" />
  
  <link rel='stylesheet' href='https://unpkg.com/plyr@3/dist/plyr.css'>
  <link rel="stylesheet" href="style.css">
</head>
<body> 
 <style>
   #content {
     opacity: 0;
     transition: opacity 300ms;
   }
 </style>
  <div id="content">
      <?php if(strpos($_SERVER['REQUEST_URI'], 'series') == false){ ?>
          <?php require_once('inc_homepage.php');?>
      <?php } ?>
      
      <?php if(strpos($_SERVER['REQUEST_URI'], 'series') == true){  ?>
          <?php require_once('inc_series.php');?>
      <?php }?>
  </div>
<?php require_once('inc_menu.php');?>
<script src="script.js"></script> 
</body>
</html>