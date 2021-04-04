

          

               
             
       <div class="card shadow mb-4 " >
            <div class="card-header py-3" > 
              <h6 class="m-0 font-weight-bold ">Data siswa</h6>
            </div>

            <center>
            <a href="<?php echo site_url('siswa/create')?>" class="btn btn-cyan col-6 ml-5 mt-5 mb-5 justify-content-center text-white   " >Tambah data siswa</a>
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
                          nisn
                       </th>

                       <th>
                          nis
                       </th>
                       <th scope="col">
                          nama
                       </th>
                       <th scope="col">
                         kelas
                       </th>
                       <th scope="col">
                          alamat
                       </th>
                       <th scope="col">
                          no telpon
                       </th>
                       <th scope="col">
                          nominal bayar
                       </th>
                       <th scope="col">
                          tahun ajaran
                       </th>
                       <th scope="col">
                          aksi
                       </th>
                                                
                       </tr>
                       </thead>

                       <tbody>
                       <?php
                  $i =0;
                  if(count($siswa)>0)
                  {
                  foreach ($siswa as $student) {
                     $i++;
                  ?>   
                      

                <tr style='cursor:pointer;' class='clickable-row' data-href='<?php echo base_url(); ?>siswa/update/<?php echo $student->nisn; ?>'>
                  <td> <?php echo $i ?></td>
                  <td> <?php echo $student->nisn; ?></td>
                  <td> <?php echo $student->nis; ?></td>
                  <td> <?php echo $student->nama; ?></td>
                  <td> <?php echo $student->nama_kelas; ?></td>
                  <td> <?php echo $student->alamat; ?></td>
                  <td> <?php echo $student->no_telp; ?></td>
                  <td> <?php echo $student->nominal; ?></td>
                  <td> <?php echo $student->tahunAjaran; ?></td>
                  <td>
                  <a href="<?php echo base_url(); ?>siswa/delete/<?php echo $student->nisn; ?>" class="badge badge-danger" 
                  onclick="return confirm('apakah anda yakin?')"><i class="far fa-trash-alt"></i></a>
                  </td>
                </tr>
                  
             
                </tr>

                <?php }
      
                     }
                   
                     else
                     {
                        echo "Data tidak ditemukan";
                     }
                   
                   ?>
                </tbody>   
               </table>

 >
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

    