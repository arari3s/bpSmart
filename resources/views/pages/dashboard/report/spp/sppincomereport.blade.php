<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SPP Income Report</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</head>

<body>
    <h2 class="text-center">Laporan Pemasukan SPP</h2>
    <h3 class="text-center">SMK BHAKTI PRAJA MARGASARI</h3>
    <div class=" mt-4">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Uraian</th>
                    <th scope="col">Besarnya</th>
                    <th scope="col">Petugas</th>
                    <th scope="col">Ket Input</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($query as $item)
                    <tr>
                        <td>{{ $no++ }}</td>
                        <td>{{ $item->noted }}</td>
                        <td>{{ number_format($item->price) }}</td>
                        <td>{{ $item->officer }}</td>
                        <td>{{ date_format($item->created_at, 'd F Y - H:i') }}</td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5" class="text-center p-5">
                            Data tidak tersedia
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</body>

</html>
