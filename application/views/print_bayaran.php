<body>

    <table border="1px">
        <tr>
            <td width="100px">
                <table cellpadding="40">
                    <td>
                        <tr>
                            <div class="lead">KWITANSI PEMBAYARAN</div>
                        </tr>
                    </td></br>
                    <img src=" <?php echo base_url() ?>assets/img/lpk.jpg" width="90px">
                    <tr>Lpk Uri Sarang </tr>

            </td>
        </tr>
    </table>
    </td>
    <td>
        <?php
        foreach ($bayar as $byr) : ?>
            <table cellpadding="4">
                <tr>
                    <td>
                        <div class="lead">Telah terima dari:</div>
                    </td>
                    <td>
                        <div class="value"> <?php echo $byr->nama_siswa ?></div>
                    </td>
                </tr>
                <tr>

                <tr>
                    <td>
                        <div class="lead">Tanggal:</div>
                    </td>
                    <td>
                        <?php echo $byr->tanggal_byar ?>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="lead">Uang Sejumlah Rp. </div>
                    </td>
                    <td>
                        <?php echo rupiah($byr->nominal) ?>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="lead">Untuk Pembayaran</div>
                    </td>
                    <td>
                        <?php echo "Pembayaran kursus" ?>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="lead">Keterangan</div>
                    </td>
                    <td><?php if ($byr->total == 0) {
                            echo "Belum Bayar";
                        } else if ($byr->total < 2100000) {
                            $data = 2100000 - $byr->total;
                            echo "Kurang ", rupiah($data);
                        } else {
                            echo "Lunas";
                        } ?></td>
                </tr>
                <tr>
                    <td colspan="2">&nbsp;</td>
                </tr>
                <tr>
                    <td>
                        <div class="lead">Penerima:</div>
                    </td>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td>____________________________________________________</td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td>
                        <div class="value"><?php echo ($byr->penerima) ?></div>
                    </td>
                </tr>
            </table>
    </td>
    </tr>
    </hr>
<?php endforeach; ?>
</table>
<script type="text/javascript">
    window.print();
</script>
</body>

</html>
<html>