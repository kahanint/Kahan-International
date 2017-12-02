<?php

	error_reporting(E_ALL);
	require_once 'class/Kahan.php';
	
	$json = json_encode(array("results" =>array("msg" =>"Invalid Parameter Passed","error" =>1)));
	
	$kahan = new Kahan();
	

	$post_data=array(); 
	 if($_POST)	
	 $post_data =json_decode($_POST['serial'],true);
	 $get_data=array(); 
	 if($_GET)	
	 $get_data =$_GET;
	
	$params = array_merge($get_data,$post_data);

//	print_R($params);
//	echo 'test';
//	exit;
	/*
	if(API_AUTHENTICATION)
	{
		$kahan->authenticate_api($params);
	}
	*/
	$case = $params['case'];
	$params = $kahan->getslashes($params);
	SWITCH($params['case'])
	{
		
		CASE 'fetchallcat':
		CASE 'fetchcat':
		CASE 'fetchsubcat':
		CASE 'listproduct':
		CASE 'fetchallsubcat':
		CASE 'fetchlisting':
		CASE 'fetchallproduct':
		CASE 'inscat':
		CASE 'inssubcat':
		CASE 'insenquiry':
		CASE 'insproduct':
		CASE 'insproductsyn':
		CASE 'insmedia':
		CASE 'delte':
		CASE 'fetchmedia':
		CASE 'listenquiry':
		CASE 'login':
		CASE 'sendContact':
		CASE 'fetchallinqry':
		CASE 'fetchvideo':
		CASE 'fetchFeature':
		CASE 'addfeature':
		CASE 'relatedProduct':
		CASE 'fetchimagelist':
		
			$kahan->$case($params);
			if($kahan->data[$case])
			{		
				if($params['format'] =='plugin')
				{
					$json = json_encode(array("files"=>$kahan->data[$case]));
				}
				else
				{
					$json = json_encode(array("results"=>$kahan->data[$case]));
				}
			}
			
		BREAK;
		
		
		/*	
		fetchcat : http://localhost/kahan/API/kahanapi.php?case=fetchcat
		
		fetchallsubcat : http://localhost/kahan/API/kahanapi.php?case=fetchallsubcat
		fetchcat : http://localhost/kahan/API/kahanapi.php?case=fetchlisting&catid=1
		
		fetchlisting : http://localhost/kahan/API/kahanapi.php?case=fetchlisting&catid=1
		
		INSCAT : http://localhost/kahan/API/kahanapi.php?case=inscat&catname=pinak+%20shah%20+%20csas%27dsa%27s&desc=testest+testes+test
		
		insmedia :
		http://pinakshah.jdsoftware.com/pktest/API/kahanapi.php?case=insmedia&productid=12&productname=pinak+%20shah%20+%20csas%27dsa%27s&desc=testest+testes+test&url=asdfsad.jpg&mediaflag=1
		
		
		inssubcat: http://localhost/kahan/API/kahanapi.php?case=inssubcat&subcatname=keyur&desc=testest+testes+test&parentid=1&catname=pinak
		
		INSENQUIRY : http://localhost/kahan/API/kahanapi.php?case=insenquiry&name=keyur&number=8976496250&email=shpinak@gmail.com&message=hi+test&productname=KI-SLF%20Series%202-4H%20Liquid%20Filling%20machine
		
		INSPRODUCT : http://localhost/kahan/API/kahanapi.php?case=insproduct&productname=pinak&groupname=architect&groupdesc=pinaklead&parentid=3&parentname=Filling%27+machine&desc=hit%20this%20is%20test&spec=30mm&pdf=www.justdial.com&profilepic=image.justdial.com&is_syn=1&syn_id=1101
		
		fETCHALLcat : http://localhost/kahan/API/kahanapi.php?case=fetchallcat
		
		fetchallproduct : http://localhost/kahan/API/kahanapi.php?case=fetchallproduct
		*/

		DEFAULT :
		
			$json = '{"results":{},"error":"No Valid Action Defined."}';
	}
	
	header('Content-type: application/json');
	echo $json;	
	exit;
?>
