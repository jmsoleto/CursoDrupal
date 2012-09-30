<?php
function theme_my_theme_hook($variables){
	$parameter = $variables['parameter'];
	if(!empty($parameter)){
		return '<div class="my-theme-hook">'.parameter.'</div>';
	}
}
?>