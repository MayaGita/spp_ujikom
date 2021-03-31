
          
<div class="container-fluid mt-5">

    <div class="card shadow mb-4 " >
            <div class="card-header py-3 " > 
              <h6 class="m-0 font-weight-bold ">pembayaran</h6>
      
            </div>
             
               
                <div class="card-body " >
                <form action="" method="POST"  class="my-5   text-center">
         
                   <div class="form-row">
                     <div class="form-group col-md-3">
                     <label for="disableInput" class="text-gray-500">Id pembayaran:</label> 
                    <input type="text" id="disabledInput" class="form-control text-center" name='id_pembayaran'  value="pb<?php echo mt_rand();?>" disabled>
                     </div>
                     <div class="form-group col-md-3">
                     <label for="id_petugas" class="text-gray-500">nama petugas:</label> 
                    <input type="text" id="id_petugas" class="form-control text-uppercase text-center" name='id_petugas'  placeholder="masukan nama petugas"  >
                     </div>
                     <div class="form-group col-md-3">
                     <label for="disableInput" class="text-gray-500">Nama siswa:</label> 
                    <input type="text" id="disabledInput" class="form-control text-uppercase text-center" name='nisn' value="<?= $siswa['nama'] ?>" disabled>
                     </div>
                     <div class="form-group col-md-3">
                     <label for="disableInput" class="text-gray-500 ">kelas:</label> 
                    <input type="text" id="disabledInput" class="form-control text-uppercase text-center " name='id_kelas' value="<?= $siswa['nama_kelas'] ?>" disabled>
                     </div>
                   </div>
            
                  <div class="form-row pt-5 ">
                     <div class="form-group col-md-3">
                     <label for="disableInput" class="text-gray-500">tanggal bayar:</label> 
                    <input type="text" id="disabledInput" class="form-control text-center" name='tgl_bayar'  value="<?php echo date('Y-m-d');?>" disabled>
                     </div>
              
                     <div class="form-group col-md-8">
                       <label for="inputState">Bulan dan tahun dibayar</label>
                       <div class="form-row "> 
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
                     </div>
                  </div>
                  <div class="form-row mt-5">
                     <div class="form-group col-md-6">
                     <label for="disableInput" class="text-gray-500">Tahun ajaran:</label> 
                    <input type="text" id="disabledInput" class="form-control text-uppercase text-center" name='id_spp' value="<?= $siswa['tahunAjaran'] ?>" disabled>
                     </div>
                     <div class="form-group col-md-6">
                     <label for="disableInput" class="text-gray-500">Nominal dibayar:</label> 
                    <input type="text" id="disabledInput" class="form-control text-uppercase text-center" name='jumlah_bayar' value="<?= $siswa['nominal'] ?>" disabled>
                     </div>
                  </div>
                  
             
                  
                   <button type="submit" class="btn btn-primary mt-5 my-5 px-5 py-3">Submit</button>
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

    