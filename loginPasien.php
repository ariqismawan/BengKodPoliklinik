<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
include 'koneksi.php';

$error = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Menggunakan prepared statement
    $stmt = $mysqli->prepare("SELECT * FROM pasien WHERE username = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result && $result->num_rows > 0) {
        $row = $result->fetch_assoc();
        if (password_verify($password, $row['password'])) {
            $_SESSION['username'] = $username;
            $_SESSION['user_id'] = $row['id_user'];
            $_SESSION['akses'] = $row['role']; // Set role untuk digunakan di sidebar

            // Redirect berdasarkan role
            if ($row['role'] == 'pasien') {
                header("Location: dashboard_pasien.php");
            } else {
                header("Location: loginPasien.php");
            }
            exit;
        } else {
            $error = "Password salah.";
        }
    } else {
        $error = "Username tidak ditemukan.";
    }
}
?>


<!DOCTYPE html>
<html>
<head>
    <title>Login - Poliklinik</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <style>
        body {
            background-color: #e9ecef;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 0;
        }

        .login-container {
            width: 360px;
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 20px;
            text-align: center;
        }

        .login-container h1 {
            font-size: 28px;
            font-weight: bold;
            margin-bottom: 20px;
            color: #007bff;
        }

        .login-container .form-group {
            text-align: left;
        }

        .login-container .btn {
            width: 100%;
            padding: 10px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 4px;
            font-size: 16px;
        }

        .login-container .btn:hover {
            background-color: #0056b3;
        }

        .login-container .remember-me {
            display: flex;
            align-items: center;
            justify-content: left;
            font-size: 14px;
            margin-bottom: 20px;
        }

        .login-container .remember-me input {
            margin-right: 10px;
        }

        .login-container .register-link {
            font-size: 14px;
            margin-top: 15px;
        }

        .login-container .register-link a {
            color: #007bff;
            text-decoration: none;
        }

        .login-container .register-link a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <h1>Poliklinik</h1>
        <h5>Sign in</h5>

        <form action="checkLoginPasien.php" method="post">
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" class="form-control" id="username" name="username" placeholder="Adi" required>
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="********" required>
            </div>

            <div class="form-group form-check remember-me">
                <input type="checkbox" class="form-check-input" id="remember" name="remember">
                <label class="form-check-label" for="remember">Remember Me</label>
            </div>

            <button type="submit" class="btn">Sign In</button>
        </form>

        <div class="register-link mt-3">
            <a href="register.php">Register a new account</a>
        </div>
    </div>

    <?php if ($error): ?>
        <script>
            Swal.fire('Error', '<?php echo $error; ?>', 'error');
        </script>
    <?php endif; ?>
</body>
</html>
