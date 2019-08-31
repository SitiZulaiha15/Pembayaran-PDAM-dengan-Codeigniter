<?php $this->load->view('header');?>
<?php $this->load->view('sidebar');?>

  <div id="content">
             <div class="col-md-12 top-20 padding-0">
                <div class="col-md-12">
                  <div class="panel">
                    <div class="panel-heading"><h3>Laporan Tagihan Detail</h3></div>      
    <div class="graph">
  <div class="table" ">
    <!--isi content-->
    <?php
        foreach($list_pelanggan->result() as $row){
    ?>
    <form method="post" action="<?php echo site_url('Laporan/lap_tagihan') ?>">
        <div class="row uniform">
          <div class="form-group">
            <label class="col-md-4 control-label">Nama</label>
             <div class="col-md-8">
             <p class="form-control-static" id="no_ktp"><?php echo $row->nama; ?></p>
             </div>
             </div>
              <div class="form-group">
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
                            <label class="col-md-4 control-label">Dusun</label>
                              <div class="col-md-8">
                                <p class="form-control-static" id="status"><?php echo $row->dusun; ?></p>
                              </div>
                            </div>
                            
                 <input type="submit" class="btn btn-success" name="myModal" value="OK">
               
            </div>
              </div>
                
            </div>
              </div>
               
                </form>
           
                                <!--end content modal-->
                            </div>
                        </div>
                    </div>
                </div>
        <?php } ?>


</section><!--content-->
 <?php $this->load->view('footer'); ?>