<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Transaksi Pelanggan</title>
    <link rel="stylesheet" href="{{asset('asset/bootstrap-5.1.3-dist/css/bootstrap.min.css')}}">
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Orbitron', sans-serif;
            background-color: #0d0d0d;
            color: #fff;
            margin: 0;
            padding: 0;
            overflow-x: hidden;
        }
        .card {
            background-color: #1f1f1f;
            border: none;
            border-radius: 15px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
        }
        .card-header {
            background-color: #2a2a2a;
            color: #00ffff;
            font-size: 1.5rem;
            text-shadow: 0 0 10px #00ffff;
            border-bottom: 2px solid #00ffff;
            border-top-left-radius: 15px;
            border-top-right-radius: 15px;
        }
        .btn-custom {
            background-color: #00ffff;
            border: none;
            color: #000;
            font-size: 1.2em;
            padding: 12px 25px;
            border-radius: 50px;
            transition: background 0.3s, transform 0.3s;
        }
        .btn-custom:hover {
            background-color: #00b3b3;
            transform: scale(1.1);
        }
        .table {
            color: #fff;
        }
        .table thead {
            background-color: #2a2a2a;
            color: #00ffff;
        }
        .table tbody tr {
            background-color: #1f1f1f;
            transition: background 0.3s;
        }
        .table tbody tr:hover {
            background-color: #00ffff;
            color: #000;
        }
        .table td {
            font-size: 1.1em;
            text-align: center;
        }
    </style>
</head>
<body>
    <header class="admin-header">
        <h1 class="text-center">Detail Transaksi Pelanggan</h1>
    </header>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header text-center">
                          Detail Transaksi
                    </div>
                    <div class="card-body">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>User ID</th>
                                    <th>Game Type</th>
                                    <th>Jenis Pembayaran</th>
                                    <th>Amount</th>
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
                                    <td>{{ $item->amount}}</td>
                                    <td>{{ $item->transaction_date}}</td>
                                    <td>
                                        <a href="/detaltransaksi/hapus/{{ $item->id }}" onclick="return confirm('Yakin ingin menghapus?')">
                                            <button class="btn btn-custom">Hapus</button>
                                        </a>
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
    <script src="{{asset('asset/bootstrap-5.1.3-dist/js/bootstrap.min.js')}}"></script>
</body>
</html>
