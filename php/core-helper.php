 <?php
function goCurl($url){

	$ch = curl_init();
	$options = array(
	    CURLOPT_URL            => $url,
	    CURLOPT_RETURNTRANSFER => true,
	    CURLOPT_HEADER         => false,
	    CURLOPT_FOLLOWLOCATION => true,
	    CURLOPT_ENCODING       => "",
	    CURLOPT_AUTOREFERER    => true,
	    CURLOPT_CONNECTTIMEOUT => 120,
	    CURLOPT_TIMEOUT        => 120,
	    CURLOPT_MAXREDIRS      => 10,
	    CURLOPT_SSL_VERIFYPEER => false,
	    CURLOPT_USERAGENT 	   => 'Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.13) Gecko/20080311 Firefox/2.0.0.13'
	);
	curl_setopt_array( $ch, $options );
	$response = curl_exec($ch); 
	$httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
	if ( $httpCode != 200 ){
	    return "Return code is {$httpCode} \n"
	        .curl_error($ch);
	} else {
	  return $response;
	}

}
function base_url(){
	global $siteSettings;
	return $siteSettings->baseUrl;
}


function debug($v){
	print '<pre>';
	var_dump($v);
	print '</pre>';
}

function debugLog($data){
	$html =  '<div class="debugItem">';
	foreach($data as $k => $v){
		$html .= '<p><b>'.$k.':</b> '.$v.'</p>';
	}
	$html .= '</div>';
	return $html;
}

function renderView($view, $data){
	require_once('../views/' . $view . '.php');
}
