    <div class="container-fluid wrapper-main productpg">
    <div class="container section">
      <!-- Example row of columns -->
      <div class="row">
		
		<div class="col-sm-12 wrp-btm products">
			<div class="col-sm-4 wrp-main sml">
				<div class="wrp-left">
				  <div class="head "><span >Products</span> <span class="glyphicon glyphicon-chevron-down wrp-arw"></span></div>
				  <?php
				  $subcatarr =array();
				if(($sddata['error']) != 1)
				{
					$z=1;
				  echo "<ul itemscope itemtype='http://www.schema.org/SiteNavigationElement'>";
				  foreach($sddata as $ll => $mm)
				  {
					$active 	  = '';  
					$company_name = preg_replace('/[.]/','',$mm['cname']);
					$company_name = $obj->encodeseoURL($company_name); 
					$cname_active = ucwords(strtolower($cname)); 
					$cname_link   = $obj->encodeseoURL($cname_active); 
					
					if($company_name == $cname_link)
					{
						$active = 'active';
						foreach($mm['child'] as $ss => $tt)
						{
							$subcatarr[strtolower($tt['cname'])] = $tt['cnamedis'];
						}
					}
				  ?>
					
					<li class="post <?=$active?> ls<?=$i?>" itemprop="name">
						<a href="<?=DOMAIN?>products/<?=$company_name?>" itemprop="url" title="Products of <?=$mm['cname']?>">
							<?php
							if($active && empty($subcname))
								echo '<h1><span>'.$mm['cname'].'</span></h1>';
							else
								echo '<span class="prtitle">'.$mm['cname'].'</span>';
							?>
							<span class="postbrd"> </span>
						</a>
					</li>
						
				 <?php
				  }
				  echo "</ul>";
				  $z++;
				}
				  ?>
				</div>
			</div>

			<div class="col-xs-12 col-sm-8 wrp-right">
				<p class="top_hd"><?=$cname_active?></p>
				<div class="list_pro">
			<?php 
			$l=1;
			if(($resdata['error']) != 1)
			{
				foreach($resdata as $kk => $vv)
				{
					$kk_url = $obj->encodeseoURL($kk);
					$htag = ($subcname == $kk) ? 'h1'  : 'h2';
					echo "<div class='prod-topic'>
							
								<div class='topic_hd'>
									<$htag>
										<a href='".DOMAIN."products/".$cname_link."/".$kk_url."' title='Products of ".$subcatarr[$kk]."'>
											".$subcatarr[$kk]."
										</a>
									</$htag>
								</div>
							
							";
		
					foreach($vv as $gg => $hh)
					{
						echo "<div class='prod-list-sec'>";
						
						if(!empty($gg))
						{
							echo "<span class='list-sec'>$gg</span>";
						}
						
						$flag = true;
						foreach($hh as $ii => $jj)
						{
							if($flag && !empty($jj['gdesc']))
							{
								echo "<div class='gdesc'>".$jj['gdesc']."</div>";
								$flag = false;
							}
							
							$productnm = $obj->encodeseoURL($jj['pname']);
							$trimtitle = str_ireplace($gg,'',$jj['pname']);
							
							echo '<div class="prname"><h3><b class="hidden-sm">- </b><a href="'.DOMAIN.$productnm.'/dt-'.$jj['pid'].'"  title="Details of '.$jj['pname'].'">'.$trimtitle.'</a></h3></div>';
						}
						echo "</div>";
							
					}	
					echo "</div>";
					if($l < count($resdata))
					{
						echo '<div class="clearfix"></div>';
						echo '<hr class="liner"/>';
					}
					$l++;	
				}
			}
			else
			{
			?>
				<div class="topic_hd"><h2>Coming Soon</h2></div>
			<?php
			}
			?>
				</div>
			</div>
		</div>	
		
	  </div>
	</div> <!-- /container -->
