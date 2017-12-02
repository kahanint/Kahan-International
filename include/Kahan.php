<?php

class KahanClass {

    private $API_id = 'jdapp';
    private $SECRET_key = 'Ju5td!@l2@1S';
	
	public $_tags = array();    
    public $_data = array();   
    public $_case = '';
    public $_city = '';  
    public $_catid = '';	  

    public function __construct($case=false)
    {
        if(!empty($case))
        {
            $this->_case = $case;
         /*   $this->getMetaData();
            global $cagetory_id;
            $this->_catid = $cagetory_id;
		*/
        }
    }
	
	function encodeseoUrl($string) {
		
		//Lower case everything
		//$string = strtolower($string);
		
		//Make alphanumeric (removes all other characters)
		$string = preg_replace("/[^A-Za-z0-9_\s-]/", "", strtolower($string));
		
		//Clean up multiple dashes or whitespaces
		$string = preg_replace("/[\s-]+/", " ", $string);
		
		//Convert whitespaces and underscore to dash
		$string = preg_replace("/[\s_]/", "-", $string);
		return $string;
	}
	
	function decodeseoURL ($string) {
		
		$string = preg_replace("/[^A-Za-z0-9_\s-]/", "", $string);
		//Convert whitespaces and underscore to dash
		$string = preg_replace("/[-]/", " ", $string);
		return $string;
	}
	
    function truncate($text, $length) {
    	   $length = abs((int)$length);
    	   if(strlen($text) > $length) {
    	      $text = preg_replace("/^(.{1,$length})(\s.*|$)/s", '\\1...', $text);
    	   }
    	   return($text);
    }

    function fetch_api_results($options)
    {
		if(!empty($_GET['trace']))
    	{
    		echo $api . '<br>';
    	}
    	
    	$ch = curl_init();
    	curl_setopt($ch, CURLOPT_URL, $options['api']);
    	
   		if(!empty($par))
		{
			curl_setopt ($ch, CURLOPT_POST, 1);
			curl_setopt($ch, CURLOPT_BINARYTRANSFER, TRUE); 
			curl_setopt ($ch, CURLOPT_POSTFIELDS, array('serial'=>json_encode($options['par'])));
		}
	
    	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    	if($timeout > 1) {
    		curl_setopt($ch, CURLOPT_TIMEOUT, $options['timeout']);
        } else {
            curl_setopt($ch, CURLOPT_TIMEOUT, 10);
        }
    	$result = curl_exec($ch);
        $info = curl_getinfo($ch);
        $data['url'] = $info['url'];
        $data['total_time'] = $info['total_time'];
      /*  if(RESPONSELOG == 1) { 
			if (strpos( $info['url'], 'getfilter') !== false)
					$this->addResponseLogs($data);
        }
       */     
    	curl_close ($ch);
    	
  		$result = json_decode($result, true);
    	
    	return $result;
    }
	
    /*    
    function calculateHash($posted, $salt) 
    {
            $hashSequence = "key|txnid|amount|productinfo|firstname|email|udf1|udf2|udf3|udf4|udf5|udf6|udf7|udf8|udf9|udf10";
            $hashVarsSeq = explode('|', $hashSequence);
            $hash_string = '';
            foreach ($hashVarsSeq as $hash_var) {
              $hash_string .= isset($posted[$hash_var]) ? $posted[$hash_var] : '';
              $hash_string .= '|';
            }
            $hash_string .= $salt;
            $hash = strtolower(hash('sha512', $hash_string));
            return $hash;
    }  

   
    public function getMetaData()
    {
        // print_r($this->_data->results);exit;

            SWITCH($this->_case)
                {
                        CASE 'events':
                      
                            $this->_tags['title'] = "Live & Upcoming Events in ".$this->_city." | Book Tickets Online | Justdial Entertainment";                           
                            $this->_tags['desc'] = "Book Live & upcoming event tickets & passes online for concerts, exhibitions, theaters, plays happening today, tomorrow and on weekends in ".$this->_city.". Check event calendar for latest, trending & popular events in Nightlife, Comedy, Music & more at Justdial.";
                            $this->_tags['key']   = "entertainment, event tickets, book tickets online, concert tickets, live events, upcoming events, music events, comedy events, sports, exhibitions, book event passes online, current events in ".$this->_city.", find music events and festivals happening in ".$this->_city.", events happening today in ".$this->_city.", events happening tomorrow in ".$this->_city.", events on weekends in ".$this->_city;
							
                            $this->_tags['og_img'] = IMG_PATH_ENTER."JD_Logo_2x.png";
                            
                        BREAK;
						
					                 
                               
                        BREAK;   

                        CASE 'recentbooking':

                                     $this->_tags['title'] = "Book events and movie tickets online | Justdial Entertainment";
                                     $this->_tags['desc']  = "Find information on show timings and book online tickets for movies, plays, music events and exhibitions on Justdial Entertainment.";
                                     $this->_tags['key']   = "Book movie tickets online, Find movie show timings, Information on music events, exhibitions and plays, Art and exhibition events happening in India";
                                     $this->_tags['og_img'] = IMG_PATH_ENTER."JD_Logo_2x.png";
                                    
                        BREAK;
	      
                }
    }

	//* Forming URLs from Event Name /
	function replspecialchar($string) 
	{
		$string = preg_replace('/[^A-Za-z0-9\-]/', ' ', $string); // Removes special chars.
		$string = str_replace("-", " ", $string);
		$string = preg_replace('!\s+!', ' ', $string); // Replaces multiple spaces with single space
		$string = str_replace(' ', '-', trim($string, "- ")); // Replaces all spaces with hyphens.
		return $string;
	}
	//* Forming URLs from Event Name /
	
	
	//* Handling ALT Names /
	function replspecialchar_alt($string) 
	{
		$string = preg_replace('/[^A-Za-z0-9\-]/', ' ', $string); // Removes special chars.
		$string = str_replace("-", " ", $string);
		$string = preg_replace('!\s+!', ' ', $string); // Replaces multiple spaces with single space
		//$string = str_replace(' ', '-', trim($string, "- ")); // Replaces all spaces with hyphens.
		return $string;
	}
	//* Handling ALT Names /
	 
	
	function curPageURL() 
	{
		$pageURL = 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
		return $pageURL;
	}

	
	
	function checkIfWaporT()
	{
		$user_agent = strtolower($_SERVER['HTTP_USER_AGENT']);
		if((stristr($user_agent,'android 2.3') !== false || stristr($user_agent,'gt-s5830') !== false || stristr($user_agent,'android 5') !== false || (stristr($user_agent,'android 4') !== false && stristr($user_agent,'htc_one_dual_sim') == false)   || stristr($user_agent,'iphone os 4') !== false || stristr($user_agent,'iphone os 5') !== false || stristr($user_agent,'iphone os 6') !== false || stristr($user_agent,'iphone os 7') !== false || stristr($user_agent,'iphone os 8') !== false ))
		{
			$redirectToT   =  "yes";
		}
		else if((stristr($user_agent,'windows') !== false && stristr($user_agent,'msie 10') !== false) || stristr($user_agent,'BB10') !== false)
		{
			$redirectToT =   "yes";
		}
		else 
		{
			$redirectToT = "no";
		}
		return 	$redirectToT;
	}

    public function addResponseLogs($data){
      $content = '';
      $fileLocation =  DOC_ROOT.'logs/'.date('ymd').'.txt';
      $file = fopen($fileLocation,"a+");
      //chmod($fileLocation, 0777);
     
      $content .= "API Name : ".$data['url']." \n";
      $content .= "Response Time : ".$data['total_time']." \n";
      $content .= "Date : ".date('Y-m-d H:i:s')." \n";
      $content .= "\n";
      $content .= "-------------------------------------------------------";
      $content .= "\n";
      fwrite($file,$content);
      fclose($file); 
    }
    
	public function insert_search_log($en_id,$en_name,$typ_flag,$device_type,$page_type,$selected_city,$category_id)
	{
		$server_name = $_SERVER['SERVER_NAME'] ;
		$referrer_url = $_SERVER['HTTP_REFERER'];
		$user_agent = $_SERVER['HTTP_USER_AGENT'];
        $associate_name = $_GET['associate'];


		$bots = 0;
		
		if (stristr($user_agent,'YandexBot/3.0; +http://yandex.com/bots') !== false) {
		    $bots = 1;
		}else if(stristr($user_agent,'bingbot/2.0; +http://www.bing.com/bingbot.htm') !== false){
			$bots = 1;

		}else if(stristr($user_agent,'googlebot') !== false){

			$bots = 1;
		}else if(stristr($user_agent,'adsbot') !== false){
			$bots = 1;	

		}else if(stristr($user_agent,'Mediapartners-Google') !== false){
			$bots = 1;

		}
		
		$user_ip = get_client_ip();
		
		if(strpos($server_name,".jdsoftware.com") == FALSE && strpos($server_name,"eta.justdial.com") == FALSE && strpos($referrer_url,".jdsoftware.com") == FALSE && strpos($server_name,"eta.justdial.com") == FALSE)
		{ 
		 	  $url = ENTERTAINMENT_API_LINK."entertainment.php?case=insert_searchlog&uname=".urlencode($_COOKIE['inLogName'])."&umobile=".urlencode($_COOKIE['inLogMobile'])."&uemail=".urlencode($_COOKIE['inLogEmail'])."&entity_id=".urlencode($en_id)."&en_name=".urlencode($en_name)."&ipaddr=".urlencode($user_ip)."&city=".urlencode($selected_city)."&server_name=".urlencode($server_name)."&ref_url=".urlencode($referrer_url)."&act_url=".urlencode($_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'])."&typ_flag=".urlencode($typ_flag)."&mode=".urlencode($device_type)."&category_id=".urlencode($category_id)."&page_type=".urlencode($page_type)."&user_agent=".urlencode($user_agent)."&bot=".$bots."&associate_name=".$associate_name;
			$data = $this->fetch_api_results($url,1);
		}
		
	}
	
	*/
	public function get_client_ip()
	{
		if ($_SERVER['HTTP_X_FORWARDED_FOR'])
		{
			$ip_address = $_SERVER['HTTP_X_FORWARDED_FOR'];
		}
		else if ($_SERVER['HTTP_TRUE_CLIENT_IP'])
		{
			$ip_address = $_SERVER['HTTP_TRUE_CLIENT_IP'];
		}
		else
		{
			$ip_address = $_SERVER['REMOTE_ADDR'];
		}
		//$ip_address = get_actual_ip($ip_address);
		return $ip_address;
	}
	
	public function sendmail($data)
	{
		
		if(stristr(DOMAIN,'kahaninternational') === false){
			return 1;
		}
		
		$data['subname'] = !empty($data['dcname']) ? $data['dcname'] : $data['dname'];	
		$to = 'shpinak@gmail.com,purvik@kahaninternational.com';
		$subject = $data['subname'].' - Inquiry' ;
		
		
		$headers  = 'MIME-Version: 1.0' . "\r\n";
		$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
		$headers .= 'From: inquiry@kahaninternational.com' . "\r\n" .
		'Reply-To: inquiry@kahaninternational.com' . "\r\n" .
		'X-Mailer: PHP/' . phpversion();
		
		$message = '
		<html><body>
		<p>Hello Team,</p>
		<p>'.$data["msgs"].'</p>
		<p>
			<table>
			<tr align="left"><th>Name</th>			<td>	: '.$data["dname"].'</td></tr>
			<tr align="left"><th>Company name</th>	<td>	: '.$data["dcname"].'</td></tr>
			<tr align="left"><th>Number</th>		<td>	: '.$data["dmobile"].'</td></tr>
			<tr align="left" ><th>Email</th>		<td>	: '.$data["demail"].'</td></tr>
			</table>
		</p>
		
		<p>Thanks</p>
		</body></html>';
			
		if(mail($to, $subject, $message, $headers))
		{
			$rs = $this->autoreplay($data);
			return $rs;
		}
		else
			return 0;
	}
	
	public function autoreplay($data)
	{
		
		$to = $data["demail"];
		$subject = 'Request Recieved - '.$data['subname'];
		
		
		$headers  = 'MIME-Version: 1.0' . "\r\n";
		$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
		$headers .= 'From: sales@kahaninternational.com' . "\r\n" .
		'Reply-To: sales@kahaninternational.com' . "\r\n" .
		'X-Mailer: PHP/' . phpversion();
		
		$message = '
		<html><body>
		<p>Dear '.$data["dname"].',</p>
		<p>We would like to acknowledge that we have received your request .<br>Our representative will be reviewing your request and will send you a personal response.</p>
		<p>Thank you for your patience.</p>
		
		<p>Sincerely,<br>
		Kahan International Support Team</p>
		</body></html>';
			
		if(mail($to, $subject, $message, $headers))
			return 1;
		else
			return 0;
	}
}

?>
