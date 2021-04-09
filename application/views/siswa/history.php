<main>


<div class="recent-grid">
<div class="projects">
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

 <div class="card " style="border-radius: 15px 15px">
 <div class="card-header  py-3"  style="background-color: #009790"> 
           <h2 class="m-0 ml-3 font-weight-bold text-dark" > <i class="fas fa-history"></i> History</h2>
           <h6 class="ml-5 pl-5 font-weight-bold text-gray-500"> pembayaran</h6 >
              
            </div>
  <div class="card-body">
  
  <div class="table-responsive mt-5">
                <table class="table table-hover  table-sm" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                     <tr>
                       <th >
                          no
                       </th>
                       <th>
                          id pembayaran
                       </th>
                       <th >
                          nisn
                       </th>
                       <th scope="col">
                          nama
                       </th>
                       <th scope="col">
                          nama kelas
                       </th>
                       <th scope="col">
                          waktu bayar
                       </th>
                       <th scope="col">
                          bulan dibayar
                       </th>
                       <th scope="col">
                          tahun dibayar
                       </th>
                       <th scope="col">
                          tahun ajaran
                       </th>
                       <th scope="col">
                          nominal dibayar
                       </th>
                
                                                
                       </tr>
                       </thead>

                       <tbody>
                       <?php
                  $i =0;
           
                  foreach ($recent as $r) {
                     $i++;

               
                  ?>   
                 

              

                <tr>
                  <td> <?php echo $i ?></td>
                  <td> <?php echo $r->id_pembayaran; ?></td>
                  <td> <?php echo $r->nisn; ?></td>
                  <td> <?php echo $r->nama; ?></td>
                  <td> <?php echo $r->nama_kelas; ?></td>
                  <td> <?php echo $r->tgl_bayar; ?></td>
                  <td> <?php echo $r->bulan_dibayar; ?></td>
                  <td> <?php echo $r->tahun_dibayar; ?></td>
                  <td> <?php echo $r->tahunAjaran; ?></td>
                  <td> <?php echo $r->jumlah_bayar; ?></td>
          
                </tr>
                  
   
                <?php }  ?>  
        
                </tbody>   
               </table>
          
  
 
         
       
   </div>
   </div>
 
</div>





</div>

</main>