<style>
      .btn-outline-info {
        border:3px solid #17a2b8;
        box-shadow: 4px 4px  #000;
      }
     .masthead2{
      background-image:url('<?= base_url('assetsLanding/img/bg1.png')?>')

     }   
     .masthead2 {
       margin-right:2rem
     }   
     @media (max-width: 1200px) {
         .masthead2 {
        background-image:url('<?=base_url('assetLanding/img/bghp.jpg')?>);
        height: 100vh;
        
         }

     
 </style>

  <header class="masthead2 ">
  <div class="container ">
  <h2 class="mb-1 text-white " style="font-family: 'Balsamiq Sans', cursive;">Selamat datang</h2>
      <h3 class="mb-5 pb-5 text-white" style="font-family: 'Balsamiq Sans', cursive;">
        <em>Di aplikasi pembayaran spp Smk bpi bandung</em>
      </h3>
    
      <h4 class="mb-5 text-white " style="font-family: 'Balsamiq Sans', cursive;">
        Masuk sebagai :
      </h4>

      <div class="btn-action">
         <div class="row"> 
           
         <div class="col-md-3  mt-5">      
      <a class="btn btn btn-outline-info text-light py-3  js-scroll-trigger col-6 " href="<?php echo site_url('authAdmin/index')?>">Admin</a>  
       </div>
       <div class="col-md-3  mt-5">      
      <a class="btn btn btn-outline-info  text-light py-3  js-scroll-trigger col-6 " href="<?php echo site_url('authSiswa/index')?>">Siswa</a>  
       </div>
            
         </div>
      </div>
    </div>
   
  </header>


  <!-- Bootstrap core JavaScript -->
  <script src="<?= base_url('assetsLanding/')?>vendor/jquery/jquery.min.js"></script>
  <script src="<?= base_url('assetsLanding/')?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Plugin JavaScript -->
  <script src="<?= base_url('assetLsanding/')?>vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for this template -->
  <script src="<?= base_url('assetsLanding/')?>js/stylish-portfolio.min.js"></script>


</body>

</html>