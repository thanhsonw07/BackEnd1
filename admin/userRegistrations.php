<?php 
$page = 'index';
include "header.php" ;
?>
  <!-- Content Wrapper. Contains page content -->
  <link rel="stylesheet" href="dist/css/phantrang.css">
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>User Registrations</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item active">User Registrations</li>
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
          <h3 class="card-title">Users</h3>

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
                      <th style="width: 1%">User_ID</th>
                      <th style="width: 15%">User_Name</th>
                      <th style="width: 20%">Name</th>
                      <th style="width: 20%">Address</th>
                      <th style="width: 20%">Email</th>
                      <th style="width: 8%">Phone</th>
                  </tr>
              </thead>
              <tbody>
                  <?php 

                    $getAllusers = $user -> getAllusers();
                    // hiển thị 10 sản phẩm trên 1 trang
                    $perPage = 10; 				
                    // Lấy số trang trên thanh địa chỉ
                    $page = isset($_GET['page'])?$_GET['page']:1; 			
                    // Tính tổng số dòng, ví dụ kết quả là 18
                    $total = count($getAllusers); 					
                    // lấy đường dẫn đến file hiện hành
                    $url = $_SERVER['PHP_SELF'];	
                    
                    $get10User = $user -> get10User($page,$perPage);
                    foreach($get10User as $value):
                    
                  ?>
                  <tr>
                      <td><?php echo $value['user_id'] ?></td>
                      <td>
                          <a><?php echo $value['username'] ?></a>
                      </td>
                      <td class="project_progress"><?php echo $value['fullname'] ?></td>
                      <td class="project_progress"><?php echo $value['address'] ?></td>
                      <td class="project_progress"><?php echo $value['email'] ?></td>
                      <td class="project_progress"><?php echo $value['phone'] ?></td>
                      <td class="project-actions text-right">
                          <a class="btn btn-danger btn-sm" href="deluser.php?id=<?php echo $value['user_id'] ?>">
                              <i class="fas fa-trash">
                              </i>
                              Delete
                          </a>
                      </td>
                  </tr>
                  <?php endforeach; ?>
              </tbody>             
          </table>
                  <!-- store bottom filter -->
                  <div class="container">
                  <div class="flex">
							    <ul class="store-pagination">
                  <?php echo $product->paginate($url, $total, $perPage, $page); ?>
								  <li><a href="#"><i class="fa fa-angle-right"></i></a></li>
                  <div class="bar"></div>
							    </ul>
						      </div>
                  </div>
                  
						      <!-- /store bottom filter -->
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>