<?php $page = 'index'; include "header.php" ?>
  <!-- Content Wrapper. Contains page content -->
  <link rel="stylesheet" href="dist/css/phantrang.css">
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Top Wish</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item active">Top Wish</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Top Wish</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
              <i class="fas fa-times"></i>
            </button>
          </div>
        </div>
        <div class="card-body p-0">
          <table class="table table-striped projects">
              <thead>
                  <tr>
                      <th style="width: 10%">ID</th>
                      <th style="width: 20%">Name</th>
                      <th style="width: 15%">Image</th>
                      <th style="width: 25%">Price</th>
                      <th style="width: 20%">Likes</th>
                  </tr>
              </thead>
              <tbody>
                  <?php 
                    $topwish = $wish -> getTopWish();
                    foreach($topwish as $value):
                  ?>
                  <tr>
                      <td><?php echo $value['sp_id'] ?></td>
                        <?php 
                            $sanpham = $product ->getProductByID($value['sp_id']); 
                            foreach ($sanpham as $value1):
                        ?>
                        <td><?php echo $value1['name'] ?></td>
                        <td><img src="../img/<?php echo $value1['image'] ?>" style="width: 70px" alt=""></td>
                        <td class="project_progress"><?php echo number_format($value1['price']) ?>VND</td>
                        <td class="project_progress"><?php echo $value['COUNT(*)']; ?> Likes</td>
                      <?php endforeach; ?>
                  </tr>
                  <?php endforeach; ?>
              </tbody>             
          </table>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
<?php include "footer.html" ?>

