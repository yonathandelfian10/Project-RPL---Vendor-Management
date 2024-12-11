<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Tambah Akun Bank</title>
    <style>
        /* Reset */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            min-height: 100vh;
        }

        /* Header */
        header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: white;
            padding: 10px 30px;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            width: 100%;
            position: fixed;
            top: 0;
            left: 0;
            z-index: 10;
            max-width: 1800px;
            margin: 0 auto;
        }

        header img {
            height: 45px;
            transition: transform 0.3s ease;
        }

        header img:hover {
            transform: scale(1.1);
        }

        .user-info {
            display: flex;
            align-items: center;
            background-color: #0048BA;
            color: white;
            padding: 8px 20px;
            border-radius: 30px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: background-color 0.3s ease;
            cursor: pointer;
        }

        .user-info:hover {
            background-color: #00337A;
        }

        .user-info span {
            margin-left: 10px;
            font-size: 16px;
        }

        .role {
            font-size: 12px;
            font-weight: bold;
            background-color: white;
            color: #0048BA;
            padding: 4px 12px;
            border-radius: 15px;
            margin-left: 10px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .role:hover {
            background-color: #00337A;
            color: white;
        }

        /* Dropdown Menu */
        .dropdown-content {
            display: none;
            position: absolute;
            top: 70px;
            right: 0;
            min-width: 130px;
            box-shadow: 0px 15px 20px rgba(0, 0, 0, 0.2);
            z-index: 1;
            border-radius: 10px;
        }

        .user-info.active + .dropdown-content {
            display: block;
        }

        /* Form Container */
        .form-container {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 500px;
            margin-top: 20px;
        }

        .form-container .header {
            text-align: center;
            margin-bottom: 20px;
        }

        .form-container .header button {
            background-color: #0033a0;
            color: white;
            border: none;
            padding: 10px 20px;
            font-size: 16px;
            border-radius: 25px;
            cursor: pointer;
        }

        .form-container .header button:hover {
            background-color: #002077;
        }

        .form-container label {
            display: block;
            margin-bottom: 5px;
            font-size: 14px;
            font-weight: bold;
        }

        .form-container input[type="text"],
        .form-container input[type="email"],
        .form-container input[type="tel"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 14px;
        }

        .form-container .save-button {
            text-align: center;
            margin-top: 20px;
        }

        .form-container .save-button button {
            background-color: #002070;
            color: white;
            border: none;
            padding: 10px 20px;
            font-size: 16px;
            border-radius: 5px;
            cursor: pointer;
        }

        .form-container .save-button button:hover {
            background-color: #002070;
        }

        /* Logout Button Styling */
        .dropdown-content .logout-button {
            background-color: #e74c3c;
            color: white;
            padding: 10px 13px;
            text-align: center;
            border: none;
            width: 80%;
            cursor: pointer;
            text-decoration: none;
        }

        .dropdown-content .logout-button:hover {
            background-color: #c0392b;
        }

    </style>
</head>

<body>
    <!-- Header -->
    <header>
        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/5c/Bank_Central_Asia.svg/1280px-Bank_Central_Asia.svg.png" alt="BCA Logo">
        <div class="user-info" onclick="toggleDropdown()">
            <span>Elsya Rolita</span>
            <span class="role">Super Admin</span>
        </div>

        <!-- Dropdown Content -->
        <div class="dropdown-content">
            <a href="login" class="logout-button" onclick="logout()">Logout</a>
        </div>
    </header>

    <!-- Form Container -->
    <div class="form-container">
        <div class="header">
            <button>Tambah akun Bank</button>
        </div>
        <form>
            <label for="admin-name">Nama Admin IT</label>
            <input type="text" id="admin-name" placeholder="Masukkan nama admin IT">

            <label for="email">Email</label>
            <input type="email" id="email" placeholder="Masukkan email">

            <label for="phone">No Telp</label>
            <input type="tel" id="phone" placeholder="Masukkan nomor telepon">

            <label for="status">Status</label>
            <input type="text" id="status" placeholder="Masukkan status">

            <div class="save-button">
                <button type="submit">Save</button>
            </div>
        </form>
    </div>

    <script>
        function toggleDropdown() {
            document.querySelector('.user-info').classList.toggle('active');
        }

        function logout() {
            // Optional: You can clear session data or perform other logout actions here
            window.location.href = "login.html"; // Redirect to the login page
        }
    </script>
</body>

</html>
