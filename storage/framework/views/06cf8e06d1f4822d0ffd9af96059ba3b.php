<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <title>Form Pemesanan</title>
</head>

<body class="container mt-4">
    <h3 class="mb-3">List Data Orderan Joss Laundry</h3>
    <a href="/laundry/create" class="btn btn-primary mb-3">Tambah Pesanan</a>
    <table class="table table-bordered">
        <thead class="thead-dark">
            <tr>
                <th>ID Pesanan</th>
                <th>Nama Pelanggan</th>
                <th>Jasa</th>
                <th>Pembayaran</th>
                <th>Berat/kg</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php if(count($laundry) > 0): ?>
                <?php $__currentLoopData = $laundry; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $b): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($b->id_laundry); ?></td>
                        <td><?php echo e($b->nama_pelanggan); ?></td>
                        <td><?php echo e($b->pilihjasa); ?></td>
                        <td><?php echo e($b->pembayaran); ?></td>
                        <td><?php echo e($b->berat); ?></td>
                        <td><a href="/laundry/<?php echo e($b->id_laundry); ?>" class="btn btn-info">DETAIL</a></td>
                        <td><a href="/laundry/edit/<?php echo e($b->id_laundry); ?>" class="btn btn-warning">EDIT</a></td>
                        <td><a href="/laundry/delete/<?php echo e($b->id_laundry); ?>" class="btn btn-danger">DELETE</a></td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php else: ?>
                <tr>
                    <td colspan="7" class="text-center">Tidak ada pesanan pelanggan</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>

</html>
<?php /**PATH C:\laravel-projects\tubesweb\resources\views/laundry/index.blade.php ENDPATH**/ ?>