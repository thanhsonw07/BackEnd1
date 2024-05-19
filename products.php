<?php
include "header.php"; ?>


		<!-- SECTION -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">

					<!-- STORE -->
					<div id="store" class="col-md-12">
						<!-- store top filter -->
						<div class="store-filter clearfix">
							<ul class="store-grid">
								<li class="active"><i class="fa fa-th"></i></li>
							</ul>
						</div>
						<!-- /store top filter -->

						<!-- store products -->
						<div class="row">
							<?php
								if(isset($_GET['type_id'])):
									$type_id = $_GET['type_id'];
									$getProductByType = $product -> getProductByType($type_id);
									// hiển thị 3 sản phẩm trên 1 trang
									$perPage = 4; 				
									// Lấy số trang trên thanh địa chỉ
									$page = isset($_GET['page'])?$_GET['page']:1; 			
									// Tính tổng số dòng, ví dụ kết quả là 18
									$total = count($getProductByType); 					
									// lấy đường dẫn đến file hiện hành
									$url = $_SERVER['PHP_SELF']."?type_id=".$type_id;	
									
									$get3ProductByType = $product -> get3ProductByType($type_id,$page,$perPage);
									foreach($get3ProductByType as $value):
							?>
							<!-- product -->
							<div class="col-md-3 col-xs-6">
								<div class="product">
									<div class="product-img">
										<img src="./img/<?php echo $value['image'] ?>" >
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
											<i class="fa fa-star-o"></i>
										</div>
										<div class="product-btns">
											<button class="add-to-wishlist"><a href="addWish.php?id=<?php echo $value['id'] ?>"><i class="fa fa-heart-o"></i></a><span class="tooltipp">add to wishlist</span></button>
											<button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">add to compare</span></button>
											<button class="quick-view"><a href="thongtinsp.php?id=<?php echo $value['id'] ?>"><i class="fa fa-eye"></i></a><span class="tooltipp">quick view</span></button>
										</div>
									</div>
									<div class="add-to-cart">
									<a href="addcart.php?id=<?php echo $value['id'] ?>"><button class="add-to-cart-btn" ><i class="fa fa-shopping-cart"></i> add to cart</button></a>
									</div>
								</div>
							</div>
							<!-- /product -->
							<?php endforeach;?>
						</div>
						<!-- /store products -->

						<!-- store bottom filter -->
						<div class="store-filter clearfix">
							<span class="store-qty">Showing 1-4 products</span>
							<ul class="store-pagination">
                            <?php echo $product->paginate($url, $total, $perPage, $page); ?>
								<li><a href="#"><i class="fa fa-angle-right"></i></a></li>
							</ul>
						</div>
						<!-- /store bottom filter -->
						<?php endif; ?>
					</div>
					<!-- /STORE -->
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->

<?php include "footer.html"; ?>
