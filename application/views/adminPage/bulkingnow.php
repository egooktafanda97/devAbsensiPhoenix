<style>
    @import url('https://fonts.googleapis.com/css2?family=Nunito:wght@200;400;800;900&family=Rubik:wght@300&display=swap');
</style>
<?php
$i = 1;
foreach ($getData as $row) {
    if ($row['id'] <= 600) {
        $i++;

        $namanya = strtolower($row['nama']);

        if ($i > 600) {
            break;
        }
?>
        <p style="page-break-after: always; width:800px; display:block;margin:auto;">
            <font style="position:relative; margin-left:410px; font-weight:900; display:block; color:#000;z-index:3;font-family: 'arial'; font-size:<?= strlen($row['nama']) > 21 ? '22px' : '22px' ?>; top: <?= strlen($row['nama']) > 21 ? '5px' : '5px' ?>;margin-top:260px; "><?= ucwords($namanya); ?></font>
            <font style="position:relative; margin-left:410px; margin-top:15px; font-weight:900; display:block; color:#000;z-index:3;font-family: 'arial'; font-size:<?= strlen($row['nama']) > 21 ? '22px' : '22px' ?>"><?= $row['nis']; ?></font>
            <img src="<?= base_url(); ?>assets/kartu/template_small.png" width="100%" style="z-index:2;margin-top:-290px;" />
            <img src="<?= base_url(); ?>assets/kartu/userprofil/<?= $row['foto']; ?>" style="    position: absolute;z-index: 5;margin-top: -879px;margin-left: 102px;width: 144px;height: 196px;background-size: cover;object-fit: cover;border-radius:10px; border:4px outset #04403f" />

            <img src="<?= base_url(); ?>assets/kartu/qrcode/<?= $row['qrcode']; ?>" width="16%" style="position:relative;z-index:1;bottom:0px; margin-top:-457px; margin-left:107px;" />
            <?php
            if ($row['jk'] == 'Laki-Laki') { ?>
                <font style="position:absolute;width:125px; z-index:4;margin-top:-380px; margin-left:40px;font-family: 'arial', sans-serif;font-size:1.1em; font-weight:900;border:0px solid #000; text-align:center; ">SANTRI</font>
            <?php } else { ?>
                <font style="position:absolute;width:125px; z-index:4;margin-top:-380px; margin-left:40px;font-family: 'arial', sans-serif;font-size:1em; font-weight:900;border:0px solid #000; text-align:center; ">SANTRIYAH</font>
            <?php } ?>
        </p>
<?php }
}

// echo count($getData->result());
?>