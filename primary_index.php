<?php
	$current_dir = str_replace('\\','',__file__);
	$current_dir  = str_replace($_SERVER['DOCUMENT_ROOT'],'',$current_dir);
	$filename = dirname( $current_dir ); 
	$showname = str_replace("/","",$filename);
?>

<script>
		location.href="/?series=<?php echo $showname; ?>/";
</script>