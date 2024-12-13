<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Poliklinik</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
        }

        .login-container {
            width: 100%;
            max-width: 400px;
            background-color: #fff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .login-container h1 {
            font-size: 24px;
            font-weight: bold;
            text-align: center;
            color: #007bff;
            margin-bottom: 10px;
        }

        .login-container h2 {
            font-size: 18px;
            text-align: center;
            margin-bottom: 20px;
            color: #555;
        }

        .form-control {
            border-radius: 5px;
        }

        .btn-primary {
            background-color: #007bff;
            border: none;
            border-radius: 5px;
            padding: 10px;
        }

        .btn-primary:hover {
            background-color: #0056b3;
        }

        .text-link {
            display: block;
            text-align: center;
            margin-top: 15px;
        }

        .text-link a {
            color: #007bff;
            text-decoration: none;
        }

        .text-link a:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body>
    <div class="login-container">
        <h1>Poliklinik</h1>
        <h2>Sign in</h2>
        <form action="checkLoginUser.php" method="post">
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" id="username" name="username" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="no_hp">Password</label>
                <input type="password" id="password" name="password" class="form-control" required>
            </div>
            <div class="form-check mb-3">
                <input type="checkbox" id="remember" class="form-check-input">
                <label for="remember" class="form-check-label">Remember Me</label>
            </div>
            <button type="submit" class="btn btn-primary btn-block">Sign In</button>
        </form>
        <div class="text-link">
            <a href="loginPasien.php">Pasien Klik Disini</a>
        </div>
    </div>
</body>

</html>
