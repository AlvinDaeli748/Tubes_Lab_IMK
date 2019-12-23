<?php
	if($this->session->userdata('user')!=TRUE){
		echo "<script> alert('Silahkan login terlebih dahulu')</script>";
		echo "<script> window.location='../login'</script>";
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin Dashboard</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="<?php echo base_url();?>assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/css/styles.css" rel="stylesheet">
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
                    <li class="current"><?php echo anchor('home','Dashboard');?></li>
                    <li><?php echo anchor('home/add','Tambah Data');?></li>
                </ul>
             </div>
		  </div>
		  <div class="col-md-10">
		  	<div class="row">
		  		<div class="col-md-12">
		  			<div class="content-box-header panel-heading">
	  					<div class="panel-title">Mahasiswa</div>
		  			</div>
		  			<div class="content-box-large box-with-header">
		<table style="text-align: center;">
		<tr>
			<th>No</th>
			<th style="width:85px;height:25px;text-align: center;">NIM</th>
			<th style="width:auto;height:25px;text-align: center;">Nama</th>
			<th style="width:85px;height:25px;text-align: center;">Jenis Kelamin</th>
			<th style="width:125px;height:25px;text-align: center;">Alamat</th>
			<th colspan="2" style="width:auto;height:25px;text-align: center;">Aksi</th>
		</tr>
		<?php
		 $no = 1;
		 foreach($mhs as $p){
		?>
		<tr>
			<td><?php echo $no++ ?></td>
			<td><?php echo $p->nim ?></td>
			<td><?php echo $p->nama ?></td>
			<td><?php echo $p->jenis_kelamin ?></td>
			<td><?php echo $p->alamat ?></td>
			<td><?php echo anchor('home/update/'.$p->nim,'Update','class="btn btn-primary"');?>&emsp;
        		<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#myModal<?php echo $p->nim; ?>">Delete</button>
			</td>

<div id="myModal<?php echo $p->nim; ?>" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Delete Data <?php echo $p->nim; ?></h4>
      </div>
      <div class="modal-body">
        <p>Apakah anda yakin ingin menghapus data dengan NIM <?php echo $p->nim; ?> ?</p>
      </div>
      <div class="modal-footer">
      	<a href="<?php echo base_url();?>home/delete/<?php echo $p->nim;?>"><button type="button" class="btn btn-danger">Yes</button></a>
        <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
      </div>
    </div>

  </div>
</div>
		</tr>
		<?php } ?>
	</table>
	<br /><br /><br /><br /><br /><br />
					</div>
		  		</div>
		  	</div>
		  </div>
		</div>
    </div>
<br><br><br>

 
    <script src="https://code.jquery.com/jquery.js"></script>
    <script src="<?php echo base_url();?>assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/custom.js"></script>
	
</body>
</html>