<?php
	if($this->session->userdata('user')!=TRUE){
		echo "<script> alert('Silahkan login terlebih dahulu')</script>";
		echo "<script> window.location='../../login'</script>";
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Update Data</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="<?php echo base_url();?>assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/css/styles.css" rel="stylesheet">
    <style>
    	.form_err{font-size: 13px; font-family: Arial; color: red; font-style: Italic;}
    </style>
</head>
<body>
	<div class="header">
	     <div class="container">
	        <div class="row">
	           <div class="col-md-5">
	              <!-- Logo -->
	              <div class="logo">
	                 <h1><a href="">Dashboard</a></h1>
	              </div>
	           </div>
			   <div class="col-md-5">
	           </div>
	           <div class="col-md-2">
	             <div class="navbar navbar-inverse" role="banner">
	               <nav class="collapse navbar-collapse bs-navbar-collapse navbar-right" role="navigation">
	                    <ul class="nav navbar-nav">
	                      <li class="dropdown">
	                        <a class="dropdown-toggle" data-toggle="dropdown">Admin<b class="caret"></b></a>
	                        <ul class="dropdown-menu animated fadeInUp">
	                          <li><a href="<?php echo base_url();?>login/logout">Logout</a></li>
	                        </ul>
	                      </li>
	                    </ul>
	                  </nav>
	              </div>
	           </div>

	        </div>
	     </div>
	</div>
	<div class="page-content">
    	<div class="row">
		  <div class="col-md-2">
		  	<div class="sidebar content-box" style="display: block;">
                <ul class="nav">
                    <!-- Main menu -->
                    <li><?php echo anchor('home/','Dashboard');?></li>
                    <li><?php echo anchor('home/add/','Tambah Data');?></li>
                </ul>
             </div>
		  </div>
	<div class="col-md-10">
		  	<div class="row">
		  		<div class="col-md-12">
		  			<div class="content-box-header panel-heading">
	  					<div class="panel-title ">Mahasiswa</div>
		  			</div>
	<div class="content-box-large box-with-header">
	<?php foreach($mhs as $p){ ?>
	<form action="<?php echo base_url().'home/update_act/'.$p->nim;?>" method="post">
		<table>
			<tr>
				<td>NIM</td>
				<td><input class="form-control" style="width: 200px" readonly type="text" name="nim" value="<?php echo $p->nim ?>"></td>
			</tr>
			<tr>
				<td>Nama</td>
				<td><input class="form-control" style="width: 200px" type="text" name="nama" value="<?php echo $p->nama ?>" oninvalid="this.setCustomValidity('Masukkan Nama')" oninput="setCustomValidity('')"><?php echo "<script>alert('form_error('nama');');</script>"?></td><td><div class="form_err"><?php echo $this->session->flashdata('errors') ?></div></td>
			</tr>
			<tr>
				<td>Jenis Kelamin</td>
				<td><select class="form-control" style="width: 200px" name="jenis_kelamin" required oninvalid="this.setCustomValidity('Pilih Jenis Kelamin')" oninput="setCustomValidity('')">
					<option value="<?php echo $p->jenis_kelamin ?>"><?php echo $p->jenis_kelamin ?></option>
					<?php 
					$r = $p->jenis_kelamin;
					if($r == "Laki-Laki"): ?>
					<option value="Perempuan">Perempuan</option>
					<?php else: ?> 
					<option value="Laki-Laki">Laki-Laki</option>
					<?php endif; ?>
				</select>
			</tr>
			<tr>
				<td>Alamat</td>
				<td><input class="form-control" style="width: 200px" type="text" name="alamat" value="<?php echo $p->alamat ?>" required oninvalid="this.setCustomValidity('Masukkan Alamat')" oninput="setCustomValidity('')">
			</tr>
		</table>
		<br>
		<input type="submit" value="Update Data" class="btn btn-primary">
	</form>
	<?php } ?>
	<br /><br /><br /><br />
<br /><br /><br><br>
					</div>
		  		</div>
		  	</div>
		  </div>
		</div>
    </div>
<br><br><br><br><br><br><br>
    

    <script src="https://code.jquery.com/jquery.js"></script>
    <script src="<?php echo base_url();?>assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/custom.js"></script>

</body>
</html>