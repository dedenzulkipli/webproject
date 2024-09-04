<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('asset/bootstrap-5.1.3-dist/css/bootstrap.min.css')}}">
</head>
<body>
    
    <!-- <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
        <div class="container-fluid">
            <a href="#" class="navbar-brand"Denn-Shop</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#myNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="myNavbar">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="" class="nav-link">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a href="" class="nav-link">Produk</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav> -->
<div class="user">
        @if ($errors -> any())
        <ul>
            @foreach ($errors -> all() as $item)
              <li>$item</li>
            @endforeach
        </ul>
        @endif
  <div class="container">
    <h1>Edit New Transaction</h1>
    <form action="/user/edit/{{$user->id}}" method="post" enctype="multipart/form-data" >
        @csrf
        <div class="mb-3">
            <input type="text" class="form-control"  name="user_id" value="{{ $user->user_id }}" placeholder="user_id" id="" required>
        </div>
        <div class="mb-3">
            <input type="text" class="form-control"  name="Game_type" value="{{ $user->Game_type }}" placeholder="game_type" id="" required>
        </div>
        <div class="mb-3">
            <input type="text" class="form-control"  name="jenis_pembayaran" value="{{ $user->jenis_pembayaran}}" placeholder="jenis_pembayaran" id="" required>
        </div>
        <!-- <div class="mb-3">
            <input type="number" class="form-control"  name="harga" value="{{ $user->harga}}" placeholder="harga" id="" required>
        </div> -->
        <div class="mb-3">
            <input type="date" class="form-control"  name="transaction_date" value="{{ $user->transaction_date}}" placeholder="transaction_date" id="" required>
        </div>
        <input type="submit" value="ubah">
    </form>
   </div>
</div> 
</body>
</html>