<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <style>

        body {
            background-color: #f8f9fa;
        }

        .container {
            max-width: 600px;
        }

    </style>
    <title>Form Pembayaran</title>
</head>

<body class="container mt-5">
    <h3>Ubah Nominal Orderan Joss Laundry</h3>
    <form method="POST" action="/pembayaran/update">
        @csrf

        <div class="form-group row">
            <label for="nominal" class="col-sm-2 col-form-label">Nominal</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="nominal" name="nominal" value="{{ $nominal }}">
                <input type="hidden" value="{{ $id_pembayaran }}" name="id_pembayaran">
            </div>
        </div>

        <div class="form-group row">
            <div class="col-sm-10 offset-sm-2">
                <button type="submit" class="btn btn-primary">Ubah</button>
            </div>
        </div>
    </form>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>

</html>
