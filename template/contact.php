<div class="container-fluid wrapper-main">
	<div class="container new-container">
		<div class="box-section">
			<h1 class="h1heading"><p class="top_hd">Contact Us</p></h1>
			
			<div class="row">
				<div class="col-sm-6">
					<div class="form-group">
					<div>Contact us about anything related to our company or services.</div>
					<div>We'll do our best to get back to you as soon as possible.</div>
					</div>
					<form>
						<div class="status"></div>
						<div class="form-group">
							<input type="text" class="form-control" name="dname" placeholder="Enter Name">
						</div>
						<div class="form-group">
							<input type="text" class="form-control" name="dcname" placeholder="Enter Company name">
						</div>
						<div class="form-group">
							<input type="text" class="form-control" name="demail" id="emailSS" placeholder="Enter Email">
						</div>
						<div class="form-group">
							<input type="text" class="form-control" name="dmobile" placeholder="Enter Mobile">
						</div>
						<div class="form-group">
							<textarea type="text" class="form-control" name="msgs" rows="6" placeholder="Message"></textarea>
						</div>
						<button class="btn btn-orange msgsmb" onclick="return sendMsg('msgsmb');">Send Message</button>		
						<input class="btn msgsmb right" type="reset" value="Reset">

					</form>
				</div>
				
				<div class="col-sm-6" itemscope itemtype="https://schema.org/Organization">
					<meta itemprop="name"  content="KAHAN INTERNATIONAL" />
					<ul class="cont-dtls">
						<div itemprop="location" itemscope itemtype="https://schema.org/Place">
						<li>
							<div class="glyphicon glyphicon-map-marker"></div>
							<p style="font-size:15px;margin:0px;padding:0px;" itemprop="name"> KAHAN INTERNATIONAL</p>
							<span itemprop="address" itemscope itemtype="https://schema.org/PostalAddress">	
								<span itemprop="streetAddress">Gala No 6, Ground Floor, Crescent Industrial Estate,</span><br/>
								<span itemprop="addressLocality">Behind Classic Stripes, Chinchpada, Waliv Road,</span> 
								<span itemprop="addressRegion">Vasai East - 401202,<span>
								<span itemprop="addressCountry"> Mumbai, Maharashtra, India.</span> 
							</span>	
						</li>
					   
						<span itemprop="geo" itemscope itemtype="https://schema.org/GeoCoordinates" class="hide">
								Latitude: <span itemprop="latitude">19.4110409  </span>
								Longitude: <span itemprop="longitude">72.8520986</span>
						</span>
						</div>
						<li>
							<div class="glyphicon glyphicon-earphone"></div> <span itemprop="telephone"> (+91) 8452953999 </span>
						</li>
						<li>
							<div class="glyphicon glyphicon-envelope"></div> 
							<a href='mail&#116;o&#58;&#37;73ales%40&#37;6B&#37;61ha&#37;6E&#105;nte&#37;7&#50;na&#116;io&#37;6Ea&#108;&#46;co&#37;&#54;D'>s&#97;l&#101;s&#64;kah&#97;&#110;&#105;nterna&#116;&#105;&#111;n&#97;l&#46;&#99;&#111;m</a>
						</li>
					</ul>
					
					<div id="map" style="width:100%;height:250px;"></div>
				</div>
			</div>
		</div>
	</div>

	<script type="text/javascript">
function initMap() {
        var uluru = {lat: 19.4110409, lng: 72.8520986};
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 12,
          center: uluru
        });
        var marker = new google.maps.Marker({
          position: uluru,
          map: map
        });
      }

</script>
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyABZ_bOrqUBVectEDT_7ikcv2xWo3z1EP8&callback=initMap"></script>
