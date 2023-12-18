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
    <h3>List Data Diri Pelanggan Joss Laundry</h3>
    <a href="/datadiri/create" class="btn btn-primary mb-3">Tambah Data Diri</a>
    <table class="table table-bordered">
        <thead class="thead-dark">
            <tr>
                <th>ID Pelanggan</th>
                <th>Nama Pelanggan</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php if(count($datadiri) > 0): ?>
                <?php $__currentLoopData = $datadiri; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $b): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($b->id_datadiri); ?></td>
                        <td><?php echo e($b->nama_pelanggan); ?></td>
                        <td><a href="/datadiri/<?php echo e($b->id_datadiri); ?>" class="btn btn-info">DETAIL</a></td>
                        <td><a href="/datadiri/edit/<?php echo e($b->id_datadiri); ?>" class="btn btn-warning">EDIT</a></td>
                        <td><a href="/datadiri/delete/<?php echo e($b->id_datadiri); ?>" class="btn btn-danger">DELETE</a></td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php else: ?>
                <tr>
                    <td colspan="4" class="text-center">Tidak ada data diri pelanggan</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>

</html><?php /**PATH C:\laravel-projects\tubesweb\resources\views/datadiri/index.blade.php ENDPATH**/ ?>