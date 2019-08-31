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
                    <div class="panel-heading"><h3>Laporan Pelanggan</h3></div> 
    <form method="post" action="<?php echo site_url('Laporan/lap_pel_proses') ?>">
        <div class="modal-body ">
 <div class="form-group">
<label class="control-label">Input Nomor Pelanggan</label>
<input  type="text" name="no_pel"  id="demo-name"  class="form-control" required>
</div>
</di>
<div class="modal-footer">
 <input type="submit" class="btn btn-success" name="myModal" value="Search">
<button type="reset" class="btn btn-danger" data-dismiss="modal">Cancel</button>
        </div>
    </form>
    <?php
    // if (!empty($lap)) {
    //     foreach ($lap as $row) {

    //     }
    // }
    ?>
</section><!--content-->
<?php $this->load->view('footer'); ?>