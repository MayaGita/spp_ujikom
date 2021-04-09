<style>
#tahun_dibayar{
  border:1px solid black;
  color:black;
}
</style>
          
<div class="container-fluid mt-5">
<?php if($this->session->flashdata('message2')) : ?>
              <div class="alert alert-danger  alert-dismissible fade show mb-4" role="alert">
              <hr>
                  <h4><i class="fas fa-exclamation fa-lg"></i> <?php echo $this->session->flashdata('message2'); ?> </h4>  
                  <hr>    
             <button type="button" class="close" data-dismiss="alert" aria-label="Close">
             <span aria-hidden="true">&times;</span>
             </button>
             </div>  
             <?php endif; ?> 
    <div class="card shadow mb-4 " >
            <div class="card-header py-3 " style="background-color: #009790" > 
              <h6 class="m-0 font-weight-bold ">pembayaran</h6>
      
            </div>
             
               
                <div class="card-body " >
                <?php echo form_open_multipart('entry/insert');?>
               
                   <div class="form-row text-center mx-5 mt-5">
                     <div class="form-group col-md-3">
                     <label for="disableInput" class="text-gray-500">Id pembayaran:</label> 
                     <input type="text" id="disabledInput" class="form-control form-control-sm text-center" name='id_pembayaran'  value="pb<?php echo mt_rand()?>" disabled>
                     <input type="hidden" id="disabledInput" class="form-control form-control-sm text-center" name='id_pembayaran'  value="pb<?php echo mt_rand()?>">

                    <small name="id_pembayaran" class="form-text text-danger"><?= form_error('id_pembayaran');?></small>
                     </div>
                     <div class="form-group col-md-3">
                             <label for="id_petugas">nama petugas</label>
                         
                   <input type="text" id="disabledInput" class="form-control form-control-sm text-center" name='nama_petugas' value="<?= $petugas2['username'];?>" disabled>
                   <input type="hidden" id="disabledInput" class="form-control form-control-sm text-center" name='id_petugas' value="<?= $petugas['id_petugas'];?>">

         
                    <small name="id_pembayaran" class="form-text text-danger"><?= form_error('id_petugas');?></small>
                            </div>

                            <div class="form-group col-md-3">
                             <label for="nama">nama siswa</label>
                             <select class="form-control" id="nisn" name="nisn">
                             <option >pilih siswa...</option>
                             <?php foreach($siswa as $s){ ?>
                             
                              <option value="<?php echo $s->nisn; ?>"><?php echo $s->nama; ?></option>
                              <?php } ?>
                             </select>
                            </div>
                     <div class="form-group col-md-3">
                             <label for="id_kelas">Kelas</label>
                             <select class="form-control" id="id_kelas " name="id_kelas">
                               <option >pilih kelas...</option>
                             <?php foreach($siswa as $s){ ?>
                               <option value="<?php echo $s->id_kelas; ?>"><?php echo $s->nama_kelas; ?></option>
                               <?php } ?>
                            </select>
                            </div>
                   </div>
            
                  <div class="form-row pt-5 text-center mx-5 ">
                     <div class="form-group col-md-3">
                     <label for="disableInput" class="text-gray-500">tanggal bayar:</label> 
                    <input type="text" id="disabledInput" class="form-control form-control-sm text-center" name='tgl_bayar'  
                    value="<?php  date_default_timezone_set('Asia/Jakarta'); echo date('Y-m-d H:i:s');?>" disabled>
                    <input type="hidden" id="disabledInput" class="form-control form-control-sm text-center" name='tgl_bayar'  
                    value="<?php  date_default_timezone_set('Asia/Jakarta'); echo date('Y-m-d H:i:s');?>">

                     </div>
              
                     <div class="form-group col-md-8 text-center">
                       <label for="inputState">Bulan dan tahun dibayar</label>
                       <div class="form-row text-center mx-5"> 
                       <div class="form-group col-md-6">
                       <select class="form-control" id="bulan" name="bulan_dibayar">
                         <option ></option>
                         <option selected>bulan</option>
                         <option value="januari">januari</option>
                         <option value="februari">februari</option>
                         <option value="maret">maret</option>
                         <option value="april">april</option>
                         <option value="mei">mei</option>
                         <option value="juni">juni</option>
                         <option value="juli">juli</option>
                         <option value="agustus">agustus</option>
                         <option value="september">september</option>
                         <option value="oktober">oktober</option>
                         <option value="november">november</option>
                         <option value="desember">desember</option>
                        </select>  
                       </div>
                       <div class="form-group col-md-6">
                    <input type="text" id="tahun_dibayar" class="form-control form-control-sm text-center " 
                    name='tahun_dibayar'  placeholder="masukan tahun">
         
                     </div>
                       </div>
                     </div>
                  </div>
                  <div class="form-row mt-5 text-center mx-5">
                     <div class="form-group col-md-6">
                     <label for="tahunAjaran" class="text-gray-500">Tahun ajaran:</label> 
                     <select class="form-control" id="tahunAjaran" name="id_spp">
                        <option >pilih tahun..</option>
                     <?php foreach($siswa as $s){ ?>
                        <option value="<?php echo $s->id_spp; ?>"><?php echo $s->tahunAjaran; ?></option>
                       <?php } ?>
                       </select>
                     </div>
                     <div class="form-group col-md-6 text-center">
                     <label for="disableInput" >Nominal dibayar:</label> 
                     <select class="form-control" id="nominal" name="jumlah_bayar">
                        <option >masukan nominal</option>
                     <?php foreach($siswa as $s){ ?>
                        <option value="<?php echo $s->nominal; ?>"><?php echo $s->nominal; ?></option>
                       <?php } ?>
                       </select>
                     </div>
                  </div>
                  
             
                  
                  <center> <button type="submit" class="btn btn-primary mt-5 my-5 px-5 py-3">Submit</button></center>
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

