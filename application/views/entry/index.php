<style>
#disabledInput{
    
    color:aqua;
    font-size:14px;

    
}
</style>


<div class="container-fluid">
<div class="card shadow mb-4">
      <div class="card-header py-3 ">
       <h6 class="m-0 font-weight-bold  ">HALAMAN PEMBAYARAN</h6>
          </div>
          <div class="card-body">
            <p>Untuk menginput pembayaran silahkan tekan 
            tombol <strong>buat transaksi</strong> dibawah ini
            </p>
         </div>
        </div>

       <h1 class="text-center mt-5"> Cari siswa</h1>
 <form action="" method="GET" class="form-inline justify-content-center mt-5 mb-5" >
    <input class="form-control mr-sm-2" type="search" placeholder="Search" id='cari' name="cari" aria-label="Search" style="width:80%">
    <button onclick="Cari()" class="btn btn-cyan my-2 my-sm-0" type="submit" value="cari" >Search</button>
  </form>

  <hr>
  <h3>Kolom siswa</h3>
  <hr>
  <div class="card-body" id="hasil" >
     <div class="table-responsive">
  <table class="table table-hover table-light table-sm mb-5" id="dataTable " width="100%" cellspacing="0">
  <thead>
                     <tr>
                  
                       <th >
                          nama
                       </th>
                       <th>
                          nama kelas
                       </th>
                      
                    
                                                
                       </tr>
                       </thead>

   <tbody>
        <?php
 
        if(count($cari)>0)
        {
            foreach ($cari as $data) {
     ?>   
            
      <tr style='cursor:pointer;'  class='Mymodal' data-toggle="modal" data-target="#exampleModalCenter"  data-id="<?= $data->nisn ?>"   >
      <td> <?php echo $data->nama ?></td>
      <td> <?php echo $data->nama_kelas; ?></td>
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
</hr>
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"  aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">Modal title</h5>
  
  
        </button>
      </div>
      <div class="modal-body col-lg-12">
      <div class="container-fluid ">
               <div class="card-body " >
               <form action="" method="POST"  class=" text-center ">
               <div class="form-row">
                     <div class="form-group col-md-6">
                     <label for="disableInput" class="text-gray-500">Id pembayaran:</label> 
                    <input type="text" id="disabledInput" class="form-control text-center bg-dark" name='id_pembayaran'  value="pb<?php echo mt_rand();?>" disabled>
                     </div>
                     <div class="form-group col-md-6">
                     <label for="id_petugas" class="text-gray-500">nama petugas:</label> 
                    <input type="text" id="id_petugas" class="form-control text-center" name='id_petugas'  placeholder="masukan nama petugas"  >
                     </div>
                   
                   </div>
               <div class="form-row my-5 ">
                     <div class="form-group col-md-6">
                     <label for="disableInput" class="text-gray-500">Nama siswa</label> 
                    <input type="text" id="disabledInput" class="form-control text-center  bg-dark" name='nama'  value="pb<?php echo mt_rand();?>" disabled>
                     </div>
                     <div class="form-group col-md-6">
                     <label for="id_petugas" class="text-gray-500">kelas</label> 
                    <input type="text" id="id_petugas" class="form-control text-center  bg-dark" name='id_petugas'  disabled>
                     </div>
                   
                   </div>
                   
                   <div class="form-group col-md-12">
                     <label for="id_petugas" class="text-gray-500">Tanggal bayar</label> 
                     <input type="text" id="disabledInput" class="form-control text-center bg-dark" name='tgl_bayar'  value="<?php echo date('Y-m-d');?>" disabled>
                    </div>
                    <div class="form-row my-5 ">
                    <div class="form-group col-md-6">
                       <select id="inputState" class="form-control" name="bulan_dibayar">
                         <option selected>Bulan</option>
                         <option value="januari">januari</option>
                         <option value="februari">februari</option>
                         <option value="maret">maret</option>
                         <option value="april">april</option>
                         <option value="mei">mei</option>
                         <option value="juni">juni</option>
                         <option value="juli">juli</option>
                         <option value="Agustus">Agustus</option>
                         <option value="september">september</option>
                         <option value="oktober">oktober</option>
                         <option value="november">november</option>
                         <option value="desember">Desember</option>
                       </select>
                       </div>
                       <div class="form-group col-md-6">
                       <select id="inputState" class="form-control" name="tahun_dibayar">
                         <option selected>Tahun</option>
                         <option>2020</option>
                         <option>2021</option>
                         <option>2022</option>
                       </select>
                       </div>
                       </div>
                       <div class="form-row mt-5">
                     <div class="form-group col-md-6">
                     <label for="disableInput" class="text-gray-500">Tahun ajaran:</label> 
                    <input type="text" id="disabledInput" class="form-control text-uppercase text-center" name='id_spp' disabled>
                     </div>
                     <div class="form-group col-md-6">
                     <label for="disableInput" class="text-gray-500">Nominal dibayar:</label> 
                    <input type="text" id="disabledInput" class="form-control text-uppercase text-center" name='jumlah_bayar'  disabled>
                     </div>
                  </div>
                       </div>
                        
                        </div>
                        <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
            
               </form>       
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
      </div>
 </div>           




