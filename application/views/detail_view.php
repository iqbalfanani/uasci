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
            <li class="active">Welcome, <?php echo $this->session->userdata('logged_in')['username']; ?></a></li>
            <li><a href="<?php echo base_url() ?>index.php/Login/logout">Logout</a></li>
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
		    <h3 class="panel-title">Detail Mata pelajaran</h3>
		  </div>
		  <div class="panel-body">
		  <a href="<?php echo base_url() ?>index.php/Detail/insert" class="btn btn-primary my-3">Tambah</a> <br><br>
        <!-- line modal -->
        <div class="modal fade" id="squarespaceModal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
          <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
              <h3 class="modal-title" id="lineModalLabel">Tambah Detail Baru</h3>
            </div>
            <div class="modal-body">
              
                    <!-- content goes here -->
              <form>
                        <div class="form-group">
                          <label for="nama">Nama Kelas</label>                      
                          <input id="nama" name="nama" type="text" placeholder="Masukkan nama" class="form-control input-md" required="">
                        </div>

                        <div class="form-group">
                          <label for="kapasitas">Nama Murid</label>                      
                          <input id="kapasitas" name="kapasitas" type="text" placeholder="Masukkan kapasitas" class="form-control input-md" required="">
                        </div>
                      </div>
                      <div class="modal-footer">
                        <div class="btn-group btn-group-justified" role="group" aria-label="group button">
                          <div class="btn-group" role="group">
                            <button type="button" class="btn btn-default" data-dismiss="modal"  role="button">Close</button>
                          </div>
                          <div class="btn-group btn-delete hidden" role="group">
                            <button type="button" id="delImage" class="btn btn-default btn-hover-red" data-dismiss="modal"  role="button">Delete</button>
                          </div>
                          <div class="btn-group" role="group">
                            <button href="<?php echo base_url() ?>index.php/Detail/insert" type="button" id="saveImage" class="btn btn-default btn-hover-green" data-action="save" role="button">Save</button>
                          </div>
                        </div>
                      </div>
                    </div>
                    </div>
                  </div>
		    <table class="table table-striped table-hover" id="table_id">
		      <thead>
            <th>ID</th>
            <th>NAMA KELAS</th>
            <th>NAMA MURID</th>
            <th>MAPEL</th>
            <th>AKSI</th>
          </thead>
          <tbody>
            <?php foreach ($detail_list as $key => $value):?>
            <tr>
              <td><?php echo $value['id'] ?></td>
              <td><?php echo $value['nama_kelas'] ?></td>
              <td><?php echo $value['nama_murid'] ?></td>
              <td><?php echo $value['nama_mapel']; ?></td>
              <td>
		          	<a href="" class="btn btn-sm btn-success"><span class="glyphicon glyphicon-pencil"></span>
					      <a href="" class="btn btn-sm btn-danger"><span class="glyphicon glyphicon-trash"></span>
		          </td>
		        </tr>
		      <?php endforeach ?>
		      </tbody>
		    </table>

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