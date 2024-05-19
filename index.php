<?php include "header.php" ?>

		<!-- SECTION -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<!-- shop -->
					<div class="col-md-4 col-xs-6">
						<div class="shop">
							<div class="shop-img">
								<img src="./img/shop01.png" alt="">
							</div>
							<div class="shop-body">
								<h3>Laptop<br>Collection</h3>
								<a href="products.php?type_id=2" class="cta-btn">Shop now <i class="fa fa-arrow-circle-right"></i></a>
							</div>
						</div>
					</div>
					<!-- /shop -->

					<!-- shop -->
					<div class="col-md-4 col-xs-6">
						<div class="shop">
							<div class="shop-img">
								<img src="./img/shop03.png" alt="">
							</div>
							<div class="shop-body">
								<h3>Accessories<br>Collection</h3>
								<a href="products.php?type_id=5" class="cta-btn">Shop now <i class="fa fa-arrow-circle-right"></i></a>
							</div>
						</div>
					</div>
					<!-- /shop -->

					<!-- shop -->
					<div class="col-md-4 col-xs-6">
						<div class="shop">
							<div class="shop-img">
								<img src="./img/shop02.png" alt="">
							</div>
							<div class="shop-body">
								<h3>Cameras<br>Collection</h3>
								<a href="products.php?type_id=3" class="cta-btn">Shop now <i class="fa fa-arrow-circle-right"></i></a>
							</div>
						</div>
					</div>
					<!-- /shop -->
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->

		<!-- SECTION -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">

					<!-- section title -->
					<div class="col-md-12">
						<div class="section-title">
							<h3 class="title">ĐIỆN THOẠI MỚI</h3>
						</div>
					</div>
					<!-- /section title -->

					<!-- Products tab & slick -->
					<div class="col-md-12">
						<div class="row">
							<div class="products-tabs">
								<!-- tab -->
								<div id="tab2" class="tab-pane fade in active">
									<div class="products-slick" data-nav="#slick-nav-2">
										<!-- product -->
										<?php foreach ($layDienThoaiMoiNhat as $value):?>
										<!-- product -->
										<div class="product">
											<div class="product-img">
												<img src="./img/<?php echo $value['image']?>" alt="">
												<div class="product-label">
													<span class="new">NEW</span>
												</div>
											</div>
											<div class="product-body">
												<p class="product-category"><?php echo $value['manu_name'] ?></p>
												<h3 class="product-name"><a href="thongtinsp.php?id=<?php echo $value['id'] ?>"><?php echo $value['name'] ?></a></h3>
												<h4 class="product-price"><?php echo number_format($value['price']) ?>VND</h4>
												<div class="product-rating">
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
												</div>
												<div class="product-btns">
													<button class="add-to-wishlist"><a  href="addwish.php?id=<?php echo $value['id'] ?>"><i class="fa fa-heart-o"></i><span class="tooltipp">add to wishlist</span></a></button>
													<button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">add to compare</span></button>
													<button class="quick-view"><a href="thongtinsp.php?id=<?php echo $value['id'] ?>"><i class="fa fa-eye"></i></a><span class="tooltipp">quick view</span></button>
												</div>
											</div>
											<div class="add-to-cart">
											<a  href="addcart.php?id=<?php echo $value['id'] ?>"><button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> add to cart</button></a>
											</div>
										</div>
										<!-- /product -->
										<?php endforeach ?>
									</div>
										<!-- /product -->
									</div>
									<div id="slick-nav-2" class="products-slick-nav"></div>
								</div>
								<!-- /tab -->
							</div>
						</div>
					</div>
					<!-- /Products tab & slick -->
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->

		<!-- SECTION -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">

					<!-- section title -->
					<div class="col-md-12">
						<div class="section-title">
							<h3 class="title">LAPTOP MỚI</h3>
						</div>
					</div>
					<!-- /section title -->

					<!-- Products tab & slick -->
					<div class="col-md-12">
						<div class="row">
							<div class="products-tabs">
								<!-- tab -->
								<div id="tab3" class="tab-pane fade in active">
									<div class="products-slick" data-nav="#slick-nav-3">
										<!-- product -->
										<?php foreach ($layLapTopMoiNhat as $value):?>
										<!-- product -->
										<div class="product">
											<div class="product-img">
												<img src="./img/<?php echo $value['image']?>" alt="">
												<div class="product-label">
													<span class="new">NEW</span>
												</div>
											</div>
											<div class="product-body">
												<p class="product-category"><?php echo $value['manu_name'] ?></p>
												<h3 class="product-name"><a href="thongtinsp.php?id=<?php echo $value['id'] ?>"><?php echo $value['name'] ?></a></h3>
												<h4 class="product-price"><?php echo number_format($value['price']) ?>VND</h4>
												<div class="product-rating">
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
												</div>
												<div class="product-btns">
													<button class="add-to-wishlist"><a  href="addwish.php?id=<?php echo $value['id'] ?>"><i class="fa fa-heart-o"></i><span class="tooltipp">add to wishlist</span></a></button>
													<button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">add to compare</span></button>
													<button class="quick-view"><a href="thongtinsp.php?id=<?php echo $value['id'] ?>"><i class="fa fa-eye"></i></a><span class="tooltipp">quick view</span></button>
												</div>
											</div>
											<div class="add-to-cart">
												<a  href="addcart.php?id=<?php echo $value['id'] ?>"><button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> add to cart</button></a>
											</div>
										</div>
										<!-- /product -->
										<?php endforeach ?>
									</div>
										<!-- /product -->
									</div>
									<div id="slick-nav-3" class="products-slick-nav"></div>
								</div>
								<!-- /tab -->
							</div>
						</div>
					</div>
					<!-- /Products tab & slick -->
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->
		
				<!-- SECTION -->
				<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">

					<!-- section title -->
					<div class="col-md-12">
						<div class="section-title">
							<h3 class="title">LOA MỚI</h3>
						</div>
					</div>
					<!-- /section title -->

					<!-- Products tab & slick -->
					<div class="col-md-12">
						<div class="row">
							<div class="products-tabs">
								<!-- tab -->
								<div id="tab4" class="tab-pane fade in active">
									<div class="products-slick" data-nav="#slick-nav-4">
										<!-- product -->
										<?php foreach ($layLoa as $value):?>
										<!-- product -->
										<div class="product">
											<div class="product-img">
												<img src="./img/<?php echo $value['image']?>" alt="">
												<div class="product-label">
													<span class="new">NEW</span>
												</div>
											</div>
											<div class="product-body">
												<p class="product-category"><?php echo $value['manu_name'] ?></p>
												<h3 class="product-name"><a href="thongtinsp.php?id=<?php echo $value['id'] ?>"><?php echo $value['name'] ?></a></h3>
												<h4 class="product-price"><?php echo number_format($value['price']) ?>VND</h4>
												<div class="product-rating">
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
												</div>
												<div class="product-btns">
													<button class="add-to-wishlist"><a  href="addwish.php?id=<?php echo $value['id'] ?>"><i class="fa fa-heart-o"></i><span class="tooltipp">add to wishlist</span></a></button>
													<button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">add to compare</span></button>
													<button class="quick-view"><a href="thongtinsp.php?id=<?php echo $value['id'] ?>"><i class="fa fa-eye"></i></a><span class="tooltipp">quick view</span></button>
												</div>
											</div>
											<div class="add-to-cart">
											<a  href="addcart.php?id=<?php echo $value['id'] ?>"><button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> add to cart</button></a>
											</div>
										</div>
										<!-- /product -->
										<?php endforeach ?>
									</div>
										<!-- /product -->
									</div>
									<div id="slick-nav-4" class="products-slick-nav"></div>
								</div>
								<!-- /tab -->
							</div>
						</div>
					</div>
					<!-- /Products tab & slick -->
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->

		<!-- HOT DEAL SECTION -->
		<div id="hot-deal" class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<div class="col-md-12">
						<div class="hot-deal">
							<ul class="hot-deal-countdown">
								<li>
									<div>
										<h3 id ="d"></h3>
										<span>Days</span>
									</div>
								</li>
								<li>
									<div>
										<h3 id="h"></h3>
										<span>Hours</span>
									</div>
								</li>
								<li>
									<div>
										<h3 id="m"></h3>
										<span>Mins</span>
									</div>
								</li>
								<li>
									<div >
										<h3 id="s"></h3>
										<span>Secs</span>
									</div>
								</li>
							</ul>
							<h2 class="text-uppercase">hot deal this week</h2>
							<p >New Collection Up to 50% OFF</p>
							<div id="mua"><a class="primary-btn cta-btn" href="#" >Shop Now</a></div>
							<script  src="js/demnguoc.js"></script>
						</div>
					</div>
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /HOT DEAL SECTION -->

		<!-- SECTION -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">

					<!-- section title -->
					<div class="col-md-12">
						<div class="section-title">
							<h3 class="title">Sản Phẩm Nổi Bật</h3>
						</div>
					</div>
					<!-- /section title -->

					<!-- Products tab & slick -->
					<div class="col-md-12">
						<div class="row">
							<div class="products-tabs">
								<!-- tab -->
								<div id="tab5" class="tab-pane fade in active">
									<div class="products-slick" data-nav="#slick-nav-5">
										<!-- product -->
										<?php foreach ($laySanPhamNoiBat as $value):?>
										<!-- product -->
										<div class="product">
											<div class="product-img">
												<img src="./img/<?php echo $value['image']?>" alt="">
											</div>
											<div class="product-body">
												<p class="product-category"><?php echo $value['manu_name'] ?></p>
												<h3 class="product-name"><a href="thongtinsp.php?id=<?php echo $value['id'] ?>"><?php echo $value['name'] ?></a></h3>
												<h4 class="product-price"><?php echo number_format($value['price']) ?>VND</h4>
												<div class="product-rating">
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
												</div>
												<div class="product-btns">
													<button class="add-to-wishlist"><a  href="addwish.php?id=<?php echo $value['id'] ?>"><i class="fa fa-heart-o"></i><span class="tooltipp">add to wishlist</span></a></button>
													<button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">add to compare</span></button>
													<button class="quick-view"><a href="thongtinsp.php?id=<?php echo $value['id'] ?>"><i class="fa fa-eye"></i></a><span class="tooltipp">quick view</span></button>
												</div>
											</div>
											<div class="add-to-cart">
											<a  href="addcart.php?id=<?php echo $value['id'] ?>"><button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> add to cart</button></a>
											</div>
										</div>
										<!-- /product -->
										<?php endforeach ?>
									</div>
										<!-- /product -->
									</div>
									<div id="slick-nav-5" class="products-slick-nav"></div>
								</div>
								<!-- /tab -->
							</div>
						</div>
					</div>
					<!-- /Products tab & slick -->
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->

		<!-- SECTION -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<div class="col-md-4 col-xs-6">
						<div class="section-title">
							<h4 class="title">Điện Thoại</h4>
							<div class="section-nav">
								<div id="slick-nav-6" class="products-slick-nav"></div>
							</div>
						</div>
						
						<div class="products-widget-slick" data-nav="#slick-nav-6">
						<?php foreach ($layDienThoai as $value):?>
							<div>
								<!-- product widget -->
								<div class="product-widget">
									<div class="product-img">
										<img src="./img/<?php echo $value['image']?>" alt="">
									</div>
									<div class="product-body">
										<p class="product-category"><?php echo $value['manu_name'] ?></p>
										<h3 class="product-name"><a href="thongtinsp.php?id=<?php echo $value['id'] ?>"><?php echo $value['name']?></a></h3>
										<h4 class="product-price"><?php echo number_format($value['price'])?></h4>
									</div>
								</div>
								<!-- /product widget -->
							</div>
							<?php endforeach ?>
						</div>
					</div>
					<div class="col-md-4 col-xs-6">
						<div class="section-title">
							<h4 class="title">Máy Tính</h4>
							<div class="section-nav">
								<div id="slick-nav-7" class="products-slick-nav"></div>
							</div>
						</div>

						<div class="products-widget-slick" data-nav="#slick-nav-7">
						<?php foreach ($layLapTop as $value):?>
							<div>
								<!-- product widget -->
								<div class="product-widget">
									<div class="product-img">
										<img src="./img/<?php echo $value['image']?>" alt="">
									</div>
									<div class="product-body">
										<p class="product-category"><?php echo $value['manu_name'] ?></p>
										<h3 class="product-name"><a href="thongtinsp.php?id=<?php echo $value['id'] ?>"><?php echo $value['name']?></a></h3>
										<h4 class="product-price"><?php echo number_format($value['price'])?></h4>
									</div>
								</div>
								<!-- /product widget -->
							</div>
							<?php endforeach ?>
						</div>
					</div>

					<div class="clearfix visible-sm visible-xs"></div>

					<div class="col-md-4 col-xs-6">
						<div class="section-title">
							<h4 class="title">Loa</h4>
							<div class="section-nav">
								<div id="slick-nav-8" class="products-slick-nav"></div>
							</div>
						</div>

						<div class="products-widget-slick" data-nav="#slick-nav-8">
						<?php foreach ($layLoa as $value):?>
							<div>
								<!-- product widget -->
								<div class="product-widget">
									<div class="product-img">
										<img src="./img/<?php echo $value['image']?>" alt="">
									</div>
									<div class="product-body">
										<p class="product-category"><?php echo $value['manu_name'] ?></p>
										<h3 class="product-name"><a href="thongtinsp.php?id=<?php echo $value['id'] ?>"><?php echo $value['name']?></a></h3>
										<h4 class="product-price"><?php echo number_format($value['price'])?></h4>
									</div>
								</div>
								<!-- /product widget -->
							</div>
							<?php endforeach ?>
						</div>
					</div>

				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->

<?php include "footer.html"?>