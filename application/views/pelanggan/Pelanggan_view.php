<?php $this->load->view('header');?>
<?php $this->load->view('sidebar');?>

<div id="content">
  <div class="col-md-12 top-20 padding-0">
    <div class="col-md-12">
      <div class="panel">
        <div class="panel-heading"><h3>Data Pelanggan</h3></div>
        <div class="panel-body">
          <div class="responsive-table">
            <p><button class="btn btn-success"  data-toggle="modal" data-target="#myModal" title='Tambah Data'> <i class="fa fa-plus"></i> <span>Pelanggan</span></button></p>
            <table id="datatables-example" class="table table-striped table-bordered" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>NO</th>
                  <th>No Pelanggan</th>
                  <th>Nama</th>
                  <th>Tanggal Pasang Sambungan</th>
                  <th>Status</th>
                  <th>ACTION</th>
                </tr>
              </thead>
              <tbody> 
                <tr> 
                 <?php
                 $no = 1;
                 $i =1;
                 foreach ($list_pelanggan->result() as $row) {
                   ?>
                   <td align="center"><?php echo $no++;?></td>
                   <td><?php echo $row->no_pelanggan; ?></td>
                   <td><?php echo $row->nama; ?></td>
                   <td><?php echo $row->tgl_pasang; ?></td> 
                   <td><?php echo $row->status_vm; ?></td>
                   <td>
                    <button class='btn btn-sm btn-success' title='Detail'  data-toggle="modal" data-target="#detailModal<?php echo $i;?>"><i class='fa fa-align-justify'></i>Detail</button>
                    <button class='btn btn-sm btn-primary' title='Edit' class="btn btn-info-btn-xs" data-toggle="modal" data-target="#myModal<?php echo $i;?>"><i class="fa fa-edit"></i>Edit</button>
                    <a href="<?php echo site_url('pelanggan/hapus/'.$row->no_pelanggan)?>" class="button special" onclick="return confirm('Apakah Anda Ingin Menghapus Data Ini?')">
                      <button class='btn btn-sm btn-danger' class="btn btn-info-btn-xs" title='Hapus'><i class="fa fa-trash-o"></i>Delete</button>
                    </a>
                  </td>
                </tr>

                <!-- bootstrap modal detail  -->
                <div class="modal fade" id="detailModal<?php echo $i;?>"  tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                  <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h3 class="modal-title">Detail Data Pelanggan</h3>
                      </div>
                      <div class="modal-body">
                        <label class="col-md-4 control-label">No KK</label>
                        <div class="col-md-8">
                          <p class="form-control-static" id="no_kk"><?php echo $row->no_kk; ?></p>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-md-4 control-label">No KTP</label>
                        <div class="col-md-8">
                          <p class="form-control-static" id="no_ktp"><?php echo $row->no_ktp; ?></p>
                        </div>
                      </div>
                      <div class="form-group">
                       <label class="col-md-4 control-label">NO. TLP</label>
                       <div class="col-md-8">
                        <p class="form-control-static" id="no_tlp"><?php echo $row->no_tlp; ?></p>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-md-4 control-label">Pekerjaan</label>
                      <div class="col-md-8">
                        <p class="form-control-static" id="pekerjaan"><?php echo $row->pekerjaan; ?></p>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-md-4 control-label"> Kecamatan</label>
                      <div class="col-md-8">
                        <p class="form-control-static" id="nama_kec"><?php echo $row->nama_kec; ?></p>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-md-4 control-label"> Desa</label>
                      <div class="col-md-8">
                        <p class="form-control-static" id="nama_desa"><?php echo $row->nama_desa; ?></p>
                      </div>
                       <div class="form-group">
                      <label class="col-md-4 control-label">Sub Golongan</label>
                      <div class="col-md-8">
                        <p class="form-control-static" id="kode_gol"><?php echo $row->nama_sub; ?></p>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-md-4 control-label">NO. Meteran</label>
                      <div class="col-md-8">
                        <p class="form-control-static" id="nama_desa"><?php echo $row->no_meteran; ?></p>
                      </div>
                    </div>
                             <!-- <div class="form-group">
                            <label class="col-md-4 control-label">Jumlah Tagihan</label>
                              <div class="col-md-8">
                                <p class="form-control-static" id="status"><?php echo $row->jml_tagihan; ?></p>
                              </div>
                            </div> -->
                            <div class="form-group">
                              <label class="col-md-4 control-label">Dusun</label>
                              <div class="col-md-8">
                                <p class="form-control-static" id="status"><?php echo $row->dusun; ?></p>
                              </div>
                            </div>
                            
                            <!-- <div class="modal-footer"> -->
                              <!-- <button type="button" class="btn btn-info" data-dismiss="modal">Oke</button> -->
                              <div class="modal-footer">
                                <button type="button" class="btn btn-info" data-dismiss="modal">Oke</button>
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
                <?php  ?>
                <!-- end modal detail-->

                <!-- bootstrap modal edit  -->
                <div class="modal fade" id="myModal<?php echo $i++;?>"  tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                  <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h3 class="modal-title">Edit Data Pelanggan</h3>
                      </div>
                      <div class="modal-body form">
                       <form method="post" action="<?php echo site_url('Pelanggan/update') ?>">
                         <label class="control-label col-md-3">Nama Jenis Pelanggan</label>
                         <div class="row uniform">
                          <div class="col-md-9">
                            <input type="text" name="nama" id="demo-name" class="form-control" value="<?php echo $row->nama?>" placeholder="Nama" />
                            <input type="hidden" name="id" id="demo-name" class="form-control" value="<?php echo $row->no_pelanggan?>"  placeholder="Nomor Pelanggan" />
                          </div>
                        </div>
                        <label class="control-label col-md-3">NO. Telephone</label>
                        <div class="row uniform">
                          <div class="col-md-9">
                            <input type="text" name="tlp" id="demo-name"  class="form-control" value="<?php echo $row->no_tlp?>" placeholder="Nomor Telephone" />
                          </div>
                        </div>
                        <label class="control-label col-md-3">NO. KK</label>
                        <div class="row uniform">
                          <div class="col-md-9">
                            <input type="text" name="kk" id="demo-name"  class="form-control" value="<?php echo $row->no_kk?>" placeholder="Nomor KK" />
                          </div>
                        </div>
                        <label class="control-label col-md-3">NO. KTP</label>
                        <div class="row uniform">
                          <div class="col-md-9">
                            <input type="text" name="ktp" id="demo-name"  class="form-control" value="<?php echo $row->no_ktp?>" placeholder="Nomor KTP" />
                          </div>
                        </div>
                      <!-- <label class="col-md-4 control-label">Kode Tarif</label>
                      <div class="row uniform">
                          <div class="col-md-9">
                            <input type="text" name="kode_gol" id="demo-name"  class="form-control" value="<?php echo $row->kode_tarif?>" placeholder="Kode Tarif" />
                          </div>
                        </div> -->
                        <label class="control-label col-md-3">Pekerjaan</label>
                        <div class="row uniform">
                          <div class="col-md-9">
                            <input type="text" name="kerja" id="demo-name"  class="form-control" value="<?php echo $row->pekerjaan?>" placeholder="Pekerjaan" />
                          </div>
                        </div>
                        <label class="control-label col-md-3">Dusun</label>
                        <div class="row uniform">
                          <div class="col-md-9"> 
                            <input type="text" name="dusun" id="demo-name"  class="form-control" value="<?php echo $row->dusun?>" placeholder="Dusun" />
                          </div>
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

         <?php } ?>
       </tbody>
     </table>
   </div>
   <!-- end modal edit-->
   <!-- Bootstrap modal ADD -->
   <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h3 class="modal-title">Add Data Pelanggan</h3>
        </div>
        <div class="modal-body form">
          <form id="addForm" class="form-horizontal" method="post" action="<?php echo site_url('pelanggan/input_proses/')?>">
            <div class="form-body">
              <div class="form-group">
                  <div class="col-md-9 ">
                  <input type="hidden" class="form-control" name="no"  placeholder="No Pelanggan">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-md-3">Nama</label>
                <div class="col-md-9">
                  <input type="text" onkeypress="return textonly(event);" name="nama" id="nama" placeholder="Nama Pelanggan" class="form-control" type="text">
                  <span class="help-block"></span>
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-md-3"> Tanggal Sambungan</label>
                <div class="col-md-9">
                  <div class="col-md-4" style="padding-right:0px;">
                    <div class="input-group date form_date" data-date="" data-date-format="yyyy-mm-dd" data-link-field="dtp_input2" data-link-format="yyyy-mm-dd">
                      <input class="form-control tgl_p" id="tgl_p" size="16" type="text" value="" readonly placeholder="Tanggal Pasang Sambungan">
                      <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
                    </div>
                    <input type="hidden" id="dtp_input2" class="tgl_p" value="2017-05-05" name="tgl_p"/>
                  </div>
                </div>

              </div>

              <div class="form-group">
                <label class="control-label col-md-3">No Telephone</label>
                <div class="col-md-9">
                  <input  type="text" oninput="this.value = this.value.replace(/[^0-9.]/g,'').replace(/(\..*)\./g, '$1')" name="tlp" id="tlp"  placeholder="No Telephone" class="form-control" type="text">
                  <span class="help-block"></span>
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-md-3">NO. KK</label>
                <div class="col-md-9">
                  <input  type="text" oninput="this.value = this.value.replace(/[^0-9.]/g,'').replace(/(\..*)\./g, '$1')" name="kk" id="kk" placeholder="NO. KK" class="form-control" type="text">
                  <span class="help-block"></span>
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-md-3">NO. KTP</label>
                <div class="col-md-9">
                  <input  type="text" oninput="this.value = this.value.replace(/[^0-9.]/g,'').replace(/(\..*)\./g, '$1')" name="ktp" id="ktp" placeholder="NO. KTP" class="form-control" type="text">
                  <span class="help-block"></span>
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-md-3">Pekerjaan</label>
                <div class="col-md-9">
                         <select name="kerja">
                      <option value="kerja" selected>--Pilih--</option>
                    <option value="PNS">PNS</option>
                    <option value="TNI/POLRI">TNI/POLRI</option>
                     <option value="Wiraswasta">Wiraswasta</option>
                      <option value="Tani">Tani</option>
                       <option value="Nelayan">Nelayan</option>
                  </select>
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-md-3"> Golongan</label>
                <div class="col-md-9 ">
                  <select class="form-control" name="sub" id="sub_golongan">
                    <option>--- Golongan---</option>
                    <?php
                    foreach ($sub->result() as $row) {
                      ?>
                      <option value="<?php echo $row->id_sub; ?>"><?php echo $row->nama_sub; ?></option>
                      <?php } ?>
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-3"> Kecamatan</label>
                  <div class="col-md-9 ">
                    <select class="form-control" name="kec" id="kecamatan">
                      <option>--- Kecamatan ---</option>

                      <?php
                      foreach ($kec->result() as $row) {
                        ?>
                        <option value="<?php echo $row->kode_kec; ?>"><?php echo $row->nama_kec; ?></option>
                        <?php } ?>
                      </select>
                      <span class="help-block"></span>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-md-3"> Desa</label>
                    <div class="col-md-9 ">
                      <select class="form-control" name="des" id="desa">
                        <option>--- Desa---</option>
                      </select>
                      <span class="help-block"></span>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-md-3">Dusun</label>
                    <div class="col-md-9 ">
                      <textarea class="form-control" name="dusun" id="dusun"  rows="5" placeholder="Dusun"></textarea>
                      <span class="help-block"></span>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-md-3">NO Meteran</label>
                    <div class="col-md-9">
                      <input  type="text" oninput="this.value = this.value.replace(/[^0-9.]/g,'').replace(/(\..*)\./g, '$1')" name="no_mtr" id="no_mtr" placeholder="NO Meteran" class="form-control" type="text>
                      <span class="help-block"></span>
                    </div>
                  </div>
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
          <?php $this->load->view('footer'); ?>
          <script src="<?php echo base_url('asset/vendors/validator/jquery.validate.min.js') ?>"></script>

          <script>
            $(document).ready(function () {
              $("#kecamatan").change(function () {
                var url = "<?php echo site_url('Pelanggan/get_desa');  ?>/" + $(this).val();
                $('#desa').load(url);
              })
            });

          </script>
          <script type="text/javascript">
            $('.form_date').datetimepicker({
             startDate:'-1y',
              endDate:'+11m',
              language: 'id',
              weekStart: 1,
              todayBtn: 1,
              autoclose: 1,
              todayHighlight: 1,
              startView: 2,
              minView: 2,
              forceParse: 0
            });

                      var save_method; //for save method string
                      var table;
                      
                      $("#btnSave").click(function() {
                        $("#addForm").submit();
                      });
                      
                      $("#addForm").validate({
                        rules: {
                          nama: "required",
                          tgl_p: "required",
                          tlp: "required",
                          kk: "required",
                          ktp: "required",
                          kerja: "required",
                          sub_golongan: "required",
                          kecamatan: "required",
                          desa: "required",
                          dusun: "required",
                          no_mtr: "required"
                        },
                        messages: {
                          nama: "Mohon isikan Nama",
                          tgl_p: "Mohon isikan Tanggal Sambungan",
                          tlp: "Mohon isikan Nomor Telephone",
                          kk: "Mohon isikan Nomor KK",
                          ktp: "Mohon isikan Nomor KTP",
                          kerja: "Mohon isikan Pekerjaan",
                          sub_golongan: "Mohon isikan Jenis Golongan",
                          kecamatan: "Mohon isikan Nama Kecamatan",
                          desa: "Mohon isikan Nama Desa",
                          dusun: "Mohon isikan Nama Dusun",
                          no_mtr: "Mohon isikan No Meteran",
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

