<?php
### Class for database connection.
// Return Record type

require_once("Config.php");

class Database
{
	var $result;
	private $defaultDebug = false;
	private $user = "kahanint_kahan";
	private $pass = "kahan@123$";
	private	$server = "localhost";
	public  $data = array();
	public $defaultReturn = true;
	public $errMsg = '';
	
	function __construct()
	{
	
		
	}
	
	public function sqlexecute($options,$node=false,$debug= -1,$extra=false,$otions=false,$die_on_error=true)
	{
		//$this->mtStart = $this->getMicroTime();
		try {
				
				$this->links = new PDO('mysql:host=localhost;dbname=kahanint_dbkahan', $this->user, $this->pass);
				// set the PDO error mode to exception
				$this->links->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				
				$result = $this->links->prepare($options['sql']);
				
				if($options['debug']>0 || $_GET['sql'] == 'P')
				{
					$sql =$options['sql'];
					foreach($options['barr'] as $k =>$v)
					{
						$sql = str_replace($k,"'".$v."'",$sql);
					}
					echo "<pre>";
					print_R($options);
					print_R($sql);
					exit;
				}
				$result->execute($options['barr']);
				
				
				
				if($debug>0)
				{
					$this->debugQuery($options['sql']);
				}
				
			}
		catch(PDOException $e)
			{
				echo "Connection failed: " . $e->getMessage();
			}



		if($options['lastinsert'] && $result !== false)
		{	
			$result->lastinsert = $this->links->lastInsertId();
		}
		if($extra['updatedRow'] && $result !== false)
		{	
			$result = mysql_affected_rows();
		}
	
		if(empty($options['persist']))
			$this->links = null;
			
		return $result;
	}



	## Internal method to get the current time.
	## @return The current time in seconds with microseconds (in float format).

	function getMicroTime()
	{
		list($msec, $sec) = explode(' ', microtime());
		return floor($sec / 1000) + $msec;
	}

	function send_mail($sender_name, $from, $to, $subject, $content, $cc = '', $source = '')
	{
		$mail_sent = false;
				
		if(!$mail_sent)
		{
			$headers = "From:" . $from . "\r\n";
			$headers .= "Cc:". $cc . "\r\n";;
			$headers .= "Content-Type: text/html; charset=iso-8859-1\n";
			
			$mail_sent = mail($to,$subject,$content,$headers);
		}
		
		return $mail_sent;
	}
}
