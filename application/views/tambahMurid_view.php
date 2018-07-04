<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title></title>
  <link rel="stylesheet" href="">
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/css-homeAdmin.css">
   <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap4.min.css">
<!------ Include the above in your HEAD tag ---------->
</head>
<body>
<nav class="navbar navbar-default">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">GoLas  | Admin Page</a>
        </div>
       

          <ul class="nav navbar-nav navbar-right">
            <li class="active"><a href="index">Welcome, Madhav</a></li>
            <li><a href="login.html">Logout</a></li>
          
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
<div class="container-fluid column-starter">
  <!------------ Panel Class ------------->
    <div class="margin-t-20"></div>
  <div class="row">
      <div class="col-md-3 sidebar">
          <div class="panel">
             <div class="panel-body ">
                <div class="sidebar-nav">
                 <div class="sidebar panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                          <a data-toggle="collapse" href="#sidemenu1" class="" aria-expanded="true">Panel <i class="fa fa-angle-down pull-right"></i></a>
                        </h4>
                      </div>
                     <div id="sidemenu1" class="panel-collapse collapse in" aria-expanded="true" style="">
                         <div class="list-group">
                              <a href="<?php echo base_url() ?>index.php/Home/admin" class="list-group-item"><span class="glyphicon glyphicon-dashboard"></span>  Dashboard</a>
                              <a href="<?php echo base_url() ?>index.php/Murid/index" class="list-group-item"><span class="glyphicon glyphicon-stats"></span>  Murid</a>
                              <a href="<?php echo base_url() ?>index.php/Guru/index" class="list-group-item"><span class="glyphicon glyphicon-user"></span>  Guru</a>
                              <a href="<?php echo base_url() ?>index.php/Mapel/index" class="list-group-item"><span class="glyphicon glyphicon-pencil"></span>  Mata Pelajaran</a>
                              <a href="<?php echo base_url() ?>index.php/Kelas/index" class="list-group-item"><span class="glyphicon glyphicon-list-alt"></span>  Kelas</a>
                              <a href="<?php echo base_url() ?>index.php/Ruang/index" class="list-group-item"><span class="glyphicon glyphicon-home"></span>  Ruang</a>
                              <a href="<?php echo base_url() ?>index.php/Detail/index" class="list-group-item"><span class="glyphicon glyphicon-zoom-in"></span>  Detail</a>
                              <a href="<?php echo base_url() ?>index.php/User/index" class="list-group-item"><span class="glyphicon glyphicon-cog"></span>  User</a>
                            </div> 
       
                    </div>
                 </div>   
                </div>
               
                
              </div>

          </div>
      </div>
      <div class="col-md-9">
		<div class="panel panel-default">
		  <div class="panel-heading"style="background-color:  #1E8BC3;">
		    <h3 class="panel-title">Tambah Murid Baru</h3>
		  </div>
		  <div class="panel-body">
		  	<?php echo form_open_multipart('Murid/insert'); ?>
			<div class="form-group">
				<label class="col-md-4 control-label" for="nama">Nama Lengkap</label>  
				<div class="col-md-5">
			  <input id="nama" name="nama_murid" type="text" placeholder="Nama Lengkap Anda" class="form-control input-md" required="">
			  </div>
			</div>

			<!-- Text input-->
			<div class="form-group">
			  <label class="col-md-4 control-label" for="alamat">Alamat</label>  
			  <div class="col-md-5">
			  <input id="alamat" name="alamat" type="text" placeholder="Alamat Anda" class="form-control input-md" required="">
			    
			  </div>
			</div>

			<!-- Text input-->
			<div class="form-group">
			  <label class="col-md-4 control-label" for="tanggal">Tanggal Lahir</label>  
			  <div class="col-md-5">
			  <input id="tanggal" name="tanggal" type="date" placeholder="tanggal" class="form-control input-md" required="">
			    
			  </div>
			</div>

			<!-- Text input-->
			<div class="form-group">
			  <label class="col-md-4 control-label" for="telp">No Handphone</label>  
			  <div class="col-md-5">
			  <input id="telp" name="telp" type="text" placeholder="No Handphone Anda" class="form-control input-md" required="">
			    
			  </div>
			</div>

			<!-- Multiple Radios (inline) -->
			<div class="form-group">
			  <label class="col-md-4 control-label" for="gender">Jenis Kelamin</label>
			  <div class="col-md-5"> 
			    <label class="radio-inline">
			      <input type="radio" name="jenisKelamin" id="" value="Laki-laki" checked="checked">
			      Laki-laki
			    </label> 
			    <label class="radio-inline">
			      <input type="radio" name="jenisKelamin" id="" value="Perempuan">
			      Perempuan
			    </label>
			  </div>
			  <div class="col-md-12"></div>
			</div>

			<!-- Option -->
			
			<div class="form-group">
			  <label class="col-md-4 control-label">Jenjang</label>
			  <div class="col-md-5"> 
			  <select class="form-control" id="jenjang" name="jenjang">
			    <option>------</option>
			    <option>SD</option>
			    <option>SMP</option>
			    <option>SMA</option>
			  </select>
			  </div>
			</div>

			<!-- Text input-->
			<div class="form-group">
			  <label class="col-md-4 control-label" for="username">Username</label>  
			  <div class="col-md-5">
			  <input id="username" name="username" type="text" placeholder="Your username" class="form-control input-md" required="">
			    
			  </div>
			</div>

			<!-- Password input-->
			<div class="form-group">
			  <label class="col-md-4 control-label" for="password">Password </label>
			  <div class="col-md-5">
			    <input id="password" name="password" type="password" placeholder="Password" class="form-control input-md" required="">
			    
			  </div>
			</div>

			<div class="form-group">
			  <label class="col-md-4 control-label" for="password">Foto </label>
			  <div class="col-md-5">
			  <input type="file" class="form-control-file" id="exampleFormControlFile1" name="foto">
			  
			    
			  </div>
			</div>
			<!-- Button -->
			<div class="form-group">
			  <label class="col-md-4 control-label" for="confirmation"></label>
			  <div class="col-md-5">
			    <button id="confirmation" class="btn btn-primary">Submit</button>
			  </div>
			</div>
			<?php echo form_close(); ?>
		  </div>
		</div>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap4.min.js"></script>
<script type="text/javascript">
  $(document).ready( function () {
      $('#table_id').DataTable();
  } );
</script>
</body>
</html>