<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Transaction - Denn Top Up</title>
    <link rel="stylesheet" href="{{asset('asset/bootstrap-5.1.3-dist/css/bootstrap.min.css')}}">
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Orbitron', sans-serif;
            color: #fff;
            background: #0d0d0d;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 800px;
            margin: 50px auto;
            padding: 20px;
            background: #1f1f1f;
            border-radius: 15px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
        }

        h1 {
            font-size: 2.5em;
            color: #00ffff;
            text-align: center;
            margin-bottom: 30px;
            text-shadow: 0 0 10px #00ffff;
        }

        .form-control {
            border-radius: 50px;
            background: #2a2a2a;
            color: #fff;
            border: 1px solid #00ffff;
            transition: background 0.3s, border-color 0.3s;
        }

        .form-control::placeholder {
            color: #888;
            opacity: 1; /* For Firefox */
        }

        .form-control:focus {
            background: #1f1f1f;
            border-color: #00b3b3;
            box-shadow: 0 0 5px #00b3b3;
            color: #fff;
        }
        select#jenis_pembayaran{
            background: #1f1f1f;
            border: 1px solid #00ffff;
            color: #fff;
            border-radius: 50px;
            padding: 10px 157px;
            transition: all 0.3s ease;
            box-shadow: 0 0 15px rgba(0, 255, 255, 0.2);
        }

        .btn-submit {
            background: #00ffff;
            border-color: #00ffff;
            color: #000;
            font-size: 1.2em;
            padding: 12px 25px;
            border-radius: 50px;
            transition: background 0.3s, transform 0.3s;
            display: block;
            width: 100%;
            margin-top: 20px;
        }

        .btn-submit:hover {
            background: #00b3b3;
            transform: scale(1.1);
        }

        ul {
            color: #ff0000;
            padding: 0;
            list-style: none;
        }

        li {
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Edit Transaction</h1>

        @if ($errors->any())
            <ul>
                @foreach ($errors->all() as $item)
                    <li>{{ $item }}</li>
                @endforeach
            </ul>
        @endif

        <form action="/user/edit/{{$user->id}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <input type="text" class="form-control" name="user_id" value="{{ $user->user_id }}" placeholder="User ID" required>
            </div>
            <div class="mb-3">
                <input type="text" class="form-control" name="Game_type" value="{{ $user->Game_type }}" placeholder="Game Type" required>
            </div>
            <div class="form-group pt-2">
                          <select name="jenis_pembayaran" class="form-select" id="jenis_pembayaran" style="color: #00ffff;">
                            <option value="jenis pembayaran" class="text-secondary" >Pilih Opsi</option>
                            <option value="dana">dana</option>
                            <option value="dana">alfamart</option>
                            <option value="dana">ovo</option>
                            <option value="dana">gopay</option>
                            <option value="dana">indomaret</option>
                          </select>
            </div>
            
            <div class="form-group pt-2">
                 <input type="number" class="form-control" name="amount" placeholder="Masukan Amount" value="{{ old('amount') }}">
             </div>
            <input type="submit" value="Update" class="btn-submit">
        </form>
    </div>
</body>
</html>
