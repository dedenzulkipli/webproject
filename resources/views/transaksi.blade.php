<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin - Denn Top Up</title>
    <link rel="stylesheet" href="{{asset('asset/bootstrap-5.1.3-dist/css/bootstrap.min.css')}}">
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Orbitron', sans-serif;
            color: #fff;
            background: #0d0d0d;
            margin: 0;
            padding: 0;
            overflow-x: hidden;
        }

        header {
            background: rgba(0, 0, 0, 0.9);
            padding: 20px 0;
            position: fixed;
            width: 100%;
            top: 0;
            z-index: 1000;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.3);
            transition: background 0.3s;
        }

        header .navbar-brand {
            color: #00ffff;
            font-size: 2em;
            font-weight: 700;
            letter-spacing: 1px;
        }

        header .navbar-nav .nav-link {
            color: #fff;
            font-weight: bold;
            transition: color 0.3s, transform 0.3s;
        }

        header .navbar-nav .nav-link:hover {
            color: #00ffff;
            transform: scale(1.1);
        }

        .container {
            padding: 120px 20px 20px;
            max-width: 800px;
            margin: auto;
        }

        .card {
            background: rgba(0, 0, 0, 0.9);
            border-radius: 15px;
            padding: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
            border: 2px solid #00ffff;
        }

        .card-header {
            font-size: 2em;
            color: #00ffff;
            text-shadow: 0 0 10px #00ffff;
            text-align: center;
            border-bottom: 2px solid #00ffff;
            margin-bottom: 20px;
        }

        .form-control {
            background: #1f1f1f;
            border: 1px solid #00ffff;
            color: #fff;
            border-radius: 50px;
            padding: 10px 20px;
            transition: all 0.3s ease;
            box-shadow: 0 0 15px rgba(0, 255, 255, 0.2);
        }

        .form-control:focus {
            background: #2b2b2b;
            color: #00ffff;
            border-color: #00ffff;
            box-shadow: 0 0 15px #00ffff;
        }

        .btn-secondary {
            background: #00ffff;
            border-color: #00ffff;
            color: #000;
            font-size: 1.2em;
            padding: 12px 25px;
            border-radius: 50px;
            transition: background 0.3s, transform 0.3s;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
        }

        .btn-secondary:hover {
            background: #00b3b3;
            transform: scale(1.1);
        }
    </style>
</head>
<body>


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card mt-5">
                <div class="card-header">
                    Denn TOP UP
                </div>
                <div class="card-body">
                    @if ($errors->any())
                        <ul>
                            @foreach ($errors->all() as $item)
                                <li style="color: #ff6666;">{{ $item }}</li>
                            @endforeach
                        </ul>
                    @endif
                    <form action="/user/create" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group pt-2">
                            <input type="text" class="form-control" name="user_id" placeholder="Masukkan User ID" value="{{ old('user_id') }}">
                        </div>
                        <div class="form-group pt-2">
                            <input type="text" class="form-control" name="Game_type" placeholder="Masukkan Game Type" value="{{ old('Game_type') }}">
                        </div>
                        <div class="form-group pt-2">
                            <input type="text" class="form-control" name="jenis_pembayaran" placeholder="Masukkan Jenis Pembayaran" value="{{ old('jenis_pembayaran') }}">
                        </div>
                        <div class="form-group pt-2">
                            <input type="date" class="form-control" name="transaction_date" value="{{ old('transaction_date') }}">
                        </div>
                        <input type="submit" class="btn btn-secondary w-100 btn-block mt-5" value="Add Transaction">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="{{asset('asset/bootstrap-5.1.3-dist/js/bootstrap.min.js')}}"></script>
</body>
</html>
