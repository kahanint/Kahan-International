<!doctype html>

<!-- head -->
<html xmlns="https://www.w3.org/1999/xhtml" xmlns:og="https://ogp.me/ns#"  xmlns:fb="https://www.facebook.com/2008/fbml" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

	
	<link rel=icon type="image/x-icon" href="<?=IMG?>favicon.ico" />
	<title><?=$meta['title']?></title>
	<meta name="keywords" content="<?=$meta['keywords']?>" />
	<meta name="description" content="<?=$meta['description']?>" />
	<meta name="viewport" content="width=device-width,minimum-scale=1, initial-scale=1, maximum-scale=1, user-scalable=no" />
	<meta name="yandex-verification" content="21e512a3b2a358f9" />


	<meta property="fb:app_id" content="336018073483156" />  
	<meta property="og:site_name" content="Kahan International | A Complete Packaging Solution" />
	
	<?php
	if($case =='detail')
	{
		?>
		<link rel="canonical" href="<?=DOMAIN.$obj->encodeseoURL($resdata['pname'])."/dt-".$pid?>" />
	
		<meta property="og:title" content="<?=$resdata['pname']?>">
		<meta property="og:type" content="article">
		<meta property="og:description" content="<?=$meta['description']?>">
		<meta property="og:url" content="<?=DOMAIN.$obj->encodeseoURL($resdata['pname'])."/dt-".$pid?>">
		<?
		if(!empty($resdata['pvideo']))
		{	
			$ytimg 		= explode('embed/', $resdata['pvideo']);
		}

		
		
		if(!empty($ytimg[1]))
		{
			$ytubeimg = "https://i.ytimg.com/vi/$ytimg[1]/mqdefault.jpg";
		?>	
		
			<meta property="og:video" content="https://www.youtube.com/v/<?=$ytimg[1]?>?hd=1"  />
			<meta property="og:video:url" content="https://www.youtube.com/v/<?=$ytimg[1]?>?hd=1"  />
			<meta property="og:video:width" content="712" />
			<meta property="og:video:height" content="400" />
			<meta property="og:video:type" content="application/x-shockwave-flash" />
		<?
		}
		if(!empty($resdata['img']))
		{
			$ytubeimg = PROIMG.$resdata['img'];
		}

		if(!empty($ytubeimg))
		{
			?>
			<meta property="og:image" content=<?=$ytubeimg?> />	
			<?
		}
		
		
		if(!empty($ytimg[1]))
		{
		?>
			<meta name="twitter:card" content="player" />
			<meta name="twitter:site" content="@kahanpackaging" />
			<meta name="twitter:creator" content="@kahanpackaging">
			<meta name="twitter:title" content="<?=$resdata['pname']?>" />
			<meta name="twitter:description" content="<?=$meta['description']?>" />
			<meta name="twitter:image" content="<?=$ytubeimg?>" />
			<meta name="twitter:player" content="https://www.youtube.com/v/<?=$ytimg[1]?>?hd=1" />
			<meta name="twitter:player:width" content="712" />
			<meta name="twitter:player:height" content="400" />
			<meta name="twitter:site:id" content="880040986902224896"/>
		<?
		}
		else
		{
		?>
		
			<meta name="twitter:card" content="summary_large_image" />
			<meta name="twitter:site" content="@kahanpackaging" />
			<meta name="twitter:creator" content="@kahanpackaging">
			<meta name="twitter:title" content="<?=$resdata['pname']?>" />
			<meta name="twitter:description" content="<?=$meta['description']?>" />
			<meta name="twitter:image" content="<?=$ytubeimg?>" />
			<meta name="twitter:site:id" content="880040986902224896"/>
	<?
		}
	}
	else
	{ ?>
		<link rel="canonical" href="<?=DOMAIN.$meta['page']?>" />

		<meta property="og:type"   content="website" />
		<meta property="og:url"    content="https://www.kahaninternational.com" /> 
		<meta property="og:title"  content="Tube Filling Machine | Paste Filling Machine | Capsule Filling Machine | Lug Capping Machine | Capping Machine | Labeling Machine" /> 
		<meta property="og:image"  content="<?=IMG?>share_facebook.jpg" /> 
		<meta property="og:description" content="<?=$meta['description']?>">
		
		<meta name="twitter:card" content="summary" />
		<meta name="twitter:site" content="@kahanpackaging" />
		<meta name="twitter:creator" content="@kahanpackaging">
		<meta name="twitter:title" content="Kahan International | A Complete Packaging Solution" />
		<meta name="twitter:description" content="<?=$meta['description']?>" />
		<meta name="twitter:image" content="<?=IMG?>kahan_facebook.jpg" />
		<meta name="twitter:image:alt" content="Kahan International" />
		<meta name="twitter:site:id" content="880040986902224896" />
		
		<?
		
	}
	?>
		
	<!-- stylesheet -->
	<link rel="stylesheet" media="all" href="<?=CSS?>combine.css">
	<link rel="stylesheet" media="all" href="<?=CSS?>style<?=$min?>.css?ver=<?=VERSION?>"/>
	
	<?php
	
	if(stristr(DOMAIN,'kahaninternational') != false)
	{
	?>
	<script type="text/javascript">
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

	  ga('create', 'UA-76323246-1', 'auto');
	  ga('send', 'pageview');

	</script>
	<?php
	}
	?>	

</head>

<body class="mainsite">
	<div class="main-section">
		<nav class="navbar navbar-inverse">
		  <div class="container webpage">

			<div class="navbar-header">
			  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			  </button>
			  <a href="<?php echo DOMAIN; ?>"  title="Kahan International" class="navbar-brand col-sm-2 col-md-2"><img src="<?=IMG?>logo.png" alt="Kahan International" width="130" height="124"/></a>
			  <span class="col-xs-9 col-sm-6 col-md-7 desc_web">
				<span class="frst">KAHAN <span class="org">INTERNATIONAL</span></span>
				<span class="scnd">A Complete Packaging Solution</span>
				
			  </span>
			  <span class="col-xs-9 col-sm-4 col-md-3 social_icons">
				<span class="details">
					<span class="mob">
						(+91) 8452953999
						<i class="call"></i>
					</span>
					<span class="mail">
						<p onclick="mailto()" rel="noreferrer nofollow" >
							sales@kahaninternational.com
							<i class="mailicon"></i>
						</p>
					</span>
				</span>
				<span>
				<a href="https://www.facebook.com/kahansolutions/" rel="nofollow" target="_blank" title="Connect with us on Facebook">
					<span class="facebook"></span>
				</a>	
				</span>

				<span>
					<a href="https://www.youtube.com/KahanInternational2016?sub_confirmation=1" rel="nofollow" target="_blank" title="Connect with us on YouTube" >
						<span class="youtube"></span>
					</a>
				</span>
				<span><a href="https://www.linkedin.com/company-beta/7788352/" rel="nofollow" target="_blank" title="Connect with us on Linkedin" >
						<span class="linkedin"></span>
				</a>
				</span>
				<span><a href="https://twitter.com/kahanpackaging" rel="nofollow" target="_blank"  title="Connect with us on Twitter" >
						<span class="twitter"></span>
				</a>
				</span>
			  </span>
			</div>
			
			
			<div id="navbar" class="navbar-collapse collapse">
			  <form class="navbar-form">
				<div class="form-group">
					<span><a href="<?=DOMAIN?>" title="Kahan International" class="menu <?php if($activeMenu=='home'){echo 'active';}?>">Home</a></span>
				</div>
				<div class="form-group">
					<span><a href="<?=DOMAIN?>aboutus" title="Company Overview – Facts, Mission  - Kahan International" class="menu <?php if($activeMenu=='about'){echo 'active';}?>">About Us</a></span>
				</div>
				<div class="form-group">
					<span><a href="<?=DOMAIN?>products/filling-machine" title="Products of Kahan International" class="menu <?php if($activeMenu=='product'){echo 'active';}?>">Products</a></span>
				</div>
				<div class="form-group">
					<span><a href="<?=DOMAIN?>clients" title="Clients of Kahan International" class="menu  <?php if($activeMenu=='client'){echo 'active';}?>">Clients</a></span>
				</div>
				<div class="form-group">
					<span><a href="<?=DOMAIN?>videos" title="Videos of Kahan International" class="menu <?php if($activeMenu=='videos'){echo 'active';}?>">Videos</a></span>
				</div>
				<div class="form-group">
					<span><a href="<?=DOMAIN?>contactus" title="Contact of Kahan International" class="menu <?php if($activeMenu=='contact'){echo 'active';}?>">Contact Us</a></span>
				</div>
				
				<span class="lft-arw"></span>
				<span class="rght-arw"></span>
			  </form>
			<?
			if(!empty($case))
			{
			?>
			  <div class="ytsubscribe">
				<a href="https://www.youtube.com/KahanInternational2016?sub_confirmation=1"  rel="nofollow" target="_blank" title="Subscribe Our Youtube Channel"><img src="<?=IMG?>ytchannel.png" width="100px" alt="Subscribe Our Youtube Channel" ></a>
			</div>
			<?
			}
			?>
			</div><!--/.navbar-collapse -->
		  </div>
		</nav>
		
		
		<div id="navbarmobile" class="navbar-collapse collapse">
               <div class="navbar-menuu" > Menu <span>X</span> </div>
			  <form class="navbar-form">
				<div class="form-group">
					<span><a href="<?=DOMAIN?>" title="Kahan International" class="menu <?php if($activeMenu=='home'){echo 'active';}?>">Home</a></span>
				</div>
				<div class="form-group">
					<span><a href="<?=DOMAIN?>aboutus"  title="Company Overview – Facts, Mission  - Kahan International" class="menu <?php if($activeMenu=='about'){echo 'active';}?>">About Us</a></span>
				</div>
				<div class="form-group">
					<span><a href="<?=DOMAIN?>products/filling-machine" title="Products of Kahan International" class="menu <?php if($activeMenu=='product'){echo 'active';}?>">Products</a></span>
				</div>
				<div class="form-group">
					<span><a href="<?=DOMAIN?>clients" title="Clients of Kahan International" class="menu <?php if($activeMenu=='client'){echo 'active';}?>">Clients</a></span>
				</div>
				<div class="form-group">
					<span><a href="<?=DOMAIN?>videos" title="Videos of Kahan International" class="menu <?php if($activeMenu=='videos'){echo 'active';}?>">Videos</a></span>
				</div>
				<div class="form-group">
					<span><a href="<?=DOMAIN?>contactus" title="Contact of Kahan International" class="menu <?php if($activeMenu=='contact'){echo 'active';}?>">Contact Us</a></span>
				</div>
				
				<span class="lft-arw"></span>
				<span class="rght-arw"></span>
			  </form>
			</div><!--/.navbar-collapse -->