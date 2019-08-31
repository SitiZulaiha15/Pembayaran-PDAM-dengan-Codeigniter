<?php $this->load->view('header');?>
<?php $this->load->view('sidebar');?>

 <div id="content">
           <!--     <div class="panel box-shadow-none content-header">
                  <div class="panel-body">
                    <div class="col-md-12">
                        <h3 class="animated fadeInLeft">Data Tables</h3>
                        <p class="animated fadeInDown">
                          Table <span class="fa-angle-right fa"></span> Data Pelanggan
                        </p>
                    </div>
                  </div>
              </div> -->
              <div class="col-md-12 top-20 padding-0">
                <div class="col-md-12">
                  <div class="panel">
                    <div class="panel-heading"><h3>Data Petugas</h3></div>
                    <div class="panel-body">
                      <div class="responsive-table">
  <p><button class="btn btn-success"  data-toggle="modal" data-target="#myModal" title='Tambah Data'> <i class="fa fa-plus"></i> <span>Petugas</span></button></p>
                      <table id="datatables-example" class="table table-striped table-bordered" width="100%" cellspacing="0">
                      <thead>
                        <tr>
<th>No</th>
 <th>NAMA</th>
<th>NO. TLP</th>
 <th>JABATAN</th>
<th>USERNAME</th>
<th>PASSWORD</th>
<th>Action</th>
 </tr>
 </thead>
 <tbody>
  <?php
 $no = 1;
 $i =1;
foreach ($list_petugas->result() as $row) {
  ?>
     <tr>
 <td align="center"><?php echo $no++;?></td>
 <td><?php echo $row->nama_petugas; ?></td>
 <td><?php echo $row->no_tlp; ?></td>
 <td><?php echo $row->jabatan; ?></td>
 <td><?php echo $row->username; ?></td>
 <td><?php echo $row->password; ?></td>
 <td>
  <button class='btn btn-sm btn-primary' title='Edit'class="btn btn-info-btn-xs" data-toggle="modal" data-target="#myModal<?php echo $i;?>"><i class="fa fa-edit"></i>Edit</button>
 <a href="<?php echo site_url('Petugas/hapus/'.$row->no_petugas)?>" class="button special" onclick="return confirm('Apakah Anda Ingin Menghapus Data Ini?')">
<button class='btn btn-sm btn-danger' class="btn btn-info-btn-xs" title='Hapus'><i class="fa fa-trash-o"></i>Delete</button>
</a>
    </td>
</tr>


<!-- modal Edit -->
 <div class="modal fade" id="myModal<?php echo $i++;?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">

 <div class="modal-dialog" role="document">
 <div class="modal-content">
  <div class="modal-header">
  <button type="button" class="close" data-dismiss="modal">&times;</button>
 <h3 class="modal-title" id="myModalLabel">Edit Data Petugas</h3>
                 </div>
                  <div class="modal-body">
            
                <form method="post" action="<?php echo site_url('Petugas/update') ?>">
                   <div class="modal-body ">
                      <div class="form-group">
                          <label class="control-label" for="nama_petugas">Nama Petugas</label>
                          <input type="text" name="nama"  class="form-control" id="demo-name" value="<?php echo $row->nama_petugas?>" placeholder="Nama Petugas" />
                                <input type="hidden" name="id" id="demo-name" value="<?php echo $row->no_petugas?>"/>
                              </div>
                      </div>
                     <div class="modal-body ">
                      <div class="form-group">
                          <label class="control-label" for="no_tlp">NO. TLP</label>
                          <input type="text" name="nama"  class="form-control" id="demo-name" value="<?php echo $row->no_tlp?>" placeholder="NO. TLP" />
                          </div>
                      </div>
                    <div class="modal-body ">
                      <div class="form-group">
                          <label class="control-label" for="jabatan">jabatan</label>
                          <input type="text" name="nama"  class="form-control" id="demo-name" value="<?php echo $row->jabatan?>" placeholder="jabatan" />
                          </div>
                      </div>
                    <div class="modal-body ">
                      <div class="form-group">
                          <label class="control-label" for="username">Username</label>
                          <input type="text" name="nama"  class="form-control" id="demo-name" value="<?php echo $row->username?>" placeholder="Username" />
                          </div>
                      </div>
                    <div class="modal-body ">
                      <div class="form-group">
                          <label class="control-label" for="password">Password</label>
                          <input type="text" name="nama"  class="form-control" id="demo-name" value="<?php echo $row->password?>" placeholder="Password" />
                          </div>
                      </div>
                    
            <div class="modal-footer">
              <button type="reset" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                <input type="submit" class="btn btn-success" name="myModal" value="simpan">
            </div>
                
                </form>
            </div>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<!-- End Bootstrap modal -->

  <?php
   }?>
  </tbody>
  </table>
</div>

<!-- Bootstrap modal -->
 <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
 <div class="modal-dialog" role="document">
 <div class="modal-content">
  <div class="modal-header">
  <button type="button" class="close" data-dismiss="modal">&times;</button>
 <h3 class="modal-title" id="myModalLabel">Tambah Data Petugas</h3>
                 </div>
                            <div class="modal-body">
            
                <form method="post" action="<?php echo site_url('Petugask/input_proses/')?>#">

                 <div class="modal-body ">
                      <div class="form-group">
                          <label class="control-label" for="nama_petugas">Nama Petugas</label>
                          <input  type="text" name="nama_petugas"  class="form-control" id="nama_petugas" placeholder="Nama Petugas" required>
                          </div>
                      </div>

                    
                 <div class="modal-body ">
                      <div class="form-group">
                          <label class="control-label" for="no_tlp">NO. TLP</label>
                          <input  type="text" name="no_tlp"  class="form-control" id="no_tlp" placeholder="NO. TLP" required>
                          </div>
                      </div>
                   <div class="modal-body ">
                      <div class="form-group">
                          <label class="control-label" for="username">Username</label>
                          <input  type="text" name="username"  class="form-control" id="username" placeholder="Username" required>
                          </div>
                      </div>
                   <div class="modal-body ">
                      <div class="form-group">
                          <label class="control-label" for="password">Password</label>
                          <input  type="text" name="password"  class="form-control" id="password" placeholder="Password" required>
                          </div>
                      </div>
                
            <div class="modal-footer">
              <button type="reset" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                <input type="submit" class="btn btn-success" name="myModal" value="simpan">
            </div>
                
                </form>
            </div>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<!-- End Bootstrap modal -->


       </div>
   </section>
              

<?php  $this->load->view('footer'); ?>