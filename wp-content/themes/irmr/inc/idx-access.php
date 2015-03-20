<?php
function sfhr_featured_listings( $atts ) {

	// access URL and request method a053
	$url = 'https://api.idxbroker.com/clients/featured';
	$method = 'GET';

	// headers (required and optional)
	$headers = array(
		'Content-Type: application/x-www-form-urlencoded', // required
		'accesskey: UutmEKLm8L3rdA8K9VeKzh', // required - replace with your own
		'outputtype: json' // optional - overrides the preferences in our API control page
	);

	// set up cURL
	$handle = curl_init();
	curl_setopt($handle, CURLOPT_URL, $url);
	curl_setopt($handle, CURLOPT_HTTPHEADER, $headers);
	curl_setopt($handle, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($handle, CURLOPT_SSL_VERIFYHOST, false);
	curl_setopt($handle, CURLOPT_SSL_VERIFYPEER, false);

	// exec the cURL request and returned information. Store the returned HTTP code in $code for later reference
	$response = curl_exec($handle);
	$code = curl_getinfo($handle, CURLINFO_HTTP_CODE);

	if ($code >= 200 || $code < 300)
		$components = json_decode($response,true);
	else
		$error = $code;

		$json = json_decode($response, true);

		$output  = '<div class="featured-listings">';
		$output .= '<div class="row">';
		$output .= '<h4>Featured Listings</h4>';
		$output .= '<ul class="arrow-holder">';
		$output .= '<li class="sprev"><i class="fa fa-angle-left"></i></li>';
		$output .= '<li class="snext"><i class="fa fa-angle-right"></i></li>';
		$output .= '</ul>';
		$output .= '<div class="slick">';
		$f = 0;
		while ($f <= 11) {
			foreach($json as $i) {
				$address = $i['address'];
				$city = $i['cityName'];
				$state = $i['state'];
				$zipcode =  $i['zipcode'];
				$price =  $i['listingPrice'];
				$thumb = $i['image']['0']['url'];
				$excerpt = preg_replace('/\s+?(\S+)?$/', '', substr($i['remarksConcat'], 0, 101));
				$listID = $i['listingID'];
				$sanitizedADR = preg_replace("/[^a-z0-9\-]+/i", "-", $address);
				$permalink = 'http://sfhighrises.idxbroker.com/idx/details/listing/a053/'.$listID.'/'.$sanitizedADR;

				$output .= '<div class="col"><a href="'.$permalink.'">';
				$output .= '<span class="feat-image" style="background-image: url('.$thumb.');"></span>';
				$output .= '<span class="price">'.$price.'</span>';
				$output .= '<h5>'.$address.'</h5>';
				$output .= '<p>'.$excerpt.'</p>';
				$output .= '<span class="btn">Read More</span>';
				$output .= '</a></div>';
			}
			$f++;
		}

		$output .= '</div></div></div>';  
		return $output;	
}
add_shortcode( 'featured_listings', 'sfhr_featured_listings' );
?>