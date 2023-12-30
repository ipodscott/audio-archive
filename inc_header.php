<?php
	ini_set('display_errors', 1);
  ini_set('display_startup_errors', 1);
  error_reporting(E_ALL);
  if(strpos($_SERVER['REQUEST_URI'], 'menu') !== false){
	 $menu = $_GET['menu']; 
	 $menuTitle = htmlspecialchars($_GET["menu"]);
	 $menuData = file_get_contents('menu-'. $menuTitle .'.json'); // put the contents of the file into a variable
	 $menuItems = json_decode($menuData); // decode the JSON feed	
	 $specs = 'specs-'. $menuTitle .'.json';  
	 
	 }else{ 
	   
	$menuData = file_get_contents('menu.json'); // put the contents of the file into a variable
	$menuItems = json_decode($menuData); // decode the JSON feed
	$specs = "specs.json"; // path to your JSON file
  }
  
	$data = file_get_contents($specs); // put the contents of the file into a variable
	$info = json_decode($data); // decode the JSON feed
	$player_title = $info[0]->player_title;	
	$show_hide_info = $info[0]->show_hide_info;
	$total_episodes = $info[0]->total_episodes;
	$total_hours = $info[0]->total_hours;
	$days = $info[0]->days;
	$months = $info[0]->months;
	$years = $info[0]->years;
	$background_image = $info[0]->background_image;
	$background_video = $info[0]->background_video;
	$main_image = $info[0]->main_image;
	$stream_url_title = $info[0]->stream_url_title;
	$streaming_url = $info[0]->stream_url;
	$drop_title = $info[0]->drop_title;	
  ?>
   
  
  <?php
	  if(strpos($_SERVER['REQUEST_URI'], 'series') !== false){
	  $series = $_GET['series'];
	  $audioDirectory = $_GET['series'] ?? ''; 
	  $audioExtensions = ['mp3', 'm4a'];
	  $audioFiles = [];
	  foreach ($audioExtensions as $extension) {
		  $audioFiles = array_merge($audioFiles, glob($audioDirectory . '*.' . $extension));
	  }
	  $filecount = 0;
	  if ($audioFiles){
		$filecount = count($audioFiles);
	  }
	  $url = "$series/data.json"; // path to your JSON file
	  $data = file_get_contents($url); // put the contents of the file into a variable
	  $info = json_decode($data); // decode the JSON feed
	  $title = $info[0]->title;
	  $year = $info[0]->year;
	  $background_image = $info[0]->background;
	  $summaryContent = "$series/summary.txt";
	  $summary  = file_get_contents( $summaryContent );
  }