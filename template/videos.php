<div class="container-fluid wrapper-main">
	<div class="container new-container">
		<div class="box-section vidlist">
			<div class="top_hd">
				Videos
				<div class="input-group serch-video">
					<input class="form-control" class="Search..." id="searchbnr">
					<div class="input-group-addon"><span class="glyphicon glyphicon-search"></span></div>
				</div>
				
			</div>
			
			<div class="clearfix"></div>
			<div class="row videopg">
			
			<?php foreach($sdrs['results'] as $key=>$data): ?>
			<?php 
			
			$keyed 		= explode('embed/', $data['profilevideo']); 

			if(empty($data['profilepic']))
				$youtubeimg = "https://i.ytimg.com/vi/$keyed[1]/mqdefault.jpg";
			else
				$youtubeimg = ADMIN."uploads/productimage/".$data['profilepic'];
				
			if(!empty($data['description']))
			{
				$descption	 = strip_tags($data['description']);
				$desptn 	 = (strpos($descption,'eneral Information:') == 1) ? substr($descption,20) : $descption ;
			}
			else
			{
				$desptn 	 = 'We offer a complete packaging solution into Filling, Capping, Labeling, Sealing of any type of 		products, cap, labels, foils.<br>For more details of this product, please contact +91-8452953999 or email us at sales@kahaninternational.com';
			}
			?>
				<div class="col-sm-3 col-xs-6 videocol">
					<div class="featured-col" itemscope itemtype="https://schema.org/VideoObject">
						<a rel="media-gallery" class="vidlist-vid" data-toggle="modal" data-target="#myModal1" rel="media-gallery" data-video="https://www.youtube.com/embed/<?php echo $keyed[1]; ?>?autoplay=1&amp;rel=0&amp;html5=0" itemprop="embedUrl url">
								<div class="rel"> 
									  <img class="youtubeImg" src="<?=$youtubeimg?>" alt="<?=$data['productname']?>" itemprop="thumbnailUrl thumbnail">
								</div>
							  <span class="playicon"><span class="glyphicon glyphicon-play-circle"></span></span>
						</a>
								
						
						<span class="cols-dtl">
							<div class="vdio-name">
								<h3>
								<a href="<?=DOMAIN.$obj->encodeseoURL($data['productname'])?>/dt-<?=$data['productid']?>" itemprop="contentUrl">
									<span itemprop="name">
										<?php echo $data['productname']; ?>
									</span>
									<meta itemprop="embedUrl url" content="https://www.youtube.com/embed/<?=$keyed[1]?>?autoplay=1&amp;rel=0&amp;html5=0" />
									<meta itemprop="uploadDate" content="<?=$data['videodate']?>" />
									<meta itemprop="duration" content="<?=$data['videoduration']?>" />
									<meta itemprop="description" content="<?=$desptn?>">
									<meta itemprop="isFamilyFriendly " content="True">
								</a>
								</h3>
							</div>	
							<div class="clearfix"></div>
						</span>
						</div>
				</div>
				<?php endforeach; ?>
				
				
			</div>
		</div>
	</div>


