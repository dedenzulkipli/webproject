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
            left:0px;
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
            padding: 120px 20px 20px; /* Added padding-top to account for the fixed header */
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

        .table-responsive {
            background: #1f1f1f;
            border-radius: 15px;
            padding: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
            margin-top: 7%;
            margin-left: -7%;
        }

        .table-responsive .btn-logout {
            background: #00ffff;
            border-color: #00ffff;
            color: #000;
            font-size: 1.2em;
            padding: 12px 25px;
            border-radius: 50px;
            transition: background 0.3s, transform 0.3s;
            display: inline-block;
            margin-bottom: 20px;
            margin-left: 45%;
        }

        .table-responsive .btn-logout:hover {
            background: #00b3b3;
            transform: scale(1.1);
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
            transform: scale(1.05);
            transition: transform 0.3s, background 0.3s, color 0.3s;
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
    </style>
</head>
<body>
    <div class="container">
        <header class="admin-header">
            <h1>Admin Dashboard</h1>
        </header>

        <div class="table-responsive">
            <h2 class="text-center mb-4" style="color: #00ffff; text-shadow: 0 0 10px #00ffff;">Transaction List</h2>
            <a href="/logout" class="btn btn-logout">Logout</a>
            <table>
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
                $('header').addClass('scrolled');
            } else {
                $('header').removeClass('scrolled');
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
