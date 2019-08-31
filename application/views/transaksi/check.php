<?php
    header ("Cache-Control: no-cache, must-revalidate");
    header ("Pragma: no-cache");
    header ("Content-type: application/x-msexcel");
    header ("Content-Disposition: attachment; filename=cetak-laporan-excel.xls");
    ?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
//        if(!empty($nota)){
        foreach ($nota as $row) {
            ?>
            <table>
                <tr>
                    <td><img style="height: 200px"src="<?php echo base_url('assets/images/logo_1.png') ?>"></td>
                    <td align="center" colspan="2">
                        <h2>PEMERINTAH KABUPATEN MANGGARAI TIMUR</h2>
                        <h2>DINAS PEKERJAAN UMUM DAN PENATAAN RUANG</h2>
                        <h4>BADAN LAYANAN UMUM DAERAH (BLUD) SISTEM PENGADAAN AIR MINUM (SPAM)</h4>
                        <h4>BORONG</h4>
                    </td>
                    <td><img style="height: 250px" src="<?php echo base_url('assets/images/logo_PU.png') ?>"></td>
                </tr>
                <tr>
                    <td colspan="4" align="center">
                        <p>BUKTI PEMBAYARAN REKENING AIR</p>
                    </td>
                </tr>
                <tr>
                    <td>Rekening Bulan</td>                
                    <td></td>                
                    <td></td>                
                    <td></td>                
                </tr>
                <tr>
                    <td>Nomor Pelanggan</td>                
                    <td><?php echo $row->no_pelanggan; ?></td>                
                    <td>Tanggal Bayar</td>                
                    <td><?php echo $row->tgl_bayar; ?></td>                
                </tr>
                <tr>
                    <td>Nama Pelanggan</td>                
                    <td><?php echo $row->nama; ?></td>                
                    <td>Pencetak</td>                
                    <td></td>                
                </tr>
                <tr>
                    <td>Alamat</td>                
                    <td></td>                
                    <td>Nomor Rek</td>                
                    <td><?php echo $row->no_meteran; ?></td>                
                </tr>
                <tr>
                    <td>Tarif/ Golongan</td>                
                    <td></td>                
                    <td></td>                
                    <td></td>                
                </tr>
                <tr>
                    <td>Meter Awal</td>                
                    <td></td>                
                    <td>Rekening Air</td>                
                    <td><?php echo $row->jml_tagihan; ?></td>                
                </tr>
                <?php
                $dana = 5000;
                $dana_admin = 5000;
                $denda = 0;
                ?>
                <tr>
                    <td>Meter Akhir</td>                
                    <td><?php echo $row->mtr_awal; ?></td>                
                    <td>Dana Meter</td>                
                    <td><?php echo $dana; ?></td>                
                </tr>
                <tr>
                    <td>Pemakaian</td>                
                    <td></td>                
                    <td>Administrasi</td>                
                    <td><?php echo $dana_admin; ?></td>
                </tr>
                <tr>
                    <td>Status V/M</td>                
                    <td></td>                
                    <td>Denda</td>                
                    <td><?php echo $denda; ?></td>
                </tr>
                <tr>
                    <td>Kondisi Air</td>                
                    <td></td>                
                    <td></td>                
                    <td></td>                
                </tr>
                <tr>
                    <td></td>                
                    <td></td>                
                    <td>Total Bayar</td>                
                    <td></td>                
                </tr>
                <tr>
                    <td>Terbilang</td>                
                    <td></td>                
                    <td></td>                
                    <td></td>                
                </tr>
                <tr>
                    <td colspan="2" align="center">Yang Membayar</td>                                                  
                    <td colspan="2" align="center">Yang Menerima</td>                                                  
                </tr>
                <tr>
                    <td colspan="2" align="center"></td>                                                  
                    <td colspan="2" align="center"></td>                                                  
                </tr>
                <tr>
                    <td colspan="2" align="center" >(.......................)</td>                                                  
                    <td colspan="2" align="center" >(.......................)</td>                                                  
                </tr>




            </table>
            <?php
        }
//        }
//        $filename = "laporanPhp.csv";
//        header('Content-type: application/csv');
//        header('Content-Disposition: attachment; filename='.$filename);
//Gunakan perintah pencetakan ke layar agar data tidak kosong
//        echo $output;
        ?>
        <p style="text-align: center"><a href="<?php echo base_url() ?>Transaksi/cetakexcel">Cetak Excel</a>   </p>
    </body>
</html>
