<?php

$GLOBALS['cfg']['cPri']             = '#444'; // dark_bg_color
$GLOBALS['cfg']['cSec']             = '#F0544C'; // theme_selected_bg_color 
$GLOBALS['cfg']['cLte']             = '#D1C4E9'; //100
$GLOBALS['cfg']['white']            = '#EDE7F6'; //50

$GLOBALS['cfg']['NaviWidth']                = 240;
$GLOBALS['cfg']['NaviColor']                = '#000';
$GLOBALS['cfg']['NaviBackground']           = '#fff';
$GLOBALS['cfg']['NaviPointerColor']         = '#000';
$GLOBALS['cfg']['NaviPointerBackground']    = '#ddd';

$GLOBALS['cfg']['MainColor']                = '#444';
$GLOBALS['cfg']['MainBackground']           = '#fff';
$GLOBALS['cfg']['BrowsePointerColor']       = '#000';
$GLOBALS['cfg']['BrowsePointerBackground']  = '#cfc';
$GLOBALS['cfg']['BrowseMarkerColor']        = '#000';
$GLOBALS['cfg']['BrowseMarkerBackground']   = '#fc9';

$GLOBALS['cfg']['FontFamily']       = '"Roboto","Open Sans","Segoe UI Light","Segoe UI",sans-serif;';
$GLOBALS['cfg']['FontFamilyFixed']  = 'monospace,"Lucida Console","Courier New"';

$GLOBALS['cfg']['ThBackground']     = '#D3DCE3';
$GLOBALS['cfg']['ThColor']          = '#000';
$GLOBALS['cfg']['BgOne']            = '#E5E5E5';
$GLOBALS['cfg']['BgTwo']            = '#D5D5D5';

function shadeColor($hex,$percent){
	$hash = '';
	if (stristr($hex,'#')) {
		$hex = str_replace('#','',$hex);
		$hash = '#';
	}
	$rgb = array(hexdec(substr($hex,0,2)), hexdec(substr($hex,2,2)), hexdec(substr($hex,4,2)));
	for ($i=0; $i<3; $i++) {
		if ($percent > 0) {
			$rgb[$i] = round($rgb[$i] * $percent) + round(255 * (1-$percent));
		} else {
			$positivePercent = $percent - ($percent*2);
			$rgb[$i] = round($rgb[$i] * $positivePercent) + round(0 * (1-$positivePercent));
		}
		if ($rgb[$i] > 255) {
			$rgb[$i] = 255;
		}
	}
	$hex = '';
	for($i=0; $i < 3; $i++) {
		$hexDigit = dechex($rgb[$i]);
		if(strlen($hexDigit) == 1) {
		$hexDigit = "0" . $hexDigit;
		}
		$hex .= $hexDigit;
	}
	return $hash.$hex;
}
