<?php $this->load->view('header');?>
<?php $this->load->view('sidebar');?>

  <div id="content">
              <!--  <div class="panel box-shadow-none content-header">
                  <div class="panel-body">
                    <div class="col-md-12">
                        <h3 class="animated fadeInLeft">Data Tables</h3>
                        <p class="animated fadeInDown">
                          Table <span class="fa-angle-right fa"></span> Data Kelompok
                        </p>
                    </div>
                  </div>
              </div> -->
              <div class="col-md-12 top-20 padding-0">
                <div class="col-md-12">
                  <div class="panel">
                    <div class="panel-heading"><h3>Laporan Wilayah</h3></div> 
    <form method="post" action="<?php echo site_url('Laporan/lap_bykec_proses') ?>">
         <div class="modal-body form">
              
         <div class="form-body">
            <div class="form-group">
          <P><label class="control-label col-md-3">Kecamatan</label></P>
           <!-- <div class="col-md-9"> -->
          <P><select class="form-control" name="kec">
              <option>--- Kecamatan---</option><
               <?php
              foreach ($kec->result() as $ke) {
               ?>
            <option value="<?php echo $ke->kode_kec; ?>"><?php echo $ke->nama_kec; ?></option>
                                              <?php } ?>
                                              <span class="help-block"></span>
                                            </select></P>
                                          </div>
                                        </div>
                     
            <div class="modal-footer">
               <input type="submit" class="btn btn-success" name="myModal" value="Search">
              <button type="reset" class="btn btn-danger" data-dismiss="modal">Cancel</button>
            </div>
        </div>
    </form>

</div>
</section><!--content-->
<?php $this->load->view('footer'); ?>