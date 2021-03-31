


 <div class="container-fluid">
     
 
         <div class="text-center">
         <img src="">
               <h1 class="h3 text-white-500 mb-4">Edit data spp</h1>
             </div>
      

<form action="" method="POST">
 <div class="form-group">
 <input type="hidden" name="<?=$this->security->get_csrf_token_name();?>" value="<?=$this->security->get_csrf_hash();?>" style="display: none">

 <input type="hidden" name="id_spp" id="id_spp" value="<?= $spp['id_spp'] ?>"/>

 <label for="tahunAjaran">Tahun ajaran</label>
   <input type="text" class="form-control" id="tahunAjaran" name="tahunAjaran" value=<?= $spp['tahunAjaran'] ?>>
   <small id="tahuAjaran" class="form-text text-danger"><?= form_error('tahunAjaran');?></small>
 </div>
 <div class="form-group">
   <label for="nama_petugas">Nominal</label>
   <input type="text" class="form-control" id="nominal" name="nominal" value=<?= $spp['nominal'] ?>>
   <small id="nominal" class="form-text text-danger"><?= form_error('nominal');?></small>
 </div>

 <button type="submit" class="btn btn-primary py-2 px-5 mt-5">Submit</button>
 </div>



</form>
</div>
</div>
</div>
     </div>