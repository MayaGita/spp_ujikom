


 <div class="container-fluid">
     
 
         <div class="text-center">
         <img src="">
               <h1 class="h3 text-white-500 mb-4">Edit data siswa</h1>
             </div>
      

<form action="" method="POST">
 <div class="form-group">
 <input type="hidden" name="<?=$this->security->get_csrf_token_name();?>" value="<?=$this->security->get_csrf_hash();?>" style="display: none">

 <input type="hidden" name="nisn" id="nisn" value="<?= $siswa['nisn'] ?>"/>
   <label for="nisn">Nisn</label>
   <input type="text" class="form-control" id="nisn" name="nisn"  value="<?= $siswa['nisn'] ?>">
   <small id="nisn" class="form-text text-danger"><?= form_error('nisn');?></small>
 </div>
 <div class="form-group">
   <label for="nis">nis</label>
   <input type="text" class="form-control" id="nis" name="nis" value="<?= $siswa['nis'] ?>">
   <small id="nis" class="form-text text-danger"><?= form_error('nis');?></small>
 </div>
 <div class="form-group">
   <label for="nama">Nama siswa</label>
 <input type="text" name="nama" id="nama" class="form-control"  value="<?= $siswa['nama'] ?>">
 </div>
 <div class="form-group">
    <label for="id_kelas">Kelas</label>
    <select class="form-control" id="id_kelas " name="id_kelas">
   <?php foreach($siswa2->result() as $s){ ?>
     <option value="<?php echo $s->id_kelas; ?>"><?php echo $s->nama_kelas; ?></option>
     <?php } ?>
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
    <textarea class="form-control" id="alamat" name="alamat" rows="3"><?= $siswa['alamat'] ?></textarea>
  </div>
 <div class="form-group">
   <label for="no_telp">Nomor telepon</label>
 <input type="tel" name="no_telp" id="no_telp" class="form-control" value="<?= $siswa['no_telp'] ?>">
 </div>
 <div class="form-group">
    <label for="id_spp">Tahun ajaran</label>
    <select class="form-control" id="tahunAjaran" name="id_spp">
     <?php foreach($siswa2->result() as $s){ ?>
     <option value="<?php echo $s->id_spp; ?>"><?php echo $s->tahunAjaran; ?></option>
    <?php } ?>
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