

          

    <div class="card shadow mb-4 " >
            <div class="card-header py-3" > 
              <h6 class="m-0 font-weight-bold ">Data kelas</h6>
            </div>
              
            <center>
            <a href="<?php echo site_url('kelas/create')?>" class="btn btn-cyan col-6 ml-5 mt-5 mb-5 justify-content-center text-white   " >Tambah data kelas</a>
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
                <form action="" method="GET" class="justify-content-right">
                <div class="input-group ">
                
               
                <input type="text" class="form-control"  aria-label="Default" aria-describedby="inputGroup-sizing-default" placeholder="Search Data" name="cari">
                <div class="input-group-append">
                <button class="btn btn-cyan" type="submit" calue="cari">search</button>
                </form>
                </div>
                
                </div>
             </div>      
                
               

              
               <div class="container-fluid">
               
                <div class="card-body" >
                 <div class="table-responsive">
                <table class="table table-hover  table-sm" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                     <tr>
                     <th >
                          no
                       </th>
                       <th >
                          Id kelas
                       </th>
                       <th>
                          nama kelas
                       </th>
                       <th scope="col">
                        jurusan
                       </th>
                       <th scope="col">
                        aksi
                       </th>
                    
                                                
                       </tr>
                       </thead>

                       <tbody>
                       <?php
                  $i =0;
                  foreach ($data->result() as $class) {
                     $i++;
                  ?>   
                      

                <tr>
                  <td> <?php echo $i ?></td>
                  <td> <?php echo $class->id_kelas; ?></td>
                  <td> <?php echo $class->nama_kelas; ?></td>
                  <td> <?php echo $class->jurusan; ?></td>
                  <td><a href="<?php echo base_url(); ?>kelas/update/<?php echo $class->id_kelas; ?>" class="badge badge-info"><i class="fas fa-edit"></i></a>
                  <a href="<?php echo base_url(); ?>kelas/delete/<?php echo $class->id_kelas; ?>" class="badge badge-danger" 
                  onclick="return confirm('apakah anda yakin?')"><i class="far fa-trash-alt"></i></a>
                  </td>
              
                  
             
                </tr>

                
                <?php  } ?>  
                </tbody>   
               </table>
               <div class="row">
        <div class="col">
            <!--Tampilkan pagination-->
            <?php echo $pagination; ?>
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

    