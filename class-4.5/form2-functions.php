<?php 

function displayOptions($options, $seletedVlues){
	foreach($options as $option){
		$selected = '';
		if (in_array($option, $seletedVlues)) {
			$selected = "selected";
		}
		printf("<option value='%s' %s>%s</option>\n",strtolower($option),$selected,ucwords($option));
	}
}