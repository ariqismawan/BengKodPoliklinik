<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - Poliklinik</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f6f9;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .register-container {
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 30px;
            width: 400px;
            text-align: center;
        }

        .register-container h1 {
            font-size: 28px;
            font-weight: bold;
            margin-bottom: 20px;
            color: #333;
        }

        .form-group {
            text-align: left;
        }

        .form-control {
            border-radius: 4px;
            font-size: 14px;
        }

        .btn-primary {
            background-color: #007bff;
            border: none;
            font-size: 16px;
            padding: 10px;
            width: 100%;
            border-radius: 4px;
        }

        .btn-primary:hover {
            background-color: #0056b3;
        }

        .register-container .form-check {
            text-align: left;
            margin-bottom: 15px;
        }

        .register-container .form-check-label {
            font-size: 14px;
        }

        .register-container a {
            color: #007bff;
            text-decoration: none;
        }

        .register-container a:hover {
            text-decoration: underline;
        }

    </style>
</head>
<body>
    <div class="register-container">
        <h1>Poliklinik</h1>
        <p>Register a new account</p>
        <form action="checkRegister.php" method="post">
            <div class="form-group">
                <label for="nama">Full Name</label>
                <input type="text" class="form-control" id="nama" name="nama" placeholder="Enter your full name" required>
            </div>
            <div class="form-group">
                <label for="no_ktp">Nomor KTP</label>
                <input type="number" class="form-control" id="no_ktp" name="no_ktp" placeholder="Enter your KTP number" required>
            </div>
            <div class="form-group">
                <label for="alamat">Alamat</label>
                <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Enter your address" required>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="Enter your password" required>
            </div>
            <div class="form-group">
                <label for="no_hp">Nomor HP</label>
                <input type="number" class="form-control" id="no_hp" name="no_hp" placeholder="Enter your phone number" required>
            </div>
            <div class="form-check">
                <input type="checkbox" class="form-check-input" id="terms" required>
                <label class="form-check-label" for="terms">I agree to the <a href="#">terms</a></label>
            </div>
            <button type="submit" class="btn btn-primary">Register</button>
        </form>
        <p class="mt-3">Already have an account? <a href="loginPasien.php">Sign in</a></p>
    </div>
</body>
</html>
