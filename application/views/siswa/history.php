<style>
  .history{
    height:500px;
    overflow-y:scroll;
  }

  </style>


                       

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
           
                     <p class="card-text py-3"> <strong><?php echo $r->username?></strong> dari kelas <strong><?php echo $r->nama_kelas?></strong>
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
    