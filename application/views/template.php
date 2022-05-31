
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Victory International Futures</title>
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<link rel="stylesheet" href="<?=base_url()?>assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?=base_url()?>assets/bower_components/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?=base_url()?>assets/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
	<link rel="stylesheet" href="<?=base_url()?>assets/dist/css/AdminLTE.min.css">
	<link rel="stylesheet" href="<?=base_url()?>assets/dist/css/skins/_all-skins.min.css">
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">

	<div class="wrapper">
		<header class="main-header">
			<a href="<?=site_url('admin')?>" class="logo">
				<span class="logo-mini">V<b>IF</b></span>
                <span class="logo-lg">Victory<b> International</b></span>
                
			</a>
			<nav class="navbar navbar-static-top">
				<a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</a>

				<div class="navbar-custom-menu">
					<div class="navbar-custom-menu">
                        <ul class="nav navbar-nav">
                            
                        
                            <!-- User Account -->
                                <li class="dropdown user user-menu">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                        <img src="<?=base_url()?>assets/dist/img/user2-160x160.jpg" class="user-image">
                                        <span class="hidden-xs">Admin</span>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li class="user-header">
                                            <img src="<?=base_url()?>assets/dist/img/user2-160x160.jpg" class="img-circle">
                                            <p>Mohamad Abid Ardiansyah
                                                <small>Semarang, Indonesia</small>
                                            </p>
                                        </li>
                                        <li class="user-footer">
                                            <div class="pull-left">
                                                <a href="#" class="btn btn-default btn-flat">Profile</a>
                                            </div>
                                            <div class="pull-right">
                                                <a href="<?=site_url('auth/logout')?>" class="btn btn-flat bg-red">Sign out</a>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                        </ul>
					</div>
				</div>
			</nav>
		</header>

		<!-- Left side column -->
		<aside class="main-sidebar">
			<section class="sidebar">
				<div class="user-panel">
					<div class="pull-left image">
						<img src="<?=base_url()?>assets/dist/img/user2-160x160.jpg" class="img-circle">
					</div>
					<div class="pull-left info">
						<p>ss</p>
						<a href="#"><i class="fa fa-circle text-success"></i> Online</a>
					</div>
				</div>
				<form action="#" method="get" class="sidebar-form">
					<div class="input-group">
						<input type="text" name="q" class="form-control" placeholder="Search...">
						<span class="input-group-btn">
							<button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i></button>
						</span>
					</div>
				</form>
				<!-- sidebar menu -->
				<ul class="sidebar-menu" data-widget="tree">
					<li class="header">MAIN NAVIGATION</li>
					<li>
						<a href="#"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a>
					</li>
					<li>
						<a href="#"><i class="fa fa-ambulance"></i> <span>Kunjuangan Pasien</span></a>
					</li>
					<li class="treeview">
						<a href="#">
							<i class="fa fa-database"></i> <span>Master Data</span>
							<span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
						</a>
						<ul class="treeview-menu">
							<li><a href="#"><i class="fa fa-circle-o"></i> Data Anggota</a></li>
							<li><a href="#"><i class="fa fa-circle-o"></i> Data Dokter</a></li>
							<li><a href="#"><i class="fa fa-circle-o"></i> Data Poliklinik</a></li>
							<li><a href="#"><i class="fa fa-circle-o"></i> Data Obat</a></li>
						</ul>
					</li>
					<li class="treeview">
						<a href="#">
							<i class="fa fa-stethoscope"></i> <span>Rekaman Medis</span>
							<span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
						</a>
						<ul class="treeview-menu">
							<li><a href="#"><i class="fa fa-circle-o"></i> Antrian</a></li>
							<li><a href="#"><i class="fa fa-circle-o"></i> Riwayat Pasien</a></li>
							
						</ul>
					</li>
					<li class="treeview">
						<a href="#">
							<i class="fa fa-pie-chart"></i> <span>Reports</span>
							<span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
						</a>
						<ul class="treeview-menu">
							<li><a href="#"><i class="fa fa-circle-o"></i> Sales</a></li>
							<li><a href="#"><i class="fa fa-circle-o"></i> Stocks</a></li>
						</ul>
					</li>
					
					<li class="header">SETTINGS</li>
					<li><a href="<?=site_url('user')?>"><i class="fa fa-user"></i> <span>Users</span></a></li>
			
				</ul>
			</section>
		</aside>

		<!-- Content Wrapper -->
		<div class="content-wrapper">
            <?php echo $contents ?>
		</div>

		<footer class="main-footer">
			<div class="pull-right hidden-xs">
				<b>Version</b> 1.0
			</div>
			<strong>Copyright &copy; 2019 <a href="https://yukcoding.id">Abid Ardiansyah</a>.</strong> All rights reserved.
		</footer>

	</div>

	<script src="<?=base_url()?>assets/bower_components/jquery/dist/jquery.min.js"></script>
	<script src="<?=base_url()?>assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
	<script src="<?=base_url()?>assets/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
	<script src="<?=base_url()?>assets/dist/js/adminlte.min.js"></script>


	<script src="<?=base_url()?>assets/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
	<script src="<?=base_url()?>assets/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>

	<script>
		$(document).ready(function(){
			$('#table1').DataTable()
		})
	</script>

</body>
</html>