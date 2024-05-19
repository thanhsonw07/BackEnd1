<?php 
$page = 'productadd';
include "header.php" ;
?>
  <link rel="stylesheet" href="../../plugins/summernote/summernote-bs4.min.css">
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Thêm Sản Phẩm</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Project Add</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
    <form action="add.php" method="POST" roles="form" enctype="multipart/form-data">      
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
              <div class="form-group">
                <label for="inputName">Tên Sản Phẩm</label>
                <input type="text" name="name" id="inputName" class="form-control" placeholder="Nhập tên sản phẩm" require>
              </div>
              <div class="form-group">
                <label for="inputManu">Hãng Sản Xuất</label>
                <select id="inputManu" name="manu" class="form-control custom-select">
                  <option selected disabled>Select one</option>
                  <?php 
                  $manu = $manufacture ->getAllManufacture(); 
                  foreach ($manu as $value):
                  ?>
                  <option value=<?php echo $value['manu_id'] ?>><?php echo $value['manu_name'] ?></option>
                  <?php endforeach; ?>
                </select>
              </div>
              <div class="form-group">
                <label for="inputType">Loại Sản Phẩm</label>
                <select id="inputType" name="type" class="form-control custom-select">
                  <option selected disabled>Select one</option>
                  <?php 
                  $type = $protype ->getAllProtype(); 
                  foreach ($type as $value):
                  ?>
                  <option value="<?php echo $value['type_id'] ?>"><?php echo $value['type_name'] ?></option>
                  <?php endforeach; ?>
                </select>
              </div>
              <div class="form-group">
                <label for="inputPrice">Giá Sản Phẩm</label>
                <input type="number" name="price" id="inputPrice" class="form-control" placeholder="Nhập giá sản phẩm" require>
              </div>
              <div class="form-group">
                <label for="inputImg">Ảnh Sản Phẩm</label>
                <input type="file" name="image" id="inputImage" class="form-control">
              </div>
              <div class="form-group">
                <label for="inputDescription">Mô Tả</label>
                <textarea id="summernote" name="description" class="form-control" rows="6"></textarea>
              </div>
              <div class="form-group">
                <label >Nổi Bật</label>
                <div class="radio">
                <label class="px-5">
                    <input type="radio" name="feature" value="1" checked="checked"> Có
                </label>
                <label>
                    <input type="radio" name="feature" value="0" > Không
                </label>
              </div>
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
          <input type="submit" value="Create new Porject" class="btn btn-success float-right" name="submit" >
        </div>
      </div>
    </form>
    </section>
    <!-- /.content -->
  </div>