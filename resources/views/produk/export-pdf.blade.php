<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <center>
        <h1>{{ $title }}</h1>
    </center>
    <p>Tanggal: {{ $date }}</p>
    <table id="dataTable" class="table">
        <thead>
            <tr>
                <td>No</td>
                <td>Nama</td>
                <td>Harga</td>
                <td>Deskripsi</td>
            </tr>
        </thead>
        <tbody>
            @php $no = 1; @endphp
            @forelse ($produk as $data)
            <tr>
                <td>{{ $no++ }}</td>
                <td>{{ $data->nama }}</td>
                <td>{{ $data->harga }}</td>
                <td>{{ $data->deskripsi }}</td>
            </tr>
            @empty
            <tr>
                <td colspan="5" class="text-center">
                    Data Belom Ada
                </td>
            </tr>
            @endforelse
        </tbody>
    </table>
</body>
</html>
