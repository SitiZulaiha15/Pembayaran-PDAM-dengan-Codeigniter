<?php $this->load->view('header');?>
<?php $this->load->view('sidebar');?>

  <div id="content">
              <div class="col-md-12 top-20 padding-0">
                <div class="col-md-12">
                  <div class="panel">
                    <div class="panel-heading"><h3>Laporan Tagihan</h3></div>
                    <div class="panel-body">
                      <div class="responsive-table">
                      <table id="datatables-example" class="table table-striped table-bordered" width="100%" cellspacing="0">
                      <thead>
                        <tr> 
                    <th>NO</th>                 
                    <th>NO. Pelanggan</th>
                    <!-- <th>Nama</th> -->
                    <th>Total Tagihan</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                 $no = 1;
                $b = $this->Laporan_model->bubble($lap);
                foreach ($b as $row) {
                    ?>
                    <tr>
                        <td><?php echo $no++;?></td>
                        <td><?php echo $row->no_pelanggan; ?></td>
                        <td><?php echo $this->Transaksi_model->rupiah($row->total); ?></td>
                        <td>
                         <a href="<?php echo site_url('Laporan/get_by_id/' . $row->no_pelanggan); ?>" class="button special">
                            <button class='btn btn-sm btn-success' title='Detail'><i class='fa fa-align-justify'></i>Detail</button></a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>

        </table>
    </div>
    <!--</div>-->
</section><!--content-->
<?php $this->load->view('footer'); ?>
