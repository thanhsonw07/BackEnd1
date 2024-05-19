<?php include "header.php" ?>
	<body>
        <?php
        if(isset($_GET['id'])):
            $id = $_GET['id'];
            $laySanPham=$product->getProductById($id);
                foreach($laySanPham as $value):		
        ?>
		<!-- SECTION -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<form action="addcart.php?id=<?php echo $value['id'] ?>" method="POST" >
					<div class="col-md-7">
						<!--  Details -->
						<div class="billing-details">
							<div class="section-title">
								<h3 class="title"><?php echo $value['name'] ?></h3>
							</div>
							<div class="product-img">
								<img src="./img/<?php echo $value['image'] ?>" width="400px">
							</div>
						</div>
						<!--  Details -->
					</div>

					<!-- Order Details -->
					<div class="col-md-5 order-details">
						<div class="section-title text-center">
							<h3 class="title">Thông Tin</h3>
						</div>
						<div class="order-summary">
                        	<div class="order-col">
								<div><strong>Giá</strong></div>
								<div><strong class="order-total"><?php  echo number_format( $value['price'])?>VND</strong></div>
							</div>
							<div class="order-products">
                                <div class="order-col">
								    <div><strong>Loại</strong></div>
								    <div><strong><?php  echo $value['type_name']?></strong></div>
							    </div>
								<div class="order-col">
									<div><strong>Hãng</strong></div>
									<div><strong><?php  echo $value['manu_name']?></strong></div>
								</div>
								<div class="order-col">
									<div><strong>Số Lượng Mua</strong></div>
									<div><input id="addqty" name="addqty" type="number" min="0" class="form-control" placeholder="Số Lượng" ></div>
								</div>
								<div style ="padding-left: 150px" class="form-group  order-submit ">
									<input name="submit" type="submit" value="add to cart" class="primary-btn ">
								</div>
							</div>
						</div>
						<div class="payment-method">
                        <h4 class="title">Mô Tả</h4></br>
                        <p><?php echo $value['description'] ?></p>
						</div>
					</div>
					<!-- /Order Details -->
					</form>
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->
		<script>
			// Select your input element.
			var number = document.getElementById('addqty');

			// Listen for input event on numInput.
			number.onkeydown = function(e) {
			if(!((e.keyCode > 95 && e.keyCode < 106)
				|| (e.keyCode > 47 && e.keyCode < 58) 
				|| e.keyCode == 8)) {
					return false;
				}
			}
		</script>
    <?php endforeach; endif ?>
<?php include "footer.html" ?>