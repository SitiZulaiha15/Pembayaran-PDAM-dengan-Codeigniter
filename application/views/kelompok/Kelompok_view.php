<?php $this->load->view('header');?>
<?php $this->load->view('sidebar');?>

  <div id="content">
              <div class="col-md-12 top-20 padding-0">
                <div class="col-md-12">
                  <div class="panel">
                    <div class="panel-heading"><h3>Data Kelompok</h3></div>
                    <div class="panel-body">
                      <div class="responsive-table">
  <p><button class="btn btn-success"  data-toggle="modal" data-target="#myModal" title='Tambah Data'> <i class="fa fa-plus"></i> <span>Kelompok</span></button></p>
                      <table id="datatables-example" class="table table-striped table-bordered" width="100%" cellspacing="0">
                      <thead>
                        <tr>
<th>NO</th>
<th>KELOMPOK</th>
<th>ACTION</th>
 </tr>
 </thead>
<tbody> 
<tr> 
 <?php
 $no = 1;
 $i =1;
 foreach ($list_kelompok->result() as $row) {
 ?>
 <td align="center"><?php echo $no++;?></td>
 <td align="center"><?php echo $row->nm_kelompok; ?></td>
 <td>
    <button class='btn btn-sm btn-primary' title='Edit'class="btn btn-info-btn-xs" data-toggle="modal" data-target="#myModal<?php echo $i;?>"><i class="fa fa-edit"></i>Edit</button>
 <a href="<?php echo site_url('Kelompok/hapus/'.$row->id_kelompok)?>" class="button special" onclick="return confirm('Apakah Anda Ingin Menghapus Data Ini?')">
<button class='btn btn-sm btn-danger' class="btn btn-info-btn-xs" title='Hapus'><i class="fa fa-trash-o"></i>Delete</button>
</a>
    </td>
</tr>


<!-- modal Edit -->

<!-- modal edit -->
<div class="modal fade" id="myModal<?php echo $i++;?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title" id="myModalLabel">Edit Data Kelompok</h4>
                            </div>
                            <div class="modal-body">
                                <!--ini taruh from nya disini-->
                                <form method="post" action="<?php echo site_url('Kelompok/update') ?>">
                                <div class="form-group">
                            <label class="">Jenis Kelompok</label>
                                <input type="text" name="nama" id="demo-name"  class="form-control" value="<?php echo $row->nm_kelompok?>" placeholder="Name" />
                                <input type="hidden" name="id" id="demo-name"  class="form-control"  value="<?php echo $row->id_kelompok?>"/>
                              </div>
                               <div class="modal-footer">
                 <input type="submit" class="btn btn-success" name="myModal" value="simpan">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
            </div>
              </div>
                </form>
            </div>
                                <!--end content modal-->
                            </div>
                        </div>
                    </div>
                </div>
<!-- end modal edit-->
<?php } ?>
</tbody>
</table>
</div>


<!-- Bootstrap modal Add -->
<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h3 class="modal-title">Add Data Kelompok</h3>
            </div>
            <div class="modal-body form">
                <form method="post" class="form-horizontal" action="<?php echo site_url('Kelompok/input_proses/')?>#">
                    <input type="hidden" name="id" value="">
                    <div class="form-body">
                        <div class="text" id="text"></div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Nama Jenis Kelompok</label>
                            <div class="col-md-9">
                                <input name="nama_kelompok" placeholder="Nama Jenis Kelompok" class="form-control" type="text">
                                <span class="help-block"></span>
                            </div>
                        </div>
                  
            <div class="modal-footer">
                 <input type="submit" class="btn btn-success" name="myModal" value="simpan">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
            </div>
              </div>
                </form>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<!-- End Bootstrap modal -->

       </div>
   </section>
                                                
                                                        
<?php  $this->load->view('footer'); ?>