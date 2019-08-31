<?php
header("Content-type: application/octet-stream");
header("Content-Disposition: attachment; filename=laporan.xls");
header("Pragma: no-cache");
header("Expires: 0");
?>
<!DOCTYPE html>
<head>
    <title>Laporan</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>">
</head>
<body>
    <div class="container">
        <table>
               <tr>
                    <td><img style="height: 160px"src="<?php echo base_url('asset/img/kop.png') ?>"></td></td>
                </tr>
                <tr>
                    <td colspan="7" align="center">
                        <hr size="50px">
                    </td>
                    
                </tr>
                <tr>
                    <td colspan="7" align="center">
                        <B>BUKTI PEMBAYARAN REKENING AIR</B>
                    </td>
                </tr>
            </table>
        <p></p>

        <table class="table table-bordered" border="1" width="100%">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nomor Pelanggan</th>
                    <th>Nama Pelanggan</th>
                    <th>NO. KK</th>
                    <th>NO. KTP</th>
                    <th>Pekerjaan</th>
                    <th>Golongan</th>
                    <th>Desa</th>
                    <th>Wilayah</th>
                    <th>Vol</th>
                    <th>Tanggal Transaksi</th>
                    <th>Jumlah Tagihan</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                foreach ($lap as $row) {
                    ?>
                    <tr>
                        <td><?php echo $no++; ?></td>
                        <td><?php echo $row->no_pelanggan; ?></td>
                        <td><?php echo $row->nama; ?></td>
                        <td><?php echo $row->no_kk; ?></td> 
                        <td><?php echo $row->no_ktp; ?></td>
                         <td><?php echo $row->pekerjaan; ?></td>
                        <td><?php echo $row->kode_tarif; ?></td>
                        <td><?php echo $row->nama_desa; ?></td>
                        <td><?php echo $row->dusun; ?></td>
                        <td><?php echo $row->vol; ?></td>
                        <td><?php echo $row->tgl_transaksi; ?></td>
                        <td><?php echo $this->Transaksi_model->rupiah($row->jml_tagihan); ?></td>
                          <td><?php echo $row->status; ?></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>

    </div>
</body>
</html>