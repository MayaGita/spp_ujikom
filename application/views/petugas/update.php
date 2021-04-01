


 <div class="container-fluid">
     
 
         <div class="text-center">
         <img src="">
               <h1 class="h3 text-white-500 mb-4">Edit data petugas</h1>
             </div>
      

<form action="" method="POST">
 <div class="form-group">
 <input type="hidden" name="<?=$this->security->get_csrf_token_name();?>" value="<?=$this->security->get_csrf_hash();?>" style="display: none">

 <input type="hidden" name="id_petugas" id="id_petugas" value="<?= $petugas2['id_petugas'] ?>"/>
 <label for="username">Username akun petugas</label>
   <input type="text" class="form-control" id="username" name="username" value="<?= $petugas2['username'] ?>">
   <small id="username" class="form-text text-danger"><?= form_error('username');?></small>
 </div>
 <div class="form-group">
   <label for="nama_petugas">nama petugas</label>
   <input type="text" class="form-control" id="nama_petugas" name="nama_petugas" value="<?= $petugas2  ['nama_petugas'] ?>">
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