<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <title>Detail Data Diri</title>
</head>

<body class="container mt-4">
    <h3>Detail Data Diri Pelanggan Joss Laundry</h3>
    <div class="card">
        <div class="card-body">
            <p class="card-text">Nama Pelanggan: <?php echo e($nama_pelanggan); ?></p>
            <p class="card-text">Alamat: <?php echo e($alamat); ?></p>
            <p class="card-text">Jenis Kelamin: <?php echo e($jeniskelamin); ?></p>
            <p class="card-text">Nomor Handphone: <?php echo e($no_hp); ?></p>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>

</html><?php /**PATH C:\laravel-projects\tubesweb\resources\views/datadiri/show.blade.php ENDPATH**/ ?>