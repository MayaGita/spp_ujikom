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
           
<!-- 
          <div class="card w-50 bg-gray-800 my-5">
              <div class="card-body text-white">
              <form class="my-3"  action="" method="GET">
                
              <div class="form-group pb-3">
              <label>Cari :</label>
              <div class="input-group ">
                
               
                <input type="text" class="form-control"  aria-label="Default" aria-describedby="inputGroup-sizing-default" placeholder="Search Data" name="search">
                <div class="input-group-append">
                    <div class="input-group date">
                    <div class="input-group-addon">
                           <span class="glyphicon glyphicon-th"></span>
                       </div>
                       <input  type="text" class="form-control datepicker" name="search" autocomplete="off" placeholder="masukkan tanggal " >
                   </div> 
                   </div>
                   </div>
              </div>

               
             
              <button class="btn btn-cyan" type="submit" value="search">search</button>
            </form>
             
               
              </div>
             </div> -->
             <div class="container-fluid">
               
               <div class="card-body" >
                <div class="table-responsive">
               <table class="table table-hover table-bordered  table-lg " id="dataTable" width="100%" cellspacing="0">
                   <thead >
                    <tr>
                      <th >
                         no
                      </th>
                      

                      <th>
                         nisn
                      </th>
                      <th scope="col">
                         nama siswa
                      </th>
                      <th scope="col">
                        kelas
                      </th>
                
                      <th scope="col">
                         bulan dibayar
                      </th>
                      <th scope="col">
                         tahun dibayar
                      </th>
                
                      <th scope="col">
                         status
                      </th>
                                               
                      </tr>
                      </thead>

                      <tbody>
           
                   <?php  
                   $i=0;
                      
                  foreach ($info as $in) {
                     $i++;
                  ?>   
                      

                <tr style='cursor:pointer;' class='clickable-row'>
                  <td> <?php echo $i ?></td>
                  <td><?= $in['nisn']; ?></td>
                  <td><?= $in['nama']; ?></td>
                  <td><?= $in['nama_kelas']; ?></td>
                  <td><?= $in['bulan'] ?></td>
                  <td><?= $in['tahun']; ?></td>
                  <?php if ($in['status'] == 'Lunas') { ?>
                  <td><h5><strong class="badge badge-lg badge-success"><?= $in['status']; ?></strong></h5></td>
                 <?php } else { ?>
                  <td><strong class="badge badge-danger"><?= $in['status']; ?></strong></td>
                 <?php } ?>
       
                </tr>
            
               </tr>
               <?php }       ?>

              </tbody>   
              </table>

             
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



<script type="text/javascript">
 $(function(){
  $(".datepicker").datepicker({
      format: 'yyyy-mm',
      autoclose: true,
      todayHighlight: true,
  });
 });
</script>