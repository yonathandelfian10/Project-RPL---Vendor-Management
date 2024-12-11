<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard TIM IT</title>
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
            background-color: #34495E;
            color: #fff;
            padding: 20px;
            height: 115vh;
        }

        .sidebar .logo img {
            width: 100%;
            max-width: 120px;
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
            background-color: #0042C3;
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
            position: relative;
        }

        .header {
            background-color: #fff;
            padding: 10px 20px;
            border-bottom: 2px solid #ddd;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .header h1 {
            color: #333;
            margin-bottom: 5px;
        }

        .header span {
            color: #777;
        }

        .profile-menu {
            position: relative;
        }

        .profile-icon {
            font-size: 18px;
            color: #333;
            cursor: pointer;
        }

        .profile-menu .dropdown {
            display: none;
            position: absolute;
            right: 0;
            background-color: #fff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            min-width: 120px;
            border-radius: 5px;
            margin-top: 10px;
            padding: 5px;
        }

        .profile-menu .dropdown button {
            background-color: #c0392b;
            color: white;
            border: none;
            width: 100%;
            padding: 10px;
            text-align: left;
            cursor: pointer;
        }

        .profile-menu .dropdown button:hover {
            background-color: #0042C3;
        }

        /* Dashboard Section */
        .dashboard-section {
            margin-top: 20px;
        }

        .dashboard-section h2 {
            font-size: 24px;
            color: #333;
            margin-bottom: 20px;
        }

        /* Dashboard Summary */
        .dashboard-summary {
            display: flex;
            justify-content: space-between;
            margin-bottom: 30px;
        }

        .dashboard-summary .card {
            flex: 1;
            margin: 0 10px;
            text-align: center;
            background-color: #002F8E;
            color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .dashboard-summary .card h3 {
            font-size: 36px;
            margin-bottom: 10px;
        }

        .dashboard-summary .card p {
            font-size: 18px;
        }

        /* Chart Section */
        .chart-section {
            margin-top: 20px;
            background-color: #F4F4F9;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .chart-section h3 {
            font-size: 20px;
            margin-bottom: 20px;
        }

        .chart {
            width: 300px;
            height: 300px;
            margin: 0 auto;
        }

        /* Responsive Styles */
        @media (max-width: 768px) {
            .dashboard-summary {
                flex-direction: column;
            }

            .dashboard-summary .card {
                margin: 10px 0;
            }

            .chart {
                width: 100%;
                height: auto;
            }
        }
    </style>
</head>

<body>
    <div class="dashboard-container">
        <!-- Sidebar -->
        <aside class="sidebar">
            <div class="logo">
                <div class="bca-logo">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/5c/Bank_Central_Asia.svg/1280px-Bank_Central_Asia.svg.png"
                        alt="BCA Logo" style="width: 200px; height: auto;">
                </div>
            </div>
            <ul>
                <li>Dashboard</li>
                <li>Management Project
                    <ul>
                        <li>Daftar Project</li>
                        <li onclick="navigateToTambahProject()">Tambah Project</li>
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
            <header class="header">
                <div>
                    <h1>Welcome Yonathan!</h1>
                    <span>Halaman TIM IT</span>

                </div>
                <div class="profile-menu">
                    <span class="profile-icon">&#x1F464;</span>
                    <!-- Profile Dropdown Menu -->
                    <div class="dropdown">
                        <button onclick="logout()">Logout</button>
                    </div>
                </div>
            </header>

            <section class="dashboard-section">
                <h2>Dashboard TIM IT</h2>
                <!-- Summary Cards -->
                <div class="dashboard-summary">
                    <div class="card">
                        <h3>5</h3>
                        <p>Jumlah Proyek</p>
                    </div>
                    <div class="card">
                        <h3>10</h3>
                        <p>Proyek Selesai</p>
                    </div>
                    <div class="card">
                        <h3>3</h3>
                        <p>Proyek Dalam Proses</p>
                    </div>
                </div>

                <!-- Chart Section -->
                <div class="chart-section">
                    <h3>Presentasi Progress Proyek</h3>
                    <div class="chart">
                        <img src="https://via.placeholder.com/300" alt="Chart Placeholder">
                    </div>
                </div>
            </section>
        </main>
    </div>

    <script>
        // Toggle the profile dropdown on click
        document.querySelector('.profile-icon').addEventListener('click', function () {
            const dropdown = document.querySelector('.profile-menu .dropdown');
            dropdown.style.display = (dropdown.style.display === 'block') ? 'none' : 'block';
        });

        // Navigate to the Tambah Project page
        function navigateToTambahProject() {
            window.location.href = 'tambahproject'; // Change this to your actual tambah project page URL
        }

        // Logout function
        function logout() {
            window.location.href = 'login';  // Change this to your actual login page URL
        }
    </script>
</body>
</html>
