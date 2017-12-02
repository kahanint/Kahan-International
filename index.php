<?php
error_reporting(0);

	$case = strtolower($_GET['case']);
	require_once 'config.php';
	require_once (INCLUDES.'Kahan.php');
	require_once (INCLUDES.'user_agents.php');
	
	$obj = new KahanClass();
	$ua  = new UserAgent();
	
	$is_mobile = ($ua->is_mobile()) ? true : false;

	
	$user_ip 		= $obj->get_client_ip();
	$default_case 	= "";
	
 	$pid 			= 	(!empty($_GET['pid']) && (stristr($_GET['pid'],'dt-') || stristr($_GET['pid'],'DET_')))		?	((stristr($_GET['pid'],'dt-')) ?  substr($_GET['pid'],3) : substr($_GET['pid'],4)) :	$_GET['pid'];	
	$cname 			= 	!empty($_GET['cname'])		?	$obj->decodeseoURL($_GET['cname'])		:	'filling machine';	
	$subcname 		= 	!empty($_GET['subcname'])	?	$obj->decodeseoURL($_GET['subcname']) 	:	'';	
	
	
	SWITCH($case)
	{

	/*Landing All Cases */	
		CASE 'detail':
		
		$proname 		= $obj->decodeseoURL($_GET['pname']);
 		$options['api'] = API."kahanapi.php?case=fetchallproduct&id=".$pid;
		$rsdt 			= $obj->fetch_api_results($options);
		$resdata 		= $rsdt['results'][0];

		if(empty($resdata['pname']))
		{
				header("HTTP/1.1 301 Moved Permanently"); 
				header("location:".DOMAIN);
				exit;
		}
		else if(($_GET['pname'] != ($obj->encodeseoURL($obj->decodeseoURL($resdata['pname'])))) || (substr($_GET['pid'],0,4) == "DET_") || (stristr($_GET['pid'],"Website") != false))
		{
				$pid = (int)$pid; 
 				header("HTTP/1.1 301 Moved Permanently"); 
				header("location:".DOMAIN.$obj->encodeseoURL($resdata['pname'])."/dt-".$pid);
				exit;
		}
		
		$options['api'] = API."kahanapi.php?case=fetchmedia&productid=".$pid;
		
		$rsimgdt	= $obj->fetch_api_results($options);
		$imgdata 	= $rsimgdt['results']['photo'];
		$videodata 	= $rsimgdt['results']['video'];
		
		/*************** Fetch Related *********/
		$options['api'] = API."kahanapi.php?case=relatedProduct&cid=".$resdata['cid']."&subcid=".$resdata['subcid']."&id=".$pid;
		$relatedProduct = $obj->fetch_api_results($options);
		
		$activeMenu		="product";
		
		
		//$descption	   	= html_entity_decode(strip_tags($resdata['desc']));
		//$descption		= (strpos($descption,'eneral Information') == 1) ? substr($descption,20) : $descption;
		//$descption	   	= str_replace(array("\n","\r\n","\r"), '', $descption);
		$meta['keywords']		= trim($resdata['keywords'].",".$resdata['pname'],','); 
		$meta['title'] 			= $resdata['pname']; 
		//$meta['description'] 	= empty($descption) ? "Manufacturer of ".$resdata['pname']." - Kahan Internation is leading exporter of ".$resdata['pname']." from Mumbai , India " : $descption;
	//	echo $newkey = substr($resdata['keywords'],100);
		
	 	$relatedwords = !empty($resdata['keywords']) ? substr($resdata['keywords'],0,strpos($resdata['keywords'], ',', 70)) :  $resdata['pname'];
		$meta['description'] 	= "Manufacturer of ".$resdata['pname']." - Kahan International is one of the leading exporters of ".$relatedwords." in Mumbai, India";
	
		
		
		$inquirytext   			= "I would like to enquire about ".$resdata['pname']." ."; 
		
		require_once (TEMPLATE.'header.php');	
		require_once (TEMPLATE.'detail.php');					
	
		
		BREAK;
	
		CASE 'product':
		
		if(!stristr($_GET['cname'],'-') || strtolower($cname) == 'encapsulation machine' || strtolower($cname) == 'misc equipments' || stristr($_GET['cname'],'machines') || stristr($_GET['subcname'],'machines'))
		{
				$cname = str_replace("machines","machine",$cname);
					
				if(strtolower($cname) == 'encapsulation machine')
					$cname = "Capsule-Filling-Machine";
				else if (strtolower($cname) == 'misc equipments')
					$cname = "misc-equipment";
				
				
				header("HTTP/1.1 301 Moved Permanently"); 
				if(!empty($subcname))
				{
					$subcname = str_replace("machines","machine",$subcname);
					header("location:".DOMAIN."products/".$obj->encodeseoURL($cname)."/".$obj->encodeseoURL($subcname));
				}
				else
				{
					header("location:".DOMAIN."products/".$obj->encodeseoURL($cname));
				}
				exit;
		}
		
		$options['api'] = API."kahanapi.php?case=fetchallcat";
		$sdrs = $obj->fetch_api_results($options);
		$sddata = $sdrs['results'];
		
		$options['api'] = API."kahanapi.php?case=listproduct&cname=".urlencode($cname)."&subcname=".urlencode($subcname);
		$rsdt 			= $obj->fetch_api_results($options);
		$resdata 		= $rsdt['results'];
		$activeMenu		= "product";	
		
		$title 			= empty($subcname) ? $cname : $subcname;
		$meta['title'] 	= ucwords(strtolower($title))." - Manufacturer & Exporter of ".ucwords(strtolower($title)); 
		$meta['page']	= (!empty($subcname)) ? "products/".$obj->encodeseoURL($cname)."/".$obj->encodeseoURL($subcname) : "products/".$obj->encodeseoURL($cname);	



		
		$kywords = array($cname);
		foreach($resdata as $kk => $vv)
		{
			$kywords[] = str_replace('-',' ',$kk);
		}	
		$kywords[] 	   = 'packaging solutions';
		
		$meta['keywords'] 		= implode(',',$kywords);
		$cond_desc 				= !empty($subcname) ? $subcname : $cname;
		$meta['description'] 	= "Manufacturer of ".$cond_desc." - Kahan International is one of the leading exporters of ".$cond_desc." in Mumbai, India";

		
		$inquirytext   			= "I would like to enquire about ..."; 
		
		require_once (TEMPLATE.'header.php');	
		require_once (TEMPLATE.'product.php');					
		
		BREAK;
		
		
		CASE 'contact':
		$activeMenu="contact";	
		
		$meta['title'] = 'Contact of Kahan International'; 
		$meta['keywords'] 	= 'packaging machine, filling , capping , capsule , labeling , sealing , tube filling ,lug capping , tube sealing , bottle washing , packing belt conveyors, turn table, capsule counting , crown capping , screw capping , machine, Mumbai';
		$meta['description'] 	= 'Gala No 6, Ground Floor, Crescent Industrial Estate,Behind Classic Stripes, Chinchpada, Waliv Road, Vasai East - 401202, Mumbai , Maharashtra, India.';
		$meta['page']		= 'contactus';	
		$inquirytext   			= "I would like to enquire about ..."; 
		
		require_once (TEMPLATE.'header.php');	
		require_once (TEMPLATE.'contact.php');					
		
		BREAK;
		
		CASE 'client':
		$activeMenu="client";	
		
		$meta['title'] = 'Clients of Kahan International'; 
		$meta['keywords'] 	= 'Honey filling machine, Pharma Syrup Filling Machine, Chyawanprash Filling Machine, Beer Bottle Crown Capping, Ketchup Bottle Crown Capping, Wine Bottle Capping Machine, Agro Chemical Liquid Filling Macines, CPVC Solvent Cement Filling Machine, Pesticide liquid filling machine, Milk Glass Bottle Crown Capping, Automatic Capsule Filling Machines, Semi-Automatic Capsule Filling Machines,Engine Oil Filling Machine';
		$meta['page']		= 'clients';
		$meta['description'] 	= 'Kahan International is one of the leading manufacturer and exporter of packaging machine for pharmaceutical , food , cosmetic , beverages and many more industries. We have clients from all our India as well abroad .';
		$inquirytext   			= "I would like to enquire about ..."; 
		
		require_once (TEMPLATE.'header.php');	
		require_once (TEMPLATE.'client.php');					
		
		BREAK;
		
		CASE 'videos':
		$activeMenu="videos";
		
		$meta['title'] = 'Tube Filling Machine, Paste Filling Machine, Capsule Filling Machine, Lug Capping Machine, Screw Capping Machine, Ropp Capping Machine'; 
		$meta['keywords'] 	= 'videos, Honey filling machine, Pharma Syrup Filling Machine, Chyawanprash Filling Machine, Beer Bottle Crown Capping, Ketchup Bottle Crown Capping, Wine Bottle Capping Machine, Agro Chemical Liquid Filling Macines, CPVC Solvent Cement Filling Machine, Pesticide liquid filling machine, Milk Glass Bottle Crown Capping, Automatic Capsule Filling Machines, Semi-Automatic Capsule Filling Machines,Engine Oil Filling Machine';
		$meta['description'] 	= 'Kahan International is one of the leading manufacturer and exporter of packaging machine for pharmaceutical, food, cosmetic, beverages and many more industries. There are different videos available with many applications.';
		$meta['page']		= 'videos';
		$inquirytext   		= "I would like to enquire about ..."; 
		
		$options['api'] = API."kahanapi.php?case=fetchvideo";
		$sdrs = $obj->fetch_api_results($options);
		//echo '<pre>';print_r($sdrs);exit;
		require_once (TEMPLATE.'header.php');	
		require_once (TEMPLATE.'videos.php');					
		
		BREAK;
		
		CASE 'about':
		$activeMenu="about";
		
		$meta['title'] = 'Company Overview – Facts, Mission  - Kahan International'; 
		$meta['keywords'] 	= 'Tube Filling Machine, Capsule Filling Machine, Ropp Cap Sealing Machine,Lug Capping Machine, Liquid filling machine,CPVC Solvent Filling Machine, Paste Filling Machine , Screw Capping Machine,Tube Coding Machine,Homogenizer, Stirrer manufacturers';
		$meta['description'] 	= 'Kahan International is one of the leading manufacturer and exporter of packaging machine for pharmaceutical, food, cosmetic, beverages and many more industries. It was founded with a mission to meet challenges in industry with solutions made by Innovation, Ability and experience.';
		$meta['page']		= 'aboutus';
		$inquirytext   			= "I would like to enquire about ..."; 
		
		require_once (TEMPLATE.'header.php');	
		require_once (TEMPLATE.'about.php');					
				
		BREAK;
		
		CASE 'carrers':
		$activeMenu="carrer";
		
		$meta['title'] = 'Carrers @ Kahan International '; 
		
		require_once (TEMPLATE.'header.php');	
		require_once (TEMPLATE.'career.php');					
			
		BREAK;
		
		CASE 'sitemap':
		
		$meta['title'] = 'Kahan International - A Complete Packaging Solution'; 
		
		$meta['keywords'] 	= 'Tube Filling Machine, Capsule Filling Machine, Ropp Cap Sealing Machine,Lug Capping Machine, Liquid filling machine,CPVC Solvent Filling Machine, Paste Filling Machine , Screw Capping Machine,Tube Coding Machine,Homogenizer, Stirrer manufacturers';
		$meta['description'] 	= 'Sitemap of Kahan International,It is one of the leading manufacturer & exporter of packaging machine for food, cosmetic, beverages & much more industries.';
		$meta['page']		= 'site-map';
		$inquirytext   			= "I would like to enquire about ..."; 
		
		$options['api'] = API."kahanapi.php?case=fetchallproduct&sitemap=1";
		$sdrs = $obj->fetch_api_results($options);
		$smdata = $sdrs['results'];
		
		
		
		require_once (TEMPLATE.'header.php');	
		require_once (TEMPLATE.'sitemap.php');					
			
		BREAK;
		
		default:
		
		$meta['title'] 		= 'Kahan International - Leading Manufacturer of Packaging Machine'; 
		
		$meta['keywords'] 	= 'Filling Machine, Capsule Filler, Sealing Machine, Capping Machine, Liquid filling machine, leading manufacturer , Packaging Machine , Kahan International';

		$meta['description'] 	= 'Kahan International is leading manufacturer & exporter of Tube Filling, Capsule Filling, Liquid Filling Machine, Capping machine & Labeling Machine.';
		
		$inquirytext   			= "I would like to enquire about ..."; 
		
		$options['api'] = API."kahanapi.php?case=fetchcat";
		$sdrs 			= $obj->fetch_api_results($options);
		$sddata 		= $sdrs['results'];
		
		$options['api'] = API."kahanapi.php?case=fetchFeature";
		$data 			= $obj->fetch_api_results($options);
		$featureData	= $data['results'];
		
		$activeMenu		= "home";	
		
		require_once (TEMPLATE.'header.php');	
		require_once (TEMPLATE.'home.php');	
			
		BREAK;
	}
	
	$options['api'] = API."kahanapi.php?case=fetchallproduct&is_syn=1&seourl=1";
	$tpdata = $obj->fetch_api_results($options);
	$topData = $tpdata['results'];
		
	require_once (TEMPLATE.'footer.php');
	
	/* Insert into search log
	if($case != 'booking-status'  && $case != 'order-summary' && $case != 'enc-pay' && $case != 'recentbooking' && $case != 'mobilecheck' && $case != 'terms_condition' && $case != 'redeem_detail')
	{
		$pop->insert_search_log($en_id,$en_name,$typ_flag,$device_type,$page_type,$selected_city,$category_id);
	}
	*/
?>