<?php

function js_link($href){
	
	return "<script type=\"text/javascript\" src=\"".$href."\"></script>\n";

}

function js_links($row){
	
	$html = '';
	
	foreach($row as $href){
		
		$html .= js_link($href);
	
	}
	
	return $html;

}
