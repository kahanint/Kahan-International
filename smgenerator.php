<?php
	error_reporting(E_ALL);

	require_once 'config.php';
	require_once (INCLUDES.'Kahan.php');
	$obj = new KahanClass();

	
	$options['api'] = API."kahanapi.php?case=fetchallproduct";
		
	$alldata	= $obj->fetch_api_results($options);
	
	$options['api'] = API."kahanapi.php?case=fetchallcat";
	$otherlinks	= $obj->fetch_api_results($options);
	
	//print_r($alldata['results']);
	
	//create the xml document
	$xmlDoc = new DOMDocument();


	//create the root element
	$root = $xmlDoc->appendChild($xmlDoc->createElement("urlset"));

	$root->appendChild($xmlDoc->createAttribute("xmlns"))->appendChild($xmlDoc->createTextNode("https://www.sitemaps.org/schemas/sitemap/0.9"));
	$root->appendChild($xmlDoc->createAttribute("xmlns:image"))->appendChild($xmlDoc->createTextNode("http://www.google.com/schemas/sitemap-image/1.1"));
	$root->appendChild($xmlDoc->createAttribute("xmlns:video"))->appendChild($xmlDoc->createTextNode("http://www.google.com/schemas/sitemap-video/1.1"));
  
	
	foreach($alldata['results'] as $dta)
	{
		$link = DOMAIN.$obj->encodeseoURL($dta['pname'])."/dt-".$dta['pid'];
		
		
		
		  //create a tutorial element
		  $product = $root->appendChild($xmlDoc->createElement("url"));
		
		  $product->appendChild($xmlDoc->createElement("loc", $link));

   	    if(!empty($dta['img']))
		{
			$miage = $product->appendChild($xmlDoc->createElement("image:image"));		   		
			$miage->appendChild($xmlDoc->createElement("image:loc", PROIMG.$dta['img']));
			$miage->appendChild($xmlDoc->createElement("image:caption", $dta['pname']));
		}
		

		if(!empty($dta['pvideo']))
		{
			$ytimg 		= explode('embed/', $dta['pvideo']);
			$ytubeimg = "https://i.ytimg.com/vi/$ytimg[1]/mqdefault.jpg";
				
			$vdeo = $product->appendChild($xmlDoc->createElement("video:video"));		   		
			$vdeo->appendChild($xmlDoc->createElement("video:content_loc", $dta['pvideo']));
			$player_loc = $vdeo->appendChild($xmlDoc->createElement("video:player_loc",$dta['pvideo']));
			$player_loc->appendChild($xmlDoc->createAttribute("allow_embed"))->appendChild($xmlDoc->createTextNode("yes"));
			$player_loc->appendChild($xmlDoc->createAttribute("autoplay"))->appendChild($xmlDoc->createTextNode("ap=1"));
			$vdeo->appendChild($xmlDoc->createElement("video:thumbnail_loc",$ytubeimg));
			$vdeo->appendChild($xmlDoc->createElement("video:title",$dta['pname']));
			
		/*	if($dta['desc'])
			{
				$descption	   	= strip_tags($dta['desc']);
				$descption 		= (strpos($descption,'eneral Information') == 1) ? substr($descption,20) : $descption;
				
				$product->appendChild($xmlDoc->createElement("video:description",$descption));
			}
		*/	
		}

		$product->appendChild($xmlDoc->createElement("lastmod",date('Y-m-d')));
		$priority = ($dta['is_syn']) ? '1' : '0.9';
		$product->appendChild($xmlDoc->createElement("priority",$priority));
	}
	
	$cname="";
	foreach($otherlinks['results'] as $othdta)
	{
		
		
		 
			
		 $cname = $obj->encodeseoURL($othdta['cname']);
		 $link = DOMAIN."products/".$cname;
		$product = $root->appendChild($xmlDoc->createElement("url"));	
   		$product->appendChild($xmlDoc->createElement("loc", $link));
		$product->appendChild($xmlDoc->createElement("lastmod",date('Y-m-d')));
		$product->appendChild($xmlDoc->createElement("priority",'0.8'));
		
		foreach($othdta['child'] as $value)
		{
				
			$subcname = $obj->encodeseoURL($value['cname']);
			$link = DOMAIN."products/".$cname."/".$subcname;
			
			$product = $root->appendChild($xmlDoc->createElement("url"));	
			$product->appendChild($xmlDoc->createElement("loc", $link));
			$product->appendChild($xmlDoc->createElement("lastmod",date('Y-m-d')));
			$product->appendChild($xmlDoc->createElement("priority",'0.8'));
		}
	}
			$product = $root->appendChild($xmlDoc->createElement("url"));	
			$product->appendChild($xmlDoc->createElement("loc", 'https://www.kahaninternational.com'));
			$product->appendChild($xmlDoc->createElement("lastmod",date('Y-m-d')));
			$product->appendChild($xmlDoc->createElement("priority",'1'));

	header("Content-Type: text/plain");

//make the output pretty

$xmlDoc->formatOutput = true;
//echo $xmlDoc->saveXML();
$xmlDoc->save('sitemap_temp.xml');


$previous_sitemp = filesize("sitemap.xml");
$new_sitemp 	 = filesize("sitemap_temp.xml");
if($new_sitemp >= $previous_sitemp)
{
	rename ("sitemap.xml","sitemap".date('d-m-Y').".xml");
	rename ("sitemap_temp.xml","sitemap.xml");
	
	
	$to = 'shpinak@gmail.com,purvik@kahaninternational.com';
	$subject = 'Sitemap - kahaninternational';	
			
	$headers  = 'MIME-Version: 1.0' . "\r\n";
	$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
	$headers .= 'From: info@kahaninternational.com' . "\r\n" .
	'Reply-To: info@kahaninternational.com' . "\r\n" .
	'X-Mailer: PHP/' . phpversion();
		
	$message = '
	<html><body>
	<p>Site Map is successfully created.</p>
	<p>The size of preview sitemap was '.$previous_sitemp.'</p>
	<p>The size of NEW sitemap is '.$new_sitemp.'</p>
	
	<p>Thanks</p>
	</body></html>';
	
	if(mail($to, $subject, $message, $headers))
		echo "Successfully Created";
		else
		echo "There is some issue";
		
}

?>