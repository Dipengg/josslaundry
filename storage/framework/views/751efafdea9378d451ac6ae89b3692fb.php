<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <title>Data Diri</title>
</head>

<body class="container mt-4">
    <h3>Ubah Data Diri Pelanggan Joss Laundry</h3>
    <form method="POST" action="/datadiri/update">
        <?php echo csrf_field(); ?>
        <input type="hidden" value="<?php echo e($id_datadiri); ?>" name="id_datadiri">

        <div class="form-group">
            <label for="nama_pelanggan">Nama Pelanggan</label>
            <input type="text" class="form-control" id="nama_pelanggan" name="nama_pelanggan" value="<?php echo e($nama_pelanggan); ?>" required>
        </div>

        <div class="form-group">
            <label for="alamat">Alamat</label>
            <input type="text" class="form-control" id="alamat" name="alamat" value="<?php echo e($alamat); ?>" required>
        </div>

        <div class="form-group">
            <label>Jenis Kelamin</label>
            <div class="form-check">
                <input type="radio" class="form-check-input" name="jeniskelamin" value="Laki-laki" <?php if($jeniskelamin == 'Laki-laki'): ?> checked <?php endif; ?> required>
                <label class="form-check-label">Laki-laki</label>
            </div>
            <div class="form-check">
                <input type="radio" class="form-check-input" name="jeniskelamin" value="Perempuan" <?php if($jeniskelamin == 'Perempuan'): ?> checked <?php endif; ?> required>
                <label class="form-check-label">Perempuan</label>
            </div>
        </div>

        <div class="form-group">
            <label for="no_hp">Nomor Handphone</label>
            <input type="text" class="form-control" id="no_hp" name="no_hp" value="<?php echo e($no_hp); ?>" required>
        </div>

        <button type="submit" class="btn btn-primary">Ubah</button>
    </form>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>

</html>
<?php /**PATH C:\laravel-projects\tubesweb\resources\views/datadiri/edit.blade.php ENDPATH**/ ?>