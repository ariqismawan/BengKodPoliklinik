<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>POLIKLINIK UDINUS</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="assets/plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="assets/dist/css/adminlte.min.css">

    <style>
        body {
            font-family: 'Source Sans Pro', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f6f9;
        }

        .container-fluid {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background: linear-gradient(rgba(255, 255, 255, 0.8), rgba(255, 255, 255, 0.8)), url('assets/images/gedung3.jpg');
            background-size: cover;
            background-position: center;
        }

        .welcome-box {
            text-align: center;
            font-weight: bold;
            margin-bottom: 20px;
        }

        .welcome-box h1 {
            font-size: 36px;
            font-weight: bold;
            color: #333;
            margin-bottom: 10px;
        }

        .welcome-box h5 {
            font-size: 18px;
            font-weight: bold;
            color: #666;
        }

        .button-container {
            display: flex;
            justify-content: center;
            gap: 20px;
            margin-top: 20px;
        }

        .button {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            width: 200px;
            height: 200px;
            background-color: #ffffff;
            border-radius: 15px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            text-decoration: none;
            transition: transform 0.3s;
        }

        .button:hover {
            transform: scale(1.05);
        }

        .button i {
            font-size: 50px;
            margin-bottom: 15px;
        }

        .button span {
            font-size: 18px;
            font-weight: bold;
            color: #333;
        }

        .btn-patient {
            background-color: #007bff;
            color: white;
        }

        .btn-doctor {
            background-color: #28a745;
            color: white;
        }
    </style>
</head>

<body>
    <div class="container-fluid">
        <div>
            <div class="welcome-box">
                <h1>POLIKLINIK UDINUS</h1>
                <h5>Selamat Datang di Anjungan Pendaftaran Mandiri</h5>
                <p>Silakan memilih salah satu tombol untuk login</p>
            </div>
            <div class="button-container">
                <!-- Login Pasien -->
                <a href="loginPasien.php" class="button btn-patient">
                    <i class="fas fa-user-injured"></i>
                    <span>Login Pasien</span>
                </a>
                <!-- Login Dokter -->
                <a href="loginUser.php" class="button btn-doctor">
                    <i class="fas fa-user-md"></i>
                    <span>Login Dokter</span>
                </a>
            </div>
        </div>
    </div>

    <!-- jQuery -->
    <script src="assets/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="assets/dist/js/adminlte.min.js"></script>
</body>

</html>
