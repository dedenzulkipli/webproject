<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Game Top Up - Futuristic</title>
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
        header .navbar-nav{
            margin-left: 70%;
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

        .hero {
            background: url('futuristic-bg.jpg') no-repeat center center/cover;
            color: #fff;
            text-align: center;
            padding: 200px 20px;
            position: relative;
            z-index: 1;
            overflow: hidden;
        }

        .hero::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
            z-index: -1;
        }

        .hero h2 {
            font-size: 3.5em;
            margin-bottom: 20px;
            text-shadow: 0 0 10px #00ffff, 0 0 20px #00ffff;
            animation: glowText 2s infinite alternate;
        }

        @keyframes glowText {
            from {
                text-shadow: 0 0 10px #00ffff, 0 0 20px #00ffff, 0 0 30px #00ffff, 0 0 40px #00ffff;
            }
            to {
                text-shadow: 0 0 20px #00ffff, 0 0 30px #00ffff, 0 0 40px #00ffff, 0 0 50px #00ffff;
            }
        }

        .hero p {
            font-size: 1.2em;
            margin-bottom: 40px;
            animation: fadeIn 2s ease-in;
        }

        .btn-primary {
            background: #00ffff;
            border-color: #00ffff;
            color: #000;
            font-size: 1.2em;
            padding: 15px 30px;
            border-radius: 50px;
            transition: background 0.3s, transform 0.3s;
        }

        .btn-primary:hover {
            background: #00b3b3;
            transform: scale(1.1);
        }

        .featured-games, .featured-products {
            padding: 60px 20px;
            background: #0a0a0a;
            position: relative;
            z-index: 1;
        }

        .featured-games::before, .featured-products::before {
            content: '';
            position: absolute;
            top: 0;
            left: 50%;
            width: 100%;
            height: 5px;
            background: linear-gradient(90deg, transparent, #00ffff, transparent);
            transform: translateX(-50%);
        }

        .featured-games h2, .featured-products h2 {
            text-align: center;
            margin-bottom: 40px;
            font-size: 2.5em;
            color: #00ffff;
            text-shadow: 0 0 10px #00ffff;
        }

        .game-item, .product-item {
            background: #1f1f1f;
            border: 2px solid #00ffff;
            border-radius: 15px;
            overflow: hidden;
            transition: transform 0.3s, box-shadow 0.3s;
            position: relative;
            padding: 20px;
            text-align: center;
            height: 100%;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
        }

        .game-item:hover, .product-item:hover {
            transform: translateY(-10px);
            box-shadow: 0 8px 15px rgba(0, 0, 0, 0.3);
        }

        .game-item img, .product-item img {
            width: 100%;
            height: auto;
            border-radius: 10px;
            transition: transform 0.3s, filter 0.3s;
        }

        .game-item img:hover, .product-item img:hover {
            transform: scale(1.1);
            filter: brightness(1.2);
        }

        .game-item h3, .product-item h3 {
            margin: 20px 0;
            font-size: 1.5em;
            color: #00ffff;
        }

        footer {
            background: rgba(0, 0, 0, 0.9);
            color: #fff;
            padding: 20px 0;
            text-align: center;
            border-top: 2px solid #00ffff;
        }

        footer a {
            color: #00ffff;
            text-decoration: none;
            transition: text-shadow 0.3s;
        }

        footer a:hover {
            text-shadow: 0 0 5px #00ffff;
        }

        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }
    </style>
</head>
<body>
    
    <header id="navbar">
        <nav class="navbar navbar-expand-lg navbar-dark">
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
                            <a class="nav-link" href="/index">Games</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/logout">Logout</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>       
    </header>

    <main>
        <section class="hero d-flex align-items-center justify-content-center">
            <div class="hero-content text-center">
                <h2>Selamat Datang Di Denn Top Up</h2>
                <p>Instantly top up your favorite games with our seamless platform.</p>
            </div>
        </section>

        <section class="featured-games">
        <form action="/user/viewcreate" method="post">
            <div class="container">
                <h2>Featured Games</h2>
                <div class="row">
                    <div class="col-md-4">
                        <div class="game-item">
                            <img src="storage/image/image4.png" >
                            <h3>2000 diamonds</h3>
                            <p>$2000000</p>
                            <a href="/user/viewcreate" class="btn btn-secondary">Buy Now</a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="game-item">
                            <img src="storage/image/image4.png" >
                            <h3>1000 diamonds</h3>
                            <p>$1000000</p>
                            <a href="/user/viewcreate" class="btn btn-secondary">Buy Now</a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="game-item">
                            <img src="storage/image/image4.png" >
                            <h3>500 diamonds</h3>
                            <p>$500000</p>
                            <a href="/user/viewcreate" class="btn btn-secondary">Buy Now</a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="game-item">
                            <img src="storage/image/image3.png" >
                            <h3>2000 diamonds</h3>
                            <p>$2000000</p>
                            <a href="/user/viewcreate" class="btn btn-secondary">Buy Now</a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="game-item">
                            <img src="storage/image/image3.png" >
                            <h3>1000 diamonds</h3>
                            <p>$1000000</p>
                            <a href="/user/viewcreate" class="btn btn-secondary">Buy Now</a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="game-item">
                            <img src="storage/image/image3.png" >
                            <h3>500 diamonds</h3>
                            <p>$500000</p>
                            <a href="/user/viewcreate" class="btn btn-secondary">Buy Now</a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="game-item">
                            <img src="storage/image/image5.png" >
                            <h3>2000 diamonds</h3>
                            <p>$2000000</p>
                            <a href="/user/viewcreate" class="btn btn-secondary">Buy Now</a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="game-item">
                            <img src="storage/image/image5.png" >
                            <h3>1000 diamonds</h3>
                            <p>$1000000</p>
                            <a href="/user/viewcreate" class="btn btn-secondary">Buy Now</a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="game-item">
                            <img src="storage/image/image5.png" >
                            <h3>500 diamonds</h3>
                            <p>$500000</p>
                            <a href="/user/viewcreate" class="btn btn-secondary">Buy Now</a>
                        </div>
                    </div>
                    
                    
                </div>
            </div>
        </form>
        </section>

        <section class="featured-products">
            <form action="/user/viewcreate">
            <div class="container">
                <h2>Popular Game</h2>
                <div class="row">
                    <div class="col-md-4">
                        <div class="product-item">
                            <img src="storage/image/image2.png" alt="Product 1">
                            <h3>2000 diamonds</h3>
                            <p>$2000000</p>
                            <a href="/user/viewcreate" class="btn btn-secondary">Buy Now</a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="product-item">
                            <img src="storage/image/image2.png">
                            <h3>1000 diamonds</h3>
                            <p>$1000000</p>
                            <a href="/user/viewcreate" class="btn btn-secondary">Buy Now</a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="product-item">
                            <img src="storage/image/image2.png">
                            <h3>500 diamonds</h3>
                            <p>$500000</p>
                            <a href="/user/viewcreate" class="btn btn-secondary">Buy Now</a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="product-item">
                            <img src="storage/image/image.png">
                            <h3>2000 diamonds</h3>
                            <p>$2000000</p>
                            <a href="/user/viewcreate" class="btn btn-secondary">Buy Now</a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="product-item">
                            <img src="storage/image/image.png">
                            <h3>1000 diamonds</h3>
                            <p>$1000000</p>
                            <a href="/user/viewcreate" class="btn btn-secondary">Buy Now</a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="product-item">
                            <img src="storage/image/image.png">
                            <h3>500 diamonds</h3>
                            <p>$500000</p>
                            <a href="/user/viewcreate" class="btn btn-secondary">Buy Now</a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="product-item">
                            <img src="storage/image/image1.png">
                            <h3>2000 diamonds</h3>
                            <p>$2000000</p>
                            <a href="/user/viewcreate" class="btn btn-secondary">Buy Now</a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="product-item">
                            <img src="storage/image/image1.png">
                            <h3>1000 diamonds</h3>
                            <p>$1000000</p>
                            <a href="/user/viewcreate" class="btn btn-secondary">Buy Now</a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="product-item">
                            <img src="storage/image/image1.png">
                            <h3>500 diamonds</h3>
                            <p>$500000</p>
                            <a href="/user/viewcreate" class="btn btn-secondary">Buy Now</a>
                        </div>
                    </div>
                </div>
            </div>
            </form>
        </section>
    </main>

    <footer>
        <div class="container">
            <p>&copy; 2024 Game Top Up. All rights reserved.</p>
            <p><a href="#">Privacy Policy</a> | <a href="#">Terms of Service</a></p>
        </div>
    </footer>

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

