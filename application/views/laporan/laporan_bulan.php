<?php $this->load->view('header');?>
<?php $this->load->view('sidebar');?>

  <div id="content">
             
              <div class="col-md-12 top-20 padding-0">
                <div class="col-md-12">
                  <div class="panel">
                    <div class="panel-heading"><h3>Laporan Bulanan</h3></div>
    <!--isi content-->
    <form method="post" action="<?php echo site_url('laporan/lap_bulan_proses') ?>">
       <div class="modal-body ">
     <div class="form-group">
        <!-- <label class="control-label">Tanggal Star</label> -->
        <div class="row uniform">
            <div class="12u$">
                <div class="input-group date form_date col-md-6" data-date="" data-date-format="yyyy-mm-dd" data-link-field="dtp_input2" data-link-format="yyyy-mm-dd">
                    <input class="form-control" size="10" type="text" name="tgl_start" placeholder="Start">
                    <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
                </div>
                </div>
            </div>
        </div>
    </div>
   <div class="12u$">
                <div class="input-group date form_date col-md-6" data-date="" data-date-format="yyyy-mm-dd" data-link-field="dtp_input2" data-link-format="yyyy-mm-dd">
                    <input class="form-control" size="10" type="text" name="tgl_end" placeholder="End">
                    <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
                </div>
            </div>
            <div class="modal-footer">
               <input type="submit" class="btn btn-success" name="myModal" value="Search">
              <button type="reset" class="btn btn-danger" data-dismiss="modal">Cancel</button>
            </div>
        </div>
    </form>


</section><!--content-->
<?php $this->load->view('footer'); ?>
<script type="text/javascript">
    $('.form_date').datetimepicker({
        language: 'id',
        weekStart: 1,
        todayBtn: 1,
        autoclose: 1,
        todayHighlight: 1,
        startView: 2,
        minView: 2,
        forceParse: 0
    });
</script>
