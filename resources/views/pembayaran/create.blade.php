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
        @csrf
<table>
    <tr>
        <td>Nama Pemesan</td>
        <td>:</td>
        <td><select name="id_laundry" id="id_laundry">
            @if(count($laundry) == 0)
                <option value="" disabled selected>DATA TIDAK ADA</option>
            @else
                @foreach($laundry as $l)
                    <option value="{{$l->id_laundry}}">{{$l->nama_pelanggan}}</option>
                @endforeach
            @endif
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
</html>