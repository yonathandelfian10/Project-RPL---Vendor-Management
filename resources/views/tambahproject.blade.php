<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Project</title>
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

        /* Main Content */
        .main-content {
            flex-grow: 1;
            background-color: #ffffff;
            padding: 20px;
        }

        .main-content h1 {
            font-size: 24px;
            color: #333;
            margin-bottom: 20px;
        }

        /* Form Styles */
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
            text-align: center; /* Judul berada di tengah */
        }

        .form-group {
            margin-bottom: 20px; /* Jarak antar elemen form */
        }

        .form-group label {
            display: block;
            margin-bottom: 8px; /* Jarak antara label dan input */
            font-weight: bold;
            color: #333;
            font-size: 14px; /* Ukuran font */
        }

        .form-group input {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 14px;
            line-height: 1.5; /* Memberikan jarak vertikal antara teks */
        }

        .form-group input:focus {
            border-color: #2C3E50;
            outline: none;
        }

        .form-group-button {
            display: flex;
            justify-content: center; /* Memusatkan tombol */
            align-items: center;
            margin-top: 20px; /* Jarak dari input terakhir */
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
            text-align: center;
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
            <div class="form-container">
                <h2>Tambah Project</h2>
                <form>
                    <div class="form-group">
                        <label for="nama-proyek">Nama Proyek *</label>
                        <input type="text" id="nama-proyek" name="nama-proyek" required>
                    </div>
                    <div class="form-group">
                        <label for="status">Status *</label>
                        <input type="text" id="status" name="status" required>
                    </div>
                    <div class="form-group">
                        <label for="anggota-it">Anggota IT *</label>
                        <input type="text" id="anggota-it" name="anggota-it" required>
                    </div>
                    <div class="form-group">
                        <label for="pic-project">PIC Project *</label>
                        <input type="text" id="pic-project" name="pic-project" required>
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
</body>
</html>
