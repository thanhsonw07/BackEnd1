<?php
include "header.php";
?>
<!-- BREADCRUMB -->
<div id="breadcrumb" class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<div class="col-md-12">
						<h3 class="breadcrumb-header">Danh Sách Yêu Thích</h3>
						<ul class="breadcrumb-tree">
							<li><a href="#">Home</a></li>
							<li class="active">Yêu Thích</li>
						</ul>
					</div>
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /BREADCRUMB -->
<?php if(isset($_SESSION['user'])): ?>
<h2 class="text-center">Yêu Thích Của Bạn</h2>
<div class="container"> 
 <table id="cart" class="table table-hover table-condensed"> 
  <thead> 
   <tr> 
    <th style="width:50%">Tên sản phẩm</th> 
    <th style="width:10%">Giá</th> 
    <th style="width:10%"> </th> 
   </tr> 
  </thead> 
  <tbody><tr> 
  <?php
   $user_name = $_SESSION['user'];
   $getWList = $wishlist -> getWishList($_SESSION['user']);
   foreach ($getWList as $value):
 ?>
   <td data-th="Product"> 
    <div class="row">
    <div class="col-sm-2 hidden-xs"><img src="./img/<?php echo $value['image'] ?>" style="width: 70px" alt="">
     </div> 
     <div class="col-sm-10"> 
      <a href="thongtinsp.php?id=<?php echo $value['id'] ?>"><h4 class="nomargin"><?php echo $value['name'] ?></h4> </a>
     </div> 
    </div> 
   </td> 
   <td data-th="Price"><?php echo number_format($value['price'])?> đ</td> 
   </td> 
   <td class="actions" data-th="">
    <button class="btn btn-danger btn-sm" ><a href="delwish.php?id=<?php echo $value['wish_id'] ?>"><i class="fa fa-trash-o"></i></a>
    </button>
   </td>
  </tr>
  </tbody>
  <?php endforeach ; ?>
  <tfoot> 
   <tr> 
    <td><a href="index.php" class="btn btn-warning"><i class="fa fa-angle-left"></i> Tiếp tục xem sản phẩm</a>
    </td> 
    <td colspan="2" class="hidden-xs"> </td> 
   </tr> 
  </tfoot> 
 </table>
</div>
<?php else: ?>
  <div style="padding-bottom: 50px"><h2 class="text-center"><a href="login/index.php"> </a>Hãy Đăng Nhập </h2></div>
<?php endif; ?>
<?php include "footer.html" ?>