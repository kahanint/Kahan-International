<div class="container-fluid wrapper-main">
	<div class="container new-container">
		<div class="box-section sitemap col-sm-12 col-md-12 col-xs-12">
				<h1 class="top_hd">Kahan International - Sitemap</h1>
				
				
				<?php
				if(($smdata['error']) != 1 && !empty($smdata))
				{
					
				  foreach($smdata as $labcat => $labval)
				  {
					  $i=0;
					  ?>
					  <div class="col-site ">
					  <a href="<?=DOMAIN?>products/<?=$obj->encodeseoURL($labcat)?>"><h2><?=$labcat?></h2></a>
					  <ul>
					  <? 
						foreach($labval as $ss => $tt)
						{
							if($i==3 || $i==4 || $i==0) 
							{
								$class= "backcolor";
								if($i==4)
									$i=0;
								
							}
							else
							{
								$class= "" ;
							}
							$i++;
							
							$mobcolor = ($i%2 == 0) ? "mobbackcolor" :"";
							
						?>
							<h3><li class="site-list col-sm-6 col-md-6 <?=$class?> <?=$mobcolor?>"><a href="<?=$tt['link']?>" title="<?=$tt['pname']?>"><?=$tt['pname']?></a></li></h3>
						<?
						}
					echo '</ul></div>';
					echo '<div class="clearfix"></div>';
				  }
				  
				}
				  ?>
		</div>
	</div>
		
