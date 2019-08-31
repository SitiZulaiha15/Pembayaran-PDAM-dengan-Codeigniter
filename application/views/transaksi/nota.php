<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        foreach ($nota as $row) {
            ?>
            <table>
                <tr>
                    <td><img style="height: 160px"src="<?php echo base_url('asset/img/kop.png') ?>"></td></td>
                </tr>
                <tr>
                    <td colspan="4" align="center">
                        <hr size="50px">
                    </td>
                    
                </tr>
                <tr>
                    <td colspan="4" align="center">
                        <B>BUKTI PEMBAYARAN REKENING AIR</B>
                    </td>
                </tr>
            </table> 

            <table>
            <tr>

                    <td>Rekening Bulan</td> 
                    <td>:</td>               
                    <td><?php echo $this->Transaksi_model->bulan($row->tgl_bayar);?></td>                
                               
                </tr>
                <tr>
                    <td>Nomor Pelanggan</td> 
                    <td>:</td>               
                    <td><?php echo $row->no_pelanggan; ?></td>
                    <td colspan="4" align="center">              
                    <td>Tanggal Bayar</td> 
                    <td>:</td>               
                    <td><?php echo $this->Transaksi_model->tgl($row->tgl_bayar); ?></td>                
                </tr>
                <tr>
                    <td>Nama Pelanggan</td>
                    <td>:</td>                
                    <td><?php echo $row->nama; ?></td> 
                      <td colspan="4" align="center">               
                    <td>Pencetak</td> 
                    <td>:</td>               
                    <td><?php echo $row->nama_petugas; ?></td>                
                </tr>
                <tr>
                    <td>Alamat</td> 
                    <td>:</td>               
                    <td><?php echo $row->dusun; ?></td> 
                      <td colspan="4" align="center">               
                    <td>Nomor Rek</td>
                    <td>:</td>                
                    <td><?php echo $row->no_meteran; ?></td>                
                </tr>
                <tr>
                    <td>Tarif/ Golongan</td>
                    <td>:</td>                
                    <td><?php echo $row->kode_tarif; ?></td>                
                    <td></td>                
                    <td></td>                
                </tr>
                <tr>
                    <td>Meter Awal</td>
                    <td>:</td>                
                    <td><?php echo $row->mtr_awal-$row->vol; ?> M<sup>3</sup></td> 
                      <td colspan="4" align="center">               
                    <td>Rekening Air</td>
                    <td>:</td>                
                    <td><?php echo $this->Transaksi_model->rupiah($row->jml_tagihan); ?></td>                

                </tr>
                <tr>
                    <td>Meter Akhir</td> 
                    <td>:</td>               
                    <td><?php echo $row->mtr_awal; ?>M<sup>3</td>   
                      <td colspan="4" align="center">             
                    <td>Dana Meter</td>
                    <td>:</td>                
                    <td><?php echo $this->Transaksi_model->rupiah($danamtr); ?></td>                
                </tr>
                <tr>
                    <td>Pemakaian</td> 
                    <td>:</td>               
                    <td><?php echo $row->vol; ?>M<sup>3</td>
                      <td colspan="4" align="center">                
                    <td>Administrasi</td> 
                    <td>:</td>               
                    <td><?php echo $this->Transaksi_model->rupiah($admins); ?></td>
                </tr>
                <tr>
                    <td>Status V/M</td>
                    <td>:</td>                
                    <td><?php echo $row->status_vm; ?></td>  
                      <td colspan="4" align="center">              
                    <td>Denda</td>  
                    <td>:</td>              
                    <td><?php echo $this->Transaksi_model->rupiah($row->denda); ?></td>
                </tr>
                <tr>
                    <td>Kondisi Air</td> 
                    <td>:</td>               
                    <td><?php echo $row->kondisi_air; ?></td>                
                     <td colspan="4" align="center">                
                    <td>Total Bayar</td>
                    <td>:</td>                
                    <td><?php echo $this->Transaksi_model->rupiah($row->jml_tagihan + $row->denda + $admins + $danamtr) ; ?></td>               
                </tr>
                <tr>
                       
                    <td>Terbilang</td>
                    <td>:</td>                
                    <td><?php echo $this->Transaksi_model->terbilang($row->jml_tagihan + $row->denda + $admins + $danamtr).' Rupiah'; ?></td>
                    <td></td>                
                    <td></td> 
                    <br/><br/>                           
                </tr>
                <tr>
                     <td colspan="2" align="center">Yang Membayar</td>
                      <td colspan="8" align="center">                
                    <td colspan="2" align="center">Yang Menerima</td>
                </tr>
                <tr>
                    <td colspan="4" align="center"><br><br></td>   
                     <td colspan="8" align="center">                                                
                    <td colspan="2" align="center"></td>   <td></td>                
                    <td></td>                                                
                </tr>
                <tr>
                    <td colspan="2" align="center" >(.......................)</td>  
                      <td colspan="8" align="center">                                                
                    <td colspan="2" align="center" >(<?php echo $row->nama_petugas; ?>)</td>                                                  
                </tr>


          </table>

        <br/><br/>
        <p>Gunakan Air Dengan Bijak, Mari Hemat Air. Pembayaran paling lambat tanggal 10 tiap bulan, Tiga bulan tidak melakukan pembayaran akan dikenakan pemutusan saluran</p>
       
            <?php
        }

        ?> 
    </body>
</html>
