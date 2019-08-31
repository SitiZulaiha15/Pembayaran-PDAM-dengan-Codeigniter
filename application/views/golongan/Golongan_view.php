<?php $this->load->view('header');?>
<?php $this->load->view('sidebar');?>

  <div id="content">
   <div class="col-md-12 top-20 padding-0">
   <div class="col-md-12">
   <div class="panel">
   <div class="panel-heading"><h3>Data Golongan</h3></div>
   <div class="panel-body">
   <div class="responsive-table">
   <p><button class="btn btn-success"  data-toggle="modal" data-target="#myModal" title='Tambah Data'> <i class="fa fa-plus"></i> <span>Golongan</span></button></p>
   <table id="datatables-example" class="table table-striped table-bordered" width="100%" cellspacing="0">
    <thead>
    <tr>
<th>NO</th>
<th>Kelompok</th> 
<th>Golongan</th>
<th>Tarif 0-10</th>
<th>Tarif 11-20</th>
<th>Tarif>21</th>
<th>Kode Tarif</th>
<th>ACTION</th>
 </tr>
 </thead>
<tbody> 
<tr> 
 <?php
 $no = 1;
 $i =1;
 foreach ($list_golongan->result() as $row) {
 ?>
<td><?php echo $no++;?></td>
<!-- <td><?php echo $row->kode_gol; ?></td> -->
<td><?php echo $row->nm_kelompok; ?></td>
<td><?php echo $row->nama_gol; ?></td>
<td><?php echo $row->tarif_a; ?></td>
<td><?php echo $row->tarif_b; ?></td>
<td><?php echo $row->tarif_c; ?></td>
<td><?php echo $row->kode_tarif; ?></td>
<td>
<button class='btn btn-sm btn-primary' title='Edit'class="btn btn-info-btn-xs" data-toggle="modal" data-target="#myModal<?php echo $i;?>"><i class="fa fa-edit"></i>Edit</button>
 <a href="<?php echo site_url('Golongan/hapus/'.$row->kode_gol)?>" class="button special" onclick="return confirm('Apakah Anda Ingin Menghapus Data Ini?')">
<button class='btn btn-sm btn-danger' class="btn btn-info-btn-xs" title='Hapus'><i class="fa fa-trash-o"></i>Delete</button>
</a>
    </td>
</tr>

<!-- modal edit -->
<div class="modal fade" id="myModal<?php echo $i++;?>"  tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h3 class="modal-title">Edit Data Golongan</h3>
            </div>
            <div class="modal-body form">
                 <form method="post" action="<?php echo site_url('Golongan/update') ?>">
                   <label class="control-label col-md-3">Nama Golongan</label>
                            <div class="row uniform">
                            <div class="col-md-9">
                                <input type="text" name="nama" id="demo-name" class="form-control" value="<?php echo $row->nama_gol?>" placeholder="Nama" />
                                <input type="hidden" name="id" id="demo-name" class="form-control" value="<?php echo $row->kode_gol?>"  placeholder="Nomor Golongan" />
                              </div>
                            </div>
                             <label class="control-label col-md-3">Tarif 0 - 10</label>
                              <div class="row uniform">
                              <div class="col-md-9">
                                <input type="text" name="tarifa" id="demo-name"  class="form-control" value="<?php echo $row->tarif_a?>" placeholder="Tarif 0 - 10" />
                              </div>
                            </div>
                             <label class="control-label col-md-3">Tarif 11 - 20</label>
                              <div class="row uniform">
                              <div class="col-md-9">
                                <input type="text" name="tarifb" id="demo-name"  class="form-control" value="<?php echo $row->tarif_b?>" placeholder="Tarif 11 - 20" />
                              </div>
                            </div>
                             <label class="control-label col-md-3">Tarif <21</label>
                              <div class="row uniform">
                              <div class="col-md-9">
                                <input type="text" name="tarifc" id="demo-name"  class="form-control" value="<?php echo $row->tarif_c?>" placeholder="Tarif <21" />
                              </div>
                            </div>
                             <label class="control-label col-md-3">Kode Tarif</label>
                             <div class="row uniform">
                              <div class="col-md-9"> 
                                <input type="text" name="kodetarif" id="demo-name"  class="form-control" value="<?php echo $row->kode_tarif?>" placeholder="Kode Tarif" />
                              </div>
                            </div>
                             <label class="control-label col-md-3">Kelompok</label>
                             <div class="row uniform">
                              <div class="col-md-9"> 
                         <select class="form-control" name="id_kel">
                            <option>--- Kelompok---</option>
                               <?php
                         foreach ($list_kelompok->result() as $row) {
                           ?>
                         <option value="<?php echo $row->id_kelompok?>"><?php echo $row->nm_kelompok?></option>
                        <?php } ?>
                               </select>
                                 </div>
                                   </div>   
            <div class="modal-footer">
                <input type="submit" class="btn btn-success" name="myModal" value="simpan">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
            </div>
             </form>
            </div>
        </div><!-- /.modal-content --><!-- /.modal -->

<!-- modal Edit -->

  <?php
   }?>
  </tbody>
  </table>
</div>

<!-- Bootstrap modal Add -->
<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h3 class="modal-title">Add Data Golongan</h3>
            </div>
            <div class="modal-body form">
                <form id="addForm" class="form-horizontal" method="post" action="<?php echo site_url('Golongan/input_proses/')?>#">
                    <input type="hidden" name="id" value="">
                    <div class="form-body">
                        <div class="text" id="text"></div> 
                       <div class="form-group">
                        <label class="control-label col-md-3">Jenis Kelompok</label>
                        <div class="col-md-9 ">
                          <select class="form-control" name="id_kel">
                            <option>--- Kelompok---</option>
                               <?php
                         foreach ($list_kelompok->result() as $row) {
                           ?>
                         <option value="<?php echo $row->id_kelompok?>"><?php echo $row->nm_kelompok?></option>
                        <?php } ?>
                               </select>
                                 </div>
                                   </div>
                        <div class="form-group">
                          <label class="control-label col-md-3">Golongan</label>
                          <div class="col-md-9">
                              <input type="text" onkeypress="return textonly(event);" name="nama" id="nama" placeholder="Golongan" class="form-control" type="text">
                              <span class="help-block"></span>
                              </div>
                      </div>
                         <div class="form-group">
                          <label class="control-label col-md-3">Tarif 0 - 10</label>
                          <div class="col-md-9">
                              <input  type="text" oninput="this.value = this.value.replace(/[^0-9.]/g,'').replace(/(\..*)\./g, '$1')" name="tarifa" id="tarifa" placeholder="Tarif 0 - 10" class="form-control" type="text">
                              <span class="help-block"></span>
                              </div>
                      </div>>
                          <div class="form-group">
                          <label class="control-label col-md-3">Tarif 11 - 20</label>
                          <div class="col-md-9">
                              <input  type="text" oninput="this.value = this.value.replace(/[^0-9.]/g,'').replace(/(\..*)\./g, '$1')" name="tarifb" id="tarifb" placeholder="Tarif 11 - 20" class="form-control" type="text">
                              <span class="help-block"></span>
                              </div>
                      </div>
                        <div class="form-group">
                          <label class="control-label col-md-3">Tarif <21</label>
                          <div class="col-md-9">
                              <input  type="text" oninput="this.value = this.value.replace(/[^0-9.]/g,'').replace(/(\..*)\./g, '$1')" name="tarifc" id="tarifc" placeholder="Tarif <21" class="form-control" type="text">
                              <span class="help-block"></span>
                              </div>
                      </div>
                       <div class="form-group">
                          <label class="control-label col-md-3">Kode Tarif</label>
                          <div class="col-md-9">
                              <input  type="text" onkeypress="return textonly(event);" name="kodetarif" id="kodetarif" placeholder="Kode Tarif" class="form-control" type="text">
                              <span class="help-block"></span>
                              </div>
                      </div>
            <div class="modal-footer">
                 <input type="submit" class="btn btn-success" name="myModal" value="simpan">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
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
<script src="<?php echo base_url('asset/vendors/validator/jquery.validate.min.js') ?>"></script>
<script type="text/javascript">
 var save_method; //for save method string
                      var table;
                      
                      $("#btnSave").click(function() {
                        $("#addForm").submit();
                      });
                      
                      $("#addForm").validate({
                        rules: {
                          nama: "required",
                          tarifa: "required",
                          tarifb: "required",
                          tarifc: "required",
                          kodetarif: "required",
                        },
                        messages: {
                          nama: "Mohon isikan Nama Golongan",
                          tarifa: "Mohon isikan Tarif 0 - 10",
                          tarifb: "Mohon isikan Tarif 11 - 20",
                          tarifc: "Mohon isikan Tarif <21",
                          kodetarif: "Mohon isikan Kode Tarif",
                        }
                      });
                    </script>

<script type="text/javascript">
          function textonly(e){
          var code;
          if (!e) var e = window.event;
          if (e.keyCode) code = e.keyCode;
          else if (e.which) code = e.which;
          var character = String.fromCharCode(code);
          //alert('Character was ' + character);
            //alert(code);
            //if (code == 8) return true;
            var AllowRegex  = /^[\ba-zA-Z\s-]$/;
            if (AllowRegex.test(character)) return true;
            return false;
          }
          </script>
