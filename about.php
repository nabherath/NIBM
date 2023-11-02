<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
<nav class="navbar bg-primary navbar-expand-lg " data-bs-theme="dark">
  <div class="container-fluid">
  
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="home.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="about.php">About Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">User Details</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
           Products
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Shoes</a></li>
            <li><a class="dropdown-item" href="#">Wathces</a></li>
            <li><a class="dropdown-item" href="#">Jewellery</a></li>
            <li><hr class="dropdown-divider"></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
           Sign Up
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="createAccount.php">Create Account</a></li>
            <li><a class="dropdown-item" href="login.php">Login</a></li>
            <li><hr class="dropdown-divider"></li>
          </ul>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>

<div class="about"><h1>About Us</h1></div>
<div><p></p></div>

<div class="container" >
    <div class="row justify-content-center">
      <div class="col-5 ">
        <div class="card-body">
          <form action="database/insert.php" method="post">
            <div class="row justify-content-center">
              <div class="col-8 ">
                <h1 class="text-center">Add User</h1>
              </div>
            </div>
            <div class="row justify-content-center">
              <div class="col-8 ">
                <label for="">Name</label>
                  <input class="form-control" type="text" name="name">
              </div>
            </div>
            <div class="row justify-content-center">
              <div class="col-8 ">
                <label for="">Address</label>
                  <input class="form-control" type="text" name="address">
              </div>
            </div>
            <div class="row justify-content-center">
              <div class="col-8 ">
                <label for="">Phone Number</label>
                  <input class="form-control" type="text" name="phone">
              </div>
            </div>
            <div class="row justify-content-center">
              <div class="col-8 ">
                <label for="">E-mail</label>
                  <input class="form-control" type="email" name="e-mail">
              </div>
            </div>
            <div class="row justify-content-center">
              <div class="col-8 ">
                <label for="">Password</label>
                  <input class="form-control" type="password" name="password">
              </div>
            </div>
            <div class="row justify-content-center">
              <div class="col-8 ">
                <label for="">Confirm-Password</label>
                  <input class="form-control" type="password" name="re_password">
              </div>
            </div>
            <div class="row justify-content-center">
              <div class="col-3">
                <input class="btn btn-primary" type="submit" value="Confirm" >
              </div>
              <div class="col-2">
                <input class="btn btn-danger" type="reset" value="Delete">
              </div>
            </div>
          
          </form>
        </div>
      </div>
    </div>
  </div>
    
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</html>