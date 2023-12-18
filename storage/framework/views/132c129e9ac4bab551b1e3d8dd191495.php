<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form Pembayaran</title>
</head>

<body>
    <h3>Form Order Joss Laundry</h3><br>
    <form method="POST" action="/pembayaran/store">
        <?php echo csrf_field(); ?>
<table>
    <tr>
        <td>Nama Pemesan</td>
        <td>:</td>
        <td><select name="id_laundry" id="id_laundry">
            <?php if(count($laundry) == 0): ?>
                <option value="" disabled selected>DATA TIDAK ADA</option>
            <?php else: ?>
                <?php $__currentLoopData = $laundry; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $l): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($l->id_laundry); ?>"><?php echo e($l->nama_pelanggan); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php endif; ?>
        </select>
    </td>
    </tr>
    <tr>
        <td>Nominal</td>
        <td>:</td>
        <td><input type="text" name="nominal" placeholder="Masukkan Nominal"></td>
    </tr>
</table>
    <input type="submit" value="Tambah">
    </form>

</body>
</html><?php /**PATH C:\laravel-projects\tubesweb\resources\views/pembayaran/create.blade.php ENDPATH**/ ?>