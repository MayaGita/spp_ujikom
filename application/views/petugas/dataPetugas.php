

          

    <div class="card shadow mb-4 " >
            <div class="card-header py-3" > 
              <h6 class="m-0 font-weight-bold ">Data petugas</h6>
            </div>
              
            <center>
            <a href="<?php echo site_url('petugas/create')?>" class="btn btn-cyan col-6 ml-5 mt-5 mb-5 justify-content-center text-white   " >Tambah data petugas</a>
             </center>

             <?php if($this->session->flashdata('message')) : ?>
             <div class="alert alert-success alert-dismissible show close" role="alert">
             <?php echo $this->session->flashdata('message'); ?> 
             <button type="button" class="close" data-dismiss="alert" aria-label="Close">
             <span aria-hidden="true">&times;</span>
             </button>
             </div>  
             <?php endif; ?>    

             <div class="row mt-2 ml-3" >
                <div class="col-md-3">
                <div class="form" action="" method="post">
                <div class="input-group ">
               
                <input type="text" class="form-control"  aria-label="Default" aria-describedby="inputGroup-sizing-default" placeholder="Search Data" name="keyword">
                <div class="input-group-append">
                <button class="btn btn-cyan" type="submit">search</button>
                </div>
                </div>
                
                </div>
                
                </div>
             </div>      
                
               

              
               <div class="container-fluid">
               
                <div class="card-body" >
                 <div class="table-responsive">
                <table class="table table-hover table-sm" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                     <tr>
                       <th >
                          no
                       </th>
                       <th >
                          username
                       </th>
                       <th>
                          nama petugas
                       </th>
                       <th scope="col">
                          level
                       </th>
                       <th scope="col">
                          aksi
                       </th>
                    
                                                
                       </tr>
                       </thead>

                       <tbody>
                       <?php
                  $i =0;
                  foreach ($dataPetugas as $petugas) {
                     $i++;
                  ?>   
                      

                <tr>
                  <td> <?php echo $i ?></td>
                  <td> <?php echo $petugas->username; ?></td>
                  <td> <?php echo $petugas->nama_petugas; ?></td>
                  <td> <?php echo $petugas->level; ?></td>
                  <td><a href="<?php echo base_url(); ?>petugas/update/<?php echo $petugas->id_petugas; ?>" class="badge badge-info"><i class="fas fa-edit"></i></a>
                  <a href="<?php echo base_url(); ?>petugas/delete/<?php echo $petugas->id_petugas; ?>" class="badge badge-danger" 
                  onclick="return confirm('apakah anda yakin?')"><i class="far fa-trash-alt"></i></a>
                  </td>
                  
             
                </tr>

                
                <?php  } ?>  
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

    