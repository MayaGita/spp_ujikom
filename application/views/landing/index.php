 <style>
     .btn.btn-cyan {
             color:rgba(255,255,255,.85);
             background-color:#1978a5;
                
           }
 </style>
 <!-- Header -->

 <header class="masthead d-flex " style="background-image:url(<?php echo base_url('assetsLanding/img/bg3.jpg') ?>)">>
    <div class="container text-center my-5">
      <h1 class="mb-1 text-light">Selamat datang</h1>
      <h3 class="mb-5 text-light">
        <em>Di aplikasi pembayaran spp Smk bpi bandung</em>
      </h3>
      <a class="btn btn-cyan btn-xl js-scroll-trigger" href="#about">Selanjutnya</a>
    </div>
    <div class="overlay"></div>
  </header>

  <!-- About -->
  <section class="masthead2 bg-light" id="about">
  <div class="container text-center my-auto">
      <h2 class="mb-5">
        Masuk sebagai
      </h2>

      <div class="btn-action">
         <div class="row"> 
           
       <div class="col-md-6  mt-5">      
      <a class="btn btn-cyan text-light btn-xl js-scroll-trigger col-6 px-5" href="<?php echo site_url('authAdmin/index')?>">
      Admin</a>  
       </div>
       <div class="col-md-6   mt-5">      
      <a class="btn btn-cyan text-light  btn-xl js-scroll-trigger col-6 px-5" href="<?php echo site_url('authSiswa/index')?>">Siswa</a>  
       </div>
            
         </div>
      </div>
    </div>
    <div class="overlay"></div>
  </section>
 <!-- Scroll to Top Button-->
 <a class="scroll-to-top rounded js-scroll-trigger" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Bootstrap core JavaScript -->
  <script src="<?= base_url('assetsLanding/')?>vendor/jquery/jquery.min.js"></script>
  <script src="<?= base_url('assetsLanding/')?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Plugin JavaScript -->
  <script src="<?= base_url('assetLsanding/')?>vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for this template -->
  <script src="<?= base_url('assetsLanding/')?>js/stylish-portfolio.min.js"></script>


</body>

</html>