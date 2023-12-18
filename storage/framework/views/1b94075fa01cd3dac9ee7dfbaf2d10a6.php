<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <title>List Pembayaran</title>
</head>

<body class="container mt-5">
    <h3>List Pembayaran Orderan Joss Laundry</h3>
    <a href="/pembayaran/create" class="btn btn-primary mb-3">Tambah Pembayaran</a>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID Laundry</th>
                <th>Nominal</th>
                <th>Dibuat Tanggal</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php if(count($pembayaran) > 0): ?>
                <?php $__currentLoopData = $pembayaran; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $b): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($b->id_laundry); ?></td>
                        <td><?php echo e($b->nominal); ?></td>
                        <td><?php echo e($b->created_at); ?></td>
                        <td>
                            <a href="/pembayaran/<?php echo e($b->id_pembayaran); ?>" class="btn btn-info btn-sm">DETAIL</a>
                            <a href="/pembayaran/edit/<?php echo e($b->id_pembayaran); ?>" class="btn btn-warning btn-sm">EDIT</a>
                            <a href="/pembayaran/delete/<?php echo e($b->id_pembayaran); ?>" class="btn btn-danger btn-sm">DELETE</a>
                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php else: ?>
                <tr>
                    <td colspan="4" align="center">Tidak ada pembayaran pelanggan</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>

</html>
<?php /**PATH C:\laravel-projects\tubesweb\resources\views/pembayaran/index.blade.php ENDPATH**/ ?>