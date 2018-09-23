<!DOCTYPE html>
<html lang="en">
    <head> 
    	<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
		
		<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
		<script src="assets/sweetalert.js"></script>
		<!-- Include the above in your HEAD tag -->
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
		<!-- Website CSS style -->
		<link rel="stylesheet" type="text/css" href="assets/main.css">
		<link rel="stylesheet" type="text/css" href="assets/sweetalert.css">
		<link rel="stylesheet" type="text/css" href="assets/styleloader.css">

		<!-- Website Font style -->
	    <link rel="stylesheet" href="assets/fa/css/font-awesome.min.css">
		
		<!-- Google Fonts -->
		<link href='https://fonts.googleapis.com/css?family=Passion+One' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Oxygen' rel='stylesheet' type='text/css'>

		<title>Admin</title>
	</head>
	<body>
		<div class="loading">Loading&#8230;</div>
		<div class="container" id="registrasi">
			<div class="row main">
				<div class="panel-heading">
	               <div class="panel-title text-center">
	               		<h1 class="title">XYZ Register</h1>
	               		<hr />
	               	</div>
	            </div> 
				<div class="main-login main-center">
					<form class="form-horizontal" method="POST" action="proses/register.php" id="formpendaftaran">
						
						<div class="form-group">
							<label for="name" class="cols-sm-2 control-label">Your Name</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="name" id="name"  placeholder="Enter your Name" />
								</div>
							</div>
						</div>

						<div class="form-group">
							<label for="email" class="cols-sm-2 control-label">Your Address</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-address-card fa" aria-hidden="true"></i></span>
									<textarea class="form-control" name="address" id="address" placeholder="Fill your address"></textarea>
								</div>
							</div>
						</div>

						<div class="form-group">
							<label for="username" class="cols-sm-2 control-label">Your Phone Number</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-phone-square" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="phone" id="phone"  placeholder="Enter your Phone Number" />
								</div>
							</div>
						</div>

						<div class="form-group ">
							<button type="submit" class="btn btn-primary btn-lg btn-block login-button" id="register">Register</button>
						</div>
					</form>
				</div>
			</div>
		</div>

		<!-- <script type="text/javascript" src="assets/js/bootstrap.js"></script> -->
		<script type="text/javascript">
			$(document).ready(function(){
				$(".loading").hide();
				// alert("hello world")
				$("#registrasi").hide();
				$("#registrasi").fadeIn(1500);
				$("#formpendaftaran").on('submit',function(e){
					e.preventDefault();
					if (validasiform()==true) {
						$.ajax({
							type:$(this).attr('method'),
							url:$(this).attr('action'),
							data:$(this).serialize(),
							beforeSend:function(){
								$(".loading").fadeIn(1500);
							},
							success:function(response){
								if (response=="success") {
								 	swal("Selamat registrasi berhasil");
								 	$(".loading").fadeOut(1500)
								 	Kosong();
								}
							}
						})
					}
				})
			})
			// Function validasi form
			function validasiform(){
				if ($("#name").val().trim()=="") {
			  		swal("Silahkan isi nama anda");
			  		$("#name").focus();
			  		return false;
			  	}else if ($("#address").val().trim()=="") {
			  		swal("Silahkan isi alamat anda");
			  		$("#address").focus();
			  		return false;
			  	}else if ($("#phone").val().trim()=="") {
			  		swal("Silahkan isi nomor handphone anda");
			  		$("#phone").focus();
			  		return false;
			  	}
			  	return true;
			}
			function Kosong(){
				$('[type=text]').val('');
				$('#address').val('');

				$('[name=name]').focus();
			}
		</script>
	</body>
</html>