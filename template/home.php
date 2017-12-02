  <div class="container-fluid wrapper-main homePage">
    <div class="container section">
      <!-- Example row of columns -->
      <div class="row">
	  
		<div id="myCarousel1" class="carousel slide mainslider" data-ride="carousel">
			<!-- Wrapper for slides -->
			<div class="swiper-container swiper1">
				<div class="swiper-wrapper">

					<div class="swiper-slide">
						<a title="KI-SCF Semi Automatic Capsule Filling Machine - Kahan International" href="<?=DOMAIN?>ki-scf-semi-automatic-capsule-filling-machine/dt-51">
							<img src="<?=IMG?>banner/capcule-filling.jpg" alt="KI-SCF Semi Automatic Capsule Filling Machine"/>
						</a>
					</div>				
					
					<div class="swiper-slide">
						<a title="KI-SPBF 1-6H Paste Semi Solid Filling machine - Kahan International" href="<?=DOMAIN?>ki-spbf-1-6h-paste-filling-machine/dt-3">
							<img src="<?=IMG?>banner/piston-filler.jpg"  alt="KI-SPBF 1-6H Paste Semi Solid Filling machine"/>
						</a>
					</div>
					
					<div class="swiper-slide">
						<a title="KI-ALF Liquid Filling Machine - Kahan International" href="<?=DOMAIN?>ki-alf-4-12h-liquid-filling-machine/dt-4">
							<img src="<?=IMG?>banner/automatic-liquid-filling.jpg" alt="KI-ALF Liquid Filling Machine"/>
						</a>
					</div>
					
					<div class="swiper-slide">
						<a href="<?=DOMAIN?>ki-mcf-manual-capsule-filling-machine/dt-50" title="KI-MCF Manual Capsule Filling Machine - Kahan International">
							<img src="<?=IMG?>banner/maunaual-capcule-filling.jpg" alt="KI-MCF Manual Capsule Filling Machine"/>
						</a>	
					</div>

					
					<div class="swiper-slide">
						<a href="<?=DOMAIN?>ki-asc-1-8h-screw-capping-machine/dt-21" title="KI-ASC Series Capping machine - Kahan International">
							<img src="<?=IMG?>banner/automatic-screw-capping-machine.jpg"  alt="KI-ASC Series Capping machine"/>
						</a>
					</div>
					
					<div class="swiper-slide">
						<a title="KI-ARTF40 Fully Automatic Single Head Rotary Tube Filling machine - Kahan International" href="<?=DOMAIN?>ki-artf40-automatic-single-head-rotary-tube-filling-machine/dt-87">
							<img src="<?=IMG?>banner/tube-filling.jpg"  alt="KI-ARTF40 Fully Automatic Single Head Rotary Tube Filling machine"/>
						</a>
					</div>
					
					<div class="swiper-slide">
						<a href="<?=DOMAIN?>ki-alc-automatic-lug-capping-machine/dt-30"  title="KI-ALC Series Capping machine - Kahan International">
							<img src="<?=IMG?>banner/automatic-lug-capping-machine.jpg" alt="KI-ALC Series Capping machine"/>
						</a>
					</div>

					<div class="swiper-slide">
						<a href="<?=DOMAIN?>ki-asrl-wrap-round-sticker-labeling-machine/dt-33" title="KI-ASRL Wrap Round Labeling machine - Kahan International">
							<img src="<?=IMG?>banner/automatic-sticker-labeling-machine.png"  alt="KI-ASRL Wrap Round Labeling machine"/>
						</a>
					</div>
					
					<div class="swiper-slide" >
						<a href="<?=DOMAIN?>ki-slf-2-4-h-liquid-filling-machine/dt-1" title="KI-SLF 2-4 H Liquid Filling machine - Kahan International">
							<img src="<?=IMG?>banner/semiautomatic-liquid.png"  alt="KI-SLF 2-4 H Liquid Filling machine"/>
						</a>
					</div>
					
					<div class="swiper-slide">
						<a href="<?=DOMAIN?>ki-stts-semi-automatic-table-top-tube-sealing-machine/dt-84" title="KI-STTS Semi Automatic Tube Sealing Machine - Kahan International">
							<img src="<?=IMG?>banner/semi-tube.jpg"  alt="KI-STTS Semi Automatic Tube Sealing Machine" />
						</a>
					</div>
					
					<div class="swiper-slide" >
						<a href="<?=DOMAIN?>ki-tt-turn-table-machine/dt-70" title="KI-TT Turn Table machine - Kahan International">
							<img src="<?=IMG?>banner/turn-table.png" alt="KI-TT Turn Table machine"/>
						</a>
					</div>
					
					<div class="swiper-pagination pagination1"></div>

				<!--
				<div class="btns">
					<button id="playButton" type="button" class="btn btn-default btn-xs" title="play">
						<span class="glyphicon glyphicon-play"></span>
					</button>
					<button id="pauseButton" type="button" class="btn btn-default btn-xs" title="pause">
						<span class="glyphicon glyphicon-pause"></span>
					</button>
				</div>	
				-->	
				</div>
			</div>
		</div>

		
		<!-- Client logo end -->
		<div class="col-sm-12 wrp-btm">
			<div class="col-sm-4 wrp-main">
				<div class="wrp-left">
				  <div class="head rotateArw"><span>Products</span> <span class="glyphicon glyphicon-chevron-down wrp-arw"></span></div>
				 <?php 
				if(($sddata['error']) != 1)
				{
				  echo "<ul itemscope itemtype='http://www.schema.org/SiteNavigationElement'>";
				  foreach($sddata as $ll => $mm)
				  {
					$company_name = $obj->encodeseoURL(ucwords(strtolower($mm['cname'])));
					
				  ?>
	  
				  <li class="post ls<?=$i?>" itemprop="name">
						<h2><a href="<?=DOMAIN?>products/<?=$company_name?>" itemprop="url" title="Products of <?=$mm['cname']?>">
							<span class="prtitle"><?=$mm['cname']?></span>
							<span class="postbrd"> </span>
						</a></h2>
					</li>
				  
				 <?php
				  }
				  echo "</ul>";
				}
				  
				?>
				</div>
				<div class="clearfix"></div>
			</div>
			
			<div class="col-xs-12 col-sm-8 wrp-right">
				<div class="heading"><span>About Us</span> </div>
				<div class="top-col">					
					 <div class="top-colms">
								<div class="content">
									<h1><span class="sec-left">Kahan International - Leading manufacturer and exporter of packaging machine</span></h1>
									<span>
									<p>
									&nbsp;for pharmaceutical, food, cosmetic, beverages and many more industries. It was founded with a mission to 
										meet challenges in industry with solutions made by Innovation, Ability and experience.
									</p>	
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
									</span>
									<?
									$datalayout = empty($is_mobile) ? 'standard' : 'button_count';
									?>
									<div class="socialicon">
										<span class="fltwit">
											<a href="https://twitter.com/kahanpackaging" class="twitter-follow-button" data-size="large" data-show-count="false">Follow @KahanInternational</a>
											
										</span>
										<span class="flgoogle">
											<div class="g-follow " data-annotation="none" data-height="24" data-href="https://plus.google.com/111538131389318225426" data-rel="publisher"></div>
										</span>
										<span class="fb-like fblikeabt " data-href="<?=HOST?>" data-layout="<?=$datalayout?>" data-action="recommend" data-size="large" data-show-faces="false" data-share="true">
										</span>
										
										

										
										
									</div>	
							</div>
					</div>		
			    </div>
			  
				  
		   </div>
		   <div class="clearfix"></div>	  
		   
		   
		 <div class="colms vidlist featuredData">
			  <div class="headng">Featured Products </div>
			 
			   <!-- Slider main container -->
			   <div class="featured-sec">
				<div class="swiper-container featuredSwiper">
					<div class="swiper-wrapper">

					<?php foreach($featureData as $key=>$value): 
							$explodeVide = explode('embed/',$value['profilevideo']); 
							$explodeName = explode(' ',$value['productname']); 
							$Vidoname 	 = !empty($value['videoname']) ? $value['videoname'] : $value['productname']; 
							$descption	 = strip_tags($value['description']);
							$desptn 	 = (strpos($descption,'eneral Information:') == 1) ? substr($descption,20) : $descption ;
							
							if(empty($value['profilepic']))
								$youtubeimg = "https://i.ytimg.com/vi/$explodeVide[1]/mqdefault.jpg";
							else
								$youtubeimg = ADMIN."uploads/productimage/".$value['profilepic'];
							
					?>	
					
					<div class="swiper-slide videocol homecol">
						<div class="featured-col" itemscope itemtype="https://schema.org/VideoObject">
							<a rel="media-gallery" class="vidlist-vid" data-toggle="modal" data-target="#myModal1" rel="media-gallery" data-video="https://www.youtube.com/embed/<?=$explodeVide[1]?>?autoplay=1&rel=0&html5=0">
								<div class="homerel"> 
									  <img class="youtubeImg" src="<?=$youtubeimg?>" alt="<?=$Vidoname?>"  itemprop="thumbnailUrl thumbnail ">
								</div>
							  <span class="playicon"><span class="glyphicon glyphicon-play-circle"></span></span>
							</a>							
							<span class="cols-dtl">
							<h3>
								<div class="feat-name">
									<a href="<?=DOMAIN.$obj->encodeseoURL($value['productname'])?>/dt-<?php echo $value['productid']; ?>" title="<?=$Vidoname?>" itemprop="contentUrl">
										<span itemprop="name">
											<?php echo $Vidoname; ?>
										</span>
										<link  itemprop="embedUrl url" href="https://www.youtube.com/embed/<?=$explodeVide[1]?>?autoplay=1&rel=0&html5=0" />
										<meta itemprop="uploadDate" content="<?=$value['videodate']?>" />
										<meta itemprop="duration" content="<?=$value['videoduration']?>" />
										<meta itemprop="description" content="<?=$desptn?>">
										<meta itemprop="isFamilyFriendly " content="True">
										 <meta itemprop="videoQuality" content="HD"/>
									</a>
								</div>
							</h3>
							<div class="clearfix"></div>
							</span>
							</div>
						</div>
						<?php endforeach; ?>
					</div>
					<!-- If we need pagination -->
					<div class="swiper-pagination"></div>
					
					<!-- If we need navigation buttons -->
					<div class="swiper-button-prev">
						<span class="glyphicon glyphicon-chevron-left"></span>
					</div>
					<div class="swiper-button-next">
						<span class="glyphicon glyphicon-chevron-right"></span>
					</div>
				</div>
				</div>
			</div>	 
			<div class="clearfix"></div>
		</div>	
		<div class="clearfix"></div>		
		
		<div class="pmec-banner">
			<a href="https://www.cphi.com/india/exhibitors/kahan-international" title="Kahan International @ PMEC Exhibition (27-29 november 2017 | STALL - AA40 [HALL A])" target="_blank" rel="nofollow">
				<img  width="100%" height="160" alt ="Kahan International @ PMEC Exhibition (27-29 november 2017 | STALL - AA40 [HALL A] )" src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAMDAwMDAwQEBAQFBQUFBQcHBgYHBwsICQgJCAsRCwwLCwwLEQ8SDw4PEg8bFRMTFRsfGhkaHyYiIiYwLTA+PlQBAwMDAwMDBAQEBAUFBQUFBwcGBgcHCwgJCAkICxELDAsLDAsRDxIPDg8SDxsVExMVGx8aGRofJiIiJjAtMD4+VP/CABEIAKAD1AMBIgACEQEDEQH/xAAdAAEAAQQDAQAAAAAAAAAAAAAABgQFBwgBAgMJ/9oACAEBAAAAAPqmBaLr2AAAAAAAAAAAAAAAAAAADCNDlW91gAAAAAAAABq5nODzaiisEzdQ+cittkx34Zp192Mp8dTLmgmUJs8nl+n8j2HwZnO566V8TyFdL1KfHVa67IX2OYOyTc5VxKAGN8kQqJ5hdeKD2quvez1tW5oqqmtl9ould5+tDUWysr7Fe6eo8/Kq7AAABpdX013x/mmAWKOZJw3myZxWHbSaYXmd40r5/gDM2NMyY02WjNRhOc4C25wttnoBmW7a7bJ19iwBnjBO0GDLjPsBbTbKgYJw/sFkWzydjw47+fr5WSXXO/4slnvzaJjHqSOzSh6V/eglcUjExp/C6X4AAAAHHSKRWxWrwrL3ebrdbrXenIAAMX1eRQABifW/ePtizKnZiuro/Go8a+zSexzm/wCLJa97TMIRW+NHX83DvSSmMcRWTU10kIAAADhxasbQTntbMeQuitNotVNebznzcrnkOOQAAA447Gp2WKqr1m3VqFH369/Lv381Ddu9FV0FX6UNV34oLg69u0fvqkrFPzVcOQAABxb8bYyuF/iWKojeKn3l91qPGGa6Y/3V3e9eOtBb/BVVtd2sUevddT3qlr1mvFmvNqt8m6+XHr3NV8JbL69Yy+lMnRq4UvrVWf0v0GltuuVN719p8aO8elwADjnr1pfb17ByAAPOF4ntEliuNLrJ/KEyacWW19atRYph042nuVHz7d+cT6nzSW4Lv25nzqyju/izcp8S/rh84djsGYQ3G3duPYMf6UYYu20e4Xdh+cwBF7jM7hGqbtFPerlEbkdVEpXlAA4QSBRek9u3e5X2Xyu69uQAOthxTYbxR4upr/fPKFzTKsk9+lujUXh8WxzaKnZHIrr5+eiuBvH6p/PXJebvm7sxu5jTLM/+Dv0J1oleJs9ZZ+gPHIIJpRkHcz1A45BxzxyAHDiG42xdCbT1vEsmktprRaqqVzmYVnPIHCkhGPr3J2Ar7M41A7LJsr3S419R36+XS0wvDGIbrspIvbv54J112NjmsGa66kiuZYb9D9cNb8aZi+hukGJt4s7nDkRKRVYAAAA4h+vWGcSeN9l13vlwU9LXzSV3Dmn8pLPJJUuQtcM873cPLXHpmztbI3Or3ReFN0dvX19/b27xzF8CuXtd75IJFdu9ltnh071NXX3+++/XlyAAMaJdfY5aanCmPtl+lLU97FjzOlFFcn2HpaqbLNk+RFNnHNMlrbh5YuhU1kVwsFFT33NV6o7fS3C+yKs5cWC0Xf1qabXiOZnvNstuULyHJ15A45cg4OeHIAAAPnHtRNfTFWDMh1+v2wXSDQyR0Uboc5UGaNMs+WDIezPzswjsnkCnpZJJLzX0mJaW2TfI3viuO5lyX18+aXxudX6Uvpz7duuBrb2y3Rcz325AAAAAAAAA64hzAQnynYA4Udn7eWG8ea/TDIl5yTkKq7+NiilgqOJJd6xh+3SrOV2ccensHn1g8IieTLtIb847AAAAAAAAAQ2IyS1r/Ue9bU2+wS6jooHcbFFKiU9vPA+GqvMGW8g13a22mhvUtvnbiFRKuu3tg6Q9s3XTn05DimteIbbM8k3CIUkZ093pnTiGQbIcTus7hc658IvLwB1xfZ+/V2AAWbPvcBhbGtz9u9RkWC0nn6xXLWMJlrFf73R8bDdYpq9RbJZputJS+12vlXy5OEetFFRYpmNRlmo9+7mgo6G1W31ndz5fPeE2bXqo+t2Y9TsaZpq9Vct2Kzb71dj0+3mtt3LTGZz3cYAz810xBnnNkSwfa5ZZ82a45kkuuuweQ4rG8ngILX94dPI3cqCpj90mWIbZWQW2Vsjv/lbdevDarIft7V9YcgB0p7VBrHVyG63GvrvTr5+nc5MGZMvuK7bqF9JPmb9NPWIaV7O6kRzOWJN8tTd1oF0llBiOiztj3NXbA2eedJJrrDth74SmHrAcU7Wax3zfSQ3iORPJ4DFFglOF9jIH07wfy65bhuJLB2jULzNJfG8ZTy2545AAA44HPIANA9i53M+mBs7fM36aesQ+emxuweh/0X0g2S1m2708z/jWzTXF2z+DclZ7wNnnnSO7bMavwPKVzmWE9dN5fXVP6MXHvHIpkvrx37OeHPAdaG0WCM4895VKZncqv1cgAAAAAAYr+Qt4yrtBgv6XanY3zZV4g3ofPL6F6R7Gay7f6c7hYNh0uxl7ZoptjcBZ9a85clTHsWqr7Aq7As7ytrdsnlqJx3J7hTU1HbKb3rKv260lmilgqL9km78gAAAAAAAOMa6A7C5nxntR0hUNnfaXIVM4zc7VJIrIrZaY7KOYrPr3jCHcgBxTUvXmupdj+w4HFss9t8ee1Xfbxy5AAAAAAAADr41AAAAAAA4hdlt945s2Vf/EABsBAQADAQEBAQAAAAAAAAAAAAABAgQDBQYH/9oACAECEAAAABWwAAAAAAAAAUx8PWB5lOXfJo5d75L+loAALdbxzpUAACPK6+hIPLiJpx79Jxd9W4AC+3rt1Jafks0yiAAef+WZP22QAB27I5cQE6tOnpSuLp03b/HwRXlFIEoD4D1PqwAGn0/Rmmblz48OHIX7135uzLWInV6mXjzoilaVioAABs+u8XPw03jjOCI5wtX0GblQAAAAAF7X7/R+f5meZtC2zzeId9eKNmGvaKxW1Q72AMwAW7Xm/t+f5VVBNu/XNSq1uce/ov5VN/Svmd/Ppsy8dWfpPNMQ7ZwE9tcUlk5gAAPpq5eVNvlbbxPec+CM8ehgmYh2zlrSm8cIAAAAt6mTH3rzsRaZ56LAJyf/xAAbAQEAAgMBAQAAAAAAAAAAAAAAAwQBAgUGB//aAAgBAxAAAAAZwAAAAAAAAAG9mbms4zjobSwWoJIdbOtCAAA3uzR1odAAANujDSMsOjnOskkOmLcNemABZ7V29PjGM+HqZlR6gGcL30Sx8mxkAwC7ezHVp6gb9jrWJda1Gae9Y5FXMPNzWgwbbY0Hs+f5wABd7PYsYrxaQUOdSwWurX68M9aphjNrpRa1a2mdNNK0cYAABf8Aec+GnPb1r44m0dSGWWPuzUuZUAAAAADNmzNP6WDkUt9YZLWb3naeurbo9fjcXuc7XnbzbSxyhZ2AKgA2s9Cbefr8viwxV8G9q7b51avvNtSx8/8Atu/xm15mrv62D3sV6pBborNQZmmrALHRvw1t9OXEAAA9Zr8oq2/N+481B1fp821bmKOely2M5mlrNpZJM7716WAAAAN+v4rt86xZhbTZ22hs7gZU/wD/xAA7EAABBAEDAgQDBgUDAwUAAAADAQIEBQAGERITFBAVITEiMjQWMDM2QVAgIzVAQgckUkNFUSZEU2Bh/9oACAEBAAEIAv4zyWA23a5r03T/AO731geBFTpUFoaeJzCyYiF+JoxtEzi395kvs26hBEZZnWNAMRGXUONGh9z5nDWWsTAXNbIK0Y9RlmRaw0mMaRcVsBk9SWsEIwPeW6rRRWyneeVfUcPAWMKRGdJHGtoEsiDFd2TquGjxzVvKqGs1Z96nXrRAre97NndybiYG5Y5DWESNJDHKyzhvOYCU14yxQnINzWGIwbH3NeKQ+O9L+oUbHpJnxYio0k+3BFqXzwutkfUvK0VgAFbFkSY0yNLR3SnTLhkK3mM8wlVcuK6YS0hCLHG6PbOh21lFmPs68cYclYkyNNYrgy32nn4YbI0mcOZyyRPnppjvxS5M0FtVNbEseUyy5t1BUPYN6TLKFAViHh2kGe8jI13YW9ZZbi1JbzQPjsgOmBgMYOQyXGJGSSwNnCm/ywVt+IDZrLGROXzaCEfntXuVueYQmw0mLEsIk1XtD9w+0E2X0GoqOTdLM0cUZyGpTx+ggB+CPa7lsr2MVvI0mPG26oZADt3EjmOVyI57WJu4pRBZzIGXFkLxE44RvYxyqiJurXNe1HNxTCaPqY1yPajkdICzffvYuI5qt5YyQAjuLSSAiXi5j2EbyaM4jIqj5NR6Nwhwh9HjKIqbs72ImJJA5qqmLMipjXNem7WFE97mI5zWbciFGFN3ikBKuzOTeSt/uJ1nXi1XFc+RdglNu2ooksNIRVjAYe2rLWaKH2cuLXRl1bIAGkkjJMsxWFMkCvNH8ptYjj2nZB05aKyTOrl1FTqx6tn19+KLMlx7afUJB1JFPIixzR7S7iz60sWFJfErLDTscljYxq2G+SVYIz6XIRxLYNhEpJywp0Y+qZDmgKfy2dVhkyATqWvr4pJkFur0Vyy4X2YuWJKnxXWUZw4RSO00erY62jmp5TUFIEMWnJy1K15pc2TD1fIAKjkjfMeyx0wftZdrCN5CrBS48HUdoeRHjyYqVsw1M2M+ZMlAtZVObU8VsmMGNUwunjZsP7DFDlhZ1rrOiekCxr2ahuXuSTDTQZBY+XFDfinE0srHLbOZMl1ptRqA0uO6qpunOm2MMlsEgRukF006sEybS2U+HIDGl1yVWpVxtjA6+l1yvnVyaiuiujL19NViiru0l2vch/jt7PoIoBVcQ53uI2E8qE4IeOOQNWPiQxQ2cW+EN7GmnbiVJk3rJBQb3HO6VwHLilHFexsyfvZPGoB7bMLZP6lp00hkMk2P3U1B4KR3Ne561/0EXw/7aPI/8khAZG/GlYH6uTi9M8h7SNeNfaGremr1DxdIkOZF/kJGJhPrY+RHD2e9xXD7kDmS/wDoZO+kLhU65mgxERE2Rze2OxzPw1JISV/7fGKzujOfMeLg17WfXF/YN0THzo7MdZL/AIrOkLizD53kjEsZCY22cnulqH9Usoi4k2KuIYK+2/8AaT41i6XFPFqq91eAnU/sLax7NnTHAgknl9RjGAaDZsib4s0qG3xq8movjFjxzHnKR4hwpcZQw4kWQJ6lkw4kc0Jwgx45ps9SWEWKMI3M6AJFhJaWzr4A66U5i/1UWF/2sozcr/oIvh/20eS0ViNO2KqKWUqB+rk5xEOU/qIMTV3bGAAgUV7GoCS4bACQ1cxiiKpTxldEGJ4d3HENhovGX/0MnfSFwi9CSwq4ZetIEJsZEXuEXdW9MCiGx55POYELQKqJ6Tn/AN8Q4xfMWycv4bnlL86MzjjvTCzoovdbRq/hrPl/os2fiz5yYtpIT5vOG/5MsY5MSeovVlNqTrmSPJ/ZNQ/VjyHPgjg7tgWrZTlY9ttGdJUWTb8L5vwR1RwBKngMTBOIrSAYVw3OEJgWq1hQsKo1cwLBvK9pwsO1GvaFjTPLhwsOF4n9FnWQ2S4wpYum8bGhGwbc7cXSQfgEAo7VQfBqPc5HsYRqteOMMTt2sY0beLVY3nzxjGjYjGpHE06mwY2jTZrhterVV7GP47vY0jFa5URybL2g09GjGwLeLGsYPlxfGEQrCKjGsc5UIxpG8XECMqJzGJot9v7pxEbkiW72xXclxqMxEbhp0UPphbKST0EsWRI9SthBHi8G4MJpH4bar/5PL4bc7eOnsscC4esiF95dMjF+FYxBe9FqL5Y0xHIvjvimEnv3QM7sWd0PO5HiGGuIuboib4KfBO9GCfdU4nuG+LOgzeXbBmQzkIMRp8GK9gzlKKONxCx5EaUPqA8O7hpISMuAlw5LiNC97BMc94JkSWm8cs+AF6sL4cs9Vzb+DUKf7kOejE3Wh7IoHEbKkQlmPZHkxf8ANlau9dE8TTRAOESyJDYw+Sjlpx3OsyGxVR3cR+p08DOC4LCEZPiPkPjoIwTJuKPY9VyITu4nT6uNmDUhWK2RGXnssoPwqiSoqsc/OoPp88bMhuYj0FJa8phr5jC67A42UJWj5Mkx3v4N++5tzqjxCM/T+2VdsNMGPCSzF9GIBzvVzQMTDShM9Bv65/mHCxAMZjvTDF45GihH/NlLPB/isty+yyF/XrsXOpnUTH8XpspRdLCwwFT0gW0yt2GQNuySn8lTHdmyr78U/gurYVNBdIck6zVyrPpL+Wk4UKdro0odJsNNOeYVlTKp9XQK2rAKYtLX1lTB7qPpKwcK3jEdrr+u1Gas/Lthn+n/AOXWeL7TnqWNPy7ldlUTT5omV07+QxddTnirBwQ6OloEN+YVJVAtKK4nSdBzTyaPg7gq+6IifxWNf3jEVsmO5UcN25o7nIkaP1V5LXwHS37q1rWNRrfA1W8zynWWExHBIKTBmn9XeV/zeax4ch51GrqqR8GHglMsnIEcwEfzSqRkJGNZCmMJ1sdWG7h0hHwyx2jeUUI0uM56SI6QjobBRiEpxCx1bNcP4lhSRnUw4sEoe05eVSGtYzAQHgKN/wB2qomFsAM9n2JneynI73338OGfG32SRJZjbA6e7J7Xe7Tsdm6L/YFkjEnqWQc/sgUzg9MeqjbupTHP6Y1j8T4ca57vZzS4VHbesOoZ+LIbDiM9ka1PbwcMbvmdBjOx9d/xfDI3HBcuEikGu7UVrvTGfC7dsOX1U4v38d83zWS7nqOT3C7nUnXERpvsuMU4kBYr2TSmPo+bGJF/1BI0tZCc23mdro9zsMWPAh0BR64cjruoVNVL/wCnbDNAfl1mW2paukKwcufObHrJEtGtjO0u5U1faIbSUd6APFg3enpALW4A7WwXyNMy+jEtgZpAbXaUt3Z/pt/RpP3NhXsls3STF+LgWvgOlv2QbGCYjGf32+FnxRe5bdV+Q03l+I6ziJi2oP081FjbWPjLOEuMlw3+zeLvZ3BMVN/biVPZsg48ZY7fMOeF2NI13t9257W4Y67b4jXEXfGicuNi/wDIgogGK95HNO/lgYzH52w/0fGwgXN9lOdmRiIx/MqThLiSwriHGudRmb+O2ccfHG/3JXovyyq5/urmEHgpPF2AkoVm+cs38PTL+rHbwVFkN7yTAjtARaiI9HhvIgbeA4CEq72xiQoJ9T1sqfXxI8PUEOynUkOHHvdPJIpo44lpUXM51K/DP1JaVljGl0jNU00WNEH1UzVCnl0x40RlEn2XWI2Rp7Us6tq4btSaTkPDEWrCJrWNXNGUE+uFZjsBac1TVR7KBE01TeR1bIzvuZkAU1E3EIYBoxn97MnR4bdymvyu/Ck2jvczrZV9BJ38j3ZXP93NjdPG9PERi50BLnZCXPL0zslZ7NWQP2ZNK352zAEzlv7dNy4oU/VG8PkZLM30cyTv7oRrvuHPxxN12YkbdeROKYn/AOEe0TFe+Qd0p/JQs6jtsYnBMV2K7F5PdxaCvEz1esKMudhHzy8Wdht7dm7O1fnQImdMmcS5/Nz+ZnxZwVcLXAP85tNCenweR2cZdw8bVnunma42JakxtNJf+Iyhjf5Np69ueWwcWsgYtRXLnkkH9PJhp8vlRE9vLZKZ2EjPL3fqlcH9WwwN9kaie39oa9qo5HMJKuq6FI7csKdGsA9aPkqfEg8Osy3rXw3y0iWkGc57Q6oLaRgxyQZtxPPpp9gB00FUIIpb7usZC7zH31awUcqyLyrilcIp7itiyGRy/aOm6TiZZ2hIVtVPQFrAkCMRkO3rpxOmEmpaUPW6kiZGhh6pgW9dIGd7YdtXznqwA72oM2U8YdQVRyiG3JJxxgvK+ZaHkyXmcF8yWuzI9ED5jiixw/Ii4j0xCsx/akT4zwgJ8QGSUa7g9px40rf0V67Yq74oN8WM5MGUovRwRRTt5N7UWLGxY7cSORn4fN7PnGZq+yO/gVceT/x03k+dGo1Nk45smFIwTFc4xXy38nP9+KRwdJmLirjRkOuzQgYFNm/u9lLoRknVUezPDqK81kKnhLX1keO6PDlgNzJqKTTV74c6aCH5lBJIh91Jlaqr99WzoYGQBk1d/s48iZGlkZXapSZLpI6TH3Zl062QeVHiHj9KE+2iWEgkKHZ6XA8M+u6+qlwMgKh0mZLcB7kt1Jr4j4FlYwCCrjVcvU92x+olpxQmHs5XG7hWssDpQLbUFSWBWyKqZqC7Bg1bN1Gg2Kuaktu7L2gRQt05Ehx0G3deSJikxHEIuw218onztqgf5JXQkxIcRMNBimZxc+KWLndsYmdQshcDHwY+Ps8SPTDhUeNc8buQ41gwnwl45xXNl8HCG73QSp8qdRMR+K7/AMbKvvsiZtm3jIIsouPTi3IAeo9SLi4wCl9XI1Gpsn7wqI5FRbCn78lan8FhVxLGOcJYdZHhEIVPvFIxvupYvU6md0DO7BlMAVXHKj7m7V28WHHjBCmB4vdzdzVflGEpfYVeNPUjWoibJ4b4+QNuPmL/AIcZknG0m/rnbvjfO1+I7N8ViPTZZEdwV3RNnpgJBovpgjMM3kzw2zbNs2/jmkVo+KNajUw6q5eKC4CGjETm72YBPd371KsAQ5MQBJN/DjOnNUtrFHIhBxluJxuCxLgUnoY2xA6xdByVNbGeIaMnR1C0hGyoinUCMOB3TVopsIxOmLzWCspsdgJUaU3kDvYfVeLIk6NPAho8a7jyVHultEIxXi8yEYbiNFPjSlNx7qC3p5tm2bZYSlXcQmsa3GDWQuBjJ+gYae70btm2eiYpWpjivzpGLjK//kyKBnt4bb4SCx3qxwyh+Zq74mKiOTZThWKTGbOTG847+bBFaViOT7lVTFKxMMbqm3xXFf6NjV+y8yNExPCVPjQm8jRLOJO36Nrcxqsfx12qVSaUsyHZRJ7eQPBckWESL+L9oapV2wc2MYSlZ53WYO2ryfLy3zzKIp+h4kejGqqxbCLMcrRfdz7Ls1GNiSL7bO4vc7i9zuL3O4vc7i9zuL3O4vc7i9zuL3O4vc7i9zuL3O4vc7i9zuL3O4vc7i9wlnZQ9nyxuQjGvT7i2rzzTB6a1E5qPwNNLAcD1FUnHKZJyDFnqGsjlZWzmuHMyYOQydGlihwZvcQiSBQpjVjgWBEns8qGSPWyhx6lmNrphY8QJatstinU4xT1nxiPrEkBgsCQFfOCIfBYM0qS+UyHIeaQRhYkmQKdvbR50nuBhzfJRumNcKRExg3GXIkBdk3GFg09PRMV/wD4+N2IB64kVP1aFjfuXR2r6ooyM9+SJhOmVitc1eg/i5HjXAGQBM6jc5Nzm3OSZyzkmKTOo7Fc7FXFaYnowdf/AMxhGNPh8dUNL3rXLRMM6xHwvqSdGK+QoYx5HLpAOeGZHjpLVtpE55vl/cvjr24IGnzTEQ0j7MV+2DrUra6YxKWtFZFK18vS6MGrgadnmZJ7V7PzMmPkBD87CtIm7Jn0h80j9WfCkaEbnuAcUkTSD8ZB2RgvK/zSKkQclzXckRU8WpvqN+bZtl5anrXiQf2htGtQjqq5FZbt8J0tsGO4zvtRD6XLA6qC5+xJuookZeI4mpo5iIwsydHgi6hXarZy+GuuI1j8LZthGgM5FXVbN/SuntsQdVu2TGo6IfeidvURd/uJliKCUTSBnNc3+cljDcQQ2hvIixgFNNlJCjKXEnvAju9WzhIBhsHcV5Xta2PawZT2tEK5juiRjFZaQS8UYqrlrYpWBGVVsk81SCjZ0YiAVvnMB3HYlsBHR+K2kJEYuCP1CmH4cscTbLCZyfwbErJUpeWRa0cdM4OzpvXEjp+qCYmbffbYo2Y+MMibOdXbfI6IdMH1R+jkXfERVzpLiCTEaiZsmcUzg3Ea3+ObIC6yjwygix4ybCVqOTZYtLGgzCSA2tHEs2LvptD190SKT2yM3zC6TmiZtlgn+xkZpiQEBzqSXdQI43ZQifJtOrk0pAXJXjDpt8lvVlFbJoZ7UQ70JAK9NI/VnyV0u3L1RSq+HXsMyRfVsV3F8SwjTmcwS7OFA/HmW8GdXymhj9j5DE7wkqNEAhCN1HUq/jjXo5EVMH+Yy+OrvxQZGs68VSJhKgZnmK4VZfw5ENFJcSQS6Z5A6arxSXkMXVEQDAhKzTdcFwFkE1PFECQJw5kp0wwkIGdp4IUEjzx4tmhYshX21xwUNdDCNGNDHEBvEeS/pT5Q/wBHifc2dU2yPHc90K1UikyDANGON7iUdo+D2mWEV8yKrGFjWpjBkuZWSNgOd5YfiqZURpZQVby+TyRDhK2LUniygyckgFI252Ae67dMiwHxCR3LGiTB9k14Iro6QebOUbtnMKGQ+MQGBkqKRKJiz3/p1ZxfkbV2Un8WJSwYmypt+06u6seXDlMqLqPZhTJU+NCcLrc2uTdMLA3vQSm5Gd5fdIr2qm2+b5Y/QyMpqxtmUrXM0nGRfiiwgQx9MKsQmo+K5q1P5sbE/pC5pH6s+Wn9NmZJ/JrMpq4AIIlWOFsLUpGCqgss7abLPqOvCWAQzZ/5XhYbsUhiWXPtKKREKHNNkUtSDfB/mMvjq38UGV+nYcmKEz4sGPDHwDcaUZIc88fyQlXUGeXSf0581X9ELNPf0weau/Ei4YXQOJSR6qlkiaQbqqkY9rF38su+TxlGVqOa17Xb7ZL+lPlD/R4nh65vnJM3+73xX44mOKmPPj5o99kaGyP8jKUz/wAZlJAZ7tgQ2eyRwJnRHnFv7bb1zbOG4KmFJgHVrpVpNmhYI9NqKTXqgiX1qVgQICstZgZQ0XL+mede5BXahNDagZC6nrtsZZtsq+a5ukfqZHiz8zJ4au/Fj5/2hc0j9UfLP0rZmSfya3IH0YMd+aG5WGZVW0yKbUdkBkAgGT/ytCy16b7StZKspVfDgkazS39JH4NXjqN+/heVJrJ41HAC6LEEJ3hZRHTojgtpqwlaMjX3Fc+yAwbayI6DEaF11UFs3CVh6UUqEIJPs5ZAVejXUB48pkg1lUgsm/F9nbMXwjqIBK+O4b8mua2IdVpEVtTFRfHbFYmdNf0VDJ7KU7ffvNvm70Od0Fc67M6qZ1ExSpjjtTHzBNzuCE/DSJYG92U4PcwgBCmw/wB0nVcOxZse300sFRdvSaZHD2NJs6sVkJqLA00yKdpS4uHr4cn8XyCpwUKMAajHHhRoqqovDsYnW63hJhxpSopemzhwyNCixXKoisaRjmOWFFdH7dWtaxqNTtg9frZLgQ5zdjgpqyMjkE6FFeBoXSIUWWNBmj0tXFXcQACjs4CyfXMncHZ2V7nZX2dlfZ2V9nZX2dlfZ2V9nZX2dlfZ2V9nZX2dlfZ2V9na3m+2KC5RN1QNw5dk6NzxR2dpebb4tXLkbJOYjWMRqfcbJjgiX3WFHXFrwZ5cPPL2Z5aHEroqY2MFny7fvPFN9/2psYjT9XCQnva1uLXlUzitbCVghta+IZzt8WAbg5M9c//EAEsQAAIBAgMEBQcICQIFAwUAAAECAAMRBBIhEyIxQRBRYXGBBTJCUlORsRQgIzCSk6HBM0BDUFRicoKyJKI0c8LR4RUlYzVgg7Pw/9oACAEBAAk/Avn69kOn/wB8Ic1TTPyX/wAxTmp/tOR/8zQ/vvH1Fo1qT1cuzp6ZTw4SoaZyHK+zNTKeshbyu7vXpJldaFS1QsOVh+ENTagXtsntbrva1pXuXJCHKQrW9VjofCYlqLUVvoqtm78wMxAxdIIrVabIFax45SvVKn6dc1MBSzMOOgW5lb6FjbOEZgO+w08ZX3wua2Rt4fy6b3hKw2SXzMd3Ll43vwlXfZcyhlZMw61zAXiZ61WotKivW7TFjE7LerUTTVRl55SNdI9ZExV3aolEucuTMMuhv29UdXqm5uoI05aG2scfIBiBhXFh+kIve/ZGZalY2p7jWPZmtaM+1ormdNm/Ds018ItVTtqgW9JrBV62ta8r3LmyHKwVj/Kx0MqMKqC+TZvcj+XTe8JiRkc2zZWsOW8bbvjGOYi+VUZzbrst9JesuS9PILg9/UI9WnUFEfSNhqlgxHG2XUTEq20pp9IFI2hYcl46xvN85SpVh3htZjqlP5LiWSlT2dO2UW6x2zG1quGqYVqjnYg5Tp7NY7A4i2y3Gs1+21pinqpSFE0hs7tvC7foxwlddlUtkI1zX5ADjHzZTZhYgg9RB4TyjUSlWovU0p0zltyF1mLr4rCHDVTn2A0qI+W24oM8o56tPN9IlIAPv21DjlMQ2yxRcPSyrbdS/G15iC9Ojs7Ufk7h6d/C5vMRuVDYNka1+FibaeMq5S/mqAWJt2CVdoafnWU29/CYpnoJS29SkUTzNoFIBtfnK+QZUeq+UNpUbKvGV3q1Mt7inmYjrIpiVVNErm2l9LSswZ1OQ5Ct+1cwsZjMzUcbWpqcmuRNATkH4zFZEqB70zSY7XduMr2tpKr5qPnpsnzDwtwldNgRfaco92S2ZWUowv2Nb6nWw3j0KHz6BOuIEZOXX29JBymx7IwGY2HbKqpfhcyorjsMIJXj2Qgage+OqL1k2lZGPUDHUM/mi/HoNwRcHoYZeuG4McDKbHv4yqsOluMdWPZG16uMYERg0Opvbwj2PVGBtKqxxZePRUHhCCOuMCy8RDxNhGAj3PVDqBe36xiaYWlhqqOSfNa/AzFUmwyYRRSNxbM6tpeOr1sLRo1Eym9qlIXt3wFamNplKI4biLYe83mLxj1qL0f9KERTSZOvc0AlRVaqlkB9Lul8TXrUVp7o3U01LNMVVoYdfJyUEroFIDJyOYNa8rVT8qrhkNbKu1N1uUACzEUCq0awuHHpDd9/KVFqscdtdmjXLoCL2jZzRr7SoR+zS2obqv1RC9TCYlK4T1svKXrYjEoaYpAarm0ObqtMTSHyWnVFQlgLfR2ue+OAADl/mNrgDvnlU5WBqN5mTbHetmtfjH/QYlPlR9QlbXMfdqYNBTJ0z2Powf6upicUGTmFIJv4z/iw1AbO29SNPiW6rSvRGTycy6uNGz8O+0r0sz4yrlXMNbtp8IyI5we7iheoXF/MpgaEymzV0o4rarzSz6DxvKibFPJ4XOdPpWUjJrzh2mFw1DZ1mXe2TlB51orkVsmesb5XI5LfqlRVeqtkB9KxEYVv9KRu66gcJU3aVentG5Ju8CeuHJSenRC1jwuq3y38Ya2HwvyjFNmVQTRFXzSQwMr4jEbQUw1ZwoRyvq5VXhHoPTp4eojh9QHvwPbHCUaZY5msoGZr/nMRS2u/uZxm/S34TGYcqjVc52gsu5bWYqgFZMPY5xrlU390rUtqXO7mF77W/wAJVQ4atgdnSrXumYPqLxSqnyjUIBFuIEr07P5PfDsL+k7jd75VX5S+Ko5QT+yoHKIyIWwu5igC5cZvMpjheUnevSNRq9P0gFq3y+MDvUoI+uqrRW2uflK9DPVxGMy74uwI3bflMVR+iovtN8bv0VtZiaFimHs2ceiu97ucqFhhMbnxAp2Z0XO1mtrMXicWyYcoapCBACfN3VW5+oO/6R9WDdUceucOfZBcTUni3SwH+o/6RNaVAFaZ9ZjxMtnNZ1ueSobASwZqmza3NSOcYD6VP8BGB/1FDn/OJYijSTJfkWvc/hLbSiM6HndZoThWKnqYMCDBZsjBx1MOM9hT+HR7Vf8AOcPPTuP/AGntR/iJ/J8IwyUrbp5njGXulrs7E++eZYdxbnPNqoEbv5T2dX8oVDM7Xv2G0IuxKm3Va89us6p5uXM/b1CDSaLVbKw7eRn7PENm/pPGe2WEXWyrfuvGXOjrbXtnsqfxP7ha/dE98IHhKhlQwg+EQRWEe3hKye+Ovv8A1WsMtLPnoMxVXv2gHhHD1a1Z61Ujhmfq7P1H9I49wl8gO+0FgIJw9Wcx00kc/KOa39EQZFrOUdBw4XBt16ShTqEYivqyg+mZQpIflA1VQORlJHtUTiL+gJRpqflFHUKPXEppUGzo6ML+tMLRVhRaxCDqn8K/+QnmYqmxH/MUa+8T2FP4dHtV/wA5xpHX+nnPaD/AT+T4RV+lsVJHPhaIo7QJTRjmfiL+lNENLNl5A9k5pPOCVQ3eLRFO+/EfzRFX6XkP5TPbrOqeY65Ceo8uj0Gzv2W4TgazTjSxCgf08ooO+OI/lEpqDmXl2z0qK28Cf15rRfExifmVR4aylUbwtKA8WlNPxiLKYiEQiVivcYRc+a//AH/cvsvzm5k4pzvBlbl2iGw9fleJ9ENC3M9s4FF6f2jZm7+E/ZtmXvtac2ZvFjeeg+Yd841CC3gLTkyt4qbzznAB/tnmupB8Z5wQr4GX43BHEGeaigDw6Bug3/G/RzM4ta/hACDyMz92YkThPOy2nAQbxE4XP4z0DcT0WuPCcDBcGNUUdQcxbT0jcwbyzixuZwg4cDwIhY362J+P64bdBEMbMepdYgTv1Mdj3wdCaesdBKngJTv36yknulNfdKS+6afCC3bG14JU6+/5rL740v7oD0MOnFUHY+irgmeUMIrKbMprKCCJiaNfLa+zcNa/XaYilUembOquCV7+qYmjSd/NV3Ck9146oi+czGwEq06qesjBh+HTXpbdhcUs4znw6MRSqmmbOEcNl77RgqqLsxNgAJiKVbS+44bj3d0xVBGHFWcA6/U+z/PoYM/B7+jDu8jyv2TxE9gnw6b5qp07O0wE3NlUcWJ5CDYEtlCuw17pXpKRxBYCVUz+rfWMlLMzAAtxsbSqudRwuP8A+0lRXHWpvKezDIzo2a+i6a9Ur0sl7Zswt75Zcrqqm/nZlvK1M5PP3hp3x0NMqxz5hbdlanlU2JzCwMZclr5r6SvTysbA5uJlgUqZBr527mlZMzrcbwjohqeaMw17pVQvru3100+vIjL74R+sGCwhggzn8I2nUOHQOjjGGbknIQ37tZTqfYMVh4Q/M1T4TSHb0f8AcJr3/wDaNbuhJ8fmjM18qL1tPLFPCVGpFxh0pZsgtzlRKy4hb4bEqMubv4RmyvWVan9Osqha1NN9y9rNx94MwFGriMRVO2LPVtmIuSLMJQFHa0EervMeAv6RMOuOxFfP7t38Z2f5z2P5z21TpOi+U6tK/wD8dxb4mHVKD277aThi8IlTvewJ+Jn6bHVBTA7Oc4UKVPZ9opK1vfKjmuc9jfmgz/iZdtjWZFP8tgfzh+fo6jSXVhCVuLG3MTzfjNKY4mCwHAdL/TbRTT3jlAQ6CZS1JicrcDcWmxYvSam3EZLnisVDmq1Cx7GWwi09w4cu/O6KOEyOMjKyFio1a/IRlG1w6pftF4qDNbUMWJ+EVNruZieDZWvbuMp0Sc9Q5Cxtv27OyMocsLDkFyBT4z5NTWmtJdX0bIb66c7wreouJH3jaHu0jUEQZciObDRbfhEBYopKsSvbymyctSqUzmPm5jxGmpmRjtswDG2mQLMv0WHZG7zabI3pU0ZjxXIb7sy/pqzP25+H1hznslljsfH5jEeMqGBTF/UjNxZdjLCOs0XqgglvfCsf3CZix4C/CUU90HSoMS3dpH98HujGajqnHqhsRznnfO/R7c5vwlvlBzbK/G1ze3hDeqjktbkNp/4jUhRcWbObCHaeTa+vXmv1nr6obg1rj7M4tg6aD+8BZUU16DtUqqOIuwdfwnZ/nPY/nPbVIXzOuYZVvD5mHaoPdcSqvylMdtCt97Z5ct/fDrjNj8M5+EqqyfJ6VGqQeD+a3+UV3pYXKlJV9Y8/eZe+IpkC38tN21905bf/APUJ/Fn/ABX6ndqDgYtmUzdprxMFgP3A9z1DWC3aZV95lUHu1gqH+2U6vui1PdHI7wZWT3wg9CwQRYYfrTlEEF/hH8BpALDr1iADkIkVhL+6GaymSeXZLwxow+cIYvjNZofnOFqKc1Nj1zyWGrDd+VDUEAelEpIwFgeocZWQODmQ35iGktKh6eYHhoOHZKefYt6wGgFuco5mXJtBmUWyr2zC0/lVLZAsMqswVcurTD3bD0UWtvroVPfMDSplqVqORxvG/wDUZgKRp5yapZ1ut2/q6oYM9SrlFrgaXueMwafLWp7z2XNfPmtmmEsuHL5znT0jpz6phkz06jEqmWnx5626pTCtYXHVMPkXEZAN5WuN6/m365kqYfEDdfMo4mx48NIwaoWL1COGY/VaMPSEFgP15u4czFCDrOplYmJ4mZ7dglOofCUmH9vSo6RbulRvHWKD3aQ2PVFJiRI5EsYPqhmP4Q5j+HQI1gJog81fmi5gDMZTEB98Yx/whEEB98zS8EWKYsQSqV7xeOjDqvML7jeYcibsrxnaUgZQT3TD0/dKC+EDr3OZXrDxmKfxAmJ/2zE/7ZXeFj4xBB+q4i2R8rNlYqrdTMBYR32uQPlSk9TQ/wBIMfMmYrqpU3XiLHoexc2RQCzN3AamYhdjTNnY6ZSORB5yoSyAEoysjWPOzW0mMNFqlelRy5EZd88dQZiGw2Jwt0r0wiH6QEKQcwMxTVarXynJd3/tpjlKxNC5BZUZ8tvWAGnjGrZcR+i/09U5v9sr2ZLZ91iEv65AsvjKpV3F03Gs3PRrWMxBsjEP9G90t6wtceMxp+R4vaZkyqV3UuuU2vrKwy0P0ucFCn9Qa1pVu+XMAyMmZetcwFxMQUNFlFQNScFc3DiOEqBUJAB6yeQ65WAFD9LnBQp3hrWlW7ZM+VlZCV9YZrXExSuuEXNWZQSFH58OUqVM1Y2TNQqICePFgB0GyqLzW/AdQgyjrhaq3bwlNR4fMVT3yrlPqk6TQiMOhTB0JbvjFl7IzN/dM3vjX74I/gZTPeNY3ztYdOqDpNgJoo81ejj08Oue/wDfFZMP8prZsbWcndPMIPW+EUGr8nWnTbjn9QfjNXVb1D1u2rfjPKFesuv0bLTA/wBqgxc1ekzfJgDa5PHst3zEUcVif/UqeLrU0Nk3f2Yv8ZhHwxXCV8+dlLFdPVJ0vKyK/wAuw9SxPoK2pm/hPKlJA+XgKi6q/iIcmHqYHZU6p81WDXIJ5XiH5Jja/wBGCLZxlszeMU/+zCqhPJnY5U/2THYrDvWxVZtmqI23Sp6t0YmVQmwSrmWs650vT3c8xNC1RRl3xvfR5fiZaqmGR9tl3tnZFGtuq8BqUNhh0JT9sUbMcvXYTH4zF1KGZhu01FIFdc+VF7rSphqu1GGCKSrZ8i71uu0vs6FZXp2vfOOFrSqlbE1RQLYWkb5aNJuB62hzphqVY13A0AcWCHt7JWoVKeJpYZEUON8BDmAtP0Hkqjb/APLVH5L0HcQ75HM9U83q64Nfh0oW7o6p3amPUbxt8JRXx1lCn9mU18Ba03k65rOHRYQzhGymbjfgYfmCN9V5i8OjgOHTovx/fQuDHCYfCVdoaVvOyjc93zFIFYLnZd1tzUawvUq1LZ6tQ5mIHLu+tYQpny5b87Ro0rirVrV3q1alrXLRt4+fU9Xu7ZqeuHQcIIPGbx/D5pie+Xt2aQhT74v93L5vm9G+nV1Q/W8W6OJnKLNf32GviWKoRwFuuJVY4JaZqZQNdpwC6zMxxl9mV4WAvcyhWVflDUBVOXLnXuN5Qr0lxF9k75bMQL23SfxgfOtPNm9Hu79ZTqValS+Wmlr2Xid4gRtjmvu1dw6Gxlekaw408wze6VUO08yzDe7uuYii72vlVwTbrlZHbLUZsrA5Nna+bq4ytTqre10YMPwmIpbRBdkzi4HaI4dDz7pSq0hVps9MvlswXj5pPXzlam6A2LZxa8xNLIvnMrCw7zKoZabqpfMCpLDl75XojaeZvje7vmGw9JujReuLPd8zWaS5je6L8zcMGnWPmeaeHR4jr+sMGg0E/Cat8IOioFlS9uXCG7nzU5wtlcDKBwWVQ3ZzHzKyKernK3+0yqrKvEgzELMRT9/RVG0vbL06AC5lUOQLm31iGrWqeYgmFofbmFw/25hcP9uYXD/bmFw/25hcP9uYXD/bmFw/25hcP9uYXD/bmFw/25hcP9uYXD/bmFw/25hcP9uYXD/bmFw/25hcP9uYVRS5ujXy98NwwuPqRbJRrWf1al1KfiIgZ6tOgahBFs+32j8eq8yuKOKUUrHzMOoa3H+qI7EeUKzlDUuuSpezhb2BEwzURhHz1HZkN7KQAuUnrj1Nt8sNVqG5lyvucbX0TtlFqwSlVpOikBvpCpuMxHqymfojizvPtCgc7mp7JQtsca9c4i62IJY99zexmGKLgw6u+dddywK25RMjUVqiobjdzIR8ZgbLQwFWg42ijOWCjdIvobRWAJXIamTam3rGnp3SllWlia7MBkCWdWAItqb87xShQsOWuvHSYRtqmGqo+2qB0a/AKMxtr3RGO1GFyhyl/o3u3m6SnmBfCuFuN/ZNciULbevRYISDurlvf3Snuvh8qsuQXOujFte63TxPRw6oLCDp/CD3wwfU7sHSe4wiHdaEQiH5gMHSPGGLb5l8hXdl/wCbujNWpk+fzHfKbPlGtheEo6zR10cdBs/pN1RyobXtMz367x8wZWP4RiuRb6SqSRyMO6eAPIz2/wCUdV7zGBHZPZP8J7L84bBQST3RsytwPzPNQXMfLTe1ie2c/mcsHp9odIBzDnKAyddouSoBw6FLAdUpvmv5spFR1z6U9nCIadzxjd3bKBtN1/VMbuHXMObRCuttej2bfCep9SNxqdVy3Vs7cvGLsqooiq9PjkU35+EqXerTV1AU+a3A90JpmrTDkBWYKDpvEDQd8Utqqqo5s5yge8yjsTdQmQmrnvyWwBvp1SocjvkXda+b1bcb6So12fJrTcDN6pJGh7JUJLrmS6MoYDqJGsurV0zBFVqh04+aJVDZnCCwOpK5vdbW/QmcNVCtr5o4lvCJf6Eual+B9WPcVxenoddLx3OYXX6N97u01mZ0rK5DKrE7vYBeVNGUNcKSADzNuHjLfRED3i/zNbRTb1jw8IMzdcEsIYP1AQXje+LeIei8HzRB89VZaiE2MpqncLThN3aCxTlFC1baOJpdSCO7o9KqSf7den2bR1S6DiZVV29VYNFJYmecKmkrtnbWOcvHvE9Kgx/Cey/Ofo8jZ+7nCFw4Ase+VdeoaxwwlQLfgOcq3bZnTnLbPd49cdUp6WJlbxPCcD0fwf8A1Dp9WVFY7KxTjOK0W1j5alNd9Tx0jBlNtYubJawMQKc1tIgYlrC/KALtFN/CNogC90y2tru8Y30YYEQ6GplHYJRS3dECi97Do9m3wnqfn9TbJSSrr6Ss1srL2i0OGL1cIKFU3bQqTvAW148IVsuBo0dPWS9/CVqeT5IKY+kdQra30A3r9sYK4enUQnhmpsHF/dPk4eg90o5yVN1Ktv5b316o1PP8uOIqWvYXBFhGT/6iMR/be/vi00p4ZCRvEsxYZdRYW4zK1Shh2pMNs9EakG4ZO6GiGpoKGQXtsuwm5zXjVRb1Krp/iRMuVK2ZweYykfnKu0KCrnc8WzWC/gsNLJhQw0Juwta/ZHT/AE6MG16xyjUXalt7jMRfaNccjKl1ek3NlCu5JOg4jXnENqrKR4LaUmmHMqCkvZqYmdvWbX91aZRYHtGsIWqPOSNl2hsDNegfsXzHu4fHo9GqR7+n2bRyuRb6Sq5iZROdbo6mn8MfhPZfnP4ep/jOqn/lEDO6gux4kmDKlWlmKjhAH2dQpTB5Wi5alIXDDq6p69OZMgCnf4XtNd05bJzmtrjo/g/+odPqmM93UEiIFEORzqU5GVDne25fdH/meuJ7SdZnqtFurBW7xKYIPbEXM3AZpwWr+EYEGG9uj2bfCep+f6qS56l1lEUx1ufymKbuQWiFv6jeUU90pr7oog/dujcVPbM1Oop7pVzhOF5epR6uY7oSm1XNfgZVZ1ZgCrG/HoF2tvr1xCwXh1ibS/dEyhFI/CeoOn2/5dHU0/hj8J7L85/D1P8AGdVP/KezE/hzNxatTPTY9sYPUqi1h1T16c/4fYjuzTZ3ZCEVe2esejTNhLDt1HSwGUc5xVQOlrE844bMbxgtmvDcjnHC5AePbDv01sHEr6dhyytcrym644NMRu9hIjhiWvfoNvo2+E9T5xMIMp3iMIYwjCGGGMI4lJ38JkpD3mO9XvNhEVR2D9607nk3MR2q7RrBbazfq8l5LDlZfNaVNpl4C1umirdsw/8AuaUwqtxEphL8bdNJdpe+boph7cLwbtrW7JSVCRyguGFiJSGy9WCwHCINpa2aUg8wyjMNefxlIbNeCykrqOEw6gnnqfjFCr1DoZqdWmdyovETykn3InlJPuZ5ST7meUk+5nlJPuZ5ST7meUk+5nlJPuZ5ST7meUk+5nlJPuZ5ST7meUk+5nlOnf8A5M8qU/uZ5VpX/wCSJ5Vp2P8A8M8p0/uZjtpTBvkVQgPfOAGn1SiLLxmjtC3viX7zKajw/fQ/dTcSb93KegTbtvCFJAA5264PMdjxtoTGIFwQvxEa93vr1aaQT//EACsQAQACAQMDAgYDAQEBAAAAAAEAESExQVFhcYEQkaGxwdHw8SAw4VBAYP/aAAgBAQABPyH+dEFnZxzCN5f/AHGdKP5vhHrhDD3YREN3hIW0N+r/ANpXoCxxK3qCqdLhWClRvLzmV3MPl8oa2FsxzPaa3B7XgJ1gDyopY1RrIV8gh99f7XVzyI9WiXYMhaEXwstoGqva41KwGbZV/eYmihuWaBqo6xfugKPQHtBEMjpob6EqA8Svsx3XGClpG6GGnhcZ/egrbuFaa4J83Q/XVJqCAhk3eDLjS5ZeuhOdXbV2yuWZ4sfbdwzbrBZptBtgD9mXVM9UKv7pFmADOlw1C+iWE5xT6oUdUvkTRWbYeRZZ/wB8yviFZTBDxVHIExGXCopOrBLXSkC5kyjE8HKrF6aqMeG4Gd5kHndOmkeiyqjdJC4r6c7RWBRfb5IroSjWdnBziu8xra1r8ImO8sJ0FiioYdcRrTK4vOF9kuMyXRzcvWX63hDA7bVirl28NdKdiPwlu7vM2oVo5mD+bUd8Mt4h8bdOgU2IHtWC0YSrrllz62gR4odaqP1joK9W9pnSu+m7dT0uMwdfExgcOqV+ICT50hzKq4xvYXeu9RiUoCm2Q6eekSjaCxoUlTz/AE0gq1ezwfWHFsdGCdQo/GkrVS0adz1bDlCOrWmECFCurWiALpRX2jYsac1d45cAI5SXmFgqBWsqg8xUIa0nxj0DLcj2mLO60a8RElAWsN4MDRHR9L6/26gQgWJuTRsPSRh7TZOtBpF7GypxxgVyjsrdBXsQ4p7jAIg01zFzw0OTV84kATTU+xHoXVW3c9JPv0W4v0UTS3sh5MQC1aBsnhLizRpX1F2g4StF79omIBex9mDUFRdDp8v/AEYYmifiCUxwgUxG5a0lUYYGWsfCohGVZYFAlPBoI1dHq3MXw1bKEsiwY/dUg0oqO4IVAzXtyPLdlGzaPEuahRCgEKV34EygajMHLr0a8pog6j51OsdYhr0k1pfSOYh52kzWaC0lJiqu+6lSPiFdZvyPWsEslQzcdCLOvWXFdWpLhrUiD/twB6w/XV+UlbbTWXnwUGv+0jr5ILq7U3swmG9NLKuvHduommbLdYxu6UHlu1nkTYoxBRo4GOEWqvhG+49cr6p3hvgrZSmoN3Ad7PHWF3L1aMVtfBCnbVyV1EsG8E6AaAqSD2xBwF6GGixXVlDMhNCWQPyywFOkAjV1JNYUPZmOiMFQaLXjMvko5mic+UHXgWdjmlyhmR0r1fFstMqMAjTaWXEr76CVuxALS09Kz5jGCWvUV8r7tzMWFlLu6lvxMYzxfna1DipntN8yuFhek49ens5xBYAmrRcG4dQU9rCaNckrDAoYouqen9A5GmHZwdZkrgVudiVYvbYs7nuPJOsUWr6997tTcdJU0f0DA95YWN6iJOmLmrYzulrsTEB+YWpEzW0GWuwA0J8iCw3Z9GT46MIN/wA25pngEulB7z8Bx9U5/o93yeXoz+A+dHglg1DmTzW0SpnQkv6Hx1ww9glxy5qaC8J+GF3+k/McyO7nkXSDwVBOd1jN+XZJ+b3nwj5y5nGlwuuw7wcABQEI90R3L7mzKfnWqvg1lEpp9+KGVctCirvcyMAYLyBPJ/wTLkLXeMpl4zjfnqfLJ90b/lKv8p8732TWv1Goz6UzXPMpp/tya+/CUf8AyB3kKpdC/AUISGOuMOFUf+Gm3qPivvH6hY+idWALPQELAFutbxFSji35rBL0B9/Ua8oJKuvBR4zLb7UCDnQCUOtGpsrLXSjAoYnTvQ19rEe8ShssBI7sxgkotHcY9GHGuk2C+J4n4Dj6pITVdS0/WKFYuR+A+dK04YclC2fbEvQeASt6CzVW5njiADXZcwWV08Oz4mJg/wCGLLa2uwXVE5hWQIfm958I+cLAehQ3bvp6BkFSew7rCCWC+xALb66K7/SUaZpjA2UyhHTHTceSzPn/AO4/F0b+0sCr8dI3fRdvb0FQVtaI8jXjJ8Jjer4PjEaL8Npth8qa98WfVVDT+OTQCeuJ8GWwEFg07eIG/wDgX/A5ej5oZMBrkPnfMDNep2+4TDA4E5RUicd1eHSL3aQ8ietu16twMPaBI3rnJ9Uv0py29Q+LLsbLPsK+ss41Y3D5CWUUJTWAPiQA3qdtavnLNmg8Yjf1JziwfpMIdBOgbjL6PAQo9OIyC9z6kQSnRhpNWNt7VvwECtvHOyapFgsgRxWi9sWEwqy+7bNHcnpdw9aOg6QAK4OcZq2uWpR6rHlWwv8AOq71X1mFbo70HnesR4AFI5JX6GwHbiUQHXu8rzMaVb3mIG2aa00vmoU2F4SpXq7D7Ny/DKyXsEgPwcn/ANbrkBY7RLJX3ZupbcS/jx2ic/pROm8LHtNsrCOxM8v5DrL9bs18WG1d9+abceM+yOBtN5AMs6rs/jERp3sNJsJrGnR1TMX60JpO8Ily7Cx2rwf5MH3TwzQYC6ZigmgLXiDmZROBpaHpH8vxKBEXDMu7F4eytSxtZz3VEeG87XPJnBFwOuWKbqukNvSmcza7eqXewqDWy91j0vBGYPgrDiPW+SyBVdAjwEBOJSDk6qgNXEHGBYu8ESxxLiZ4Ifw6JAGoAas1DmAyO3DzHepeo3dnE1x/HaXD8a+t26mDZ8i8S6YDM6FCjG7aH1pcnHAlY3hzvrDqLwdpTjPoy8LriUEOXurNdaZjcmaQm+MRjmmiF7bN0SKs0a7xDuk+ahGvedlBf4Uy0AioanqQw+1/BdmU28QMOb4l7oa4A2OZXWu3LBgeZiq4jRtRrq3iNGsSz9TxGp8JBRa2Oj/ehqXmP+ciNU94J/5ggtuzwRVgHLT5hOiWvaujzGtN4UHWSiEYEpBmjKwBuwAT1I+7yw+D6T9E/PR7T5kmQkV2ZyQPCxmbZ38xaRlxH1AwZ9l3lnpyHSRq/iR+P5MC2JR6XLwYLdXfTmXn+yEuNdE1puY+rL62UK4V3hkyqXgqel1K7pXe680lmU3cLSzexfjmz/Bi5VaD68X4r6S/G6J+G59fhjQqfBLT4l36fFLVQ4RkULetU+JojmWf0jXstlMlj7Rd5hdO3bahIMrxEIwfyJFbdKcMuzTI8nMsN3vVZt2i6CGMiU97oQzgwDYPVJtsEXRj81lZ9xUutRdJc1X6Gg3blvtF6hsZebbjBFW+1KlY6NTK4WQJdaKN5MRBw/HeY4zBd3IlAq1ShwBiZS+mOEbehNDmlVrle8w00Y06DYrKE2NYZghKoO2phqdyEM7mBQq7IuljK50+NdkU+eiVb5sjDZahRrcJojtcrj7a2eag5sjr2xu5SvaGElUOqnDN+JWW4sai/uMf1j2oBvGq+EPebRemX4+mwrADtKO0D4FImneXPznyyamuZ2bmlNdyAMP99y4ds3lofWS7p1UNt344OCagOA69522L0Z3HPjDq38O8d1E6V8bzfBylfdgNAdiVEnxVgZtjvxRrdoza+6mM96IKfw4loyhqoU2aIYlbR1cykuX6tY+B9Zcftv2+D8RamrdRz7pg3utvLWYFcujLErwTtqZfzHIxQz+BR1i7CexXk6wm1iMfCB+bZK/jawnvRrq6mDlZekjnhdGUfEzfOOBllacKUvakpCDAbKxWkS1S+Crf9kKUyv6gOw7D3ejMl/mIID8GHWD5PQf+9AZamNGAwR+YzXE+A9pgfxXE+SRw/M/Wb8J1qFbxuMPnAdgdGdx2j6nyx0geZrRSaavzOBwCwe0v+vVYF9w3mR3n7xWi32ERMldlKAIy/cjFD7enfrGLcO0SPYGfvfZFrpqYp8NYQMdun+prgfE3B7M2JBNPcgHf0qMN/QH5YMJk40H3iVbPDKi8ELWzvAzOax6oRdn4rinow5s2bdCmGPbmfVFQXplgZkuwObuMYZ2bquQzwmKzcYVVrJ27W0VZF5irtBLAhKuA/iV4vq02h+Fh0IdCNZW5UVVBLUEu86tpPUHEK/Y5d9r4qN2IpiMrth+GuSwNy0LRpsDatLlKC7eQ1oY6h5BRtFOuJ00E446AV/V04zUriVrXp/7h9FdHPYJdk4CyjcLj2I7lQ3YLn+kXkvK4Az3aItOJthN7DYlRTTMcz4BGvY/cmm/zkmldYMz7Kej/AGSR1k+LjNvU0lQv+c0x/mtESsYlvzt2d2B0wmzsQLGKgTEiRGyyuKjJ83rHEGN4Ah6kxXvaF79lMHabAdrItoHlMWB9pT6iK92Vunw+i1e3uh+UgHf7Q5OApc9BfdmH4RA8cUYdfuIv3mnd6jCxnfDNTo+Jll8L/k1XnJ81iwOZ+vsZt15EY4PprvzJ9clP0OG/AfXdip818fP1maOEr/yEUQGZt6P3Z1K4WkHtpZxckI1IIiehGXCFDWu0dCDttu9KxCdGsJOQlaFNW5gQ+t4a73pwo/MSQclTiJ/Pbxt3BLhGufNVk13ixF6Q58AWt1OSUEY67V2nsIou+l4aKx0G4Bh2ee16d64Te+DMWgXqecwMqzSKXgrygFaX4fchE6gtJZJbbnSFtfgNqBlOwTQDjwrdlQlNVFiDYPcmIZrLBItiHJAr+T0jA0oehgk0wXsvyAgwKNGqYu+Nq9hD/ZxBIOB3IK3axL4Zc5fUjBTXF/KP+9FbnsTgrqVOGib8uwT5kRVDu2o7LOsUZWdycdPOcSHGcUU07RS/AWTYDwvvNDnpPPBv1ogGi0uZDgmOIJZgXoth8iIOr1lkai4hnerX0VTSYdftlJMuq1f66/lX/HLbozCOc1XtGpVXl83mHV9xAvdEPWNz1wHeNgGuunl8R0SvT21XfdG7eGAcNJtLKu3AT59R+BSDUvvUAbtVPkT3P9CYrXbAVHbnM8KqagTtGEJC7Qt4JihmxPNp60xd4ILXZtNsc6HeK1b/AHwu1cXxEHbQIaKLOwmLrlUD6N/aVBeHPEKSgDCupgiuzNiA3b2/wlnXtgf3R4S7Sw0L2Wa3qBhig2xCVETPekn9EwhQ03weII04cTkQJcl9GPfSZgXj/EQWs9ftJux+G80f2EohcIJdI/8ACmTuTRG3SO6E2Vq9vvBOHxGLLUQdYIsHjR7ym7/ftMrsp1pVKeJoLfM1F7MWoXOQZhqN78Q0h6SKigXMO1sOXmFLce13RfSpk4N4MBQbH/ZOsCkciMIQB3bUOh/AFYVNltFxK59tlTsAcH9lzSh5lXiEDTY3V8YiW32Z+UZevMi3+hC9gQ0HEAapvKYMDY3r1gTJ30j+t1YJkTpQCAA2PSyIJqZXgzPrxRxdbYU94uXpcLNc2GYJD0BSrE11KGsgymy5evYwvYPid5Uo/gqSg9U9bz7Pjf0yQ1yiW1um3MOqd2AbLfD1s/7FML4FxvO8XdHWW/spbFgW8zU28g6jbwO0GsoBeyVlN1hSL3xVL42G0Logw2pF6q73pA1wy4K/NqMwQWaswzbIB1oXZa4gphsGPfXBwM3cUq/a4nytX3g6Zg9kYGGwMG5lYUPF2m6V4zsrZYRqIJRunY8QnDD7MFMOuhA/TLRWAU3zBX19kr6mI0UCQAS19neOYuaxdVb8ysrEx/ZANexCb0Jimrnl0JiFzBUFwZAKIQuo1NOvsitAjgd7BAc1dIyIry5gSogUkvvEae0S1+6IAv0rzsYJTL5cej/4iCaCb8P6gatTnHbMVDySIbzsMzcm0HJ6hFhLoar2CLk3ror2Zba9g1SmQjLpmKL10dw19U3MP1w+SGYfJnyhmqu4rv6CjVt2SQoscO8KX5wv1QK2ToSqVI/rMvHut9Wq8EVo+l5+0z9ph/qZ+0z9pn7TP2mftM/aZ+0z9pn7TP2mftM/aZ+0z9pmVWhrVuOINIBOR/prcFmTUetd2OGWPQujDAw6TuAhQfyMWuCanxDWCWVXjNXK3tQjLD8u+sRWo7lUl9w1cLJWQJDgajjXmWOM5WHS5V0yof2YvpfOhUbWWyGYhLbrTGISyybjDnLadgqv1QtCuYOt0dQZ1sPKJk38OhzWOttNXW5VLIFOH3ldXAdvZUjOiMRwNQgExUd4Filg5Cda0ubg2pqGJrdiaNJwlW2wf6S/Rch2CANusPiJ7zFpCpEuZgbLnFfhNV9yfSZNHPf+hCP6rpp7RDV6k3lysSj0j6GvoJBZU2u90eYLp70P9qdB6VZi1JwJ4imle8TvXmEapCLJe8qCVb2JQg/gHgRtt1mNqtXEXMlOqCiZADUI/eNseGAqlPq+fPoyvBi2dOsx8+EnHGBWqEXWDTQDuYYIrr1l7bfwCUgGHtpOpZlcz/Myn4HROj+dgWwwwrDf+GMDFOIlMvROiBnQBOz/AAO7nN0X6hdWpaTLmGEwfMvHIna9vTZgDqmaQwD17wO/7W67weTTbsSnCQazPMpiB0mvZLby7Hm0y97xMR16esfHbcyqzvTo9BwLNOESrfvf6ay199N2zNxV9T/dEWClysI/Rj2vGmMMrpvG9E0Vo0129I+231STaeYU4YJ9laFRqIfSLqZm7pKZMVL11mlHZBh1Zj7JbjJVFN6hBOacdSkaLyx1MMoaLWNXSVOXHL6bto7q6F1O3GoBNHNNyzuS0VOQxjmbxtS1DXpN60iuA6Cxxc3eI/WmEZUKGtwJ2S1LePPBz1lxpA3QbnkhSstuvBD2fIIcmc6CdRmwvRR/ZUS6kVtlXo6z6Y+4g1JHRuAr4NGoez4TZPZBtfdB7HtNAJdtHjI8b2gtB/OgefbL0IyHOusjAhRSMGGtK+SIQjZHz0nmeYOQxaXwSl5+If4Qwo0JaMfjYgawI1bxqKhpLbh7tBrZrjfzSpu+8Gavm4vMq6L95pOe4T+R0TJ9adP0SiD5aVgSiPHOg71KK9hp07w0X+4eIXjU+PZNNbTu4lOgBFGmIewq0BXulLKGE9PgfqU875wO9IMrrSoMDorZrEMgcO1biMFGgYHAVZhbvMyStKvEweuK6Ex/QgrZFqjZ+JhsPBa/lELeOtyNG+ILKMwbhXvFyvgKL9PwfKfk9X9OP2HsqdTVH0lyQxDamuxXMUfU2btS05TK5gesImphqxxCDDJehhsuUHiksUkaAtOyoWpB6pX3Was1q4vrHWOk004Sun3riLCIcmDsNu5iAvsSHfZG+X3IlumIi8hrceczzLeZ2wvIHqYxKmN0AZimJXKZyC3TM5z52Wo0QaoqTaITS7QIioVjh/mwLY4l0EfNSrP2iYjGfNdtqS4AXq/8hQlf8i4au8CGwIZnfk6QCrqjSyAK0dElk0qauoiDSU8TTaNXxc+sUBo6SkQ/nYlOXLbrZbz+MEJg3OV6spFZ9GBiUcn2vRP8jon4nlPyXCBkuq+oQ42kparmvoYANEM7o8r2J+K5Y+CPWDqlaDpgUxTHtqzXp6fA/UNfiZmSoIcy7Ua8vdmxuAyS0HkD4DePwHE/B6Ppz8T0maSE5NSFlnZ4g3TVctimFuN9brDrFYjMOrKx6fg+U/J6pmXHVc6srLl/0pgEDmClQ5qdtxr/AAmtp43wZmVZzQ+8zCPKQPgeE0AfCAfZIHoD/m/DsEIPdCsVdxiSHLUX7y4xuvMQ9plteOk9tldiuakZ0XsHJMGZlpLJluEvkJrbuFX4+f4MJ+f6Qk8PyaJX8flPz3CfjeJ+U4jaiWgPCZl4Tdcp+D5YGjX5+ND8rhmaVgJgb6IXO7dwzXqX/cYU63idPRhiGmXSIwTFEam5ydIM9rhKHP2l7JTIN+JpMSxbrBoHXuXzCnQnXzL6a36WMyfV6CyGsxjsdvn+FGJ2jsL0QPkYZT5Ug3DxCSH09yW7I8CA2TXvcmvQ0vXih7s+JBJTaOPgBPC6iB/02VabBjzTNRbMHklNzW/CtjhrdG17S6CVlVfXWGnov1Z4U+5Pz/egXaxb94lexW71qr4gzcI/O8SbX8Z0ShsBRqQaCnKHCQkiK6cZJWCNDipaMR1FQQfNLwnkzDYVFrVd7RklR2itJpkCJp2Y6tpkrnuYGKm9jMZSN2fkE5JXp5vuT9G+8/RvvP0b7z9G+8/RvvP0b7z9G+8/RvvP0b7z9G+8/RvvP1b7wZ44yU+8HBjo028y+xS6/wBJrJ0GmfjB6KHo+8xDovtRQhQoDgP6VtiaqpxLtFcfMp0lf92cjxqHkGe/kD/tLAhZo8f8ljpZlPwvEx3y8qh9SeAje5ZkBy2oB4iAEAHpqMR5Mn4CCDXP/8QAKxABAAICAQMDAwUBAQEBAAAAAQARITFBUWFxgZGhELHwIDBAwdFQ4fFg/9oACAEBAAE/EP1oPLOoclBfFsT/APcDIAFb/wDRDEvRoLonjysb6ryQwsMp3zL/ANoQoQcKB+u9bhqvgey8g2kohnaJ5YIEbzXDqZXThQoVYHSyoi0kbbUo6JGrJahjggQe1PvQirrakd0Wx3YgCFQogJdA1jtKFSUzKMUWXOnjV1AXNvhqU5iAjdqFNuUQet44+30dTHxCs7LnWTOKMi4PTWn1Lv8AQpYiF3sCqgZCyrUw7S/1a88qG4SEQbFUECqVBCO4KQMLHQIpdpHHTm/8LFJFphN5Y7avboNGkxbW7SFS5HNISrxjE4OK+05CtCqOFlRekvmRGi0PEqN8+bKQXl0hZW1FJRA3jYG0IR9oWxWVkszCoY63g2dVdz1gtqZR5gOX5UxWukhdRCX4IltSqsIsqBPzdrIHsssGeS6st7AwEILsMCtQPdBRebQLAzqbnHFH8t/CQ6c7OMNKpysqa6TOzaFu1MGTSBjQoLTA4HcFqUW+rZSiD0YTrEQNWnTYyS2Oj3NC+1uaFCLd/wCMYZVSjcta9NEFQo0ACqqoVm9RoqUCxkvOeiAciMkMk5WwCUG50bIuGhQTZppQSYX4QtJhfQdZjVOVODa4PeciTdM0pT+ydO5dgkO8lwb09hpJrSHS656HVEZoE0VzdavW/rXXSJaTA00jKAn4DS5G2hajStoAVN02y9cpC7oDTBCmUQBAaURgdhBBJncpoJpUigX3inZkiTryqOfRFK2Cw3jyNAFrHlv5Y9h2T6ISrUi06BXfEOUd6xMiTDYUN4Ee4Mru0OpslaPGNWF3bCayLoBvJiD9MEBwoqEvbZvFkRAN1qDHFd3JBelIZqbG3Ooa1F+7RWX0SkfMrAhbRa5YEskTQdIoCuAi6dSJLHUmDuHYSHZJptFbjADOQ9FFFlSsroDKy2FYxM60jUAqcihUT5V/IOPl0Th0oBRPXsWxeQh+muw3DWtqb+Zzis66vUHY0p6jK5bbTKzNnW+APitfTlKzCqYd7rBpKsFlLM+mf2oIPUXd+jvSFibfdr61obph+HpQcxnmuy297NWK7t6cF0qyai3Pc3sqt5Umuk8sGhCSqMSVrCarSJaqyHMTWwQgHaUsirICNeV7HgHNaxYg+KetANhlDPhvQ3pXBssNttYk2usNZHoAXvOqUtgoUzbx1yhQmxeTC4JhoEsXNs3M/Z/1lo8yt/aaiauJbQVcDgEaFiY5mvbEsTcgeYttWSB1QHj6XW84yBS80zCUz/biYEaPQBAI0CKPdX17NYvPxLPYuR0IRZZaoaL3bK4cveGFQIqCVIp61zRmY/cG/wBb3jQrYZ9eJaTiwHYEhbpmmjsw0JIJ3zupMnEMr8R+Pm3OVppKe4rI6IKVwG4eoykDxyjjCUO8bHjyt5l2PwtdmeaWDs8OlBbRAQqVJ9k6E4tSd7rC7jro2T9iAtrO2fJlohdK+VMZrddI7uzDjZN64ScJGd6rJS8eA4PqWOWceHeiRgJ59ZojrGBVbhFEt1vBtWC3JqhVdG6KnUYltAdiLjbgQxHFFWu1eD0gHghvr1HDROCUaRnWMhAQdxGIYf8AiHHD9eRGMxtXu4j6p4T6nnhwCHIOjdClNXAdSGlnHYljJrAgErwAI0s6rZFMNFCy4uOlQLX859v0Eo4OFI7L4KEsfT6uAA6FJv8AnxH5rpjoA0TW4U5LfCE2UEABwEIhW/F0ENJO5AwZCTYz9s+InHbQR2JBa00HPXlZyxcmoTEzpET/AIJ81MDaqhIptUffqWYYcf0iX5X6f7GbL0QfYgnHqi+5FS+1I/pAg64v7hnx6H2GIfDv9TZDz9xHT0VvswzBH+I8yaLXuyrNMPItayFqtBH8E60JTCL5bDUtOsOVXKjuRq78MdXqvLFxi2wCgrMTLZfpDzFoYJvdCz6rEOGwShDAbwNjsDIUU2MuXEaA0JY4Rm+p6sjUeqQvFtCIapEV2LQSpw21UUClw3gunKkLD9IL9hVtAeI8l9eRGKdaEGcX2PcQOCwNIofR4o/3QHtDdB6pTPbLJnohA57AsUlhgitdKth04ByEZ7Bjs8h3Rcp4/wAFTrsig3FRQ9WkD/GrU1qE3/PiPzXTMAU8O5+gs2+juVFtAN71F10ID0mOREEl5oA7KvYy7kKKdwEXVcqr7mncCG/s/wBp/Ff5ty+9G2XgWymU+Z9DPO1Gh6KJSagZeCDatBCAHbvtXiD0TR7igd/mvBhvxh6QDW7f+o9kB0ZAvcaJHoeMkNH43aj1Lpi4TBBNDndn/Ap+ijrD9pnOPeH+9cJd5pvcq3gld+EwNsvg6MLn5GewOmCNObQKP1Mc2xtfogoxKG7FA2PUpwFC17CrgNypGmQb6lKFUbisImuhRB2WfgejdECUprgsqnG8L0GlaqmniLtL48gcdbEuQPD32k0009SCSA9bQwXy0fQyoXn3gW4RAIUjyMJbMzvAIPAAEryUrlwphxQwYqUQnoysCEHN9HEeMZhVy27qsWne3M74K8yhyLlaHdh7uYOZHAoIsSoxFVyGz1WIZUNYpq/soRd2KlXU48ys6QuTA3sinoDCDsRihwAeumVjsTLVVBtNqyrlZnDs5brFz4lybC1DsCYsbI68ULW0D8ET25QKZIZO5DhSyMuVYlzVNrxvZZr+UwNW0cEAoL5feVIFu8j5WFrK83K+THUA8Fr7pgixf19owJdHOT7DRDBAuUmdhnpKRZayPhfslAVPIj8jCMo6/CJIYfgIk0qPD/jBrgxxE1wedXZOUOCjeZY5GUJ9Qn4X4gEBpLEzBJYRzlr1jr6qDEeH8CiK0Lsj71F7GSw9cUoDxrpmWRBolkIANqx6Ce4xHKChjAvR6U9QYsRpVKtYZCmrj6hCNpJlWioqQDn3aWjKd0kmQngIaMqkbbYs+rHUFIRSbQJsPobqjDqggWUUwEJIBMHAC1Ydw1EMZqAA9RiFGS2CDIJAg4CixGxGIOZboy9CXuKfMK7+X9DNHaPZQGAW8OMRWE8W44pqFXxj560s82H3/wATxw+xfU91hthY7CoOqwaLvhRQGsvsEcZ6DQqlDVrwEc2QbLRWI0tSnzgGfQJbblcRuXN7MnZcptJU0umFtk8So73UHJaDEhaIMVuXFHkhuV+3ularhk560Z+7UCZHDwV7b84C41xpuTkymDmKyoGgt36yaY0dC1lz9HyloDWU1KqWi9mINi9ToakyDRf1aPXcckb86PTdAhqQbCD1eJboKf3Fg9YoczXgdQRbWriG6JoAxTw/Sz+IJawqEuSXYLmrl7e7tS2U0ckYNDF4N35RLau3eay+sUU+kEwqMF0qqt2ymgIsj0B9JLPwMCPheXd07RWL/O7JHKDfS6YLkGN0EIPSObGKxbdFvLqRZgF9Eqk8Ov3NToxuaH3D7SyAPQT5bmQ8LHt9BA5ghFNqjw1QXgAqiYR0vz5s+8oqkLIKsuxegkK73Wyyd2YcKAqoeMcEcEve2VLXKbd07GxKpbPU4Zfvwo18P258t+gzuOzC+/3+Qxw9e699kCl+wg+ejdw22m17qYZb6GFHOtMua7Ene/g0cMm6PSbFUpPASmAfqrjIS9UyMep4VcQ5JnloEb6rahQXwyjg7Q+XRysmONKKAUH1ZtKQQze9KqNMVx04VWxWUGmUCjUYI5GZhtshHOimhHW0gttYKReatLUhbhxTsm4Bt4ah6SR3DNq51JasLcPA8BQIQ7Q1xFnxS4IETaKxI69bU2ha+aIkmMyxcAR+xsfvWAvXKgh1NPX1JfVzOgACK0CvEgtbYS9+DXwQbLgzBleUYUVEggwFAdtws2zPEcM2ylRYXljBl90Lva/WiSu63zddHIUT9tScLU0BFSg4zHnSLp4180NLfbFV7E2EHzmD3WPCTNtn5AzeM6V+1HaA5tL4YwCusP3VALVvCEFIJ5/fQFsbGOjleCKjtduWRN6nlXBsG6KBO/rvsFZYE9EkHyY9ocNIMFZHNjC6Co0m/Yj9+5/zGy84AhXoXBY2Sd8jG1H7/OiFhof0AgILwQ2h/wAyyXSM4U+yEFV0O/klvS7vJ8QpXdAP2CIFykp7mW5YgKTyMe01ttHZAmIiRMrGFQMrtBjCKuQSxhfoFiQb7clYPgPHgAK/y6FoKsrJDgwqgY6nIUUoEa8fS6MKv+ryu/EhdiKrV0omb6/AwR5UFncRu90TMVNH55FKqHlYOio2WVnSmA7pp8/CYdfikp9zDRwpr+WdVCTbq/EbEKILS/38dAL+ysuKq1UE6fEHCJI4Ha+Rj/KYRQH30NYUfB/r/OuWQAdWpcH3dfEtT3V+IguuGaMfGBG216W/vgX1ur81Of64D5hfz5fsspRLsv6leJWkX7UndqgMGNtdBcDv04RhfUDE6Fd2ChPeRRln3zAYh5UA8/tkN89I4OCcnYIzs9FfdQQ7ky+Y7YFq9Ge9uKfWEqewJtY6Jmklevcg7C9HK3iNp9lhZS3k+8I7fgr/AHUrL+JhfxzMkGhR7tNXHzDzxF5k9R6+Ibk+DNMXwzDzEwVgiCta9dMJWSI2fcTwJczm0/8AxYb0uGnDBuaAGKgdJbFGzDn5UoiqvjYzi5VDDLsCrWMk/kX400VWoHAcyWgV4QRyDCor6xWuIoiZqm6UWULEJPeAnvTWcD5t/wB7GuKSuYLy7vLQ8BxNfNUIWD8/dGPGgMHszuwpDhVwjZdUjSp04QKGxXaoAiaettHKVG6TqV3RVmZ5UjVFoWNOLGFGJOM5qliaSfEQLgNVSbyOa2IpelF/Qf1WVWlYcmV1IB6sBy8q8r/NuDFO76IOcK3+DRGfYC+iTNvEwHsR1PDFX3EdOvjwtWHRj3IJQlOJzKQDlekdxjbTyJRKXVL+IWrBy1+LKo5U3wNkCBOzoB74hyE13i8qPVP6g1H8P6sHA+GLgoANZKD6kHK/EET9QWLMQqdYrmGLK/E0QR6aOzAQoBoIdodWWqhf0HVYHRr8nlMFAxTVg+gYNxseiOO68EVj7Y9kM+4D9hJ8M/8AZcbz5y39R1rt/wCCR0vJs/2NdawEaOwP9gjT6GD49qnKHmMkO0CVqwdGo0Lb/wDYjpgJg+zHfR6Y8Bjrt46+hme7oUwxZ4VMMpyMjZRzdSUh3KyH0J5LBfZydc7r/RYy/Tr91i70RKeIHw9B4d/P+0555CfFyu9JIMiv+WpVqE5b90MoM6FQiv4af+cMgWAXRS4eHphzpQVyuKXwUTuFIn0x02tfYpoy2VBBYw6BD26FyOYkQs2PwEqJ9WKLFZJUQGFONpJ2j6UzQ20RAWeCFz91OL/QVC59ngETgRFLzEGzTDrrke+DZPK9jDFfnRbZJDUl8J3qIye1rhGEToDYf9gGWjrHkROHqpmKPWGRMKAzFRJ2Eh7+ut6F3ggrARvZXYVmBYpH22wGqFpO/ByClctuY8yGWy6WRYxRPojJ5PARZqe5wbhluQRGz2JbZGQodiAEPOmYngCbxj1sKl7qpPDxAQ+v2eW4PA6kCeUYSV2XwJU086xtjC3Q+amQUXyv9EUtfBeX0zCM9j/M1GMfzQF5FwIc1YU6AlMo3Xqf3sc9IRKZXnx7MxYnN5hQqDb+vRQgZ64z7MyChA/UA3FqbWVG48a7O8DH1AKIIzOMgLhWvXsQqSty4+4hDtmASrdnaglRZuDKfR26mdTmzl6rK+lfqolEpKh+iko/ZqV/Mtzyp42u8dpCB17CWuwborkV7a9W82sWKAAdwZKAlMGQBWAYcKAVI2asGeO2ECiRUVlAGa5YJ9c4w/agSdfbvnOGyojejSPILCQFOCD523EUdr/iu72Exn16coHZ7stMxqkwqqGCbzJTGk0u8avPLM5SMNuze+cnZvSy9dIjqJ4HLumkGovcBC+0T1IkUksdE5tpnZYtUo9UtADbXxFvUOjLeGb5wPzz88HFOsj3oDvQu9adlglVoIzfn9Z9hkiZUo2QQLgBRwiIdIPK6jgOadDy6EyQfA/1EOvm2F7GOdPW692wEC9133SUKo314iI5arWsZ7X3IYy6KweWB2xODR6X92U0n5OUoPX0PcYcMU7EXAX2TmbVo9ByRM19Asj4F6MspyY9xHWhzwrfbGGO4JCho75S40sA2seKnRDdb15glgEpGSaAtZWEiy7BYX/UTcQBV0N55P0EAq0EKchNP8CF7JQFB/2UARPAFIjsYdX/AFykLYJ/QmNCeSncwxH8Nk0OCGH7iTmopm+4I5z05AzqzZDU5S8JOX5f4Thuvi7Q3QBD8pL1MwtzG0IU3naypybAyOjoQ0IHmI+ZQ+8wsrkdZgenMDG1AUEAlEIVagaeVL4ihE7UD2IonqvdKgrXWAUXuYIDFNqw3+R4ETiojGRiJGNyUXZxK/hjeC1lsO99oXVtmk6DhmX0q/QT1MwzgCUSiUxl4gBg9U2ckNAVRMooj7sR+xna+TFdXwEJ0rIaEAPpkqz/ALAnC9QwXBDFQ2iARw72tAOL1VBLysCLFLVjwfuFAQYmAkwXMaKELnMBYIAYxoktPNZ9KhR7mlNS0ByhlCDqLbsmXBKwqspRjOQD5C1BqUxPI3BK9QtDK+Ex07mhBLZxGYzHwPAF1UM/sKSXZQMRtdu48wYhtWVep7SMgLbmmWglpRVodDQSR+mDqolIJADGdeHYFoCEEeHaSI4ociBauCyxMNst4xDjCEBjdTHgnALqnHdjygEElxpyM+DqwOO6rF1MsHo16wi5FAFBAgakO7LQudB/bNHrpcsGlgeV9yIAuy/tlSBd/wDMEoCqjDgCO7Ikh2dd7xoJtfcDZDARGKoSEaIy+Hyw6MIscSp1P+47xqbHJyuR+gw/UwmwHefZ8/0jDksitbYHzaiMAyUsii9O8raCnU1ADRHpLTD6pLN+JsvvSNRkZa2PdehEQSdpJiseLJ9V0Irh+g2EeqIu5V4OZWYN79wMKIYGJC3DUZYTipP7LKgSAgyIwKi6+1uoa+g/kA4C1YmwewCw/bVCy4Nez5HoeWDFf1SrwfhdpV+F8T8ZfaBmPwu0D1+F2gevwu0D1+F2gevwu0D1+F2gevwu0D1+F2gevwu0D1+F2gevwu0D1+F2gevwu0D1+F2jgLsHs2KSDhEHQLH9l0YanOjtYNDpGoQ3hjuS93gCVYGhGCjTNS2IPtjuslnQ7gaEFDBsYGCgqaCMewJrzqEKpaiZxe1ZFm9AhpjAuMNT1vg3Ire1uHlTrkB2zGghG1WveCXqWrBBR+26FwA6omVChXiMHJL/APwy8CFdp8LuXck5oN3U6Y3uWzqCrqjKcDXUSj5ApfaYCIBAphzdzWUxyUQuxMF9BehqgNNIsrbstW7IWrrMUf2LCayNwkBa2JUiSYcgg2AO0c8U/wBPQlPJCsU0dCEClbeYg2ZB4XucEvD6SvzE7Avm/wC1wFKJ0amaI9Rb7solH6lYrccDbyMvMVBCd34iyqHoiMQiPhqPDFWIyRP9U+F1xJZSsxOKDxUPQT/ziGg9FhxMacpE/wC5cp+Cp96l2J5Am69BRm/WMYnsGhDtdXA9F+dysa5Qy+X9B+IviJpC1ndE2GbYgETLs8Rdn2aOs1Ov/GWNhFmgE44jtAwomzl9huOiOuW1k8txjFrWVi6DmUAZmLrJyKtEVd2iMOiQ0f7y3jE96QcX2qr+86MCAPiPx5WUGEhUtOI+AgiL68fodxSrKghVdBNnER4BVnIWP1cjD/VWF2A1A1uUgd5T0GDujInMIb5JZ9XKtxE7WCwK/MWal1ygDNIx06QHvEdiQjMpZbFOyMgqoIG0XMp3QYMFBwmMHC4KbHVG4DsC7DdiKSy2E4ryKGG3kJ9IDnRRZhMW6+z2/ZiJ8DcVAS8ZGTkiXOiNgrCJHAQc8RRc1KBjCQGjLUggIVIAhmgv/AVBeIaXSql0E6TwMym6KaNxpUlhsqXbQNyw9ZuyEGRlSF3vfBqQD/vFUg7rWgFkvJcsGZLKKd1cTxDsSrXiW5QDJ1Fzocfl5hyjbeBJynhCRaDRekM/Gt9dee+N2O479Gi03uwwjtVvwCacJdCxgQCzgnAEjHBjEhCDWiLLDFGh7sN1WbZHuMXaYL53Ygar1kIbROxbHLXN20TRXdUv7wAcH7oiBoL5LmWLOoVHKToyp6nRltSrg/tQxRyIl/hh/UZah3mgp6xldXviVlp5TPsweA8EN6Fv9URz+QxnB7gEr9TqL42KhTHrLYH1Kj89BWI8JDfAgYI3ctaxWLenXA1q4OURmq0is1ajnSDTwkg6wADoEu01FZ0/fwHRyCpNbbxLQoFWowWwlKV54wQ2KIGKjSgU/Eii6IOpNJUvCv0DAIK1NM+XaDAi6FCBjGiFZejSNUtyz6DibTJLY9QQAtapY6ilV4r0lFIrwXaGwLh7N3G7ziQAFFiOk/TuIGZOFvC47RcYh1CwlS+qCGk+Rigfb70Ykrh3VkR2hbhW8q8R+hxMh2XE+qjgryjC67bTUyDMZN1KSKdJFICbpZd8u3o0PrqL3xTtjNOo5rdB9V3zH7JWL4msSrAqkKxKI3jaFq2sCgt8N6CFjKtMbp2tn8snF0deOFpMBCMqkpxATQYRYqxNGCQZn7gCorGYbGE+wvXbfH01CqI5Hc9CULWAcxPJaVg1arG9nBptkVO1wTqgMV17PH4hWcv5zvqG1TC/uKsrgsz0sTIsc5kD0Xfyg6fDMVNYWWZuowXZOYLmlDNwDdW/UdC4cADaIcvBgXL1Tcg53tFLW6UamO0+rD7E51Fdl6g4UwFBMH+PRKlED94tnhuEwAmpQJy6qgzNPzVt43CgiHIG+n0KVMTHH+pFCoLGjAy+XoDb4qVxERR3+gCF/wDvg5EOhcCGR3jm8oQIHbRnqkyspUBu+1opQqoVwpffnD8TP6Biwpog+2mmhoSUttRxBwqDYhClAjGlIHtF5ZArNp2GHxTb7Z4C0TWzD9fJXgsy1AujYXYv07ql1kQxL1SzcR7Bdr1TLMsf5FvToss89v8Aq6dye1h+H+kt3UY/tkXxb7BVwEx1MvsS4TO9tTxczy33N6AO9KJTDkJYsNP1XY+RDHTE9lzHSCqtp0EgYFf2LIVtmqYK7+iLJUd2OTzpfsxWusLb5YrQTpPFa1hR15IwgVMjxJOhTNhB0krfdglB/wAxMaPj6LM1TCnAKUYoK6pb6kti5kQZs9cpJ2NDEOqG0TZCOhy0wMtOSYc7hsNS6DLrThvcPXpdOExjrlm3Ac6+tYM6tGk/PdZZ+BvEeWn5xF97NdSVXpPyTgFg4astF4lN223U1OWCts3WlnYvAS8uiteVCXbAU+j8A4VRiLJZAiQXcwwOrcorEsiEj3sQFCEmDDFUVAzWamwRHs6o0NwbsEWykSu8Z8idnaiKaMsk6oMrh7AWd3HvCtf2dRAgm5FfJY/d6DiwKVW5ZD2kVKC0EIZO6jq0+tEd4uJYR3Icv5SHX25Ik4HWX3h4TcLzU15+UIDlHhDXb1+iN57ksEPkTnl0G2Lcq5PxhM8nbU+0UQ1s9+2eChTgvsgH/U12Qr2cEDmitaOsBHuCi4LpkRb6iOSaIvM+qzGJm9VG9kWT81sCbDO00gBopWTawrdBFUG/qVoiqzyTQgG4Ri6O5k5pVlWFRj3C42DURu3NH9wMKtZGas9hII4UOhgEtHFfHzCbS07eE4I7xTty4ERFOdkz7oH8a+GlJBO0ESMGmpFctBUHZmjCmZNg7sbEXkgSlndPxB+3OnTp06dOnTp05h4WteG8IuX2bHlGbIMI0baYuCrQ3EdKgtTCjM5Y8UBoZawOhxcGAH66lDMSsdyerkoQi0+SppHwRwD6z/yaC583D12oFWv9y94V1RK/67qKNHbDNt1/yTbEsNASlXR0YtlnIVGNNahCXhtm8VZiOw88h3C0oyzV+mjFAbFzaRuN2XoULwuBBtOhP//EAD8RAAIBAwEEBQcKBQUBAAAAAAECAwAEERIFITFBExRRUnEGIjJTYYGTECAjMEBCkaGx0RUzNGJzNUNQY3KC/9oACAECAQE/APlYtjdQ/wCbYnlV+L6bZ9wLF0juTGREzjKhq2HHtSLZdum05Ekugn0hX8ge09p+ftG+ltA+hVJFpPKM9senHu86lvp5YrUKESWSV4pAQWCMisTgZHNfwqO/ulhDymFnkuJIY1CmMZRmGSSW3YXNNcXOqKFZoDI4djJoOkKmARjVvOW7aG1pg9qWSMxuZhK4zwRxGHX2EnJp7+Y3MtuhiRlkIDuCQFVEY5GRk5epL68FvOyPAXt5AjHQWV9QUgjDDHpU97PBI8ThJZAkWjSCgZpWYcy2AMZNPNe2umSdoZIyyq2hChTUcA7ycjt4VBtWZ7adnRBJGwKgZwUZtIP5EVJtCdI5rgPAIoWkBiIOsiMkEhs8d24Yq1maeNmIAxLKnuRyv2AKzcATQtpTxAFdUk7RRtJuQBowTD7hoo44qfsjbhU+2tl2d/b2E1yiXFwMxoef7Z5Va7SstpJI9lcpMIpCj6DnDChw+ftGylu9WgqM2k8W/vSace7dUllN/Eop4yvRF9cgJ36whQEeIIz4UdnubdV+jMkdzNMgYZU62Y4PuahY9NNE81vAqJHKpjHnjLlSDvUd2otmaZSrBOrmO4QRjkspU4A7Nxqz2ZcLcGS6Mco+kHaWysahiCOJ0ZNPs5uivUjEaiaVHUDcAFVQc48KuLKSa4klVlU6IejPHDRsxOR2ENipI7y7CxSxxxR6lLkOXLaTnSNw3Hmam2Xcm2t1jKdKjFXyTgxu2o+8YBqTZayWN1EUiMsvWNLkesZiu/31bxXNvI6aUaJpHcPqIYazqIK47T9ckbSHApLZEGW30mpjiNT7hSWrDfK4T2cTSpbDgC9Ga0i9JFz2ca69aEboKF3bsd8eBTWdpeRFcDJ4HmKurSWzlKSDwPyYPZWh+ytDdlYP1u1Zb6DZ1zJZQCe4VCY4ycZNeQEFjtLaN5f7QmM21Vc5ikGCg4agD+Hsq/X+D+WccXkyS88pxc2w/lDtBPIcz3aXOBkAHG/7ClvK/LHjQszzajaL3jXVDyYU0Eq8RRBH1ABbgKSBRvc+6gQNyACkgx50jZ9lNM4GEwBSZc5LVNdRIOjQt/cRQnhX/bJ8TS3Ufq8eBpZ4D2ioJVXg+RTCO4j0v9IPzFXVisA1RjIrfWDTAhc1vzTLgmsfNwawPneVPkhJfTDaeyX6ttGPflToEvieTV5K+S9v5O2pLES3kwzPN2nuj2fXw2dxcYKLu7TUOxnb02pNm20I3uororccAzUwtuaN+NNFaHgzr+dG2X7suaZZY/uZpuiYeclNBGd6kimhdfmqhNB1jGBvNGV2OFqGMxKWckt+lPM7HcTUU7gb+FPewkaQnvFa7c8ARX0XJqwverdyNBiOBqG9lhPHNJtS1lULL5tPDAzExTIwPtxRhVeMiD30xtgMNJnwFCW2Xvt7cAU0lo5yRIPwomzbPnuM+yikB4SUUhH+5+VfQjmxosnJaLE+/wCzWNo95OqDhxY1PLFbRgJjcMDFPLNKckmnVB6bgUZIFO5391JfR40uGYdp4iiFk3xgtRAiGWIzXXGBxyp0Ey5UhTTdLGSGzXStWVPEVjsNYrcKLkisk1AgjweLGriX7gPjQwop5S+4bh/woQmhGvM10Se2oLRZ30jNQRRWsWlNw+83M1cXESn9Kkunbcu4V5zHma6PtIFB4U5aq67KvoYUV1gP6dHHKopmiPaKdlZBwKmpY9Byvo/OgQs2cZArUsWWYjPIU0gJziujlaPpNDFO9jdVtsu8uoHmSM6QN393hTo8bFXUqew/IlvcSDKxOR2hTQgnYkCNyQcHdTxvH6asviKZHTGpSMjIyPkdGRtLAg9h+ctvIyK5KKG4amAzXVm9ZD8Ra6s3rIviCuqt6yL4grqresi+IK6q3rIviCuqt6yL4grqresi+IK6q3rIviChaSE4Vo2PIBxk0QQcH6sKKCitI5mtIoJmrWJLaLXKQud9Xe0TLlY9y0WBO81rA4Ci7Gsk/MBI4UH7RUc6qMEHFBoXHp7jTRYO45FYUc63UCKDjsrpnAwN1EknJ+T+JmHZ6QNCdTR4Bzu8atPKFo7YpJGDIo8zHA1dz2u2bKSVV0TwrqI7QK2TBG8sksoysKasVJtW8kfKyFBncq7gKs7i4ayvJVZjKWU5HHNQyXFxYXPXBkKuUZhg5q+t4ZBbSzTGNehVRgZJNXNl1Z4XSTXHIQVbhW1wDtJgc480ULeaR2EUUjDUQPNOd1dDL0hj0NrH3cb6W00xBpkkDdMFKgYOCM86S3nkBZInYDmBn5LrcYv8KfpSAFhSoHYL6OWAzUttNA5EiMMNjNELnFBRnTWnTyzWijikJDpjvCrv+qn/AMr/AK/UgE0kRalttABfC+JxWu1QemW8BRmteSOfE0LqEcIfxajfsv8ALjRPbxqSWWY5dyx9v2Wygttq2CQFwk8JIU+w1L5OTpb6kdXlUnUvIj2VabNuxbvcIyjUjrpPZwNbJnjjkkilOlZk0lql2VexyFViMgzuK86tDPZ2F7xSRGX3VPeXVwMSysw7K2uTqtR/0A1cf6dYf+zW1P8AVf8A6Sr13W1dQSAbyXP4CmZ2hcoWMrWcW8cSM+dVn03QWZkB/rBpJ4401FCkRtiRM7SNqAU4A87FX4C3twB6xqu+MP8AhT9KQgMKJo7UvHthbPJqTI4jfgcqyNeaUgPmtQPPFZHeohRwNJ/MQf3CrvfdT/5X/X5gYdgrMZ4qRWITzYVpi7x/Ch0I5k100S8Ez40bqXGFIT/yKJZjknP2pHeJw6MysOYNS7avprYQmQ/3NzNJfXUcJhSQhOyiM0tzcKMLK4HsY0ZZDnLsc8d/H5GdnxqJOO2i7kAFjgcBnhRd2bUzEntNFnPFid+ePOhJIrBg5BAwCDwpppmOTI5IOck86WedV0LK4XuhjiiSTknJPOkupkQJ5rAcNSBseGa67L3IfhJ+1ddl7kPwk/auuy9yH4SftXXZe5D8JP2rrsvch+En7V12XuQ/CT9q67N3YfhJ+1ddm7kPwk/auuzjeojU9ojQH8cVgmv/xABFEQACAQMCAgUIBQgJBQAAAAABAgMABBEFEiExBhQiQVEQE1NhcYGRkyAwMkLRFSNAUnJ0obEHMzRQc5KywfE1NkNigv/aAAgBAwEBPwDy448f78C8MmrI2kd5C12jvAHBkVTgla1d9Pk1GdrBGS3LdgN/t4D6djaR3JXezAG5hjOPCTdn+VG0hjkuCxdo44lkTBALK7KB3HuNPZ2zSlYxKqpDHK7Ehzh1BwAAOOWxQgg2yStFMEQooTcNxZsnOdvLhR0yIrcYZw6iIxqfF0LlW9YAwKSziFvHOwkcNGCUUgEszso44OBhaSztfPQq6TBZ4yyjcAVwSCD2ePKktIZkSVS0aF5d24hiqxqp9WSc0kVpc7khEqSBSV3sGDbRnHADBqbTokuIVRmKOpDHhkOq5IqOxid4oNkxklVCJBjYDIAQMY5ceJzVxEIXVQScxxt/nUN+gJHJIcIhak0y6fuC+01+R7gj7aU+lXifdDew01ndLziajFKvNGHu/RFGTUWlajdWc15FA7QQHDtV1YXliyLcwPEZEDruGMg/QzWfLY3cVtt3hji5hk4eEe7P86S7i6hJC4bzm3YhA4bS4fB9hH8aF8gnY9sI9vFE5U4YbFUZHvWjd+aikWKeYszxsHPZOFDAjgT41JqG6MFS/ng8Llz3tGGGf4irq/gaAJbCSM9g+AXtOxA9Q34FLfL5y0dy7GGN1YniTksRj41BdxxQRxMpYb5fODllZAo4esFc1HJa2paSN3kfawQFAoG4YyeJ4iotRgFxMXD+bdQVwOIdVwKj1ApeW8geQRx+Y3KD+ooB4e6p5IJkR9ziURopXaNp2jbnOfAfXQWk1w2FHvqHTIIuMmXP8KTP2Y48eoCo4HHF2C0qxDkSaM1uhwcV1qA8o6WdCeKjFT2NteRMrIoJHBhzBq8s5rKUo49h8fIFduSmhbzn/wAbfCjbzjnG1FGHMH6rB8umx2kt9Al3KYoGcB3AzgV0zmu7GxtrKyjEWnsg/OIchzz2k/x9dWZ/KfRZ5NfG2KPjBcH+sPr/AA8aOMnHL6HD62HT7qbiE2jxPCl0ZvvSj3CvyOvpT8KbSJPuyKak067j+5n2GmR04MpH1CRvIcKpJq301Fw0x4+FKVQBYwBSQEHdI2fVTSOowuAKjJbm1XF9EoKIW9ZFC7jXlF8TS3yeix7DSXdu/PIqKVQRtYEVJFDcptkAcVNpkMA3RoCPXzr2DHknLJEzDn+NbmB5n2Ek57WMGriEIxYjskDPqp4sM4xyANbT9AIx+IFBUABZuYPAVvIAAAHr+j0d6TJaRHT9STz9i/DDDcY/xFdIukM2uXACgx2sXCGL/c+v6+2067uuMadn9Y8BUHR/kZZfcKh0yztuW0Hx762RUVi7waeK3bk7CurDOVlzREqH7GRTpDIO3GPjUmm278Y2INS6fPF4EUVZeBGPoQ2xfi3Ko5ooFwgyfHFSXUjttU4zVpbtAhklclscieVSXEjP2TwqO4cDLchzJqXWLU5QRsR4ijdae3pBXnbI8pCPdW+HulFbkHKRaWUqeEg+NQ6o8R4sCKTWrFxiQlaJs5TmOdD7TimWFftTxj/6FS3Gn7SrzFgRghRUd9ZRfdkkOeDEKDUt3p8zbmSZcjBwRxFNLpshftyrvAHLlimGnOSRMVyB3eFFLHn58n3Uz2IBA3n2DFSSxEYSMr2ccTTSyOWJOM8wOH6Np9k97cKgHZByxptkCBV4BRgCizv40/m1HbcCjcW6ngz+6o9RQDayuw8TzFHbKoMfaFHbEuWxmuvYbGOFTwdZXdFIUane4t32yFh7aF2+MZ9xpnRxhlqSJM9k1tNJsQ5PE00xPf7hRkY1Y2ywgOwzIf4VeTnIjXkBxoyJGu5ziri7efhyTw/uQAk4ApLOV/Ae00unpzaWhp8HezVBpUMzhQW9tW1rDZxbEGB3nvNXFxEh7R9gqa9kfgvZFYZvXXmlXi7BRRu7KLkGkNNq9wOEQWMeoVHqay8Jhg/rCuww3KQRUNw8LeK1L5qaIFgGQ1d2pgO5eKHkayaLE+VeNWVszyhivZXjTzR22WkcZ8KlvgSSinJ7zUup2bXQt3uovPnlEXG74VbaRe3Vu88cZKqOH/t7KdHico6lWHMHgfJPrGlWsnm5r62jf9VpVBqTU9OiVGe6gUOCUJcAMB4VBd2tyMwTRyfssDUNxb3G7zUqSbG2ttIOCO40zBVJJwAMmoZ4bmMSQyJIhJG5SCOH0ktJXjVyUQNy3OFz8a6o/pIfmLXVH9JD81a6m/pIfmrXU39JD81a6m/pIfmrXU39JD81a6m/pIfmrXU39JD81aFlKxwrxMe4CRSTXL6pVLUkCE9omkhjAXBAoRx4wX/j4/8ANGFSDxPGljLVAsdrCHlYLnxq71ZGysZAHjT3KE5Z8+yjeKv2U+NNdztwBwPVRJbmSfoJI8ZyrEUt633lBqHUokypVtpoTWU6lfODDdx4VJZovJwRTQRJzkphGORJpXjHNM0LpF5R02oT4wmEFMzOcsST5LvoHcHpHHqhuwIZJBOFwd/A8gatOkzR27LLGDIg7BAwD6j4Ve3FprlhLKqbLmAbiPFRzrprqV3bW9nY2jlJr+cRB+8DgKsuhegWkASS0W4cjtySdpmNa9pumQ9Iuj9jIiCzWKYFGOFA51f22maX0l0kaG4WSWXbPFG+5dvDnXRvVNQt5dVtdPsetTNfyyNucIiA8K0zXzq9vqME1uba6tVKyxE7hxBwQa/o8APRu2BBwZZM4/arqs0kjCGGVhuIHZ48KEE5l80I3L/q4OaWx2Qq00cofrCoVAw2Cue+ktbmYM0cMjKCeIU+S9A3Qfu8X8qbgppBukReHaYDPhmp7Se3LCSMgKcZxwr11xPGs1uHKgDmouEqftCr3+2XH+K/8/qBxqOB27qhsj4ULWGHDSsq+00bvT4uAdn/AGR+Pspr+z5CKQjHewFDVoFHZtvi1PrM2MRxonr5mpZ5p23SOzH1n9FsLa11nTo4CwS4t8hT4gmp+i9wltuSRXmUncg5Eeqrzp3Z6Lrjac0UhY/mpZO5TJ6q6a6bd3NraX9ohkmsJxKEHMgYJ+GKsemeg3VuHlu0gkA7ccmVZTWuDT9e6SdH+AntZ4pvEBgM1p+gaPpTl7S0jif9YDJ+JroMqga0QBn8pyjNWH/dXSf93j/0V/Rv/wBBsv3h/wDXWoSSJZyKrEBr+fPuAol2gkZCTM1lFxHMjPaqxE/VrETZx14bM+G2oYEha1P5+R5G3gK2FXtYrUFC39wB6VqvftQfu8f8qfipoCpdWvZbPqrybo+HdxwO6sdmiDt4VgjuzWDzxQLHmKi/rU/aFXn9suP8V/5+UO476WYfejVqEto32omHsND8nnvce6gLD0h/y0JbFORc+xa/KEKDsQ5Pixp9SunGAwQeC8KZmY5Ykn9KjlkhcOjsrDkQcVPr2oT2gtzIeOd797VcdHdGu79L+a1V7hSDvyeO3lkDgfJLpGlTyb5bC1kbxaFSaWytEMZWCIGLhHhB2P2fDyRQQQbvNRom5izbVAyT3mhbW6ySSCJA8nB2CjLe01DDFbIEhRY1XkFGAKZ3YYLEjJPE95pZZVZXDsGUYDA4IozzsctK5IOQSaW5uUQxrNIEP3QxxRYsck5NR3k8aBOwyryDor49mQa6/N6OD5Ef4V1+b0cHyI/wrr83o4PkR/hXX5vRwfIj/Cuvzejg+RH+Fdfm9HB8iP8ACuvzejg+RH+Fdfm9HB8mP8K69PwKiJT4rEike8CtrH/mv//Z">
				</a>
		</div>
		<?php
		if(!empty($is_mobile))
		{
		?>
		<div class="pmec-bannermobile">
			<a href="https://www.cphi.com/india/exhibitors/kahan-international" title="Kahan International @ PMEC Exhibition (27-29 november 2017 | STALL - AA40 [HALL A])" target="_blank" rel="nofollow">
				<img src="<?=IMG?>pmec_m.jpg" width="100%" alt ="Kahan International @ PMEC Exhibition (27-29 november 2017 | STALL - AA40)" title="Kahan International @ PMEC Exhibition (27-29 november 2017 | STALL - AA40)">
			</a>	
		</div>
		<?php
		}
		?>
		<div class="clearfix"></div>	
		<!-- Client logo -->
		<div class="client-logo">
			<div class="client-heading"><a href="<?=DOMAIN?>clients">Clientele</a></div>
			<div class="swiper-container swiper4">
				<div class="swiper-wrapper">

					

					<div class="swiper-slide">
						<a href="http://www.kadyanoverseas.com/" title="KDN Biotech Pvt Ltd - Panipat, Haryana" target="_blank" rel="nofollow" >	
							<span class="sprite_client client1" alt="KDN Biotech Pvt Ltd - Panipat, Haryana"></span>
						</a>	
					</div>
					<div class="swiper-slide">
						<a href="http://www.gardenflavours.net/" title="Garden Flavours Co. Pvt. Ltd. - Navi Mumbai, Maharashtra" rel="nofollow" target="_blank">
							<span class="sprite_client client2" alt="Garden Flavours Co. Pvt. Ltd. - Navi Mumbai, Maharashtra"></span>
						</a>
					</div>
					<div class="swiper-slide">
						<a href="http://www.alembiclimited.com/" title="ALEMBIC LTD. - Vadodara, Gujarat" target="_blank" rel="nofollow" >
							<span class="sprite_client client4" alt="ALEMBIC LTD. - Vadodara, Gujarat"></span>
						</a>	
					</div>
					<div class="swiper-slide">
						<a href="http://www.avnihoney.com/" title="AVNI Herbal And Healthcare - Nashik, Maharashtra" target="_blank" rel="nofollow" >
							<span class="sprite_client client5" alt="AVNI Herbal And Healthcare - Nashik, Maharashtra"></span>
						</a>	
					</div>
					<div class="swiper-slide">
						<a href="http://www.capitalfoods.co.in/" title="CAPITAL FOODS LIMITED - Mumbai, Maharashtra" target="_blank" rel="nofollow" >
							<span class="sprite_client client6" alt="CAPITAL FOODS LIMITED - Mumbai, Maharashtra"></span>
						</a>	
					</div>
					<div class="swiper-slide">
						<a href="http://www.mapro.com/homepage.html" title="Mapro - Wai, Maharashtra" target="_blank" rel="nofollow" >	
							<span class="sprite_client client7" alt="Mapro - Wai, Maharashtra"></span>
						</a>	
					</div>
					<div class="swiper-slide">
						<a href="http://www.walter-muehle.de/" title="Walter Muhle - Germany" target="_blank" rel="nofollow" >	
							<span class="sprite_client client8" alt="Walter Muhle - Germany"></span>
						</a>	
					</div>
					<div class="swiper-slide">
						<a href="http://scfood.com.my/" title="SC Food Industries Sdn Bhd - Malaysia" target="_blank" rel="nofollow" >	
							<span class="sprite_client client9" alt="SC Food Industries Sdn Bhd - Malaysia"></span>
						</a>	
					</div>

					<div class="swiper-slide">
						<a href="https://www.indiamart.com/hariom-foodproducts-navsari/#home" title="Hariom Food Products - Navsari, Gujarat" target="_blank" rel="nofollow" >	
							<span class="sprite_client client10" alt="Hariom Food Products - Navsari, Gujarat"></span>
						</a>	
					</div>
					<div class="swiper-slide">
						<a href="https://www.indiamart.com/sadhanaayurvedics/" title="sadhana ayurvedic - Udaipur, Rajasthan" target="_blank" rel="nofollow" >	
							<span class="sprite_client client11" alt="sadhana ayurvedic - Udaipur, Rajasthan"></span>
						</a>	
					</div>
					<div class="swiper-slide">
						<a href="http://www.oceanadhesive.com/" title="Ocean adhesive material factory LLC - Ajman, UAE" target="_blank" rel="nofollow" >	
							<span class="sprite_client client12" alt="Ocean adhesive material factory LLC - Ajman, UAE"></span>
						</a>	
					</div>
					<div class="swiper-slide">
						<a href="http://www.multipacksolutions.com/" title="MULTI-PACK SOLUTIONS - USA" target="_blank" rel="nofollow" >	
							<span class="sprite_client client13" alt="MULTI-PACK SOLUTIONS - USA"></span>
						</a>	
					</div>
					<div class="swiper-slide">
						<a href="http://marico.com/" title="Marico Limited - Jalgaon, Maharashtra" target="_blank" rel="nofollow" >	
							<span class="sprite_client client14" alt="Marico Limited - Jalgaon, Maharashtra"></span>
						</a>	
					</div>
					<div class="swiper-slide">
						<a href="http://www.molychem.net/" title="Molychem - Badlapur, Maharashtra" target="_blank" rel="nofollow" >
							<span class="sprite_client client15" alt="Molychem - Badlapur, Maharashtra" title="Molychem - Badlapur, Maharashtra"></span>
						</a>	
					</div>
					<div class="swiper-slide">
						<a href="http://alfanzyme.com/" title="Alfanzyme Bio Solutions - Belgaum, Karnataka" target="_blank" rel="nofollow" >	
							<span class="sprite_client client17" alt="Alfanzyme Bio Solutions - Belgaum, Karnataka"></span>
						</a>
					</div>
					<div class="swiper-slide">
						<a href="http://www.contactcanada.com/database/freesearch.php?portal=0a3&action=view_profile&id=14396" title="Nutra Biogen Inc. - Canada" target="_blank" rel="nofollow" >	
							<span class="sprite_client client18" alt="Nutra Biogen Inc. - Canada"></span>
						</a>	
					</div>
					<div class="swiper-slide">
						<a href="http://www.acg-world.com/" title="ACG Worldwide - Mumbai, Maharashtra" target="_blank" rel="nofollow" >	
							<span class="sprite_client client19" alt="ACG Worldwide - Mumbai, Maharashtra"></span>
						</a>	
					</div>
				<!--
					<div class="swiper-slide">
						<span class="sprite_client client20" alt="PATANJALI" title="PATANJALI"></span>
					</div>
				-->	
					<div class="swiper-slide">
						<a href="https://www.rgcc-group.com/" title="R.G.C.C Limited - Greece" target="_blank" rel="nofollow" >	
							<span class="sprite_client client21" alt="R.G.C.C Limited - Greece"></span>
						</a>	
					</div>
				</div>
			</div>
		</div>
	   </div>
    </div> <!-- /container -->