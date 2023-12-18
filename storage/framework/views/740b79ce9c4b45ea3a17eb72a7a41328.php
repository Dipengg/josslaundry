<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <title>Detail Pembayaran</title>
    <style>
        body {
            background-color: #f8f9fa;
            padding: 20px;
        }

        h3 {
            color: #007bff;
        }

        p {
            margin-bottom: 10px;
        }
    </style>
</head>

<body class="container">
    <h3 class="mt-4 mb-4">Detail Pembayaran Joss Laundry</h3>
    
    <div class="card">
        <div class="card-body">
            <p class="card-text"><strong>ID Laundry:</strong> <?php echo e($id_laundry); ?></p>
            <p class="card-text"><strong>Nominal:</strong> <?php echo e($nominal); ?></p>
            <p class="card-text"><strong>Dibuat Tanggal:</strong> <?php echo e($created_at); ?></p>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>

</html>
<?php /**PATH C:\laravel-projects\tubesweb\resources\views/pembayaran/show.blade.php ENDPATH**/ ?>