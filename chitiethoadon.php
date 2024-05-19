<?php include "header.php"; ?>

<!-- BREADCRUMB -->
<div id="breadcrumb" class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<div class="col-md-12">
						<h3 class="breadcrumb-header">Chi tiết hóa đơn</h3>
						<ul class="breadcrumb-tree">
							<li><a href="#">Home</a></li>
							<li class="active">Chi tiết hóa đơn</li>
						</ul>
					</div>
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /BREADCRUMB -->
<h2 class="text-center">Chi Tiết Hóa Đơn</h2>
<div class="container"> 
 <table id="cart" class="table table-hover table-condensed"> 
  <thead> 
   <tr> 
    <th style="width:50%">Tên sản phẩm</th> 
    <th style="width:10%">Giá</th> 
    <th style="width:8%">Số lượng</th> 
    <th style="width:22%" class="text-center">Thành tiền</th> 
    <th style="width:10%"> </th> 
   </tr> 
  </thead> 
  <tbody><tr> 
  <?php 
    $user_name = $_SESSION['user'];
    $getDSCTHoaDon = $hoadon -> layCTHoaDon($user_name,$_GET['idHD']);
    foreach ($getDSCTHoaDon as $value):
  ?> 
   <td data-th="Product"> 
    <div class="row">
    <div class="col-sm-2 hidden-xs"><img src="./img/<?php echo $value['hinhsp'] ?>" style="width: 70px" alt="">
     </div> 
     <div class="col-sm-10"> 
      <h4 class="nomargin"><?php echo $value['tensp'] ?></h4>  
     </div> 
    </div> 
   </td> 
   <td data-th="Price"><?php echo number_format($value['giasp'])?> đ</td> 
   <td data-th="Quantity" class="text-right"><?php echo $value['soluongsp'] ?></td> 
   <td data-th="Subtotal" class="text-center"><?php echo number_format($value['tongtien'])?> đ</td> 
   </td>
  </tr>
  </tbody>
  <?php endforeach ; ?>
  <tfoot> 
   <tr> 
    <td><a href="shipping.php" class="btn btn-warning"><i class="fa fa-angle-left"></i> Quay lại</a>
    </td>
   </tr> 
  </tfoot> 
 </table>
</div>
<?php include "footer.html" ?>