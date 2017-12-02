<?php
require_once('class/Database.php');

class Kahan extends Database
{	
	private $_domain = DOMAIN;
	
	
	private $_avdarray = array('desc','spec','groupdesc');
	/** This Function is used to get the all artists from tbl_artist_master  **/
	
	public function getslashes($d,$avdarray =false)
	{
			$res = array();
			
			$avdarray = (!empty($this->_avdarray) ? $this->_avdarray : array());
			
			foreach($d as $key=>$value)
			{	
				if(!in_array($key,$avdarray))
				{
					$value     = preg_replace('/\s+/',' ', $value);
					$res[$key] = addslashes(stripslashes(preg_replace("/[^a-zA-Z0-9 !@#$%^&*()-_+=|:';\"<,>.?\/{}\[\]]+/", "", $value)));  
				}
				else
				{
					$res[$key] = $value; 
				}
			}
			return $res;
	}
	
	
	public function fetchimagelist($d){
		
			if($d['module'] == 'productimg'){
				$options['sql'] ="SELECT profilepic from ".KAHAN_DB.".tbl_product where profilepic != ''";
			}
			else
			{
				//$options['sql'] ="SELECT productname,productid,profilevideo,profilepic,description,videoname from ".KAHAN_DB.".tbl_product WHERE active_flag = 1 AND profilevideo != ''";
			}
			$rs = $this->sqlexecute($options,1);
			$arr = array();
			if($rs->rowCount() > 0)
			{
				while($row=$rs->fetch(PDO::FETCH_ASSOC))
				{
						$arr[]	 = $row['profilepic'];

				}
			}
		$this->data['fetchimagelist'] = $arr;
	}
	public function fetchvideo($d){
			
			if(isset($d['srchtrm'])){
			
				$srchtrm = str_replace(' ','%',$d['srchtrm']);
				
				$options['sql'] ="SELECT productname,productid,profilevideo,profilepic,description,videoname,videoduration,videodate from ".KAHAN_DB.".tbl_product WHERE product_search LIKE '%{$srchtrm}%' AND active_flag = 1 AND profilevideo != ''";
			}else{
				$options['sql'] ="SELECT productname,productid,profilevideo,profilepic,description,videoname,videoduration,videodate from ".KAHAN_DB.".tbl_product WHERE active_flag = 1 AND profilevideo != ''";
			}
			$rs = $this->sqlexecute($options,1);
			$arr = array();
			if($rs->rowCount() > 0)
			{
				
				while($row=$rs->fetch(PDO::FETCH_ASSOC))
				{
					if($d['seourl'])
					{
						$arr[$row['videoname']]['keywords']	 = $row['videoname'];
						$arr[$row['videoname']]['link']	 	 = $row['profilevideo'];
						
						$arr[$row['videoname']."kI"]['keywords']	 = $row['videoname']." Youtube";
						$arr[$row['videoname']."kI"]['link']	 	 = $row['profilevideo'];

					}
					else
					{
						$arr[]=$row;
					}
				}
				if($d['seourl'])
				{
					shuffle($arr);
					$arr = array_values($arr);
				}
						
			}
		
		$this->data['fetchvideo'] = $arr;
	}
	
	public function relatedProduct($data){
	
		$options['sql'] ="SELECT * from ".KAHAN_DB.".tbl_product where active_flag = 1 and catid = {$data['cid']} AND productid != {$data['id']} order by is_syn /*,FIELD(subcatid,{$data['subcid']}) */ desc LIMIT 4";
		$rs = $this->sqlexecute($options);

		if($rs->rowCount() > 0)
		{
			while($row=$rs->fetch(PDO::FETCH_ASSOC))
			{
				$pid 		 			 = $row['productid'];
				$arr[$pid]['pid']   	 = $row['productid'];
				$arr[$pid]['pname'] 	 = $row['productname'];
				$arr[$pid]['desc']  	 = $row['description'];
				$arr[$pid]['gname'] 	 = $row['groupname'];
				$arr[$pid]['gdesc'] 	 = $row['group_description'];
				$arr[$pid]['img']   	 = $row['profilepic'];
				$arr[$pid]['pvideo']   	 = $row['profilevideo'];
				$arr[$pid]['spec']   	 = $row['specification'];
				$arr[$pid]['cname'] 	 = $row['cat_search'];
				$arr[$pid]['cid'] 	  	 = (int)$row['catid'];
				$arr[$pid]['subcid'] 	 = (int)$row['subcatid'];
				$arr[$pid]['subcname']   = $row['subcat_search'];
			}	
		}
				
		$arr = array_values($arr);
		$this->data['relatedProduct'] = $arr;
	
	}
	
	public function sendContact($d){
	
		$arr = array();
	
		
		 	$options['sql'] ="INSERT INTO ".KAHAN_DB.".tbl_enquiry (name, email, number,message,mailsent,companyname,form_type,updatedOn)  VALUES (:name, :email, :number,:message,:mailsent,:companyname,:form_type,NOW())";
			
			$options['barr'] = array(
				":email" 		=> $d['demail'],
				":number" 		=> $d['dmobile'],
				":name" 		=> $d['dname'],
				":companyname" 	=> $d['dcname'],
				":form_type" 	=> $d['form_type'],
				":message" 		=> $d['msgs'],
				":mailsent"		=> $d['mail']
				);
			
			
			$rs = $this->sqlexecute($options);
		
		
		if($rs)
		{
			$arr['msg'] = "successful";
			$arr['error'] = 0;
		}
		
		$this->data['sendContact'] = $arr;
	}
	
	public function fetchallinqry(){
	
		$options['sql'] ="SELECT * from ".KAHAN_DB.".tbl_enquiry order by isread desc, updatedOn desc";
			$rs = $this->sqlexecute($options,1);
			$arr = array();
			if($rs->rowCount() > 0)
			{
				$i = 0;
				while($row=$rs->fetch(PDO::FETCH_ASSOC))
				{
					$arr[$i]=$row;
					
					
					$i++;
				}	
			}
			
		$this->data['fetchallinqry'] = $arr;
		
	}
	

	
	public function fetchallcat($d)
	{
		$arr = array();
		if(empty($d['catid']))
		{
			$options['sql'] ="SELECT *  from ".KAHAN_DB.".tbl_category	where active_flag = 1";
		}
		else
		{
			$options['sql'] ="SELECT *  from ".KAHAN_DB.".tbl_category	where active_flag = 1 and (catid = :id or parentid = :id)";
			$options['barr'] = array(":id" => $d['catid']);
		}
		$rs = $this->sqlexecute($options);
		
			if($rs->rowCount() > 0)
			{
				$i = 0;
				while($row=$rs->fetch(PDO::FETCH_ASSOC))
				{
					
					$catid 	= $row['catid'];
					if(empty($row['parentid']))
					{
						$arr[$catid]['cid']    		= $row['catid'];
						$arr[$catid]['cname']		= ucwords(strtolower($row['catname']));
						$arr[$catid]['desc']		= $row['description'];
					}
					else
					{
						
						$parentid	=	$row['parentid'];
						$cid			=	$row['catid'];
						$arr[$parentid]['child'][$cid]['cid']   	= $row['catid'];
						$arr[$parentid]['child'][$cid]['cnamedis']	= ucwords(strtolower($row['catname']));
						$arr[$parentid]['child'][$cid]['cname']		= $row['catname_search'];
						$arr[$parentid]['child'][$cid]['desc']		= $row['description'];
					}
				}	
			}
			
			foreach($arr as $key=>$value)
			{
				$arr[$key]['child'] = 	array_values($arr[$key]['child']);
			}
			
			$arr = array_values($arr);
			$this->data['fetchallcat'] = $arr;
	}	
		
	public function fetchcat($d)
	{
		$arr = array();
		
		if(empty($d['catid']))
		{
			$options['sql'] ="SELECT *  from ".KAHAN_DB.".tbl_category	where active_flag = 1 and parentid = 0";
		}
		else
		{
			$options['sql'] ="SELECT *  from ".KAHAN_DB.".tbl_category	where active_flag = 1 and parentid = 0 and catid = :id";
			$options['barr'] = array(":id" => $d['catid']);
		}
		
		$rs = $this->sqlexecute($options);
		
			if($rs->rowCount() > 0)
			{
				$i = 0;
				while($row=$rs->fetch(PDO::FETCH_ASSOC))
				{
					$arr[$i]['cid']    	 = $row['catid'];
					$arr[$i]['cname']    = ucwords(strtolower($row['catname']));
					$arr[$i]['desc']     = $row['description'];
					$i++;
				}	
			}
			$arr = array_values($arr);
			$this->data['fetchcat'] = $arr;
	}
	
	public function fetchsubcat($d)
	{
		$arr = array();
		if(!empty($d['catid']))
		{

			$options['sql'] ="SELECT * from ".KAHAN_DB.".tbl_category	where  active_flag = 1 and parentid = :catid";
			$options['barr'] = array(":catid" => $d['catid']);
			$rs = $this->sqlexecute($options,1);

			if($rs->rowCount() > 0)
			{
				$i = 0;
				while($row=$rs->fetch(PDO::FETCH_ASSOC))
				{
					$arr[$i]['subcid']    	 = $row['catid'];
					$arr[$i]['cname']    	 = ucwords(strtolower($row['catname']));
					$arr[$i]['desc']    	 = $row['description'];
					$arr[$i]['pname']    	 = ucwords(strtolower($row['parentname']));
					
					$i++;
				}	
			}
			else
			{
				$arr['subcatids'] = $d['catid'];
			}
		}
		$this->data['fetchsubcat'] = $arr;
	}
	
	public function fetchallsubcat($d)
	{
		$arr = array();
		
		if(empty($d['id']))
		{
			$options['sql'] ="SELECT *  from ".KAHAN_DB.".tbl_category	where active_flag = 1 and parentid != 0";
		}
		else
		{
			$options['sql'] ="SELECT *  from ".KAHAN_DB.".tbl_category	where active_flag = 1 and parentid != 0 and catid = :id";
			$options['barr'] = array(":id" => $d['id']);
		}
		
		$rs = $this->sqlexecute($options,1);

		if($rs->rowCount() > 0)
		{
			$i = 0;
			while($row=$rs->fetch(PDO::FETCH_ASSOC))
			{
				$arr[$i]['subcid']    	 = $row['catid'];
				$arr[$i]['cname']    	 = ucwords(strtolower($row['catname']));
				$arr[$i]['desc']    	 = $row['description'];
				$arr[$i]['parentid']     = $row['parentid'];
				$arr[$i]['parentname']   = ucwords(strtolower($row['parent_search']));
				
				$i++;
			}	
		}

		$this->data['fetchallsubcat'] = $arr;
	}
	
	public function fetchinternalsubcat($d)
	{
		$arr = array();
		if(!empty($d['catid']))
		{
			$options['sql'] ="SELECT group_concat(catid) as subcatids from ".KAHAN_DB.".tbl_category	where  active_flag = 1 and parentid = :catid";
			$options['barr'] = array(":catid" => $d['catid']);
			$rs = $this->sqlexecute($options,1);

			if($rs->rowCount() > 0)
			{
				$row=$rs->fetch();
				$arr['subcatids'] = $row['subcatids'];
			}
			else
			{
				$arr['subcatids'] = $d['catid'];
			}
		}
					
		$this->data['fetchinternalsubcat'] = $arr;

	}
	
	public function fetchlisting($d)
	{
		$arr = array();
		if(!empty($d['catid']))
		{
			
			$this->fetchinternalsubcat($d);
			$options['sql'] ="SELECT * from ".KAHAN_DB.".tbl_product where parentid in (:id) and active_flag = 1";
			$options['barr'] = array(":id" => $this->data['fetchinternalsubcat']['subcatids']);

			$rs = $this->sqlexecute($options);

			if($rs->rowCount() > 0)
			{
				$gname = "";
				while($row=$rs->fetch(PDO::FETCH_ASSOC))
				{
					$pid 				 		 	= $row['productid'];
					$gname 				 		 	= $row['groupname'];
					$arr[$gname][$pid]['pid']    	= $row['productid'];
					$arr[$gname][$pid]['gdesc']  	= $row['group_description'];
					$arr[$gname][$pid]['pname']  	= trim($row['productname']);
					$arr[$gname][$pid]['desc']   	= $row['description'];
					$arr[$gname][$pid]['keywords']  = $row['keywords'];
					$arr[$gname][$pid]['spec']   	= $row['specification'];
				}	
			
			}
		}			
		//$arr = array_values($arr);
		$this->data['fetchlisting'] = $arr;
	}
	
	public function addfeature($d)
	{
			
			if($d['del'] == 1)
				$options['sql'] ="UPDATE ".KAHAN_DB.".tbl_product SET is_feature = 0,updatedOn = NOW() where productid = {$d['fid']}";
			else
				$options['sql'] ="UPDATE ".KAHAN_DB.".tbl_product SET is_feature = 1,updatedOn = NOW() where productid = {$d['fid']}";
			$rs = $this->sqlexecute($options);	
			
		
			if($rs)
			{
				$arr['msg'] = "successful";
				//$arr['data'] = $this->fetchFeature();
				$arr['error'] = 0;
			}
			
			$this->data['addfeature'] = $arr;	
	}
	
	public function fetchFeature($d){
	
			$arr = array();
			$options['sql'] ="SELECT productid,productname,profilevideo,description,videoname,profilepic,videoduration,videodate  from ".KAHAN_DB.".tbl_product where active_flag = 1 and is_feature = 1";
		
			$rs = $this->sqlexecute($options);
		
			if($rs->rowCount() > 0)
			{
				$i = 0;
				while($row=$rs->fetch(PDO::FETCH_ASSOC))
				{
					$arr[] = $row;
				}	
			}
			shuffle($arr);
		
		
			return $this->data['fetchFeature'] = $arr;
	
	
	}
	
	public function fetchallproduct($d)
	{
		$arr = array();
		
		$condition = '';
		if(isset($d['synon']) && !empty($d['synon'])){
		
			$condition = ' AND is_syn = 0';
		
		}
		if(isset($d['is_syn']) && !empty($d['is_syn'])){
		
			$condition = ' AND is_syn = 1';
			
			$limit = " LIMIT 15";
		
		}
		if(isset($d['id']))
		{
			$options['sql'] ="SELECT * from ".KAHAN_DB.".tbl_product where active_flag = 1 and productid = :id";
			$options['barr'] = array(":id" => $d['id']);
			
			
			
		}else if(isset($d['srchtrm']) ){
		
			$conditn = ($d['isfeature']) ? ' and is_feature != 1 and profilevideo !="" ' : '';
		 	$shtrm = str_replace(' ','%',$this->converttosearch($d['srchtrm']));
		    $options['sql'] ="SELECT * from ".KAHAN_DB.".tbl_product where product_search LIKE '%{$shtrm}%' and active_flag = 1 $conditn";
		}
		else if(isset($d['sitemap']))
		{
			$options['sql'] ="SELECT * from ".KAHAN_DB.".tbl_product where active_flag = 1".$condition." ORDER BY catid ";
		}
		else
		{
			$options['sql'] ="SELECT * from ".KAHAN_DB.".tbl_product where active_flag = 1".$condition." ORDER BY updatedOn DESC".$limit;
		}

		$rs = $this->sqlexecute($options);

		if($rs->rowCount() > 0)
		{
			while($row=$rs->fetch(PDO::FETCH_ASSOC))
			{
				
				if($d['seourl'])
				{
					$pid 		 			 = $row['productid'];
					$pname 		 			 = $row['productname'];
					$arr[$pid]['keywords']	 = $pname;
					$arr[$pid]['link']	 	 = $this->_domain.$this->encodeseoUrl($pname)."/dt-".$pid;
				}
				else if ($d['sitemap'])
				{
					$pid 		 			 = $row['productid'];
					$pname 		 			 = trim($row['productname']);
					$cname 	 				 = ucwords(strtolower($row['cat_search']));
					
					$arr[$cname][$pid]['pname']    = $pname;
					$arr[$cname][$pid]['pvideo']   = trim($row['profilevideo']);
					$arr[$cname][$pid]['img']   	 = trim($row['profilepic']);
					$arr[$cname][$pid]['link']	 = $this->_domain.$this->encodeseoUrl($pname)."/dt-".$pid;
					
				}
				else
				{
					$pid 		 			 = $row['productid'];
					$arr[$pid]['pid']   	 = $row['productid'];
					$arr[$pid]['pname'] 	 = trim($row['productname']);
					$arr[$pid]['pvideo']   	 = trim($row['profilevideo']);
					$arr[$pid]['pvideodur']  = trim($row['videoduration']);
					$arr[$pid]['pvideodate'] = trim($row['videodate']);
						
					if(empty($d['isfeature']))
					{
						$arr[$pid]['desc']  	 = $row['description'];
						$arr[$pid]['keywords'] 	 = trim($row['keywords'],',');
						$arr[$pid]['gname'] 	 = $row['groupname'];
						$arr[$pid]['gdesc'] 	 = $row['group_description'];
						$arr[$pid]['img']   	 = trim($row['profilepic']);
						$arr[$pid]['spec']   	 = $row['specification'];
						$arr[$pid]['cname'] 	 = ucwords(strtolower($row['cat_search']));
						$arr[$pid]['cid'] 	  	 = (int)$row['catid'];
						$arr[$pid]['subcid'] 	 = (int)$row['subcatid'];
						$arr[$pid]['subcname']   = ucwords(strtolower($row['subcat_search']));
						$arr[$pid]['is_syn'] 	 = (int)$row['is_syn'];
						$arr[$pid]['syn_id'] 	 = (int)$row['syn_id'];
					}
				}
			}	
		}
		if(!$d['sitemap'])			
		$arr = array_values($arr);
		$this->data['fetchallproduct'] = $arr;
	}
	
	public function listproduct($d)
	{
		$arr = array();
		$condition = '';
		if(!empty($d['subcname']))
			$condition = "FIELD (subcat_search, '".$d['subcname']."') DESC," ;
			
		
	 	$options['sql'] ="SELECT * from ".KAHAN_DB.".tbl_product where active_flag = 1 and cat_search = :cname AND is_syn != 1 ORDER BY ".$condition."sequence ASC " ;
		//$options['sql'] ="SELECT * from kahanint_dbkahan.tbl_product where active_flag = 1 and cat_search = 'FILLING MACHINES'";
		$options['barr'] = array(":cname" => $d['cname']);
	
		$rs = $this->sqlexecute($options);

		if($rs->rowCount() > 0)
		{
			while($row=$rs->fetch(PDO::FETCH_ASSOC))
			{
				$sbname									= strtolower(trim($row['subcat_search']));
				$gname 					 				= ucwords(strtolower(trim($row['groupname'])));
				$pid 		 				 			= $row['productid'];
				$seq							 		= (int)$row['sequence'];
				
				$arr[$sbname][$gname][$seq]['pid'] 	 	 = (int)$row['productid'];
				
				$arr[$sbname][$gname][$seq]['pname'] 	 = trim($row['productname']);
				$arr[$sbname][$gname][$seq]['desc']  	 = $row['description'];
				$arr[$sbname][$gname][$seq]['keywords']	 = $row['keywords'];
				$arr[$sbname][$gname][$seq]['gname'] 	 = $row['groupname'];
				$arr[$sbname][$gname][$seq]['gdesc'] 	 = $row['group_description'];
				$arr[$sbname][$gname][$seq]['img']   	 = $row['profilepic'];
				$arr[$sbname][$gname][$seq]['spec']  	 = $row['specification'];
				$arr[$sbname][$gname][$seq]['cname'] 	 = $row['cat_search'];
				$arr[$sbname][$gname][$seq]['subcname']  = $row['subcat_search'];
				$arr[$sbname][$gname][$seq]['cid'] 	 	 = (int)$row['catid'];
				$arr[$sbname][$gname][$seq]['subcid']    = (int)$row['subcatid'];
				$arr[$sbname][$gname][$seq]['seq'] 		 = (int)$row['sequence'];
			}	
		}
				
		//$arr = array_values($arr);
		$this->data['listproduct'] = $arr;
	}
	
	function converttosearch($str)
	{
		$str = preg_replace('/[^a-zA-Z0-9]/', ' ',$str);
		$str = preg_replace('/\s+/', ' ', $str);
		Return trim($str);
	}
	
	public function inscat($d)
	{
		$arr 	= array();
		if(!empty($d['catname']))
		{
			$options['barr'] = array(
				":catname" 			=> $d['catname'],
				":catname_search" 	=> $this->converttosearch($d['catname']),
				":description" 		=> $d['desc'],
				);
				
			
			if(empty($d['catid']))
			{
				$options['sql'] ="INSERT INTO ".KAHAN_DB.".tbl_category (catname, catname_search, description,parentid,updatedBy,updatedOn)  VALUES (:catname, :catname_search, :description,0,'code',NOW())";
			}
			else
			{
				$options['sql'] ="
				UPDATE ".KAHAN_DB.".tbl_category SET catname = :catname, catname_search = :catname_search, description = :description,updatedBy = 'code',updatedOn = NOW() where catid = :id;
				UPDATE ".KAHAN_DB.".tbl_category SET parent_search = :catname_search, updatedBy = 'code',updatedOn = NOW() where parentid = :id;
				UPDATE ".KAHAN_DB.".tbl_product SET cat_search = :catname_search, updatedBy = 'code',updatedOn = NOW() where catid = :id;
				";
				
				$options['barr'][":id"] = $d['catid'];	

			}
			
			$rs = $this->sqlexecute($options);
			
		}
		
		if($rs)
		{
			$arr['msg'] = "successful";
			$arr['error'] = 0;
		}
		
		$this->data['inscat'] = $arr;
	}
	
	public function inssubcat($d)
	{
		$arr = array();
		
		if(!empty($d['subcatname']) && !empty($d['parentid']) && !empty($d['catname']))
		{	
			$options['barr'] = array(
				":catname" 			=> $d['subcatname'],
				":catname_search" 	=> $this->converttosearch($d['subcatname']),
				":description" 		=> $d['desc'],
				":parent_search" 	=>  $this->converttosearch($d['catname']),
				":parentid" 		=>  $d['parentid'],
				);
	
			if(empty($d['id']))
			{
				$options['sql'] ="
				INSERT INTO ".KAHAN_DB.".tbl_category (catname, catname_search, description,parentid,parent_search,updatedBy,updatedOn)  VALUES (:catname, :catname_search, :description,:parentid,:parent_search,'code',NOW());
				UPDATE ".KAHAN_DB.".tbl_category set haschild = 1 where catid = :parentid;
				";
			}
			else
			{
				$options['sql'] ="UPDATE ".KAHAN_DB.".tbl_category SET catname = :catname, catname_search = :catname_search, description = :description,parentid = :parentid ,parent_search = :parent_search, updatedBy = 'code',updatedOn = NOW() where catid = :id;
				UPDATE ".KAHAN_DB.".tbl_product SET subcat_search = :catname_search, updatedBy = 'code',updatedOn = NOW() where subcatid = :id;
				";
				
				
				$options['barr'][":id"] = $d['id'];	
			}
			
			$options['debug'] = 0;
			$rs = $this->sqlexecute($options);
			
			if($rs)
			{
		//		$options['sql'] ="UPDATE ".KAHAN_DB.".tbl_category set haschild = 1 where catid = :parentid";
		//		$options['barr'] = array(":parentid" => $d['parentid']);
		//		$options['debug'] = 0;
		//		$rss = $this->sqlexecute($options);
		//		if($rss)
		//		{
					$arr['msg'] = "successful";
					$arr['error'] = 0;
		//		}
			}
			
		}
		$this->data['inssubcat'] = $arr;
	}
	
	public function insenquiry($d)
	{
		$arr = array();
		
		if(!empty($d['name']) && !empty($d['number']) && !empty($d['productname']))
		{
			$options['sql'] ="INSERT INTO ".KAHAN_DB.".tbl_enquiry (name, email, number,productname,message,updatedBy,insertdate)  VALUES (:name, :email, :number, :productname,:message,'code',NOW())";
			$options['barr'] = array(
			":name" 			=> $d['name'],
			":email" 			=> $d['email'],
			":number" 			=> $d['number'],
			":productname" 		=> $d['productname'],
			":message" 			=> $d['message']
			);

			$rs = $this->sqlexecute($options);
		
			if($rs)
			{
				$arr['msg'] = "successful";
				$arr['error'] = 0;
			}
		}
		$this->data['insenquiry'] = $arr;
	}
	
	public function listenquiry($d)
	{
		$arr = array();
		
		$options['sql'] ="SELECT enquiryid,name,email,number,productname,message FROM ".KAHAN_DB.".tbl_enquiry order by insertdate desc,readflag asc";
		$rs = $this->sqlexecute($options);

		if($rs->rowCount() > 0)
		{
			while($row=$rs->fetch(PDO::FETCH_ASSOC))
			{
				$eid 		 			 = $row['enquiryid'];
				$arr[$eid]['eid']    	 = $eid;
				$arr[$eid]['name']    	 = $row['name'];
				$arr[$eid]['email']  	 = $row['email'];
				$arr[$eid]['number']   	 = $row['number'];
				$arr[$eid]['productname']= $row['productname'];
				$arr[$eid]['message']    = $row['message'];
			}	
			
			$arr = array_values($arr);
		}
		else{
			$arr['msg'] = "No result found";
			$arr['error'] = 0;
		
		}
				
	
		$this->data['listenquiry'] = $arr;
	}
	public function insproductsyn($d)
	{
		
		$arr =array();
		$p['id'] = $d['syn_id'];
		$this->fetchallproduct($p);
		$dta  = $this->data['fetchallproduct'][0];
		
		$d['groupname'] 			= $dta['gname'];
		$d['groupdesc'] 			= $dta['gdesc'];
		$d['catid'] 				= $dta['cid'];
		$d['subcatid'] 				= $dta['subcid'];
		$d['catname'] 				= $dta['cname'];
		$d['subcatname'] 			= $dta['subcname'];
		$d['desc'] 					= empty($d['desc']) ? $dta['desc'] : $d['desc'];
		$d['spec'] 					= $dta['spec'];
		$d['pdf'] 					= $dta['pdf'];
	
		$this->insproduct($d);
		
		$this->data['insproductsyn'] = $this->data['insproduct'];
	}
	
	public function insproduct($d)
	{
		$arr = array();
		if(!empty($d['productname']) && !empty($d['catid']) && !empty($d['catname']))
		{
			$options['barr'] = array(
				":productname" 			=> trim($d['productname']),
				":product_search" 		=> $this->converttosearch(trim($d['productname'])),
				":groupname" 			=> $d['groupname'],
				":group_search" 		=> $this->converttosearch($d['groupname']),
				":group_description" 	=> $d['groupdesc'],
				":catid" 				=> $d['catid'],
				":subcatid" 			=> $d['subcatid'],
				":cat_search" 			=> $this->converttosearch($d['catname']),
				":subcat_search" 		=> $this->converttosearch($d['subcatname']),
				":description" 			=> $d['desc'],
				":keywords" 			=> $d['keywords'],
				":specification" 		=> $d['spec'],
				":pdf" 					=> empty($d['pdf']) ? "" : $d['pdf'],
				":profilepic" 			=> $d['profilepic'],
				":profilevideo" 		=> $d['pvideo'],
				":is_syn" 				=> empty($d['is_syn']) ? 0 : $d['is_syn'],
				":syn_id" 				=> empty($d['syn_id']) ? 0 : $d['syn_id'],
				":videoname" 			=> $d['videoname']
			);

			if(empty($d['id']))
			{
				$options['sql'] ="INSERT INTO ".KAHAN_DB.".tbl_product (productname,product_search, groupname, group_search,group_description,catid,cat_search,subcatid,subcat_search,description,keywords, specification,pdf,profilepic,profilevideo,photo,video,is_syn,syn_id,updatedBy,updatedOn,videoname)  VALUES (:productname, :product_search, :groupname, :group_search,:group_description,:catid,:cat_search,:subcatid,:subcat_search,:description,:keywords,:specification,:pdf,:profilepic,:profilevideo,:photo,:video,:is_syn,:syn_id,'code',NOW(),:videoname)";
				$options['barr'][":photo"] = empty($d['photo']) ? 0 : $d['photo'];	
				$options['barr'][":video"] = empty($d['video']) ? 0 : $d['video'];	
			}
			else
			{
				$options['sql'] ="UPDATE ".KAHAN_DB.".tbl_product set productname= :productname,product_search = :product_search, groupname = :groupname, group_search = :group_search,group_description =:group_description ,catid =:catid,subcatid =:subcatid,cat_search =:cat_search,subcat_search =:subcat_search,description = :description,keywords=:keywords, specification =:specification,pdf = :pdf,profilepic = :profilepic,profilevideo = :profilevideo,is_syn = :is_syn,syn_id =:syn_id,updatedBy = 'Code',updatedOn = NOW(),videoname=:videoname where productid= :id";
				$options['barr'][":id"] = $d['id'];	
			}

			//$options['lastinsert'] = 1;	
			$rs = $this->sqlexecute($options);
			
			if($rs)
			{
				$arr['msg'] 	= "successful";
				$arr['error'] 	= 0;
			/*	$arr['pid']		= $rs->lastinsert;
				$arr['catid']	= $d['catid'];
				$arr['subcatid']= $d['subcatid'];
			*/
				if(empty($d['is_syn']))
				{
					$p['id'] = $d['id'];
					$this->updatesyndata($p);
				}
			}
		}
		
		$this->data['insproduct'] = $arr;
	}
	
	public function updatesyndata($d)
	{
			$options['sql'] ="UPDATE ".KAHAN_DB.".tbl_product as A left join tbl_product as B on B.syn_id = A.productid set 
			B.cat_search = A.cat_search , B.groupname = A.groupname, B.group_search = A.group_search,B.group_description =A.group_description ,B.catid =A.catid,B.subcatid =A.subcatid,B.cat_search =A.cat_search,B.subcat_search =A.subcat_search,B.description = A.description, B.specification =A.specification,B.pdf = A.pdf			
			where A.productid = :id ";
			$options['barr'][":id"] = $d['id'];	

			$rs = $this->sqlexecute($options);
			
			if($rs)
				return true;
			else
				return false;
	}
	
	public function insmedia($d)
	{
		$arr = array();
		
		if(!empty($d['url']) && !empty($d['mediaflag']))
		{
			$options['sql'] ="REPLACE INTO ".KAHAN_DB.".tbl_media (productid,productname,name,url, description,size,mediaflag,updatedBy,updatedOn)  VALUES (:productid,:productname, :name, :url, :description,:size,:mediaflag,'code',NOW())";
			$options['barr'] = array(
			":productid" 			=> $d['productid'],
			":productname" 			=> $this->converttosearch($d['productname']),
			":name"		 			=> empty($d['name']) ? $this->converttosearch($d['productname']) : $d['name'],
			":url" 					=> $d['url'],
			":size" 				=> !empty($d['size']) ? $d['size'] : 0,
			":mediaflag" 			=> $d['mediaflag'],/** 1-photo ,2 -video **/
			":description" 			=> addslashes($d['desc'])			
			);
			$rs = $this->sqlexecute($options);
		
			if($rs)
			{
				$arr['msg'] = "successful";
				$arr['error'] = 0;
			}
		}
		$this->data['insmedia'] = $arr;
	}
	
	public function fetchmedia($d)
	{
		$arr = array();
		$condition ="";
		
		if(!empty($d['mediaflag']))
		{
			$condition = "and mediaflag=".$d['mediaflag'];
		}
		
		if(!empty($d['productid']))
		{
			$options['sql'] ="SELECT * FROM ".KAHAN_DB.".tbl_media where productid = :productid $condition";
			$options['barr'] = array(":productid" 	=> $d['productid']);
			$rs = $this->sqlexecute($options);
			
			if($rs->rowCount() > 0)
			{
				while($row=$rs->fetch(PDO::FETCH_ASSOC))
				{
					if($d['format']=='plugin')
					{
						$mid				    	 = $row['id'];
						$arr[$mid]['name']			 = $row['url'];
						$arr[$mid]['size']			 = (int)$row['size'];
						$arr[$mid]['url']			 = $this->_domain."backnd/uploads/otherimage/".$row['url'];
						$arr[$mid]['thumbnailUrl']	 = $this->_domain."backnd/uploads/otherimage/thumbnail/".$row['url'];
						$arr[$mid]['deleteType']	 = 'DELETE';
						$arr[$mid]['deleteUrl']	 	 = $this->_domain."admin/server/php/index.php?file=".urlencode($row['url'])."&id=".$mid;
						
					}
					else
					{
						$mdflag 		 		 		 = ($row['mediaflag'] == 1) ? 'photo' : 'video';
						$mid				    		 = $row['id'];
						$arr[$mdflag][$mid]['mid']    	 = $row['id'];
						$arr[$mdflag][$mid]['pid']    	 = $row['productid'];
						$arr[$mdflag][$mid]['pname']  	 = $row['productname'];
						$arr[$mdflag][$mid]['name']   	 = $row['name'];
						$arr[$mdflag][$mid]['url']    	 = $row['url'];
						$arr[$mdflag][$mid]['mediaflag'] = $row['mediaflag'];
					}
				}

				if($d['format']=='plugin')
					$arr = array_values($arr);
				else
					foreach($arr as $k=>$v)
					{
						$arr[$k] = array_values($v);
					}
			}
			else
			{
				$arr['msg'] = "No result found";
				$arr['error'] = 0;
			}
			
			
			
		}	
		
		$this->data['fetchmedia'] = $arr;
	}
	
	public function login($d){
	
			$data = json_decode(stripslashes($d['data']),true);
			$options['sql'] ="SELECT * FROM ".KAHAN_DB.".tbl_admin where username = :username AND password = :password";
			$options['barr'] = array(":username" => $data['Username'],":password"=>md5($data['Password']));
			$rs = $this->sqlexecute($options);
			if($rs->rowCount() > 0){
				$arr['msg'] = "success";
				$arr['status'] = true;
				
			}else{
				$arr['msg'] = "No result found";
				$arr['status'] = false;
			}	
			$this->data['login'] = $arr;
	}
	
	public function delte($d)
	{
		$arr = array();

		if(!empty($d['id']) || !empty($d['imageurl']))
		{
			if($d['mode'] == 'media')
			{
				if(!empty($d['imageurl']))
				{
					$options['sql'] ="DELETE from ".KAHAN_DB.".tbl_media where url = :imageurl";
					$options['barr'] = array(":imageurl"	=> $d['imageurl']);
				}
				else
				{
					$options['sql'] ="DELETE from ".KAHAN_DB.".tbl_media where id = :id";
					$options['barr'] = array(":id"	=> $d['id']);
				}
			}
			elseif($d['mode'] == 'cat')
			{
				$d['catid'] = $d['id'];
				$this->fetchinternalsubcat($d);
				$options['sql']  = "
						UPDATE ".KAHAN_DB.".tbl_product set active_flag = 0,updatedBy = 'code',updatedOn = NOW() where catid in (:id) or subcatid in (:id);
						UPDATE ".KAHAN_DB.".tbl_category set active_flag = 0,updatedBy = 'code',updatedOn = NOW() where (parentid = :catid or catid = :catid)";
				
				$options['barr'] = array
				(
				":id" => $this->data['fetchinternalsubcat']['subcatids'],
				":catid"	=> $d['id']
				);
			}
			elseif($d['mode'] == 'subcat')
			{
				$options['sql']  = "
						UPDATE ".KAHAN_DB.".tbl_product set active_flag = 0,updatedBy = 'code',updatedOn = NOW() where subcatid = :id;
						UPDATE ".KAHAN_DB.".tbl_category set active_flag = 0,updatedBy = 'code',updatedOn = NOW() where catid = :id ";
				$options['barr'] = array(":id" => $d['id']);
			}
			elseif($d['mode'] == 'product')
			{
				$options['sql']  = "UPDATE ".KAHAN_DB.".tbl_product set active_flag = 0,updatedBy = 'code',updatedOn = NOW() where productid = :id";
				$options['barr'] = array(":id" => $d['id']);
			}
			elseif($d['mode'] == 'proimage')
			{
				$options['sql']  = "UPDATE ".KAHAN_DB.".tbl_product set profilepic = '',updatedBy = 'code',updatedOn = NOW() where productid = :id";
				$options['barr'] = array(":id" => $d['id']);
			}
			
			$rs = $this->sqlexecute($options);
		
			if($rs)
			{
				$arr['msg'] = "successful";
				$arr['error'] = 0;
			}
		}

		$this->data['delte'] = $arr;
	}
	/**************************************************************************/
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
}
?>