


 <div class="container-fluid">
     
 
         <div class="text-center">
         <img src="">
               <h1 class="h3 text-white-500 mb-4">Edit data kelas</h1>
             </div>
      

<form action="" method="POST">
 <div class="form-group">
 <input type="hidden" name="<?=$this->security->get_csrf_token_name();?>" value="<?=$this->security->get_csrf_hash();?>" style="display: none">

 <input type="hidden" name="id_kelas" id="id_kelas" value="<?= $kelas['id_kelas'] ?>"/>
 <div class="form-group">
   <label for="nama_kelas">Nama kelas</label>
   <input type="text" class="form-control" id="nama_kelas" name="nama_kelas" value="<?= $kelas['nama_kelas'] ?>">
   <small id="nama_kelas" class="form-text text-danger"><?= form_error('nama_kelas');?></small>
 </div>
 <div class="form-group">
   <label for="jurusan">Jurusan</label>
 <input type="text" name="jurusan" id="jurusan" class="form-control"  value="<?= $kelas['jurusan'] ?>">
 </div>
 
 <button type="submit" class="btn btn-primary py-2 px-5 mt-5">Submit</button>
 </div>



</form>
</div>
</div>
</div>
     </div>