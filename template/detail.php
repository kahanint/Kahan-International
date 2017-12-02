   <div class="container-fluid wrapper-main prodDtls">
    <div class="container section">
      <!-- Example row of columns -->
      <div class="row">
		<div class="col-sm-12 wrp-btm">
			<div class="col-xs-12 col-sm-12 wrp-right dtl-wrp1">
				<div class="heading">
					<section class="brdot">
						<div class="sec-left">
							<span class="yah">You are here:</span>
						</div>
						<div class="sec-left">
							<section id="breadCrumb" class="jbrd breadCrumb">
								<div>
									<ul itemscope="" itemtype="https://schema.org/BreadcrumbList">

										<li class="first" itemprop="itemListElement" itemscope="" itemtype="https://schema.org/ListItem">
											<a title="Kahan International" itemprop="item" href="<?=DOMAIN?>">
												<span itemprop="name">Home</span>
											</a>
											<meta itemprop="position" content="1">
										</li>
												

										<li itemprop="itemListElement" itemscope="" itemtype="https://schema.org/ListItem">
											<a title="<?=$resdata['cname']?>" itemprop="item" href="<?=DOMAIN?>products/<?=$obj->encodeseoURL($resdata['cname'])?>">
												<span itemprop="name"><?=$resdata['cname']?></span>
											</a>
											<meta itemprop="position" content="2">
										</li>

										<li itemprop="itemListElement" itemscope="" itemtype="https://schema.org/ListItem">
											<a title="<?=$resdata['subcname']?>" itemprop="item" href="<?=DOMAIN?>products/<?=$obj->encodeseoURL($resdata['cname'])?>/<?=$obj->encodeseoURL($resdata['subcname'])?>">
												<span itemprop="name" ><?=$resdata['subcname']?></span>
											</a>
											<meta itemprop="position" content="3">
										</li>
										
										<li class="lstEmt" itemprop="itemListElement" itemscope="" itemtype="https://schema.org/ListItem">
											<span title="<?=$resdata['pname']?>" itemprop="name"><?=$resdata['pname']?></span>
											<meta itemprop="position" content="4">
										</li>
									</ul>
								</div>
							</section>
						</div>
					</section>
			
						<i class="img_pro"></i>
						<span class="lbl hidden-sm">Product Detail:&nbsp;</span>
						<span class="prdolabel"><h1><?=$resdata['pname']?></h1></span>
				</div>
				<div class="top-dtl">
					
					<div class="dtl_right col-xs-12 col-sm-12 pad-0">
						<ul class="nav nav-tabs">
							<li class="active"><a href="#home" onclick="playvd();" data-toggle="tab">Description</a></li>
							<?php 
							if(!empty($resdata['spec']))
							{
								echo '<li><a href="#menu1" onclick="pausevd();"  data-toggle="tab">Specification</a></li>';
							}
							?>
						</ul>
						  
						<div class="tab-content">
						  
							<div id="home" class="tab-pane fade in active">
								<?php
								
								if(!empty($resdata['pvideo']))
								{
								//	$ytimg 		= explode('embed/', $resdata['pvideo']);
								//	$resdata['pvideo']
									if(empty($is_mobile))
									{
									?>
									<div class="col-xs-12 col-sm-12 pad-0 centered" id ="detframe" data-video="<?=$resdata['pvideo']?>?rel=0&autoplay=1&html5=0&enablejsapi=1&hd=1">
										<img class="ytimgclass detifrme" src="https://i.ytimg.com/vi/<?=$ytimg[1]?>/hqdefault.jpg"  alt="<?=$resdata['pname']?>" title="<?=$resdata['pname']?>"/>
										<button class="play-button"><svg  height="100%" version="1.1" viewBox="0 0 68 48" width="100%"><path class="play-button-color" d="m .66,37.62 c 0,0 .66,4.70 2.70,6.77 2.58,2.71 5.98,2.63 7.49,2.91 5.43,.52 23.10,.68 23.12,.68 .00,-1.3e-5 14.29,-0.02 23.81,-0.71 1.32,-0.15 4.22,-0.17 6.81,-2.89 2.03,-2.07 2.70,-6.77 2.70,-6.77 0,0 .67,-5.52 .67,-11.04 l 0,-5.17 c 0,-5.52 -0.67,-11.04 -0.67,-11.04 0,0 -0.66,-4.70 -2.70,-6.77 C 62.03,.86 59.13,.84 57.80,.69 48.28,0 34.00,0 34.00,0 33.97,0 19.69,0 10.18,.69 8.85,.84 5.95,.86 3.36,3.58 1.32,5.65 .66,10.35 .66,10.35 c 0,0 -0.55,4.50 -0.66,9.45 l 0,8.36 c .10,4.94 .66,9.45 .66,9.45 z"  fill="#1f1f1e" fill-opacity="0.81"></path><path d="m 26.96,13.67 18.37,9.62 -18.37,9.55 -0.00,-19.17 z" fill="#fff"></path><path d="M 45.02,23.46 45.32,23.28 26.96,13.67 43.32,24.34 45.02,23.46 z" fill="#ccc"></path></svg></button>
									</div>

									<div class="clearfix"></div>
									
									<?
									}
									else
									{
									?>
									<div class="col-xs-12 col-sm-12 pad-0 centered" id ="detframe" >
										<iframe  class="detifrme" src="<?=$resdata['pvideo']?>?rel=0&autoplay=1&html5=0&enablejsapi=1&hd=1" frameborder="0" allowfullscreen></iframe>
									</div>
									<?									
									}
								}
								else if(!empty($resdata['img']))
								{
									//echo '<div class="col-xs-3 col-sm-3 pad-0 right" style="" ><img src="'.PROIMG.$resdata['img'].'" width="200px" height="140px"></div>';
									
									?>
									<div class="col-xs-3 col-sm-3 pad-0 right prodimg" id="links">
										<div class="swiper-slide">
											<a href="<?=PROIMG.$resdata['img']?>" class="swiper-achcr">
												<img src="<?=PROIMG.$resdata['img']?>" class="pimg" alt="<?=$resdata['pname']?>">
											</a>
										</div>
									</div>
									<?php
								}
									 
								?>

								<div class="cntdet">
								 <?php
								
									if(!empty($resdata['desc']))
									{
										echo $resdata['desc'];
									}
									else
									{
										echo 'We offer a complete packaging solution into Filling, Capping, Labeling, Sealing of any type of products, cap, labels, foils.<br>For more details of this product, please contact +91-8452953999 or email us at sales@kahaninternational.com';
									}
								 ?>
								</div>
							</div>
							
							<div id="menu1" class="tab-pane fade">							  
								<?=$resdata['spec']?> 						
								
							</div>
						
						</div>
						<div class="clearfix"></div>
						<div>
							<span class="fbshare">
								<a href="https://www.facebook.com/share.php?u=u=<?=DOMAIN.$obj->encodeseoURL($resdata['pname'])."/dt-".$pid?>" rel="nofollow" onclick="return fbs_click()" target="_blank"><img src="<?=IMG?>fbshare1.jpg" alt="Share on Facebook" /></a>
							</span>	
						
							<span class="rqtaquote">
								<a  data-toggle="modal" data-target="#requestaquote" rel="media-gallery" onclick="pausevd()" >
									<button class="btn btn-orange msgsmb1" onclick="">Request A Quote</button>
								</a>	
							</span>	
						
						</div>
				
						
					</div>
				<div class="clearfix"></div>
				
				<?php
				
			//	print_r($imgdata);
			//	print_r($videodata);
				if(!empty($imgdata) || !empty($videodata))
				{
				?>
				<hr class="liner"/>
				<div class="btm-dtl">
					<div class="heading">
						<i class="img_gal"></i><span class="lbl">Gallery:</span>
						<div class="switch">
						<?php 
						if(!empty($imgdata))
						{	?>
							<span class="photos act" title="photos"><i class="glyphicon glyphicon-camera"></i> photo</span>
							<?
						}
						if(!empty($videodata))
						{
							$actvdflg = empty($imgdata) ? 'act' : '';
							?>
					
							<span class="videos <?=$actvdflg?>" title="videos"><i class="glyphicon glyphicon-facetime-video"></i> video</span>
							<?
						}
						?>
						</div>
					</div>
					<i class="stripup"></i>
					<?php
					if(!empty($imgdata))
					{
						?>
						<div class="swiper-container swiper2 swiper-photos">						
							<div class="swiper-wrapper" id="links">
							<?php
										foreach($imgdata as $imkey=>$imval)
										{
											//print_r($imval);
											?>
											<div class="swiper-slide">
												<a href="<?=ACTIMG?><?=$imval['url']?>" title="<?=$imval['name']?>" class="swiper-achcr">
													<img src="<?=THUMBIMG?><?=$imval['url']?>" alt="<?=$imval['name']?>">
												</a>
											</div>
											<?
										}
							?>
							</div>
							
							<div class="swiper-button-prev btn1 swp3 triangle-right">
								<span class="glyphicon glyphicon-menu-left"></span>
							</div>
							<div class="swiper-button-next btn2 swp4 triangle-left">
								<span class="glyphicon glyphicon-menu-right"></span>
							</div>						
						</div>
						<?php
					}
					?>	
					
					<?php
					if(!empty($videodata))
					{
						$dis = "none";
						if(empty($imgdata))
							$dis = "block";
					?>
					<div class="swiper-container swiper3 swiper-videos" style="display:<?=$dis?>;">							
						<div class="swiper-wrapper" id="links1">
							<?php	
									foreach($videodata as $vdkey=>$vdval)
									{
										if(stristr($vdval['url'], 'embed/') !== false)
											$yid = explode('embed/',$vdval['url']);
										if (stristr($vdval['url'], 'watch?v=') !== false)
											$yid = explode('watch?v=',$vdval['url']);
									
									?>
									
										<div class="swiper-slide">
											<a class="vidlink swiper-achcr" data-toggle="modal" data-target="#myModal1" rel="media-gallery" onclick="pausevd()" data-video="https://www.youtube.com/embed/<?=$yid[1]?>?autoplay=1&rel=0&html5=0"><img src="https://i.ytimg.com/vi/<?=$yid[1]?>/mqdefault.jpg"><span class="glyphicon glyphicon-play-circle"></span></a>
										</div>
										<?
									}
							?>			
							<div class="swiper-button-prev btn1 swp5 triangle-right">
								<span class="glyphicon glyphicon-menu-left"></span>
							</div>
							<div class="swiper-button-next btn2 swp6 triangle-left">
								<span class="glyphicon glyphicon-menu-right"></span>
							</div>						
						</div>
					</div>
								
					<?php
					}
					?>
					<i class="stripdwn"></i>	
					</div>	
				<?
				}
			?>		
					<div class="clearfix"></div>
<!--				<hr class="liner"/>
				<div class="btm-dtl">-->
				<?php
					if(empty($relatedProduct['results']['error']))
					{
					?>
					<hr class="liner"/>
					
					<div class="heading">
					<i class="img_related"></i><span class="lbl">Related Products:</span>
					<div class="clearfix"></div>
					</div>
					
					<div class="rltd_products row">
						<?php
						if(!empty($relatedProduct['results']))
						{
							foreach($relatedProduct['results'] as $key=>$values): 
							
							$iagevalue = empty($values['img']) ? 'cmsn.png' : $values['img'];
							?>
						
							<div class="list-col col-sm-4 col-md-3">
								<div class="lstng">
									<div class="list-img">
										<a href="<?=DOMAIN.$obj->encodeseoURL($values['pname'])?>/dt-<?=$values['pid']?>" title="<?=$values['pname']?>">
										
											<img src="<?php echo PROIMG.$iagevalue; ?>" alt="<?=$values['pname']?>" class="transition-img">
										</a>
									</div>
									<div class="list-cntnt">
										
										<div class="head-nm"><?php echo $values['pname']; ?></div>
						
										<div class="list-main-cntnt">
											<p><?php echo $values['gname']; ?></p>					
										</div>					
									</div>
								</div>
								<div class="list-Book">
									<a href="<?=DOMAIN.$obj->encodeseoURL($values['pname'])?>/dt-<?=$values['pid']?>"  title="Details of <?=$values['pname']?>"><b>VIEW DETAIL</b></a>
									
								</div>
							</div>
							
						
						<?php endforeach;
						}
						?>
					</div>
				<?php } ?>
				</div>
			  
		   </div>
		</div>	
	   </div>
    </div> <!-- /container -->
	
	<?php
	
	if(!empty($resdata['pvideo']))
	{
	?>
	<script type="application/ld+json">
	{
	  "@context": "https://schema.org/",
	  "@type": "VideoObject",
	  "name": "<?=$resdata['pname']?>",
	  "thumbnailUrl": "<?=$ytubeimg?>",
	  "contentUrl": "<?=DOMAIN.$obj->encodeseoURL($resdata['pname'])."/dt-".$pid?>",
	  "embedUrl": "https://www.youtube.com/v/<?=$ytimg[1]?>?hd=1",
	  "uploadDate": "<?=$resdata['pvideodate']?>",
	  "duration": "<?=$resdata['pvideodur']?>",
	  "width": "712",
	  "height": "400",
	  "description": "<?=$meta['description']?>",
	  "videoQuality":"HD",
	  "isFamilyFriendly":"True",
	  "regionsAllowed" :"AD,AE,AF,AG,AI,AL,AM,AO,AQ,AR,AS,AT,AU,AW,AX,AZ,BA,BB,BD,BE,BF,BG,BH,BI,BJ,BL,BM,BN,BO,BQ,BR,BS,BT,BV,BW,BY,BZ,CA,CC,CD,CF,CG,CH,CI,CK,CL,CM,CN,CO,CR,CU,CV,CW,CX,CY,CZ,DE,DJ,DK,DM,DO,DZ,EC,EE,EG,EH,ER,ES,ET,FI,FJ,FK,FM,FO,FR,GA,GB,GD,GE,GF,GG,GH,GI,GL,GM,GN,GP,GQ,GR,GS,GT,GU,GW,GY,HK,HM,HN,HR,HT,HU,ID,IE,IL,IM,IN,IO,IQ,IR,IS,IT,JE,JM,JO,JP,KE,KG,KH,KI,KM,KN,KP,KR,KW,KY,KZ,LA,LB,LC,LI,LK,LR,LS,LT,LU,LV,LY,MA,MC,MD,ME,MF,MG,MH,MK,ML,MM,MN,MO,MP,MQ,MR,MS,MT,MU,MV,MW,MX,MY,MZ,NA,NC,NE,NF,NG,NI,NL,NO,NP,NR,NU,NZ,OM,PA,PE,PF,PG,PH,PK,PL,PM,PN,PR,PS,PT,PW,PY,QA,RE,RO,RS,RU,RW,SA,SB,SC,SD,SE,SG,SH,SI,SJ,SK,SL,SM,SN,SO,SR,SS,ST,SV,SX,SY,SZ,TC,TD,TF,TG,TH,TJ,TK,TL,TM,TN,TO,TR,TT,TV,TW,TZ,UA,UG,UM,US,UY,UZ,VA,VC,VE,VG,VI,VN,VU,WF,WS,YE,YT,ZA,ZM,ZW"
	}
	</script>
	<!--	<script type="text/javascript">
		var tag = document.createElement('script');
		tag.src = 'https://www.youtube.com/iframe_api';
		var firstScriptTag = document.getElementsByTagName('script')[0];
		firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);
		
		var player;
		function onYouTubePlayerAPIReady() {
			player = new YT.Player('ytdetframe', {
			  videoId: '<?=$ytimg[1]?>'
			});
		}
		</script>
		-->
	<?
	}
	?>