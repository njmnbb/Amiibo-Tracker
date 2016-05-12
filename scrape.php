<?php 
	function scrape($urlArray) {

	    // Array of stock information to be returned later
	    $inStockArray = array();

	    foreach ($urlArray as $key => $url) {

	        // Going to next item if there is no link to figure
	        if($url == NULL) {
	            $inStockArray[$key] = 'Information unavailable';
	            continue;
	        }

	        switch ($key) {
	            case 'amazon':

	                // Getting URL content and checking if page returns a 520 error
	                $html = file_get_contents($url, TRUE);
	                if($html == FALSE) {
	                    $inStockArray[$key] = 'Information unavailable';
	                    break;
	                }

	                $domDoc = new DOMDocument();

	                libxml_use_internal_errors(TRUE);
	                if(!empty($html)) {
	                    $domDoc->loadHTML($html);
	                    libxml_clear_errors();

	                    $xpath = new DOMXPath($domDoc);

	                    // Grabbing figure's Amazon information and seeing if it is in stock
	                    $amazonRow = $xpath->query('//input[@id = "add-to-cart-button"]');

	                    if($amazonRow[0]->getAttribute('value') == 'Add to Cart') $inStockArray[$key] = 'In stock!';
	                    else $inStockArray[$key] = 'Not in stock';
	                }

	                break;

	            case 'bestbuy':

	                // Setting user agent because Best Buy is dumb
	                ini_set('user_agent', 'PHP');

	                // Getting URL content and checking if page returns a 520 error
	                $html = file_get_contents($url, TRUE);
	                if($html == FALSE) {
	                    $inStockArray[$key] = 'Information unavailable';
	                    break;
	                }

	                $domDoc = new DOMDocument();

	                libxml_use_internal_errors(TRUE);
	                if(!empty($html)) {
	                    $domDoc->loadHTML($html);
	                    libxml_clear_errors();

	                    $xpath = new DOMXPath($domDoc);
	                    // Grabbing figure's Best Buy infomation and seeing if it is in stock
	                    $bestbuyRow = $xpath->query('//div[@data-add-to-cart-message]');

	                    if($bestbuyRow[0] == NULL) $inStockArray[$key] = 'Not in stock';
	                    elseif($bestbuyRow[0]->getAttribute('data-add-to-cart-message') == 'Add to Cart') $inStockArray[$key] = 'In stock!';
	                    else $inStockArray[$key] = 'Not in stock';
	                }

	                break;
	            
	            case 'walmart':

	                // Setting user agent because Walmart is dumb
	                ini_set('user_agent', 'PHP');

	                // Getting URL content and checking if page returns a 520 error
	                $html = file_get_contents($url, TRUE);
	                if($html == FALSE) {
	                    $inStockArray[$key] = 'Information unavailable';
	                    break;
	                }

	                $domDoc = new DOMDocument();

	                libxml_use_internal_errors(TRUE);
	                if(!empty($html)) {
	                    $domDoc->loadHTML($html);
	                    libxml_clear_errors();

	                    $xpath = new DOMXPath($domDoc);
	                    // Grabbing figure's Walmart infomation and seeing if it is in stock
	                    $walmartRow = $xpath->query('//button[@id = "WMItemAddToCartBtn"]');

	                    if($walmartRow[0]->nodeValue == " Add to Cart\n") $inStockArray[$key] = 'In stock!';
	                    else $inStockArray[$key] = 'Not in stock';
	                }

	                break;

	            case 'gamestop':

	                // Setting user agent because GameStop is dumb
	                ini_set('user_agent', 'PHP');

	                // Getting URL content and checking if page returns a 520 error
	                $html = file_get_contents($url, TRUE);
	                if($html == FALSE) {
	                    $inStockArray[$key] = 'Information unavailable';
	                    break;
	                }

	                $domDoc = new DOMDocument();

	                libxml_use_internal_errors(TRUE);
	                if(!empty($html)) {
	                    $domDoc->loadHTML($html);
	                    libxml_clear_errors();

	                    $xpath = new DOMXPath($domDoc);
	                    $gamestopRow = $xpath->query('//div[@class = "buttonna"]');

	                    if($gamestopRow->length == 0) $inStockArray[$key] = 'In stock!';
	                    else $inStockArray[$key] = 'Not in stock';
	                }

	                break;

	            default:
	                break;
	        }
	    }

	    return $inStockArray;
	}
?>