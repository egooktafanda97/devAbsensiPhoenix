<style>
    @import url('https://fonts.googleapis.com/css2?family=Nunito:wght@200;400;800;900&family=Rubik:wght@300&display=swap');
</style>
<?php
foreach ($getData as $row) {
    $images = base_url('assets/kartu/guru/' . $row['foto']);
    $namanya = $row['nama'];
    if (file_exists($images)) {
        echo "ok";
    }
?>
    <p style="page-break-after: always; width:800px; display:block;margin:auto;">
        <font style="position:relative; margin-left:410px; margin-top:250px; font-weight:900; font-size:1.2em;display:block; color:#000;z-index:3;font-family: 'arial', sans-serif;"><?= $namanya; ?></font>
        <font style="position:relative; margin-left:410px; margin-top:15px; font-weight:900; font-size:1.2em;display:block; color:#000;z-index:3;font-family: 'arial', sans-serif;"><?= $row['nis']; ?></font>
        <img src="<?= base_url(); ?>assets/kartu/template_guru.png" width="100%" style="z-index:2;margin-top:-290px;" />
        <img src="<?= $images; ?>" style="    position: absolute;z-index: 5;margin-top: -879px;margin-left: 102px;width: 144px;height: 196px;background-size: cover;object-fit: cover;border-radius:10px; border:4px outset #04403f" />

        <img src="<?= base_url(); ?>assets/kartu/qrcode/<?= $row['qrcode']; ?>" width="16%" style="position:relative;z-index:1;bottom:0px; margin-top:-457px; margin-left:107px;" />
        <font style="position:absolute;z-index:4;margin-top:-380px; margin-left:40px;font-family: 'arial', sans-serif;font-size:1.1em; font-weight:900;">GURU/STAFF</font>
    </p>
<?php }

echo count($getData);

?>