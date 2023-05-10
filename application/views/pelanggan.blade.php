<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pelanggan</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <div class="container-fluid mt-5 row">
        <div class="col-6">

            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th>Kode Pelanggan </th>
                        <th>Nama Pelanggan </th>
                        <th>Nomor Hp </th>
                        <th>Alamat </th>
                        <th>Jenis kelamin </th>
                    </tr>
                </thead>
                <?php foreach ($pelanggan as $d) { ?>
                    <tr>
                        <td><?= $d['kd_pelanggan']; ?></td>
                        <td><?= $d['nm_pelanggan']; ?></td>
                        <td><?= $d['no_hp']; ?></td>
                        <td><?= $d['alamat']; ?></td>
                        <td>
                            <? if ($d['jenis_kelamin'] == 1) : ?>
                                <?= "Laki-laki" ?>
                                <? else: ?>
                                <?= "Perempuan" ?>
                            <? endif ;?>
                        </td>
                    </tr>
                <?php } ?>
        </div>
        </table>
    </div>

    <div class="col-6">
        <?php if ($this->session->flashdata('messages')) : ?>
            <div class="alert alert-primary" role="alert">
                <?php echo $this->session->flashdata('messages') ?>
            </div>
        <?php endif ?>
        <div class="card">
            <div class="card-header">
                <h2>Tambah Pelanggan</h2>
            </div>

            <div class="card-body">

                <form action="<?= site_url('pelanggan/store')  ?>" method="post">
                    <div class="form-group">
                        <input type="text" class="form-control form-control-user" id="nm_pelanggan" name="nm_pelanggan" placeholder="Nama Pelanggan">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control form-control-user" id="no_hp" name="no_hp" placeholder="Nomer Hp">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control form-control-user" id="alamat" name="alamat" placeholder="Alamat">
                    </div>
                    <div class="form-group">
                        <select name="jenis_kelamin" class="form-control form-control-user">
                            <option value="">Jenis Kelamin</option>
                            <option value="1">Laki-laki</option>
                            <option value="2">Perempuan</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Tambah</button>

                </form>
            </div>
        </div>

    </div>


</body>

</html>