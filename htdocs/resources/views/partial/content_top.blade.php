<div class="content-top">
		<h2 class="new">NEW ARRIVALS</h2>
		<div class="pink">
			<link href="theme/css/owl.carousel.css" rel="stylesheet">
			<script src="theme/js/owl.carousel.js"></script>			
			<script>
				$(document).ready(function() {
					$("#owl-demo").owlCarousel({
						items : 4,
						lazyLoad : true,
						autoPlay : true,
						pagination : true,
					});
				});
			</script>
			<div id="owl-demo" class="owl-carousel text-center">
			@foreach( $products as $product)
				<div class="item">
					<div class=" box-in">
						<div class=" grid_box">		
							<a href="single.html" > <img src="theme/{{$product->url_image_1}}" class="img-responsive" alt="">
								<div class="zoom-icon">
									<ul class="in-by">
										<li><h5>sizes:</h5></li>                     
										<li><span>S</span></li>
										<li><span>XS</span></li>
										<li><span>M</span></li>
										<li><span> L</span></li>
										<li><span>XL</span></li>
										<li><span> XXL</span></li>
									</ul>
									<ul class="in-by-color">
										<li><h5>colors:</h5></li>                   
										<li><span > </span></li>
										<li><span class="color"> </span></li>
										<li><span class="color1"> </span></li>
										<li><span class="color2"> </span></li>
										<li><span class="color3"> </span></li>
									</ul>
								</div> 
							</a> 	
			           </div>
						<!---->
							<div class="grid_1 simpleCart_shelfItem">
								<a href="#" class="cup item_add"><span class=" item_price" >{{$product->price}} $ <i> </i> </span></a>					
							</div>
						<!---->
					</div>
				</div>
			@endforeach
			</div>
		</div>
</div>