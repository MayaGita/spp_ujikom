
<main>


<div class="recent-grid">
<div class="projects">
 <div class="card " style="border-radius: 15px 15px">
 <div class="card-header " style="background-color: #009790">
  <h4>Data siswa</h4>
  </div>
  <div class="card-body">
 
    

          

                <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            
                                            <th>nisn</th>
                                            <th>nama siswa</th>
                                            <th>kelas</th>
                                            <th>bulan dibayar</th>
                                            <th>tahun dibayar</th>
                                            <th>status</th>
                                       
                                        </tr>
                                    </thead>
                                    <?php  
                                     
                                        foreach ($info as $in) {
                                          
                                        ?>   
                                            
                                       
                                      <tr style='cursor:pointer;'>
                                        
                                        <td><?= $in['nisn']; ?></td>
                                        <td><?= $in['nama']; ?></td>
                                        <td><?= $in['nama_kelas']; ?></td>
                                        <td><?= $in['bulan'] ?></td>
                                        <td><?= $in['tahun']-1; ?></td>
                                        <?php if ($in['status'] == 'Lunas') { ?>
                                         <td><h5><strong class="badge badge-lg badge-success"><?= $in['status']; ?></strong></h5></td>
                                        <?php } else { ?>
                                         <td><strong class="badge badge-danger"><?= $in['status']; ?></strong></td>
                                        <?php } ?>
                                  
                                       
       
                                      </tr>
                                   
                                     </tr>
                                     <?php }       ?>
                                    </tbody>
                                </table>
       
   </div>
   </div>
 
</div>





</div>

</main>







         <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; Your Website 2020</span>
          </div>
        </div>
      </footer>
    </div>


  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header " style="background-color: #009790">
          <h5 class="modal-title text-light" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn text-danger" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="<?= base_url('authAdmin/logout')?>">Logout</a>
        </div>
      </div>
    </div>
  </div>
  <!-- Bootstrap core JavaScript-->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="<?=base_url('asset/')?>vendor/jquery/jquery.min.js"></script>
    <script src="<?=base_url('asset/')?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?=base_url('asset/')?>vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
   
 

    <!-- Page level plugins -->
    <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="<?=base_url('asset/')?>js/demo/datatables-demo.js"></script>

    <script type="text/javascript" language="javascript">
          $('#dataTable').dataTable( {
              var bulan=['januari', 'februari', 'maret', 'april', 'mei', 'juni', 'juli', 'agustus', 'september', 'oktober', 'november', 'desember'];
              var status=['lunas','belum lunas'];
             "search": {
            "search": bulan,status  
          };
         

</body>

</html>