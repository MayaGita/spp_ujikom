<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1,maximum-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">
	<title><?php if (!empty($page_title)) echo $page_title;?></title>

	 
	   <link href="<?= base_url('asset/')?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">


   <!--select plugin-->
   <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.7/css/select2.min.css" rel="stylesheet" />
 <script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.7/js/select2.min.js"></script>
   <link href="<?= base_url('asset/')?>css/style.css" rel="stylesheet">   

    <!-- datatables -->
    <link href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap4.min.css" rel="stylesheet">
    <style type="text/css">
     
        
       
    </style>
</head>


<body id="page-top">
      

    <div class="sidebar">
         <div class="sidebar-brand">
           <h3><span class="fab fa-hornbill"></span><span><?php if (!empty($pagename)) echo $pagename;?></span></h3>
         </div>

         <div class="sidebar-menu">
           
           <ul>
             <li>
               <a href="<?= site_url('petugas/index')?>" class="active"><span class="fas fa-columns"></span>
                <span>Dashboard</span>
              </a>
             </li>
                <hr>
            
              <li>
               <a href="<?= site_url('petugas/entry')?>"><span class="fas fa-money-check-alt"></span>
                <span>Entry pembayaran</span>
              </a>
             </li>
              <li>
               <a href="<?= site_url('petugas/History')?>"><span class="fas fa-history"></span>
                <span>History pembayaran</span>
              </a>
             </li>
            
           </ul>
         </div>
    </div>

    <div class="main-content">
         <!-- Topbar -->
    <nav class="navbar navbar-expand navbar-light  topbar mb-4 static-top shadow ">

   

      <!-- Topbar Navbar -->
      <ul class="navbar-nav ml-auto">

       
        
        <div class="topbar-divider d-none d-sm-block"></div>

        <!-- Nav Item - User Information -->
        <li class="nav-item dropdown no-arrow">
          <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?= $petugas['username'];?></span>
            <span><i class="far fa-user"></i></span>
          <!-- Dropdown - User Information -->
          <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
            <a class="dropdown-item" href="#">
              <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
              Profile
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="<?=base_url('authAdmin/logout')?>" data-toggle="modal" data-target="#logoutModal">
              <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
              Logout
            </a>
          </div>
        </li>


      </ul>

    </nav>
