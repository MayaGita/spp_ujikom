


 <div class="container-fluid">
     
     <div class="col-lg-15 pl-3 pr-3 my-3 py-0  ">
         <div class="text-center">
         <img src="">
               <h1 class="h3 text-white-500 mb-4">Tambahkan data petugas</h1>
             </div>
  <div class="col-xl-5 col-lg-5 col-md-10 py-y ">           
 <div class="card-body">
 <?php echo form_open_multipart('petugas/create');?>
 <div class="form-group">
 <div class="form-group">
 <input type="hidden" name="<?=$this->security->get_csrf_token_name();?>" value="<?=$this->security->get_csrf_hash();?>" style="display: none">
   <label for="id_petugas">Id petugas</label>
   <input type="text" class="form-control" id="id_petugas" name="id_petugas" placeholder="masukan id_petugas">
   <small id="id_petugas" class="form-text text-danger"><?= form_error('id_petugas');?></small>
 </div>
 <div class="form-group">
   <label for="username">Username akun petugas</label>
   <input type="text" class="form-control" id="username" name="username" placeholder="masukan username">
   <small id="username" class="form-text text-danger"><?= form_error('username');?></small>
 </div>
 <div class="form-group">
   <label for="password">password akun petugas</label>  
   <input type="text" class="form-control " id="password" name="password" placeholder="masukan password">
   <small id="password" class="form-text text-danger"><?= form_error('harga_satuan');?></small>
 </div>
 <div class="form-group">
   <label for="nama_petugas">nama petugas</label>
   <input type="text" class="form-control" id="nama_petugas" name="nama_petugas" placeholder="masukan nama spetugas">
   <small id="nama_petugas" class="form-text text-danger"><?= form_error('nama_petugas');?></small>
 </div>

 <div class="form-group">
    <label for="level">Level</label>
    <select class="form-control" id="level" name="level" placeholder="masukan level">
      <option value='admin'>admin</option>
      <option value='petugas'>petugas</option>
    
    </select>
  </div>
 <button type="submit" class="btn btn-primary py-2 px-5 mt-5">Submit</button>
 </div>



</form>
</div>
</div>
</div>
     </div>