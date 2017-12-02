<div class="container-fluid wrapper-main">
	<div class="container new-container">
		<div class="box-section">
		
			<div class="abtImg">
				<img src="<?=IMG?>about us.jpg" alt="AboutUs of Kahan International">
			</div>
			
			<div class="row">
				<div class="col-sm-8">
					<p>
					<a href="<?=DOMAIN?>"  title="Kahan International">Kahan International</a> is one of the leading manufacturer and exporter of packaging machine for

					pharmaceutical, food, cosmetic, beverages and many more industries. Our mission is to meet client

					requirements with solutions derived from Innovation, Ability and experience.</p>
					<p>
					We provide our technical staff with the latest research facilities and a creative environment, in which

					they can transform abstract ideas into concrete designs.</p>
					<p>
					In-house computer design facility with 3 D modeling and production planning system facilitates us to

					deliver quality and cost effective equipment’s with shorter delivery time.</p>
					<p>
					We have suitable design of our products which are globally accepted, delivers steady performance,

					superior quality and best services. There is no compromise on any aspect of quality or service linked to

					the final product.</p>
					<p>
					Our warehouse is well equipped keeping in mind the product's nature, properties and we deliver our

					machine with special packaging to avoid any kind of tamper or transit damage.
								</p>
					<?
					$datalayout = empty($is_mobile) ? 'standard' : 'button_count';
					?>
					<div class="socialicon">
						<span class="fltwit">
							<a href="https://twitter.com/kahanpackaging" title="Follow @ KahanInternational" class="twitter-follow-button" data-size="large" data-show-count="false">Follow @KahanInternational</a>
						</span>
						<span class="flgoogle">
							<div class="g-follow " data-annotation="none" data-height="24" data-href="https://plus.google.com/111538131389318225426" data-rel="publisher"></div>
						</span>
						<span class="fb-like fblikeabt " data-href="<?=HOST?>" data-layout="<?=$datalayout?>" data-action="recommend" data-size="large" data-show-faces="false" data-share="true">
						</span>
						
					</div>	
						
						
						
				</div>
				<div class="col-sm-4 abtcommitment">
					<ul class="row" centered>
						<li class="col-xs-4 col-sm-12">
							<img src="<?=IMG?>service_2.jpg" alt="Service">
						</li>
						<li class="col-xs-4 col-sm-12">
							<img src="<?=IMG?>excellence.jpg" alt="Excellence">
						</li>
						<li class="col-xs-4 col-sm-12">
							<img src="<?=IMG?>coomitment.jpg" alt="Commitment">
						</li>
					</ul>
				</div>
			</div>
			
		</div>
	</div>
	<!--
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC8FVBzfuBOJr8mroLtPAicTh2I-4OYpEE"></script>
	
	<script>
function myMap() {

    var myCenter= new google.maps.LatLng(19.4110409,72.8520986);
     var mapCanvas = document.getElementById("map");
  var mapOptions = {center: myCenter, zoom: 5};
  var map = new google.maps.Map(mapCanvas, mapOptions);
  var marker = new google.maps.Marker({position:myCenter});
  marker.setMap(map);
  
var map = new google.maps.Map(mapCanvas, mapOptions);
}
myMap();
</script>
-->