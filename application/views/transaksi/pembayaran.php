<?php $this->load->view('header');?>
<?php $this->load->view('sidebar');?>

  <div id="content">
 <div class="col-md-12 top-20 padding-0">
                <div class="col-md-12">
                  <div class="panel">
                    <div class="panel-heading"><h3>Pembayaran</h3></div>
                    <div class="panel-body">
                      <div class="responsive-table"> 
<form method="post" action="<?php echo site_url('Transaksi/bayar/') ?>">
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

    <?php
    $no = 0;
    if (!empty($pel)) {
        foreach ($pel as $row) {
            //echo $row->no_pelanggan;
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
                            <th></th>
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
            $no = $row->no_pelanggan;
        }
    }
    ?>
    <!-- Modal -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Input Meter</h4>
                </div>
                <div class="modal-body">
                    <!--ini taruh from nya disini-->
                    <form method="post" action="<?php echo site_url('Transaksi/bayar_proses') ?>">
                        <div class="row uniform">  
                            <!--checkbok tagihan-->
                            <?php
                            $no_samb = 0;
                            if (!empty($sambungan)) {
                                foreach ($sambungan as $sam) {
                                    $no_samb = $sam->no_sambungan;
                                }
                            }
                            ?>
                            <input type="hidden" name="sambungan" value="<?php echo $no_samb ?>">
                            <input type="hidden" name="admin" value="<?php echo $this->session->userdata('id') ?>">
                            <input type="hidden" name="no_pelanggan" value="<?php echo $no ?>">
                            <?php
                            if (!empty($tagihan)) {
                                $total = 0;
                                $total_denda = 0;
                                foreach ($tagihan as $row) {    
                                    $tgl_bts_byr = $row->tgl_bts_byr;
                                    list($y, $m, $d) = explode("-", $tgl_bts_byr);
                                    $jatuh_tempo = mktime(0, 0, 0, $m, $d, $y);
                                    $today = mktime(0, 0, 0, date("m"), date("d"), date("Y"));
                                    $denda = 0;
                                    if ($today > $jatuh_tempo) {
                                        $denda = $biaya;
                                    }
                                    ?>
                                    <input type="hidden" name="no_trans" value="<?php echo $row->no_transaksi ?>">
                                    <div class="12u$ 12u$(small)">
                                        <input type="checkbox" name="demo-human" id="" value="<?php // echo $row->no_transaksi           ?>">
                                        <label for="demo-copy">Tagihan Bulan <?php echo $row->jml_tagihan; ?></label>
                                    </div>
                                    <div class="12u$ 12u$(small)">
                                        <input type="hidden" name="denda" value="<?php echo $denda; ?>">
                                        <label for="demo-copy">Denda <?php echo $denda; ?></label>
                                    </div>
                                    <?php
                                    $total += $row->jml_tagihan;
                                    $total_denda += $denda;
                                }
                                ?>
                                <div class="12u$ 12u$(small)">
                                    <label for="demo-copy">Total Tagihan : <?php echo $total + $total_denda; ?></label>
                                </div>
                                  <div class="modal-footer">
               <input type="submit" class="btn btn-success" name="myModal" value="Search">
              <button type="reset" class="btn btn-danger" data-dismiss="modal">Cancel</button>
            </div>

                                <?php
                            } else {
                                echo "<label>Tidak ada Tagihan</label>";
                            }
                            ?>
                        </div>
                    </form>
                    <!--end content modal-->

                </div>
            </div>
        </div>
    </div>
    <!-- Modal -->
</div>
</section><!--content-->
<?php $this->load->view('footer'); ?>


