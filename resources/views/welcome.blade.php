<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>DenShop Indonesia</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <style>
    body {
      /* background: linear-gradient(135deg, #ff007f, #ff7f00, #7fff00, #00ff7f);
      background-size: 400% 400%;
      animation: gradient 0.5s ease infinite;
      color: #fff; */
      font-family: 'Roboto', sans-serif;
      display: flex;
      align-items: center;
      justify-content: center;
      height: 100vh;
      margin: 0;
      overflow: hidden;
    }

    @keyframes gradient {
      0% { background-position: 0% 0%; }
      50% { background-position: 100% 100%; }
      100% { background-position: 0% 0%; }
    }

    .container {
      position: relative;
      z-index: 2;
    }

    .card {
      background: rgba(0, 0, 0, 0.7);
      border-radius: 1rem;
      box-shadow: 0 25px 50px rgba(0, 0, 0, 0.7);
      width: 80vw;
      max-width: 1200px;
      padding: 2rem;
      position: relative;
      backdrop-filter: blur(10px);
    }

    .card:hover {
      box-shadow: 0 35px 70px rgba(0, 0, 0, 0.8);
      transform: scale(1.05);
    }

    .card-body {
      position: relative;
      z-index: 2;
    }

    .form-control {
      background: rgba(255, 255, 255, 0.2);
      border: 1px solid #00bcd4;
      color: #fff;
      border-radius: 0.5rem;
      padding: 1rem;
      transition: background-color 0.3s ease, border-color 0.3s ease, box-shadow 0.3s ease;
    }

    .form-control:focus {
      background: rgba(255, 255, 255, 0.3);
      border-color: #ff4081;
      box-shadow: 0 0 0 0.2rem rgba(255, 64, 129, 0.25);
    }

    .btn-primary {
      background: linear-gradient(45deg, #ff4081, #00bcd4);
      border: none;
      color: #fff;
      border-radius: 0.5rem;
      padding: 1rem 2rem;
      font-size: 1.2rem;
      box-shadow: 0 6px 30px rgba(255, 64, 129, 0.5);
      transition: background 0.3s ease, box-shadow 0.3s ease, transform 0.3s ease;
    }

    .btn-primary:hover {
      background: linear-gradient(45deg, #00bcd4, #ff4081);
      box-shadow: 0 8px 40px rgba(0, 188, 212, 0.5);
      transform: scale(1.1);
    }

    a {
      color: #ff4081;
      transition: color 0.3s ease;
    }

    a:hover {
      color: #00bcd4;
    }

    .offcanvas {
      background: rgba(0, 0, 0, 0.9);
      color: #ffffff;
      transition: transform 0.5s ease-in-out, opacity 0.5s ease;
      width: 90%;
      max-width: 600px;
      margin: 0 auto;
      position: fixed;
      top: 10%;
      left: 50%;
      transform: translateX(-50%) translateY(-100%);
      height: 80vh;
      box-shadow: 0 0 60px rgba(0, 0, 0, 0.8);
      border-radius: 20px;
      overflow-y: auto;
      backdrop-filter: blur(15px);
    }

    .offcanvas.show {
      transform: translateX(-50%) translateY(0);
      opacity: 1;
    }

    .offcanvas-header {
      background: linear-gradient(135deg, #00bcd4, #ff4081);
      color: white;
      padding: 1rem;
      border-bottom: 1px solid #ff4081;
    }

    .offcanvas-body {
      padding: 2rem;
    }

    .offcanvas-body h5 {
      color: #ff4081;
      margin-bottom: 1.5rem;
    }

    .offcanvas-body .form-label {
      color: #ffffff;
    }

    .offcanvas-body .form-control {
      border-color: #00bcd4;
    }

    .offcanvas-body input, .offcanvas-body button {
      border-radius: 10px;
      transition: box-shadow 0.3s ease;
    }

    .offcanvas-body input:focus, .offcanvas-body button:hover {
      box-shadow: 0 0 20px rgba(0, 188, 212, 0.5);
    }

    .offcanvas-body::-webkit-scrollbar {
      width: 12px;
    }

    .offcanvas-body::-webkit-scrollbar-thumb {
      background: #00bcd4;
      border-radius: 10px;
    }

    .offcanvas-body::-webkit-scrollbar-thumb:hover {
      background: #ff4081;
    }
  </style>
</head>

<body>
  <form action="/auth" method="post">
    @csrf
    <div class="container">
      <div class="card">
        <div class="row">
          <div class="col-md-6 d-flex justify-content-center align-items-center">
            <img src="storage/image/Black_Gold_Luxury_Modern_Diamond_Brand_Store_Logo__1_-removebg-preview.png" alt="login logo" class="img-fluid" style="border-radius: 1rem; max-width: 100%;">
          </div>
          <div class="col-md-6">
            <div class="card-body">
              <div class="d-flex align-items-center mb-4">
                <i class="fas fa-cubes fa-3x me-3" style="color: #ff4081;"></i>
                <span class="h1 fw-bold mb-0" style="font-style: italic; color: #fff;">EFDG SHOP</span>
              </div>
              <h5 class="fw-normal mb-4" style="letter-spacing: 1px; color: #fff;">Sign into your account</h5>
              <div class="form-outline mb-4">
                <input type="email" id="form2Example17" class="form-control form-control-lg" name="email" required />
                <label class="form-label" for="form2Example17">Email address</label>
              </div>
              <div class="form-outline mb-4">
                <input type="password" id="form2Example27" class="form-control form-control-lg" name="password" required />
                <label class="form-label" for="form2Example27">Password</label>
              </div>
              <div class="pt-1 mb-4">
                <button class="btn btn-primary btn-lg btn-block" type="submit">Login</button>
              </div>
              <p class="mb-5 pb-lg-2">Don't have an account? <a href="#!" data-bs-toggle="offcanvas" data-bs-target="#registerOffcanvas">Register here</a></p>
              <a href="#!" class="small text-muted">Forgot password?</a>
              <a href="#!" class="small text-muted">Terms of use.</a>
              <a href="#!" class="small text-muted">Privacy policy</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </form>

  <!-- Offcanvas Register Panel -->
  <div class="offcanvas offcanvas-top" tabindex="-1" id="registerOffcanvas" aria-labelledby="registerOffcanvasLabel">
    <div class="offcanvas-header">
      <h5 id="registerOffcanvasLabel">Register</h5>
      <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
      <form action="/register" method="post">
        @csrf
        <div class="form-outline mb-4">
          <input type="text" id="name" class="form-control form-control-lg" name="name" required />
          <label class="form-label" for="registerName">Name</label>
        </div>
        <div class="form-outline mb-4">
          <input type="email" id="email" class="form-control form-control-lg" name="email" required />
          <label class="form-label" for="registerEmail">Email address</label>
        </div>
        <div class="form-outline mb-4">
          <input type="password" id="password" class="form-control form-control-lg" name="password" required />
          <label class="form-label" for="registerPassword">Password</label>
        </div>
        <div class="form-outline mb-4">
          <input type="password" id="password_confirm" class="form-control form-control-lg" name="password_confirmation" required />
          <label class="form-label" for="registerConfirmPassword">Confirm Password</label>
        </div>
        <div class="pt-1 mb-4">
          <button class="btn btn-primary btn-lg btn-block" type="submit">Register</button>
        </div>
      </form>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
</body>

</html>
