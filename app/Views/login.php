<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <style>
    /* Estilos adicionales */
    body {
      background-color: #f8f9fa;
    }
    .container {
      max-width: 400px;
      margin-top: 100px;
    }
  </style>
</head>
<body>

<div class="container">
  <h2 class="text-center mb-4">Login</h2>
  <form method="POST" action="http://localhost/bookstore/public/vlogin">
    <div class="form-group">
      <label for="exampleInputEmail1">Username</label>
      <input required= "true" name="username" type="text" class="form-control" id="username" aria-describedby="emailHelp" placeholder="Enter your username">
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Password</label>
      <input required="true" name="password" type="password" class="form-control" id="password" placeholder="Password">
    </div>
    <button type="submit" class="btn btn-primary btn-block">Login</button>
  </form>
  <p class="text-center mt-3">¿You dont have account? <a href="http://localhost/bookstore/public/users">Register</a></p>
</div>

<!-- Bootstrap JS (opcional si no necesitas funcionalidades de JavaScript) -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>