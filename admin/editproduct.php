<?php $page = 'editproduct' ; include "header.php" ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Sửa Sản Phẩm</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Project Edit</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
    <form action="productedit.php" method="POST" roles="form" enctype="multipart/form-data">      
      <div class="row">
        <div class="col-md-12">
          <div class="card card-primary">
            <div class="card-header">        
              <h3 class="card-title">General</h3>
              <div class="card-tools ">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                  <i class="fas fa-minus"></i>
                </button>
              </div>
            </div>
            <div class="card-body">
              <?php 
                    if(isset($_GET['id'])):
                    $id1 = $_GET['id'];
                    $sanpham = $product ->getProductByID($id1); 
                    foreach ($sanpham as $value):
              ?>
              <div class="form-group">
                <input type="hidden" name="id" value="<?php echo $value['id'] ?>">
              </div>
              <div class="form-group">
                <label for="inputName">Tên Sản Phẩm</label>
                <input type="text" name="name" id="inputName" class="form-control" placeholder="Nhập tên sản phẩm" value="<?php echo $value['name'] ?>">
              </div>
              <div class="form-group">
                <label for="inputManu">Hãng Sản Xuất</label>
                <select id="inputManu" name="manu" class="form-control custom-select">
                  <?php 
                  $manu = $manufacture ->getAllManufacture(); 
                  foreach ($manu as $value1):
                    if($value['manu_id'] == $value1['manu_id']):
                  ?>
                  <option selected value=<?php echo $value1['manu_id'] ?>><?php echo $value1['manu_name'] ?></option>
                  <?php else: ?>
                  <option value=<?php echo $value1['manu_id'] ?>><?php echo $value1['manu_name'] ?></option>
                  <?php endif; endforeach; ?>
                </select>
              </div>
              <div class="form-group">
                <label for="inputType">Loại Sản Phẩm</label>
                <select id="inputType" name="type" class="form-control custom-select">
                  <?php 
                  $type = $protype ->getAllProtype(); 
                  foreach ($type as $value2):
                    if($value['type_id'] == $value2['type_id']):
                  ?>
                  <option selected value="<?php echo $value2['type_id'] ?>"><?php echo $value2['type_name'] ?></option>
                  <?php else: ?>
                  <option value=<?php echo $value2['type_id'] ?>><?php echo $value2['type_name'] ?></option>
                  <?php endif; endforeach; ?>
                </select>
              </div>
              <div class="form-group">
                <label for="inputPrice">Giá Sản Phẩm</label>
                <input type="text" name="price" id="inputPrice" class="form-control" placeholder="Nhập giá sản phẩm" value="<?php echo $value['price'] ?>">
              </div>
              <div class="form-group">
                <label for="inputImg">Ảnh Sản Phẩm</label>
                <input type="file" name="image" id="inputImage" class="form-control">
              </div>
              <div class="form-group">
                <label for="inputDescription">Mô Tả</label>
                <textarea id="summernote" name="description" class="form-control" rows="4"><?php echo $value['description'] ?></textarea>
              </div>
              <div class="form-group">
                <label >Nổi Bật</label>
                <div class="radio">
                <?php if($value['feature'] == 1):?> 
                <label class="px-5">
                    <input type="radio" name="feature" value="1" checked="checked"> Có
                </label>
                <label>
                    <input type="radio" name="feature" value="0" > Không
                </label>
                <?php else: ?>
                <label class="px-5">
                    <input type="radio" name="feature" value="1" > Có
                </label>
                <label>
                    <input type="radio" name="feature" value="0" checked="checked"> Không
                </label>
                <?php endif; ?>
              </div>
              <?php endforeach; ?>
            <?php endif; ?>
            </div>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
      </div>
      <div class="row">
        <div class="col-12">
          <a href="products.php" class="btn btn-secondary">Cancel</a>
          <input type="submit" value="Edit Porject" class="btn btn-success float-right" name="submit" >
        </div>
      </div>
    </form>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <?php include "footer.html" ?>