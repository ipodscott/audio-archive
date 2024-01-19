<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">

  <title>Site Title</title>
  <meta name="description" content="Site Description">
  <meta name="author" content="SitePoint">
  <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, viewport-fit=cover">
  <meta name="apple-mobile-web-app-capable" content="yes" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/plyr/3.7.8/plyr.css" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/plyr/3.7.8/plyr.min.js
  
  
  
"></script>
 <style>
	 body{
		 display: flex;
		 justify-content: center;
		 align-items: center;
		 flex-direction: column;
		 height: 100vh;
		 color:#fff;
		 background: #000;
		 font-family: 'Lato', sans-serif;
		 font-size:20px;
		 margin: 0;
		 padding: 0;
		 position: fixed;
		 width: 100%;
		 overflow-y: scroll;
	 }
	 h1{
		 font-size: 20px;
	 }
	 .background{
		 z-index: 0;
		 background-color: #000;
		 position: absolute;
		 width: 100%;
		 height: 100%;
		 background-image: url(/player/images/radio_bg.jpg);
		  background-position: center center;
		  background-repeat: no-repeat;
		  background-size: cover;
	 }
	 .audio{
		 display: flex;
		 justify-content: center;
		 align-items: center;
		 flex-direction: column;
		 position: relative;
		 z-index: 2;
	 }
	 
	 .refresh{
		 margin-top:20px;
		 border-style: solid;
		 border-width: 1px;
		 padding: 10px 20px;
	 }
 </style>
</head>
<body>
	<div class="background"></div>
  <?php
  $parentDirectory = '../radio.dieselpunkindustries.com';
  // Get a list of all child directories
  $childDirectories = glob($parentDirectory . '/*', GLOB_ONLYDIR);
  
  // Select a random child directory
  $randomDirectory = $childDirectories[array_rand($childDirectories)];
  
  // Scan the random directory for MP3 files
  $mp3Files = glob($randomDirectory . '/*.mp3');
  
  // Select a random MP3 file
  $randomMP3 = $mp3Files[array_rand($mp3Files)];
  $randomMP3 = str_replace('../radio.dieselpunkindustries.com', '', $randomMP3);
  $showTitle = basename($randomMP3);
  $showTitle = str_replace('_', ' ', $showTitle);
  $showTitle = str_replace('.mp3', '', $showTitle);
  $showTitle = ucwords($showTitle);   
  // Display the random MP3 file
  ?>
  <div class="audio">
<?php if($randomMP3) : ?>
	
		<h1><?php echo basename($showTitle);?></h1>
		<audio id="audio" src="<?php echo $randomMP3; ?>" controls></audio>
	  
	  
	  <script>
	  function reloadPage() {
		location.reload();
	  }
	  </script>

  <?php  elseif( !$showTitle ): ?>
	  No episode found please try again
  <?php  else: ?>
  <?php endif ?>
  <div class="refresh" onclick="reloadPage()">Refresh Page</div>
  </div>
  <script>
	  const player = new Plyr('#audio');
	</script>

</body>
</html>