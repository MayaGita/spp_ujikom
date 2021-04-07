<style>
  .history{
    height:500px;
    overflow-y:scroll;
  }

  </style>

 <?php if($this->session->flashdata('message')) : ?>
              <div class="alert alert-success  alert-dismissible fade show mb-4" role="alert">
              <hr>
                  <h4><i class="far fa-check-circle fa-lg"></i> <?php echo $this->session->flashdata('message'); ?> </h4>  
                  <hr>    
             <button type="button" class="close" data-dismiss="alert" aria-label="Close">
             <span aria-hidden="true">&times;</span>
             </button>
             </div>  
             <?php endif; ?>    

                       

    <div class="card bg-white  shadow mb-3" >
            <div class="card-header bg-white  py-3" > 
           <h2 class="m-0 ml-3 font-weight-bold text-dark" > <i class="fas fa-history"></i> History</h2>
           <h6 class="ml-5 pl-5 font-weight-bold text-gray-500"> pembayaran</h6 >
              
            </div>
                        
              
               <div class="container history">
               
                <div class="card-body">
               
                <?php
                  foreach ($recent as $r) {
                 
                   
                  ?>   
            
                <div class="card mb-3">
                <div class="card-header text-light">
                    dibayar pada <strong  class="badge badge-success" > <?php echo $r->tgl_bayar ?></strong>
                   </div>
                   <div class="card-body">
           
                     <p class="card-text py-3"> siswa <strong><?php echo $r->nama?></strong> dari kelas <strong><?php echo $r->nama_kelas?></strong>
                     telah membayar spp sebesar <strong>RP.<?= $r->jumlah_bayar?></strong> 
                     untuk bulan <strong><?php echo $r->bulan_dibayar?></strong> 
                     tahun <strong><?= $r-> tahun_dibayar?></strong> dengan
                     id pembayaran <strong><?php echo $r->id_pembayaran?></strong> </p>                 
                   </div>
              
                <div class="card-footer text-gray-700">
                    dibayar kepada <strong><?php echo $r->nama_petugas ?></strong>
                   </div>
                   
          
               </div>
                   <?php }  ?>
                
              </div>
            </div>
            </div>
          </div>
        </div>
      </div>
    </div>
        </div>
      </div>
 </div>   


    <script>
$(document).ready(function(){
  $('.toast').toast('show');
});
</script>
    