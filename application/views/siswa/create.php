


 <div class="container-fluid">
     
     <div class="col-lg-15 pl-3 pr-3 my-3 py-0  ">
         <div class="text-center">
         <img src="">
               <h1 class="h3 text-white-500 mb-4">Tambahkan data siswa</h1>
             </div>
  <div class="col-xl-5 col-lg-5 col-md-10 py-y ">           
 <div class="card-body">
 <?php echo form_open_multipart('siswa/create');?>
 <div class="form-group">
 <input type="hidden" name="<?=$this->security->get_csrf_token_name();?>" value="<?=$this->security->get_csrf_hash();?>" style="display: none">
   <label for="nisn">Nisn</label>
   <input type="text" class="form-control" id="nisn" name="nisn" placeholder="masukan nisn">
   <small id="nisn" class="form-text text-danger"><?= form_error('nisn');?></small>
 </div>
 <div class="form-group">
   <label for="nis">nis</label>
   <input type="text" class="form-control" id="nis" name="nis" placeholder="masukan nis">
   <small id="nis" class="form-text text-danger"><?= form_error('nis');?></small>
 </div>
 <div class="form-group">
   <label for="password">password akun siswa</label>  
   <input type="text" class="form-control " id="password" name="password" placeholder="masukan password">
   <small id="password" class="form-text text-danger"><?= form_error('password');?></small>
 </div>
 <div class="form-group">
   <label for="username">Username akun siswa</label>
   <input type="text" class="form-control" id="username" name="username" placeholder="masukan username">
   <small id="username" class="form-text text-danger"><?= form_error('username');?></small>
 </div>
 <div class="form-group">
   <label for="nama">Nama siswa</label>
 <input type="text" name="nama" id="nama" class="form-control" placeholder="masukan nama siswa">
   <small id="nama" class="form-text text-danger"><?= form_error('nama');?></small>
 </div>
 <div class="form-group">
    <label for="id_kelas">Kelas</label>
    <select class="form-control" id="id_kelas " name="id_kelas">
  <option ></option>
      <option value='1001'>X RPL</option>
      <option value='1002'>X TKJ</option>
      <option value='1003'>X OTKP</option>
      <option value='1101'>XI RPL</option>
      <option value='1102'>XI TKJ</option>
      <option value='1103'>XI OTKP</option>
      <option value='1201'>XII RPL</option>
      <option value='1202'>XII TKJ</option>
      <option value='1203'>XII OTKP</option>
 </select>
  </div>
 <div class="form-group">
   <label for="alamat"> Alamat siswa</label>
    <textarea class="form-control" id="alamat" name="alamat" rows="3"></textarea>
   <small id="alamat" class="form-text text-danger"><?= form_error('alamat');?></small>
  </div>
 <div class="form-group">
   <label for="no_telp">Nomor telepon</label>
 <input type="tel" name="no_telp" id="no_telp" class="form-control" placeholder="masukan nomor telepon">
   <small id="no_telp" class="form-text text-danger"><?= form_error('no_telp');?></small>
 </div>
 <div class="form-group">
    <label for="id_spp">Tahun ajaran</label>
    <select class="form-control" id="id_spp" name="id_spp" placeholder="masukan tahun ajaran">
      <option value='101'>2018/2019</option>
      <option value='102'>2019/2020</option>
      <option value='103'>2020/2021</option>
      <option value='104'>2021/2022</option>
    
    </select>
  </div>
 <button type="submit" class="btn btn-primary py-2 px-5 mt-5">Submit</button>
 </div>



</form>
</div>
</div>
</div>
     </div>
     </script>
       <script type="text/javascript">
 $(document).ready(function() {
     $('select').select2();
 });
</script>
