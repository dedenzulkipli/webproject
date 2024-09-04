<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Transaksi Pelanggan</title>
    <link rel="stylesheet" href="{{asset('asset/bootstrap-5.1.3-dist/css/bootstrap.min.css')}}">
    <style>
        body {
            background-color: #1a1a1a;
            color: #fff;
        }
        .card {
            background-color: #2c2c2c;
            border: none;
        }
        .card-header {
            background-color: #3b3b3b;
            font-size: 1.5rem;
        }
        .btn-custom {
            background-color: #ff6b6b;
            border: none;
        }
        .btn-custom:hover {
            background-color: #ff4d4d;
        }
        .table {
            color: #fff;
        }
        .table thead {
            background-color: #3b3b3b;
        }
        .table tbody tr {
            background-color: #2c2c2c;
        }
    </style>
</head>
<body>
    <form action="/detailtransaksi" method="get"></form>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header text-center">
                        Detail Transaksi Pelanggan
                    </div>
                    <div class="card-body">
                        <table class="table table-hover">
                        <thead>
                    <tr>
                        <th>User ID</th>
                        <th>Game Type</th>
                        <th>Jenis_Pembayaran</th>
                        <!-- <th>Price</th> -->
                        <th>Transaction Date</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($user as $key => $item)
                    <tr>
                        <td>{{ $item->user_id}}</td>
                        <td>{{ $item->Game_type}}</td>
                        <td>{{ $item->jenis_pembayaran}}</td>
                        <!-- <td>{{ $item->harga}}</td> -->
                        <td>{{ $item->transaction_date}}</td>
                        <td>
                        <a href="/detaltransaksi/hapus/{{ $item->id }}" onclick="return confirm('Yakin ingin menghapus?')"><button class="btn btn-primary">Hapus</button></a>
                        </td>
                       
                    </tr>
                    @endforeach
                </tbody>                   
                        </table>
                        <a href="/index" class="btn btn-custom w-100 mt-4">Kembali ke Daftar Transaksi</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
<script src="{{asset('asset/bootstrap-5.1.3-dist/js/bootstrap.min.js')}}"></script>

    
</body>
</html>
