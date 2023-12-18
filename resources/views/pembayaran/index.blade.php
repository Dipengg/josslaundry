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
        @if (count($pembayaran) > 0)
            @foreach ($pembayaran as $b)
                <tr>
                    <td>{{ $b->id_laundry }}</td>
                    <td>{{ $b->nominal }}</td>
                    <td>{{ $b ->created_at}}</td>

                    <td><a href="/pembayaran/{{ $b->id_pembayaran }}">DETAIL</a></td>
                    <td><a href="/pembayaran/edit/{{ $b->id_pembayaran }}">EDIT</a></td>
                    <td><a href="/pembayaran/delete/{{ $b->id_pembayaran }}">DELETE</a></td>
                </tr>
            @endforeach
        @else
            <tr>
                <td colspan="4" align="center">Tidak ada pembayaran pelanggan</td>
            </tr>
        @endif
    </table>

</body>
</html>