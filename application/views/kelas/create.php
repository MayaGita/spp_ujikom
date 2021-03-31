


 <div class="container-fluid">
     
     <div class="col-lg-15 pl-3 pr-3 my-3 py-0  ">
         <div class="text-center">
         <img src="">
               <h1 class="h3 text-white-500 mb-4">Tambahkan data kelas</h1>
             </div>
  <div class="col-xl-5 col-lg-5 col-md-10 py-y ">           
 <div class="card-body">
 <?php echo form_open_multipart('kelas/create');?>
 <div class="form-group">
 <div class="form-group">
 <input type="hidden" name="<?=$this->security->get_csrf_token_name();?>" value="<?=$this->security->get_csrf_hash();?>" style="display: none">
   <label for="id_kelas">Id kelas</label>
   <input type="text" class="form-control" id="id_kelas" name="id_kelas" placeholder="masukan id kelas">
   <small id="id_kelas" class="form-text text-danger"><?= form_error('id_kelas');?></small>
 </div>
 <div class="form-group">
   <label for="nama_kelas">Nama kelas</label>
   <input type="text" class="form-control" id="nama_kelas" name="nama_kelas" placeholder="masukan nama kelas baru">
   <small id="nama_kelas" class="form-text text-danger"><?= form_error('nama_kelas');?></small>
 </div>
 <div class="form-group">
   <label for="jurusan">jurusan</label>  
   <input type="text" class="form-control " id="jurusan" name="jurusan" placeholder="masukan jurusan baru">
   <small id="jurusan" class="form-text text-danger"><?= form_error('jurusan');?></small>
 </div>

 <button type="submit" class="btn btn-primary py-2 px-5 mt-5">Submit</button>
 </div>



</form>
</div>
</div>
</div>
     </div>