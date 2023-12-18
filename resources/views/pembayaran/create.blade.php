<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <title>Form Pembayaran</title>
</head>

<body class="container mt-5">
    <h3 class="mb-4">Form Order Joss Laundry</h3>

    <form method="POST" action="/pembayaran/store">
        @csrf

        <div class="form-group">
            <label for="id_laundry">Nama Pemesan</label>
            <select class="form-control" id="id_laundry" name="id_laundry">
                @if(count($laundry) == 0)
                    <option value="" disabled selected>DATA TIDAK ADA</option>
                @else
                    @foreach($laundry as $l)
                        <option value="{{$l->id_laundry}}">{{$l->nama_pelanggan}}</option>
                    @endforeach
                @endif
            </select>
        </div>

        <div class="form-group">
            <label for="nominal">Nominal</label>
            <input type="text" class="form-control" id="nominal" name="nominal" placeholder="Masukkan Nominal">
        </div>

        <button type="submit" class="btn btn-primary">Tambah</button>
    </form>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>

</html>
