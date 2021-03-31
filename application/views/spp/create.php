


 <div class="container-fluid">
     
     <div class="col-lg-15 pl-3 pr-3 my-3 py-0  ">
         <div class="text-center">
         <img src="">
               <h1 class="h3 text-white-500 mb-4">Tambahkan data spp</h1>
             </div>
  <div class="col-xl-5 col-lg-5 col-md-10 py-y ">           
 <div class="card-body">
 <?php echo form_open_multipart('spp/create');?>
 <div class="form-group">
 <div class="form-group">
 <input type="hidden" name="<?=$this->security->get_csrf_token_name();?>" value="<?=$this->security->get_csrf_hash();?>" style="display: none">
   <label for="id_spp">Id spp</label>
   <input type="text" class="form-control" id="id_sp" name="id_spp" placeholder="masukan id spp">
   <small id="id_spp" class="form-text text-danger"><?= form_error('id_spp');?></small>
 </div>
 <div class="form-group">
   <label for="tahunAjaran">Tahun ajaran</label>
   <input type="text" class="form-control" id="tahunAjaran" name="tahunAjaran" placeholder="masukan tahun ajaran baru">
   <small id="tahunAjaran" class="form-text text-danger"><?= form_error('tahunAjaran');?></small>
 </div>
 <div class="form-group">
   <label for="nominal">Nominal</label>  
   <input type="text" class="form-control " id="nominal" name="nominal" placeholder="masukan nominal spp ">
   <small id="nominal" class="form-text text-danger"><?= form_error('nominal');?></small>
 </div>

 <button type="submit" class="btn btn-primary py-2 px-5 mt-5">Submit</button>
 </div>



</form>
</div>
</div>
</div>
     </div>