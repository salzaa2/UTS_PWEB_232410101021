<!DOCTYPE html>

<html lang="en" >
<head>
  <meta charset="UTF-8" />
  <title>Login</title>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'Hand Drawn', sans-serif;
    }

    body {
    min-height: 100vh;
    background: linear-gradient(135deg, #667eea, #764ba2);
    display: flex;
    justify-content: center;
    align-items: center;
    padding: 20px;
    }

    .login-container {
    background: #fff;
    max-width: 400px;
    width: 100%;
    padding: 40px 30px 30px;
    border-radius: 12px;
    box-shadow: 0 16px 40px rgba(0, 0, 0, 0.2);
    }

    .login-container h2 {
    text-align: center;
    color: #333;
    font-weight: 700;
    font-size: 28px;
    margin-bottom: 30px;
    letter-spacing: 1px;
    }

    .form-group {
    margin-bottom: 20px;
    position: relative;
    }

    label {
    display: block;
    font-weight: 600;
    margin-bottom: 8px;
    color: #333;
    font-size: 14px;
    }

    input[type="text"],
    input[type="password"] {
    width: 100%;
    padding: 12px 15px;
    font-size: 16px;
    border-radius: 6px;
    border: 1.5px solid #ddd;
    transition: border-color 0.3s ease;
    }

    input[type="text"]:focus,
    input[type="password"]:focus {
    outline: none;
    border-color: #6a5af9;
    box-shadow: 0 0 10px rgba(106, 90, 249, 0.3);
    }

    .btn-login {
    width: 100%;
    padding: 14px 0;
    background: #6a5af9;
    border: none;
    border-radius: 8px;
    color: white;
    font-size: 18px;
    font-weight: 700;
    cursor: pointer;
    transition: background 0.3s ease;
    letter-spacing: 1px;
    }

    .btn-login:hover {
    background: #584ed2;
    }

    .error-message {
    background-color: #f8d7da;
    color: #842029;
    padding: 12px 15px;
    border-radius: 6px;
    margin-bottom: 20px;
    font-weight: 600;
    font-size: 14px;
    text-align: center;
    border: 1px solid #f5c2c7;
    }

  </style>
</head>
<body>
  <div class="login-container">

<h2>LOGIN</h2>

@if (session('gagal'))
  <div class="error-message">
    {{ session('gagal') }}
  </div>
@endif

@if ($errors->has('login'))
  <div class="error-message">
    {{ $errors->first('login') }}
  </div>
@endif

<form method="POST" action="/login">
  @csrf
  <div class="form-group">
    <label for="username">Username</label>
    <input type="text" name="username" required autofocus />
  </div>
  <div class="form-group">
    <label for="password">Password</label>
    <input type="password" name="password" required />
  </div>
  <button type="submit" class="btn-login">Login</button>
</form>

  </div>
</body>
</html>
