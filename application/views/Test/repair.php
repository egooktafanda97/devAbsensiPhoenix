<?php
function _rupiah($angka)
{

    $hasil_rupiah = "Rp " . number_format($angka, 0, ',', '.');
    return $hasil_rupiah;
} ?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Hello, world!</title>
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="w-100 p-3 text-right" style="display: flex; justify-content: flex-end;">
                <div style="width: 50%;">

                    <form action="<?= base_url("Test/repair/") ?>" method="get">
                        <div style="display: flex; justify-content: space-between;align-items: center;">
                            <input type="text" name="cari" class="form-control form-control-sm">
                            <button class="btn btn-primary btn-sm ml-3" style="width: 20%;" type="submit">cari</button>
                        </div>
                    </form>

                </div>
            </div>
            <div class="col-9">
                <div class="card mt-3 p-3">
                    <h4>histori Belanja</h4>
                    <div style="display: flex; justify-content: space-between; pl-3 pr-3">
                        <h4>ID <?= $this->uri->segment(3) ?></h4>
                        <div>
                            <div class="pr-5"><strong>Periksa Monitoring</strong> : <?= $main['status'] ?></div>
                            <div class="pr-5"><strong>Tambahan</strong> : <?= $main['perubahan_saldo_siswa'] ?></div>
                            <div class="pr-5"><strong>catatan</strong> : <?= $main['pesan'] ?></div>
                        </div>
                    </div>
                    <hr>
                    <div class="table-responsive">
                        <table class="table table-bordered" style="font-size: .8em !important;">
                            <thead class="thead-dark">
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">id_user</th>
                                    <th scope="col">id_kantain</th>
                                    <th scope="col">id_riwayat</th>
                                    <th scope="col">Nis</th>
                                    <th scope="col">Nama</th>
                                    <th scope="col">waktu transaksi</th>
                                    <th scope="col">aksi</th>
                                    <th scope="col">pesan</th>
                                    <th scope="col">Saldo Awal</th>
                                    <th scope="col">Jumlah Transaksi</th>
                                    <th scope="col">Saldo Akhir</th>
                                    <th scope="col">error</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1;
                                foreach (json_decode($main['history_transaksi_siswa'], true) as $value) { ?>
                                    <tr style="background-color: <?= $value['status'] ? "#f29696" : "" ?>;">
                                        <th scope="row"><?= $i++ ?></th>
                                        <td><?= $value['id_user'] ?></td>
                                        <td><?= $value['oleh'] ?></td>
                                        <td><?= $value['id_riwayat_saldo'] ?></td>
                                        <td><?= $this->db->get_where('tbl_siswa', ["id_user" => $value['id_user']])->row_array()['nis'] ?></td>
                                        <td><?= $this->db->get_where('tbl_siswa', ["id_user" => $value['id_user']])->row_array()['nama_siswa'] ?></td>
                                        <td><?= $value['waktu'] ?></td>
                                        <td><?= $value['aksi'] ?></td>
                                        <td><?= $value['pesan'] ?></td>
                                        <td><?= _rupiah($value['saldo_awal']) ?></td>
                                        <td><?= _rupiah($value['jumlah_aksi']) ?></td>
                                        <td><?= _rupiah($value['saldo']) ?></td>
                                        <td><?= $value['status'] ? "Ya" : "Tidak" ?></td>
                                    </tr>
                                <?php } ?>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="card mt-4 p-3">
                    <form action="<?= base_url('Test/update_repair') ?>" method="post">
                        <input type="hidden" name="id_repair" value="<?= $main['id_bug'] ?>">
                        <div class="from-group">
                            <label for=""><strong>Jumlah Saldo Siswa Dikembalikan</strong></label>
                            <input type="text" class="form-control" name="saldo">
                        </div>
                        <div class="from-group">
                            <label for=""><strong>Catatan Penjelasan</strong></label>
                            <textarea class="form-control" name="catatan" rows="4"></textarea>
                        </div>

                        <div class="from-group">
                            <label for=""><strong>id riwayat yang valid</strong></label>
                            <input type="text" class="form-control" name="valid_riwayat" placeholder="id_riwayat pisahkan dengan koma">
                        </div>
                        <div class="from-group">
                            <label for=""><strong>id riwayat in valid</strong></label>
                            <input type="text" class="form-control" name="invalid_riwayat" placeholder="id_riwayat pisahkan dengan koma">
                        </div>
                        <div class="from-group mt-2 text-right">
                            <button type="submit" class="btn btn-primary w-100">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>