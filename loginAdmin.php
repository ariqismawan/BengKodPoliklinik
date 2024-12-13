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
    $stmt = $mysqli->prepare("SELECT * FROM user WHERE username = ?");
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
            if ($row['role'] == 'admin') {
                header("Location: dashboard_admin.php");
            } else {
                header("Location: loginAdmin.php");
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
    <title>Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f6f9;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .login-box {
            width: 360px;
            padding: 15px;
            background: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }

        .login-box h4 {
            font-weight: bold;
            margin-bottom: 20px;
            color: #007bff;
            text-align: center;
        }

        .login-box .form-control {
            height: 45px;
            font-size: 16px;
            margin-bottom: 20px;
        }

        .login-box .btn {
            height: 45px;
            font-size: 16px;
        }

        .login-box .text-primary {
            color: #3498db;
            text-decoration: none;
        }

        .login-box .text-primary:hover {
            text-decoration: underline;
        }

        .login-box img {
            display: block;
            margin: 0 auto 10px;
            max-height: 40px;
        }

        .form-check {
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <div class="login-box">
        <h4>Poliklinik</h4>
        <p class="text-center">Sign in</p>
        <form action="checkLoginAdmin.php" method="post">
            <input type="text" name="username" class="form-control" placeholder="Username" required>
            <input type="password" name="password" class="form-control" placeholder="Password" required>
            <div class="form-check">
                <input type="checkbox" class="form-check-input" id="rememberMe">
                <label class="form-check-label" for="rememberMe">Remember Me</label>
            </div>
            <button type="submit" class="btn btn-primary btn-block">Sign In</button>
        </form>
        <div class="text-center mt-3">
            <a href="index.php" class="text-primary">Anda Bukan ADMIN? klik disini</a>
        </div>
    </div>

    <?php if ($error): ?>
        <script>
            Swal.fire('Error', '<?php echo $error; ?>', 'error');
        </script>
    <?php endif; ?>
</body>
</html>
