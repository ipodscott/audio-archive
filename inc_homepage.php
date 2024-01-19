
<?php if( $background_video ): ?>
  
  <div class="video">
  
	<video id="video_background" poster="img/radio_bg.webp" class="" autoplay="" muted="" playsinline="" loop="" src="<?php echo $background_video; ?>" ></video>
	  
  </div>
  
<?php endif; ?>

<div class="show-title">
	<div class="title-flex menu"><img class="menu-btn" src="img/menu.svg"/></div>
	 <div class="title-flex right" id="autoplay-toggle" class="enabled"></div>
  </div>
<div class="homepage">
	 <div class="hp-info-blocks">
	   <img class="homepage-logo" src="img/radio_top.svg"/>
	   <div class="hp-info-block">
		 <div>Series: <?php echo count($menuItems);?></div>
		 <div>Episodes: <?php echo $total_episodes; ?></div>
	   </div>
	   <div class="hp-info-block">
		  <div>Hours: <?php echo $total_hours; ?></div>
		  <div>Days: <?php echo $days; ?></div>
		</div>
		<div class="hp-info-block">
		  <div>Months: <?php echo $months; ?></div>
		  <div>Years: <?php echo $years; ?></div>
		</div>
		<div onclick="location.href='dpiradio.pls';" class="listen-now"><img src="img/radio.svg">Listen Live</div>
	   
	 </div>
</div>