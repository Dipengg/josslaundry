<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form Pembayaran</title>
</head>

<body>
    <h3>Ubah Nominal Orderan Joss Laundry</h3>
    <form method="POST" action="/pembayaran/update">
        @csrf
<table>
    <tr>
        <td>Nominal</td>
        <td>:</td>
        <td><input type="text" name="nominal" id="nominal" value="{{ $nominal }}"></td>
        <td><input type="hidden" value="{{ $id_pembayaran }}" name="id_pembayaran"></td>
    </tr>
</table>
    <input type="submit" value="Ubah">
    </form>

</body>
</html>