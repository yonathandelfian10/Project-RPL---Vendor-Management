<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #fff;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 50px 20px;
        }

        .landing-container {
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .landing-text {
            max-width: 50%;
        }

        .landing-text h1 {
            font-size: 2.5rem;
            color: #000;
        }

        .landing-text p {
            font-size: 1rem;
            color: #555;
            margin: 20px 0;
        }

        .btn-login {
            background-color: #003399;
            color: #fff;
            padding: 10px 20px;
            border-radius: 5px;
            text-decoration: none;
            font-size: 1rem;
        }

        .btn-login:hover {
            background-color: #002277;
            text-decoration: none;
        }

        .illustration img {
            max-width: 100%;
            height: auto;
        }

        .bca-logo {
            display: flex;
            align-items: center;
            gap: 10px;
            margin-bottom: 30px;
        }

        .bca-logo img {
            width: 50px;
            height: auto;
        }

        .bca-logo h2 {
            font-size: 1.5rem;
            color: #003399;
        }
    </style>
</head>

<body>
    <div class="container">
        <!-- BCA Logo -->
        <div class="bca-logo">
            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/5c/Bank_Central_Asia.svg/1280px-Bank_Central_Asia.svg.png"
                alt="BCA Logo" style="width: 200px; height: auto;">
        </div>

        <!-- Landing Content -->
        <div class="landing-container">
            <div class="landing-text">
                <h1>Kemitraan Mudah, Proses Transparan</h1>
                <p>Kelola vendor Anda dengan mudah dan efisien. Kami hadir untuk mendukung kerja sama yang profesional,
                    terpercaya, dan terintegrasi demi kesuksesan bisnis Anda.</p>
                <a href="/login" class="btn-login">Login</a>
            </div>
            <div class="illustration">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQpJEmF7ofHznZZYBuWBa9le0NUAZ2W-CDuBTm0Vw1rhndFUXJd"
                    alt="Bank Illustration" style="width: 400px; height: auto;">
            </div>
        </div>
    </div>
</body>

</html>
