<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <title>Detail Pemesanan</title>
</head>

<body class="container mt-4">
    <h3>Detail Pemesanan Joss Laundry</h3>
    <div class="card">
        <div class="card-body">
            <p class="card-text">Nama Laundry: <?php echo e($nama_pelanggan); ?></p>
            <p class="card-text">Jasa: <?php echo e($pilihjasa); ?></p>
            <p class="card-text">Pembayaran: <?php echo e($pembayaran); ?></p>
            <p class="card-text">Berat: <?php echo e($berat); ?> kg</p>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>

</html>
<?php /**PATH C:\laravel-projects\tubesweb\resources\views/laundry/show.blade.php ENDPATH**/ ?>