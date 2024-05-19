<?php
require "config.php";
require "models/db.php";
require "models/product.php";
require "models/protype.php";
require "models/wishlist.php";
require "models/hoadon.php";
require "models/user.php"; 
//
$product = new Product;
$protype = new Protype;
$wishlist = new Wishlist;
$hoadon = new HoaDon;
$user = new User;
//


$laySanPhamMoiNhat=$product->laySanPhamMoiNhat();
$layDienThoaiMoiNhat=$product->layDienThoaiMoiNhat();
$laySanPhamNoiBat=$product->laySanPhamNoiBat();
$layDienThoai=$product->layDienThoai();
$layDienThoaiMoiNhat=$product->layDienThoaiMoiNhat();
$layLapTopMoiNhat=$product->layLapTopMoiNhat();
$layLoaMoiNhat=$product->layLoaMoiNhat();
$layLapTop=$product->layLapTop();
$layLoa=$product->layLoa();

?>
<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		 <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

		<title>Cửa Hàng Điện Tử TS</title>

		<!-- Google font -->
		<link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">

		<!-- Bootstrap -->
		<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css"/>

		<!-- Slick -->
		<link type="text/css" rel="stylesheet" href="css/slick.css"/>
		<link type="text/css" rel="stylesheet" href="css/slick-theme.css"/>

		<!-- nouislider -->
		<link type="text/css" rel="stylesheet" href="css/nouislider.min.css"/>

		<!-- Font Awesome Icon -->
		<link rel="stylesheet" href="css/font-awesome.min.css">

		<!-- Custom stlylesheet -->
		<link type="text/css" rel="stylesheet" href="css/style.css"/>

		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
		
    </head>
	<body>
		<!-- HEADER -->
		<header>
			<!-- TOP HEADER -->
			<div id="top-header">
				<div class="container">
				<ul class="header-links pull-left">
					<li><a href="tel:0383882741"><i class="fa fa-phone"></i> +038-388-2741</a></li>
					<li><a href="https://mail.google.com/mail/u/0/?pli=1#inbox?compose=jrjtXGjnDsNdTFpKhqwgqdsKGnjHvpRWkdwhfKGGKJMjpDjCxpLHVwKZCbgrCsvQFhPPBBzn"target="_blank"><i class="fa fa-envelope-o"></i> 9723.thcs@email.com</a></li>
					<li><a href="https://www.google.com/maps/dir/Thu+Duc+College+of+Technology,+53+%C4%90.+V%C3%B5+V%C4%83n+Ng%C3%A2n,+Linh+Chi%E1%BB%83u,+Th%C3%A0nh+Ph%E1%BB%91+Th%E1%BB%A7+%C4%90%E1%BB%A9c,+Th%C3%A0nh+ph%E1%BB%91+H%E1%BB%93+Ch%C3%AD+Minh,+Vietnam/148+%C4%90.+V%C3%B5+V%C4%83n+Ng%C3%A2n,+B%C3%ACnh+Th%E1%BB%8D,+Th%E1%BB%A7+%C4%90%E1%BB%A9c,+Th%C3%A0nh+ph%E1%BB%91+H%E1%BB%93+Ch%C3%AD+Minh/@10.8509601,106.7587115,18z/data=!3m1!4b1!4m14!4m13!1m5!1m1!1s0x31752797e321f8e9:0xb3ff69197b10ec4f!2m2!1d106.7580641!2d10.8514325!1m5!1m1!1s0x317527a288c0df9d:0x51cd8d7716ab593e!2m2!1d106.7615335!2d10.8502922!3e0"target="_blank" ><i class="fa fa-map-marker"></i> 148 Võ Văn Ngân,P.Bình Thọ Thủ Đức,TP. Hồ Chí Minh</a></li>
				</ul>
					<ul class="header-links pull-right">
						
					<?php if(isset($_SESSION['user'])):?>
							<li><i class="fa fa-user-o"></i><a href="thongtinnguoidung.php"><?php echo $_SESSION['user'] ?></a></li>
							<li><a href="login/logout.php">Đăng Xuất</a></li>
						<?php else: ?>
							<li><a href="login/index.php"><i class="fa fa-user-o"></i> Đăng nhập</a></li>
						<?php endif ?>
					</ul>
				</div>
			</div>
			<!-- /TOP HEADER -->

			<!-- MAIN HEADER -->
			<div id="header">
				<!-- container -->
				<div class="container">
					<!-- row -->
					<div class="row">
						<!-- LOGO -->
						<div class="col-md-2">
							<div class="header-logo">
								<a href="index.php" class="logo">
									<img src="./img/images.png" alt="">
								</a>
							</div>
						</div>
						<!-- /LOGO -->

						<!-- SEARCH BAR -->
						<div class="col-md-6">
							<div class="header-search">
								<form method = "get" action = "result.php">
									<input class="input" placeholder="Search now" name = "keyword">
									<button type = "submit" class="search-btn">Tìm Kiếm</button>
								</form>
							</div>
						</div>
						<!-- /SEARCH BAR -->

						<!-- ACCOUNT -->
						<div class="col-md-4">
							<div class="header-ctn">
								<!-- Wishlist -->
								<div>
									<a href="wishlist.php">
										<i class="fa fa-heart-o"></i>
										<span>Yêu Thích</span>
									</a>
								</div>
								<!-- /Wishlist -->
								<?php
									if(isset($_SESSION['cart'])) : 
									$all_qty = 0;
									$total_price = 0;
								?>
								<!-- Cart -->
								<div class="dropdown">
									<a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
										<i class="fa fa-shopping-cart"></i>
										<span>Giỏ Hàng</span>
									</a>
									<div class="cart-dropdown">
									<?php foreach($_SESSION['cart'] as $key => $val ) : ?>
										<div class="cart-list">
											<div class="product-widget">
												<div class="product-img">
													<img src="./img/<?php echo $val['image'] ?>" alt="">
												</div>
												<div class="product-body">
													<h3 class="product-name"><a href="thongtinsp.php?id=<?php echo $val['id'] ?>"><?php echo $val['name'] ?></a></h3>
													<h4 class="product-price"><span class="qty"><?php echo $val['qty'] ?>x</span><?php echo number_format($val['price']) ?>đ</h4>
												</div>
												<a href="delcart.php?id=<?php echo $val['id'] ?>"><button class="delete"><i class="fa fa-close"></i></button></a>
											</div>
										</div>
										<?php
											$all_qty += $val['qty'];
    										$total_price += ($val['price']*$val['qty']);
   										?>
										<?php endforeach ; ?>
										<div class="cart-summary">
											<small><?php echo $all_qty ?> Các món hàng đã chọn</small>
											<h5>Tổng Tiền: <?php echo number_format($total_price) ?>đ</h5>
										</div>
										<div class="cart-btns">
											<a href="listcart.php">Xem Giỏ Hàng</a>
											<a href="checkout.php">Thanh Toán  <i class="fa fa-arrow-circle-right"></i></a>
										</div>
									</div>
								</div>
								<?php else: ?>
									<div class="dropdown">
										<a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
											<i class="fa fa-shopping-cart"></i>
											<span>Giỏ Hàng</span>
										</a>
										<div class="cart-dropdown">
											<div class="cart-summary">
											<small> Các món hàng đã chọn</small>
											<h5>Tổng Tiền: 0đ</h5>
										</div>
										<div class="cart-btns">
											<a href="listcart.php">Xem Giỏ Hàng</a>
											<a href="checkout.php">Thanh Toán  <i class="fa fa-arrow-circle-right"></i></a>
										</div>
									</div>
								<?php endif; ?>
								<!-- /Cart -->
								
								<!-- Menu Toogle -->
								<div class="menu-toggle">
									<a href="#">
										<i class="fa fa-bars"></i>
										<span>Menu</span>
									</a>
								</div>
								<!-- /Menu Toogle -->
							</div>
						</div>
						<!-- /ACCOUNT -->
					</div>
					<!-- row -->
				</div>
				<!-- container -->
			</div>
			<!-- /MAIN HEADER -->
		</header>
		<!-- /HEADER -->

		<!-- NAVIGATION -->
		<nav id="navigation">
			<!-- container -->
			<div class="container">
				<!-- responsive-nav -->
				<div id="responsive-nav">
					<!-- NAV -->
					<ul class="main-nav nav navbar-nav">
					<?php if(isset($_GET['type_id'])):?>
						<li><a href="index.php">Home</a></li>
							<?php
							$getAllProtype = $protype -> getAllProtype();
							foreach($getAllProtype as $value):
							?>
						<?php if($_GET['type_id'] == $value['type_id']) :?>
							<li class="active"><a href="products.php?type_id=<?php echo $value['type_id'] ?>"><?php echo $value['type_name'] ?></a></li>	
						<?php else: ?>
							<li><a href="products.php?type_id=<?php echo $value['type_id'] ?>"><?php echo $value['type_name'] ?></a></li>
						<?php endif;?>
						<?php endforeach; ?>
					</ul>
					<?php else: ?>
						<li class="active"><a href="index.php">Home</a></li>
							<?php
							$getAllProtype = $protype -> getAllProtype();
							foreach($getAllProtype as $value):
							?>
						<li><a href="products.php?type_id=<?php echo $value['type_id'] ?>"><?php echo $value['type_name'] ?></a></li>	
						<?php endforeach; ?>
					<?php endif;?>
					<!-- /NAV -->
				</div>
				<!-- /responsive-nav -->
			</div>
			<!-- /container -->
		</nav>
		<!-- /NAVIGATION -->
