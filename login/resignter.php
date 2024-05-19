<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script type="text/javascript" src="https://itexpress.vn/js/noel.js"></script>
<!------ Include the above in your HEAD tag ---------->
<!DOCTYPE html>
<html>
<head>
	<title>Resignter Page</title>
   <!--Made with love by Mutiullah Samim -->
   
	<!--Bootsrap 4 CDN-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
    <!--Fontawesome CDN-->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

	<!--Custom styles-->
	<link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
<div class="container">
	<div class="d-flex justify-content-center h-100">
		<div class="card">
			<div class="card-header">
				<h3>Resignter</h3>
			</div>
			<div class="card-body">
				<form action="dangky.php" method="POST" novalidate>
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-user"></i></span>
						</div>
						<input name="username" type="text" class="form-control" placeholder="Username" >
						
					</div>
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-key"></i></span>
						</div>
						<input name="password" type="password" class="form-control" placeholder="Password" required pattern="\w{6,}">
						<div class="valid-feedback">Looks good!</div>
                		<div class="invalid-feedback">Mật khẩu phải có ít nhất 6 ký tự</div>
					</div>
                    <div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-monument"></i></span>
						</div>
						<input name="fullname" type="text" class="form-control" placeholder="Your Name" required pattern="{3,}(\s?\w+)+">
						<div class="valid-feedback">Looks good!</div>
                		<div class="invalid-feedback">Vui lòng nhập họ tên đầy đủ</div>
					</div>
                    <div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-map-marker-alt"></i></span>
						</div>
						<input name="address" type="text" class="form-control" placeholder="Your Address">
					</div>
                    <div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-envelope"></i></span>
						</div>
						<input name="mail" type="text" class="form-control" placeholder="E-mail" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$">
						<div class="valid-feedback">Looks good!</div>
                		<div class="invalid-feedback">Địa chỉ email không hợp lệ</div>
					</div>
                    <div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-phone"></i></span>
						</div>
						<input name="phone" type="text" class="form-control" placeholder="Phone Number" required pattern="[0-9]{10,11}">
						<div class="valid-feedback">Looks good!</div>
						<div class="invalid-feedback">Số điện thoại phải từ 10-11 số</div>
					</div>
					<div class="form-group">
						<input name="submit" type="submit" value="Resignter" class="btn float-right login_btn">
					</div>
				</form>
			</div>
			<div class="card-footer">
				<div class="d-flex justify-content-center links">
					You have an account?<a href="index.php">Log In</a>
				</div>
			</div>
		</div>
	</div>
</div>
<script src="kiemtra.js"></script>
</body>
</html>