<div class="show-title episodes">
	<div class="title-flex menu">
	  <img class="menu-btn" src="img/menu.svg"/>
	  <img onclick="location.href='/';" class="home-btn" src="img/home.svg"/>
	</div>
	<div class="title-flex">
	  <span class="center-title"><?php echo $title;?> </span>
	</div>
	<div class="title-flex right" id="autoplay-toggle" class="enabled">
	  <div class="autoplay-controls">
		<span>Autoplay</span> <img class="auto-on-off" src="img/toggle_off.svg">
	  </div>
	</div>
  </div>
  <div class="audio-list">
	   <?php
		  foreach ($audioFiles as $file) {
			  // Get the file name without extension
			  $fileNameWithoutExtension = pathinfo($file, PATHINFO_FILENAME);
			  $displayFileName = htmlspecialchars(strlen($fileNameWithoutExtension) > 50 ? str_replace('_', ' ', substr($fileNameWithoutExtension, 0, 47)) . '...' : str_replace('_', ' ', $fileNameWithoutExtension));
			  $fileNameWithoutExtension = htmlspecialchars($fileNameWithoutExtension);
			  $fileNameWithSpaces = str_replace('_', ' ', $fileNameWithoutExtension);
			  $allEpisode = $filecount;
			?>
			  <div class="track-link">
				<div class="track" data-src="<?= htmlspecialchars($file) ?>">
				  <img src="img/play.svg"/>
				  <span class="tooltip"><?= $displayFileName ?><span class="tooltiptext"><?= $fileNameWithSpaces ?></span></span>
				</div>
				<a href="<?= htmlspecialchars($file) ?>" download class="dl-link"><img src="../img/download.svg"/></a>
			  </div>
		  <?php
		  }
		?>
		
		<?php
		$series = $_GET['series'];
		$audioDirectory = $_GET['series'] ?? ''; 
		$jsonMenu = '' . $series . '/audio-list.json';
		if (file_exists($jsonMenu)) {
			$playlistData = file_get_contents($series . '/audio-list.json');
			$playlistItems = json_decode($playlistData); // decode the JSON feed
			$playListFiles = count($playlistItems); // Counts the files in the playlist files
			$allEpisode = $filecount + $playListFiles;
		} else {
			$totalEpisodes = $audioFiles;
		}
		 ?>
	 		<?php if (file_exists($jsonMenu)) : ?>
				<?php foreach ($playlistItems as $playlistItem) : ?>
					
					<div class="track-link">
						<div class="track" data-src="<?= $playlistItem->url; ?>">
							<img src="img/play.svg"/>
							  <?= $playlistItem->title; ?>
							 </div>
							 <a href="<?= $playlistItem->url; ?>" download class="dl-link"><img src="../img/download.svg"/></a>
					</div> 
					
			 <?php endforeach; ?>	 
		 <?php endif; ?>
  </div>
  <div class="series-info">
	<div class="info-box">
		<img class="close-info" src="img/close_btn.svg"/>
	  <div>Show Info - Eps: <?php echo $allEpisode; ?> | Date: <?php echo($year);?></div>
	  <div>
	  <?php if( isset( $info[0]->info ) ): ?>
		  <?php echo $summary ;?>
	  <?php endif; ?>
	  
	  <?php if ( $summary ): ?>
		 <?php echo $summary; ?>
	  <?php endif; ?>
	  </div>	
	</div>
  </div>
  <audio class="audio-player" src="" id="audio-player" controls></audio>
  <script src="https://unpkg.com/plyr@3"></script><script src="player_script.js"></script> 