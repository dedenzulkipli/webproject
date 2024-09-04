<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - Denn Top Up</title>
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

        header.scrolled {
            background: #000;
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
            max-width: 1200px;
            margin: auto;
        }

        .admin-header {
            text-align: center;
            padding: 30px 0;
            background: rgba(0, 0, 0, 0.9);
            margin-bottom: 40px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.3);
            border-bottom: 2px solid #00ffff;
            border-radius: 15px;
        }

        .admin-header h1 {
            font-size: 3.5em;
            color: #00ffff;
            text-shadow: 0 0 15px #00ffff;
            margin: 0;
        }
        .table-responsive button{
            margin-bottom: 10px;
        }
        .table-responsive {
            background: #1f1f1f;
            border-radius: 15px;
            padding: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            padding: 15px;
            text-align: center;
            border-bottom: 1px solid #00ffff;
        }

        th {
            background: #0a0a0a;
            color: #00ffff;
            font-size: 1.3em;
            text-shadow: 0 0 10px #00ffff;
        }

        td {
            color: #fff;
            font-size: 1.1em;
            transition: background 0.3s, color 0.3s;
        }

        tr:hover td {
            background: #00ffff;
            color: #000;
        }

        .btn-primary {
            background: #00ffff;
            border-color: #00ffff;
            color: #000;
            font-size: 1.2em;
            padding: 12px 25px;
            border-radius: 50px;
            transition: background 0.3s, transform 0.3s;
            margin-top: 30px;
            display: inline-block;
        }

        .btn-primary:hover {
            background: #00b3b3;
            transform: scale(1.1);
        }
        tr:hover td {
         background: #00ffff;
         color: #000;
         transform: scale(1.05);
         transition: transform 0.3s, background 0.3s, color 0.3s;
        }

    </style>
</head>
<body>
    <!-- <header id="navbar"> -->
        <!-- <nav class="navbar navbar-expand-lg navbar-dark">
            <div class="container">
                <a class="navbar-brand" href="#">Denn Top Up</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Games</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/logout">logout</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav> -->
    <!-- </header> -->

    <div class="container">
        <header class="admin-header">
            <h1>Admin Dashboard</h1>
            <li class="nav-item">
                <a class="nav-link" href="/logout">Logout</a>
            </li>
        </header>

        <div class="table-responsive">
            <h2 class="text-center mb-4" style="color: #00ffff; text-shadow: 0 0 10px #00ffff;">Transaction List</h2>
            <br>
           
            <!-- <br>
            <a href="user/viewcreate"><button class="btn btn-primary">Add New Transaction</button></a> -->
            <!-- <br>
            <a href="/index"><button class="btn btn-primary">Back To</button> </a> -->
            <!-- <form class="d-flex" action="/user/search" method="post" style="margin: 0 auto; max-width: 600px;" name="search">
                  @csrf
                   <input class="form-control me-2 we-100" 
                       type="search" 
                       placeholder="Search..." 
                       name="cari" 
                       aria-label="Search"
                       style="background: #1f1f1f; border: 1px solid #00ffff; color: #fff; box-shadow: 0 0 15px rgba(0, 255, 255, 0.2); border-radius: 50px; padding: 10px 20px; transition: all 0.3s ease;">
                   <input class="btn btn-outline-light" 
                       value="Search" 
                       type="submit"
                       style="background: #00ffff; color: #000; border-radius: 50px; padding: 10px 25px; margin-left: 10px; transition: all 0.3s ease;">
            </form> -->
            <table>
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
                            <a href="/user/viewedit/{{ $item->id }}"><button class="btn btn-primary">Edit</button></a>
                            <a href="/user/delete/{{ $item->id }}" onclick="return confirm('Yakin ingin menghapus?')"><button class="btn btn-primary">Delete</button></a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <!-- JavaScript Libraries -->
    <script src="{{asset('asset/bootstrap-5.1.3-dist/js/bootstrap.min.js')}}"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <!-- Custom Scripts -->
    <script>
        // Change header background on scroll
        $(window).on('scroll', function() {
            if ($(window).scrollTop() > 50) {
                $('#navbar').addClass('scrolled');
            } else {
                $('#navbar').removeClass('scrolled');
            }
        });

        // Add smooth scrolling to anchor links
        $('a[href^="#"]').on('click', function(event) {
            event.preventDefault();
            $('html, body').animate({
                scrollTop: $($(this).attr('href')).offset().top
            }, 800);
        });
    </script>
</body>
</html>
