<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form Pembayaran</title>
</head>

<body>
    <h3>List Pembayaran Orderan Joss Laundry</h3>
    <a href="/pembayaran/create">Tambah Pembayaran</a>
    <table border="1">
        <tr>
            <th>ID Laundry</th>
            <th>Nominal</th>
            <th>Dibuat Tanggal</th>
            <th colspan="3">Action</th>
        </tr>
        <?php if(count($pembayaran) > 0): ?>
            <?php $__currentLoopData = $pembayaran; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $b): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($b->id_laundry); ?></td>
                    <td><?php echo e($b->nominal); ?></td>
                    <td><?php echo e($b ->created_at); ?></td>

                    <td><a href="/pembayaran/<?php echo e($b->id_pembayaran); ?>">DETAIL</a></td>
                    <td><a href="/pembayaran/edit/<?php echo e($b->id_pembayaran); ?>">EDIT</a></td>
                    <td><a href="/pembayaran/delete/<?php echo e($b->id_pembayaran); ?>">DELETE</a></td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php else: ?>
            <tr>
                <td colspan="4" align="center">Tidak ada pembayaran pelanggan</td>
            </tr>
        <?php endif; ?>
    </table>

</body>
</html><?php /**PATH C:\laravel-projects\tubesweb\resources\views/pembayaran/index.blade.php ENDPATH**/ ?>