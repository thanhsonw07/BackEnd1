<?php 
$page = 'manufactureadd';
include "header.php" ;
?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Thêm Hãng</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Manufactures Add</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
    <form action="addmanufucture.php" method="POST" roles="form" enctype="multipart/form-data">      
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
                <label for="inputName">Tên Hãng</label>
                <input type="text" name="manuname" id="inputName" class="form-control" placeholder="Nhập tên hãng">
              </div>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
      </div>
      <div class="row">
        <div class="col-12">
          <input type="submit" value="Create new Manufacture" class="btn btn-success float-right" name="submit" >
        </div>
      </div>
      </form>
    </section>
    <!-- /.content -->
  </div>