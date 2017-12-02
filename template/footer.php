<div class="clearfix"></div>
     
    </div> <!-- /container fluid-->
	<input type="hidden" name="IMGPTH" id="IMGPTH" value="<?=IMG?>">
	<input type="hidden" name="ADMIN" id="ADMIN" value="<?=ADMIN?>">
	<input type="hidden" name="DOMAIN" id="DOMAIN" value="<?=DOMAIN?>">
	<footer>
		<div id="ft" class="footer_main container">
			<div class="ftheading">Popular Products</div>
			<div class="footer_cols">
				<?
				
				if(!empty($topData) && $topData['error']!= 1)
				{
					foreach($topData as $ky=>$vale)
					{
						echo '<span class="ftr col-sm-4"> <a href="'.$vale['link'].'" title="'.$vale['keywords'].'">'.$vale['keywords'].'</a></span>';
					}
				}
				?>
			</div>
			<div class="clearfix"></div>
		<div class="cpyright">
				<div class="cprit">&copy; 2017 Kahaninternational.com | 
				<a class="ftsitemap" href="<?=DOMAIN?>site-map" title="Sitemap Of Kahan International" alt="Sitemap Of Kahan International">Sitemap</a>
				</div>
			</div>
			
		</div>

    </footer>


	<!-- Modal -->
	<div class="modal fade videomd" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	  <div class="modal-dialog" role="document">
		<div class="modal-content">		  
		  <div class="modal-body"  id="kiplayer">
			
		  </div>		  
		</div>
	  </div>
	</div>
	
	<div class="modal fade " id="requestaquote" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	  <div class="modal-dialog" role="document">
		<div class="modal-content">		  
		  <div class="modal-body">
					<div class="raq">REQUEST A QUOTE</div>
			<form name="requestaquote">
					<div class="form-group">
						<input aria-label="name" type="text" class="form-control" name="dname" Placeholder="Enter Name">
					</div>
					<div class="form-group">
						<input aria-label="company name" type="text" class="form-control" name="dcname" Placeholder="Enter Company Name">
					</div>
					
					<div class="form-group">
						<input aria-label="email" type="text" class="form-control" name="demail" Placeholder="Enter Email">
					</div>
					<div class="form-group">
						<input aria-label="mobile" type="text" class="form-control" name="dmobile" Placeholder="Enter Mobile">
					</div>
					<div class="form-group">
						<textarea aria-label="message" class="form-control" name="msgs" value="<?=$inquirytext?>" Placeholder="Message"><?=$inquirytext?></textarea>
					</div>
					<button id ="msgsmb2" class="btn btn-orange msgsmb2" onclick="return sendMsg('msgsmb2');">Send</button>	
					<span class="status left30"></span>
					<input class="btn  msgsmb2 right" type="reset" value="Reset">
					
				</form>
		  </div>		  
		</div>
	  </div>
	</div>
	
	<div class="modal videoLightbox fade" id="videoLightbox" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-body">
		 <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
		<div id="videoPlay" class="videoPlay">
			
		</div>
      </div>
    </div>
  </div>
</div>

<div id="contSlider">
	<div class="sliderrel">
		<div id="sidebar1">
			<img src="data:image/png;base64,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" alt="Click here to inquire" title="Click here to inquire">
		</div>
		<div id="contHeader">
				<form name="inquiry">
					<div class="status"></div>
					<div class="form-group">
						<input type="text" class="form-control" name="dname" Placeholder="Enter Name">
					</div>
					<div class="form-group">
						<input type="text" class="form-control" name="dcname" Placeholder="Enter Company Name">
					</div>
					
					<div class="form-group">
						<input type="text" class="form-control" name="demail" Placeholder="Enter Email">
					</div>
					<div class="form-group">
						<input type="text" class="form-control" name="dmobile" Placeholder="Enter Mobile">
					</div>
					<div class="form-group">
						<textarea class="form-control" name="msgs" value="<?=$inquirytext?>" Placeholder="Message"><?=$inquirytext?></textarea>
					</div>
					<button id ="msgsmb1" class="btn btn-orange msgsmb1" onclick="return sendMsg('msgsmb1');">Send</button>		
					<input class="btn  msgsmb1 right" type="reset" value="Reset">
				</form>
		</div>
	</div>
</div>
</div>
<div id="fb-root"></div>

<?
if($case == 'detail')
{
?>
<div id="blueimp-gallery" class="blueimp-gallery blueimp-gallery-controls">
	<div class="slides"></div>
	<a class="prev">‹</a>
	<a class="next">›</a>
	<a class="close">×</a>
	<a class="play-pause"></a>
	<ol class="indicator"></ol>
</div>
<?
}
?>
<script type="text/javascript" src="<?=JS?>combine.js"></script>
<script type="text/javascript" src="<?=JS?>custom<?=$min?>.js?ver=<?=VERSION?>" async ></script>

<script type="text/javascript" src="https://platform.twitter.com/widgets.js" defer async charset="utf-8"></script>
<script type="text/javascript" src="https://apis.google.com/js/platform.js"  defer async charset="utf-8"></script>

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@graph": [
		{
		  "@context": "https://schema.org",
		  "@type": "Organization",
		  "name": "Kahan International",
		  "url": "https://www.kahaninternational.com",
		  "logo": "https://www.kahaninternational.com/tools/images/logo.png",
		  "sameAs": [
			"https://www.facebook.com/kahansolutions/",
			"https://www.youtube.com/KahanInternational2016",
			"https://www.linkedin.com/company-beta/7788352/",
			"https://plus.google.com/111538131389318225426",
			"https://twitter.com/kahanpackaging",
			"https://in.pinterest.com/kahaninternational/",
			"https://kahaninternational.tumblr.com/",
			"https://vimeo.com/kahaninternational"			
		  ],
		  "address": {
			"@type": "PostalAddress",
			"streetAddress": "Gala No 6, Ground Floor, Crescent Industrial Estate,",
			"addressLocality": "Behind Classic Stripes, Chinchpada, Waliv Road,",
			"addressRegion": "Vasai East",
			"postalCode": "401202",
			"addressCountry": "Mumbai, Maharashtra, India."
		  },
		  "contactPoint": [
			{ 
			  "@type": "ContactPoint",
			  "telephone": "(+91) 8452953999",
			  "contactType": "Sales"
			}
		  ]
		},
		{
		  "@context": "https://schema.org",
		  "@type": "WebSite",
		  "name": "Kahan International",
	      "alternateName": "kahaninternational",
		  "image":"<?=IMG?>share_facebook.jpg",
		  "description": "Kahan International is leading manufacturer & exporter of  Liquid, Capsule, Paste & Tube filling machine along with Ropp ,Screw & Lug capping machine for major industries.",
		  "url": "https://www.kahaninternational.com"
		},
		{
		  "@context": "https://schema.org",
		  "@type": "Place",
		  "geo": {
			"@type": "GeoCoordinates",
			"latitude": "40.75",
			"longitude": "73.98"
		  },
		  "name": "Kahan International"
		}
]
}
</script>

<script type="text/javascript">
(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.9&appId=336018073483156";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<script type="text/javascript">function fbs_click() 
{u=location.href;t=document.title;window.open('https://www.facebook.com/sharer.php?u='+encodeURIComponent(u)+'&t='+encodeURIComponent(t),'sharer','toolbar=0,status=0,width=626,height=436');return false;}</script>

  </body>
</html>