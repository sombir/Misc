	<?php
	function curl_request($sURL,$sQueryString=null)
	{
	        $cURL=curl_init();
	        curl_setopt($cURL,CURLOPT_URL,$sURL.'?'.$sQueryString);
	        curl_setopt($cURL,CURLOPT_RETURNTRANSFER, TRUE);
	        $cResponse=trim(curl_exec($cURL));
	        curl_close($cURL);
	        return $cResponse;
	}
	 
	$sResponse=curl_request('http://maps.googleapis.com/maps/api/distancematrix/json','origins=160003&destinations=173212&mode=driving&units=imperial&sensor=false');
	//$sResponse=curl_request('http://maps.googleapis.com/maps/api/distancematrix/json','origins=30.737222,76.787222&destinations=30.511682900000000000,77.208898699999960000&mode=driving&units=imperial&sensor=false');
	//http://web-notes.wirehopper.com/2011/07/13/google-maps-api-distance-calculator
	$oJSON=json_decode($sResponse);
	echo "<pre>";
	print_r($oJSON);
	
	if ($oJSON->status=='OK')
	        $fDistanceInMiles=(float)preg_replace('/[^\d\.]/','',$oJSON->rows[0]->elements[0]->distance->text);
	else
	        $fDistanceInMiles=0;
	 
	
	$ratio = 1.609344;
  if($fDistanceInMiles!='') {
    $kms = $fDistanceInMiles *$ratio;
    $meters = $kms * 1000;
  }
	echo 'Distance in Miles: '.$fDistanceInMiles;
	echo "<br/>";
	echo 'Distance in KiloMeters: '.$kms;
	echo "<br/>";
	echo 'Distance in Meters: '.$meters;
