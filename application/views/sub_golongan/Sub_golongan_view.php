<?php $this->load->view('header');?>
<?php $this->load->view('sidebar');?>

  <div id="content">
   <div class="col-md-12 top-20 padding-0">
    <div class="col-md-12">
   <div class="panel">
  <div class="panel-heading"><h3>Data Sub Golongan</h3></div>
  <div class="panel-body">
  <div class="responsive-table">
  <p><button class="btn btn-success"  data-toggle="modal" data-target="#myModal" title='Tambah Data'> <i class="fa fa-plus"></i> <span>Sub Golongan</span></button></p>
  <table id="datatables-example" class="table table-striped table-bordered" width="100%" cellspacing="0">
  <thead>
 <tr>
<th>NO</th>
<th>Sub Golongan</th>
<th>Golongan</th>
<th>ACTION</th>
 </tr>
 </thead>
<tbody> 
<tr> 
 <?php
 $no = 1;
 $i =1;
 foreach ($list_sub_golongan->result() as $row) { ?>
 <td align="center"><?php echo $no++;?></td>
 <td align="center"><?php echo $row->nama_sub; ?></td>
 <td align="center"><?php echo $row->nama_gol; ?></td>
 <td>
  <button class='btn btn-sm btn-primary' title='Edit'class="btn btn-info-btn-xs" data-toggle="modal" data-target="#myModal<?php echo $i;?>"><i class="fa fa-edit"></i>Edit</button>
 <a href="<?php echo site_url('sub_golongan/hapus/'.$row->id_sub)?>" class="button special" onclick="return confirm('Apakah Anda Ingin Menghapus Data Ini?')">
<button class='btn btn-sm btn-danger' class="btn btn-info-btn-xs" title='Hapus'><i class="fa fa-trash-o"></i>Delete</button></a></td></tr>


<!-- modal edit -->
<div class="modal fade" id="myModal<?php echo $i++;?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title" id="myModalLabel">Edit Data Sub Golongan</h4>
                            </div>
                            <div class="modal-body form">
                                <!--ini taruh from nya disini-->
                                <form method="post" action="<?php echo site_url('Sub_golongan/update') ?>">
                                <div class="form-group">
                            <label class="">Sub Golongan</label>
                                <input type="text" name="nama" id="demo-name"  class="form-control" value="<?php echo $row->nama_sub?>" placeholder="Name" />
                                <input type="hidden" name="id" id="demo-name"  class="form-control"  value="<?php echo $row->id_sub?>"/>
                              </div>
                               <label class="control-label col-md-3">Golongan</label>
                             <div class="row uniform">
                              <div class="col-md-9"> 
                         <select class="form-control" name="kode_gol">
                            <option>--- Golongan---</option>
                               <?php
                         foreach ($list_golongan->result() as $gol) {
                           ?>
                         <option value="<?php echo $gol->kode_gol?>"
                          <?php if($gol->kode_gol==$row->kode_gol){?>selected<?php }?>><?php echo $gol->nama_gol?></option>
                          <?php } ?>
                               </select>
                                 </div>
                                   </div>
                               <div class="modal-footer">
                 <input type="submit" class="btn btn-success" name="myModal" value="simpan">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
            </div>
              </div>
                </form>
            </div>
          </div>
                                <!--end content modal-->
                     
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
                <h3 class="modal-title">Add Data Sub Golongan</h3>
            </div>
            <div class="modal-body form">
                <form  id="addForm"  class="form-horizontal"  method="post" action="<?php echo site_url('sub_golongan/input_proses/')?>#">
                    <input type="hidden" name="id" value="">
                    <div class="form-body">
                        <div class="text" id="text"></div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Nama Sub Golongan</label>
                            <div class="col-md-9">
                                <input type="text" onkeypress="return textonly(event);" name="nama" placeholder="Nama Sub Golongan" class="form-control" type="text" required="required">
                                <span class="help-block"></span>
                            </div>
                        </div>
                        <div class="form-group">
                        <label class="control-label col-md-3">Golongan</label>
                        <div class="col-md-9 ">
                          <select class="form-control" name="kode_gol">
                            <option>--- Golongan---</option>
                               <?php
                         foreach ($list_golongan->result() as $row) {
                           ?>
                         <option value="<?php echo $row->kode_gol?>"><?php echo $row->nama_gol?></option>
                        <?php } ?>
                               </select>
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
                        },
                        messages: {
                          nama: "Mohon isikan Nama Sub Golongan",
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