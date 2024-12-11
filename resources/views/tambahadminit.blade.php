<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Admin IT</title>
    <style>
        /* General Reset */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            display: flex;
            min-height: 100vh;
        }

        /* Dashboard Layout */
        .dashboard-container {
            display: flex;
            width: 100%;
        }

        /* Sidebar Styles */
        .sidebar {
            width: 250px;
            background-color: #2C3E50;
            color: #fff;
            padding: 20px;
            height: 100vh;
        }

        .sidebar .logo img {
            width: 100%;
            max-width: 150px;
            display: block;
            margin-bottom: 20px;
        }

        .sidebar ul {
            list-style-type: none;
        }

        .sidebar ul li {
            padding: 10px 0;
            font-size: 16px;
            cursor: pointer;
        }

        .sidebar ul li:hover {
            background-color: #34495E;
            padding-left: 10px;
            transition: 0.3s;
        }

        .sidebar ul li ul {
            padding-left: 20px;
        }

        .sidebar ul li ul li {
            font-size: 14px;
        }

        /* Header Styles */
        .header {
            background-color: #fff;
            padding: 20px;
            border-bottom: 2px solid #ccc;
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
        }

        .header img {
            height: 45px;
        }

        .user-info {
            display: flex;
            align-items: center;
            background-color: #0048BA;
            color: white;
            padding: 8px 20px;
            border-radius: 30px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            cursor: pointer;
            position: relative;
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

        .dropdown-menu {
            display: none;
            position: absolute;
            top: 50px;
            right: 0;
            background-color: #e74c3c;
            border: 1px solid #e74c3c;
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
            border-radius: 4px;
            z-index: 1000;
        }

        .dropdown-menu a {
            display: block;
            padding: 10px 20px;
            text-decoration: none;
            color: #333;
            font-size: 14px;
        }

        .dropdown-menu a:hover {
            background-color: #e74c3c;
        }

        /* Main Content */
        .main-content {
            flex-grow: 1;
            background-color: #ffffff;
            padding: 20px;
        }

        .form-container {
            background-color: #fff;
            border-radius: 8px;
            padding: 20px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .form-container h2 {
            font-size: 22px;
            margin-bottom: 20px;
            color: #2C3E50;
            text-align: center;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
            color: #333;
            font-size: 14px;
        }

        .form-group input {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 14px;
        }

        .form-group input:focus {
            border-color: #2C3E50;
            outline: none;
        }

        .form-group-button {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 20px;
        }

        .form-group-button button {
            width: 30%;
            padding: 10px;
            background-color: #002070;
            color: #fff;
            border: none;
            border-radius: 4px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .form-group-button button:hover {
            background-color: #34495E;
        }

        /* Responsive Styles */
        @media (max-width: 768px) {
            .dashboard-container {
                flex-direction: column;
            }

            .sidebar {
                width: 100%;
                height: auto;
            }

            .main-content {
                padding: 10px;
            }
        }
    </style>
</head>
<body>
    <div class="dashboard-container">
        <!-- Sidebar -->
        <aside class="sidebar">
            <div class="logo">
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/5c/Bank_Central_Asia.svg/1280px-Bank_Central_Asia.svg.png" alt="Logo">
            </div>
            <ul>
                <li>Home Super Admin</li>
                <li>Management Project
                    <ul>
                        <li>Daftar Project</li>
                        <li>Tambah Project</li>
                    </ul>
                </li>
                <li>Management Vendor
                    <ul>
                        <li>Daftar Vendor</li>
                        <li>Tambah Vendor</li>
                    </ul>
                </li>
                <li>Management Tim IT
                    <ul>
                        <li>Daftar Admin IT</li>
                        <li>Tambah Admin IT</li>
                    </ul>
                </li>
                <li>Laporan Project</li>
                <li>Laporan Vendor</li>
                <li>Laporan Tim IT</li>
                <li>Settings</li>
            </ul>
        </aside>

        <!-- Main Content -->
        <main class="main-content">
            <div class="header">
                <h1>Welcome Yonathan!</h1>
                <div class="profile user-info" onclick="toggleDropdown()">
                    <span>Yonathan Delfian</span>
                    <span class="role">TIM IT</span>
                    <div class="dropdown-menu">
                        <a href="#" onclick="logout()">Logout</a>
                    </div>
                </div>
            </div>
            <div class="form-container">
                <h2>Tambah Admin IT</h2>
                <form>
                    <div class="form-group">
                        <label for="nama-pic">Nama PIC *</label>
                        <input type="text" id="nama-pic" name="nama-pic" required>
                    </div>
                    <div class="form-group">
                        <label for="perusahaan">Perusahaan *</label>
                        <input type="text" id="perusahaan" name="perusahaan" required>
                    </div>
                    <div class="form-group">
                        <label for="nama-project">Nama Project *</label>
                        <input type="text" id="nama-project" name="nama-project" required>
                    </div>
                    <div class="form-group">
                        <label for="tanggal-mulai">Tanggal Mulai *</label>
                        <input type="date" id="tanggal-mulai" name="tanggal-mulai" required>
                    </div>
                    <div class="form-group">
                        <label for="tanggal-berakhir">Tanggal Berakhir *</label>
                        <input type="date" id="tanggal-berakhir" name="tanggal-berakhir" required>
                    </div>
                    <div class="form-group-button">
                        <button type="submit">Save</button>
                    </div>
                </form>
            </div>
        </main>
    </div>

    <script>
        function toggleDropdown() {
            const dropdown = document.querySelector('.dropdown-menu');
            dropdown.style.display = dropdown.style.display === 'block' ? 'none' : 'block';
        }

        function logout() {
            window.location.href = 'login';
        }
    </script>
</body>
</html>
