<?php $this->load->view('header');?>
<?php $this->load->view('sidebar');?>

  <div id="content">
 <div class="col-md-12 top-20 padding-0">
                <div class="col-md-12">
                  <div class="panel">
                    <div class="panel-heading"><h3>Meter Pelanggan</h3></div>
                    <div class="panel-body">
                      <div class="responsive-table">  
<!-- <h3 class="inner-tittle two">Meter Pelanggan </h3> -->
  <form method="post" action="<?php echo site_url('Transaksi/input_meter/')?>#">
                   <div class="modal-body ">
                      <div class="form-group">
                          <label class="control-label">Input Nomor Pelanggan</label>
                          <input  type="text" name="id"  id="demo-name"  class="form-control" required>
                          </div>
                      </di>
                <div class="modal-footer">
               <input type="submit" class="btn btn-success" name="myModal" value="Search">
              <button type="reset" class="btn btn-danger" data-dismiss="modal">Cancel</button>
            </div>
                
                </form>

  <!--menampilkan data pelanggan setelah di cari-->
    <?php
    $pelanggan = 0;
    $gol = 0;
    if (!empty($pel)) {
        foreach ($pel as $row) {
            ?>
            <div class="table-wrapper">
                <table class="table table-bordered">
<thead>
<tr> 
                            <th>No. Pelanggan</th>
                            <th>Nama</th>
                            <th>No. KK</th>
                            <th>No. KTP</th>
                            <th>Pekerjaan</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><?php echo $row->no_pelanggan; ?></td>
                            <td><?php echo $row->nama; ?></td>
                            <td><?php echo $row->no_kk; ?></td>
                            <td><?php echo $row->no_ktp; ?></td>
                            <td><?php echo $row->pekerjaan; ?></td>
                            <td>
                   <!-- <div class="modal-footer"> -->
               <input type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal" value="Input">
            <!-- </div> -->

                            </td>
                        </tr>
                    </tbody>

                </table>
            </div>
            <?php
            $pelanggan = $row->no_pelanggan;
            $gol = $row->kode_gol;

        }
      }
      $awal = 0;
      if (!empty ($mtr_awal)){
        foreach ($mtr_awal as $row) {
          $awal = $row->mtr_awal;
                  }
      }
      ?>
    <!-- Modal ini muncul saat di klik tombol input-->
   <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Input Meter</h4>
                </div>
                <div class="modal-body form">
                    <!--ini taruh from nya disini-->
                    <form method="post" action="<?php echo site_url('Transaksi/input_proses/') ?>" name="myForm" onsubmit="return validasiForm()">
                        <!-- <div class="row uniform"> -->
                          <input type="hidden" name="no_pel" value="<?php echo $pelanggan?>">
                          <input type="hidden" name="kode" value="<?php echo $gol?>">
                          <input type="hidden" name ='no_transaksi' value="<?php echo $no_trans ?>"/>
                              <!--meter awal-->
                         <div class="form-group">
                        <label class="control-label col-md-3">Meter Awal :</label>
                        <div class="col-md-9">
                          <input type="text" name="mtr_awal" placeholder="Meter Awal" class="form-control" value="<?php echo $awal?>" required="required">
                          <span class="help-block"></span>
                        </div>
                      </div>

 <div class="form-group">
                          <label class="control-label col-md-3"> Tanggal Baca Meter</label>
                          <div class="col-md-9">
                            
                            <div class="12u$">
                                 <div class="input-group date form_date col-md-6" data-date="" data-date-format="yyyy-mm-dd" data-link-field="dtp_input2" data-link-format="yyyy-mm-dd">
                                    <input class="form-control" name="tgl_b" size="16" type="text" readonly placeholder="Tanggal Baca Meter">
                                    <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
                                </div>
                                </div>
                          </div>

                      </div>
                             <!--form meter akhir-->
                             <div class="form-group">
                          <label class="control-label col-md-3">Meter Akhir</label>
                          <div class="col-md-9">
                              <input type="text" name="mtr_akhir" id="mtr-akhir"  class="form-control" required="required" placeholder="Meter Akhir"/>

                              <span class="help-block"></span>
                              </div>
                              <div class="6u 12u$(small)">
                                <span id="nameloc"></span>
                            </div>
                      </div>
                       <input type="hidden" id="dtp_input2" value=""/>
                            <!--form petugas dari database-->
                      <div class="form-group">
                        <label class="control-label col-md-3">Petugas</label>
                              <div class="col-md-9"> 
                         <select class="form-control" name="petugas">
                            <option>--- Petugas---</option>
                               <?php
                         foreach ($petugas->result() as $pet) {
                           ?>
                         <option value="<?php echo $pet->no_petugas?>"><?php echo $pet->nama_petugas?></option>
                        <?php } ?>
                      </select>
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

</section><!--content-->
<?php $this->load->view('footer'); ?>

<!--javascript untuk tanggal-->
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

    // function validasiForm(){
    //   var x = document.forms["myForm"]["mtr_awal"].value;
    //   if (x > parseInt($("#mtr-akhir").var())){
    //     $("#mtr-akhir").css("background-color", "pink");
    //     $("#mtr-akhir").val(x);
    //     alert("Meter Akhir Invalid Value");
    //     return false;
    //   }
    // }

    function validateForm() {
        var x = document.forms["myForm"]["mtr_awal"].value;
        if (x > parseInt($("#mtr-akhir").val())) {
            document.getElementById("nameloc").innerHTML ="Invalid Value Meter Akhir";
            return false;
        }
    }
</script>

