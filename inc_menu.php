<div class="menu-overlay"></div>
<div class="main-menu">
  <div class="menu-title">Main Menu <img class="close-menu close-menu-btn" src="img/close_btn.svg"/></div>
	<div class="left-menu">
	  <?php foreach ($menuItems as $menuItem) : ?>
		<div class="menu-link"><span title="Listen to: <?php echo $menuItem->title; ?>" onclick="location.href='/<?php echo $menuItem->link; ?>/';"><?php echo $menuItem->title; ?> </span></div>
	  <?php endforeach; ?>
	</div>
</div>