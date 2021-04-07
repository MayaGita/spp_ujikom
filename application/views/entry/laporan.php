<style>
#disabledInput{
    
    color:aqua;
    font-size:14px;

    
}
</style>


<div class="container-fluid">
<div class="card shadow mb-5">
      <div class="card-header py-3 ">
       <h6 class="m-0 font-weight-bold  ">Laporan pembayaran</h6>
          </div>
          <div class="card-body">
          <h1 class="mb-5 mt-3">Laporan pembayaran / bulan</h1>
          <?php  
        
                   $i=0;
                      
                  foreach ($bulan as $b) {
                     $i++;
                  ?>   
          <ul class="list-group">
           <li class="list-group-item d-flex justify-content-between align-items-center mb-2">
             <?= $b['bulan'] ?>
            <a href="<?php echo base_url(); ?>entry/isiLaporan/<?php echo $b['bulan']; ?>"><h5> <span class="badge badge-primary badge-pill">Laporan</span></h5></a>
           </li>
           </ul>
           <?php }?>
               
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
    </div>
        </div>
      </div>
 </div>           



